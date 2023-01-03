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
    <link href="<?=asset('icons/plainstack.png')?>" rel="icon" type="image/gif" sizes="16x16"> 

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Libre+Bodoni:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Source+Code+Pro:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <!-- Alpinejs -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Tailwindcss -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Tailwindcss script -->
    <script src="<?=asset('js/tailwind.js')?>"></script>
    <?php include_once(ROOT.DS.'app'.DS.'assets'.DS.'css'.DS.'tailwind.php') ?>

    <!-- Custom Styles -->
    <link href="<?= asset('css/styles.css') ?>" rel="stylesheet">

    <!-- Page title -->
    <title><?= $title ?? TITLE ?></title>
</head>

<body class="bg-white text-zinc-800 tracking-tighter">
    @slot

    <!-- Toast notification -->
    <?php $toast = new Elem('toast'); $toast->close() ?>

    <!-- Custom scripts -->
    <script src="<?= asset('js/scripts.js') ?>"></script>
</body>
</html>