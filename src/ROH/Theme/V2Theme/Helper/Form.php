<?php

namespace ROH\Theme\V2Theme\Helper;

class Form {

    protected $schema;

    protected $data;

    public static function create($arg = null) {
        return new static($arg);
    }

    public function __construct($arg = null) {

        if (is_array($arg)) {
            $this->schema = $arg;
        } else {
            $name = (is_string($arg)) ? $arg : f('controller.name');
            $this->schema = \Norm::factory($name)->schema();
        }

        $this->data = \App::getInstance()->request->post();
    }

    public function of($data) {
        $this->data = $data;
        return $this;
    }

    public function show($options = array()) {
        $options = array_merge(array( 'readonly' => false ), $options);

        $html = '';
        // $html = '<form>';
        foreach ($this->schema as $key => $field) {
            $html .= '<div class="row field field-'.$key.'">'."\n";
            $html .= $this->label($key);
            $html .= $options['readonly'] ? $this->readonly($key) : $this->input($key);
            $html .= '</div>'."\n\n";
        }
        // $html .= '</form>';
        return $html;
    }

    public function label($key) {
        return $this->schema[$key]->label()."\n";
    }

    public function input($key) {
        return $this->schema[$key]->format('input', @$this->data[$key])."\n";
    }

    public function readonly($key) {
        return $this->schema[$key]->format('readonly', @$this->data[$key])."\n";
    }
}