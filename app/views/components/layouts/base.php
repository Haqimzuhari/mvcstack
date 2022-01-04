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

        <!-- Tailwindcss -->
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Alegreya:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Fira+Code:wght@300;400;500;600;700&family=Karla:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
        
        <!-- Alpinejs -->
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        
        <!-- Feather -->
        <script src="https://unpkg.com/feather-icons"></script>

        <!-- Tailwindcss script -->
        <script src="<?=asset('js/tailwind.js')?>"></script>

        <!-- Custom Styles -->
        <link href="<?= asset('css/styles.css') ?>" rel="stylesheet">

        <!-- Page title -->
        <title><?= $title ?? TITLE ?></title>
    </head>

    <body class="bg-slate-100 text-gray-800">
        @content

        <!-- Flash notification -->
        <?php $flash = new Component('flash'); $flash->close() ?>

        <!-- Custom scripts -->
        <script src="<?= asset('js/scripts.js') ?>"></script>
    </body>
</html>