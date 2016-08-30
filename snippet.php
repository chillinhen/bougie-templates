
    
    
    
    <!DOCTYPE html>
<html lang="<?= $this->language ?>"<?php if ($this->isRTL): ?> dir="rtl"<?php endif; ?>>
    <head>
        <meta charset="<?= $this->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

        <title><?= $this->title ?></title>
        <base href="<?= $this->base ?>">

        <meta name="robots" content="<?= $this->robots ?>">
        <meta name="description" content="<?= $this->description ?>">
        <meta name="keywords" content="<?= $this->keywords ?>">

        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <!--        		<link rel="stylesheet" href="files/layout/fonts/MyFontsWebfontsKit.css">-->
        <link rel="stylesheet" href="files/layout/css/jquery.fancybox.css">

    <?= $this->viewport ?>
    <?= $this->framework ?>
    <?= $this->stylesheets ?>

    <?= $this->head ?>


<!--        <script src="files/layout/js/jquery.bxslider.min.js"></script>
        <script src="files/layout/js/materialize.min.js"></script>
        <script src="files/layout/js/jquery.fancybox.pack.js"></script>-->
<!--        <script src="files/layout/js/queryloader2.min.js"></script>-->
        <script src="files/layout/js/init.js"></script>
        <!-- ToDo Delete Font Preloader -> Conflict with Bougie preloader? -->
<!--        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script src="files/layout/js/fonts.js"></script>-->
<!--[if lt IE 9]><script src="<?= TL_ASSETS_URL ?>assets/html5shiv/<?= $GLOBALS['TL_ASSETS']['HTML5SHIV'] ?>/html5shiv-printshiv.min.js"></script><![endif]-->
    </head>