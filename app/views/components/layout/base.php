<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="keywords" content="PHP, MVC, Framework" />
    <meta name="description" content="PHP MVC Framework by Plainstacx" />
    <meta name="author" content="Plainstacx" />
    <meta name="robots" content="index, follow" />

    <!-- Favicon -->
    <link href="https://www.php.net/images/logos/new-php-logo.svg" rel="icon" type="image/gif" sizes="16x16"> 

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anybody:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Bricolage+Grotesque:opsz,wght@12..96,200;12..96,300;12..96,400;12..96,500;12..96,600;12..96,700;12..96,800&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Radio+Canada:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Rethink+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&family=Spline+Sans+Mono:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Vollkorn:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <!-- Alpinejs -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Tailwindcss -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Tailwindcss script -->
    <script src="<?=asset('js/tailwind.js')?>"></script>
    <?php include_once(ROOT.DS.'app'.DS.'assets'.DS.'css'.DS.'tailwind.php') ?>

    <!-- Custom Styles -->
    <link href="<?= asset('css/styles.css') ?>" rel="stylesheet">

    <!-- Fontawesome -->
    <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >

    <!-- Page title -->
    <title><?= $title ?? TITLE ?></title>
</head>

<body class="text-neutral-900 bg-white">
    @slot

    <!-- Toast notification -->
    <?php $toast = new Elem('toast'); $toast->close() ?>

    <!-- Custom scripts -->
    <script src="<?= asset('js/scripts.js') ?>"></script>
</body>
</html>