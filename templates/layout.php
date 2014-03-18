<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> <?php echo f('about', 'title') ?></title>

    <script src="<?php echo Theme::base('vendor/platform/platform.js') ?>"></script>
    <script src="<?php echo Theme::base('vendor/jquery/jquery.js') ?>"></script>

    <link rel="import" href="<?php echo Theme::base('vendor/v2-theme/index.html') ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
</head>
<body style="opacity: 0">
    <header>
        <nav>
            <a href="<?php echo URL::base() ?>" class="button">m</a>
            <label>&nbsp;<?php echo f('about', 'title') ?>&nbsp;</label>
        </nav>
    </header>

    <main>
        <?php if (isset($flash[ 'error']) || isset($flash[ 'info'])): ?>
        <div class="row alert-row">
            <?php if (isset($flash[ 'error'])): ?>
            <div class="alert error">
                <?php echo $flash[ 'error']; ?>
            </div>
            <?php endif ?>
            <?php if (isset($flash[ 'info'])): ?>
            <div class="alert success">
                <?php echo $flash[ 'info']; ?>
            </div>
            <?php endif ?>
        </div>
        <?php endif ?>

        <?php echo $body ?>
    </main>
</body>
</html>