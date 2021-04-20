<!doctype html>

<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="keywords" content="PHP, MVC, Framework" />
        <meta name="description" content="PHP MVC Framework by Plainstack" />
        <meta name="author" content="Plainstack" />
        <meta name="robots" content="index, follow" />

        <!-- Favicon -->
        <link href="<?= asset('icons/php-icon.png') ?>" rel="icon" type="image/gif" sizes="16x16"> 

        <!-- Styles -->
        <link href="<?=asset('css/tailwind.css')?>" rel="stylesheet">

        <!-- Icons -->
        <link href="<?= asset('icons/material-icons/all.css')?>" rel="stylesheet">

        <!-- Fonts -->
        <link href="<?=asset('css/fonts.css')?>" rel="stylesheet">

        <!-- Custom -->
        <link href="<?=asset('css/styles.css')?>" rel="stylesheet">
        
        <!-- Alpine JS -->
        <script src="<?=asset('js/alpine-cdn.js')?>" defer></script>

        <style>
            [x-cloak] { display: none; }
        </style>

        <title><?= $this->title ?? TITLE ?></title>
    </head>

    <body>
        
        @content

        <?php Flash::show() ?>

        <script src="<?=asset('js/scripts.js')?>"></script>
        
    </body>
</html>