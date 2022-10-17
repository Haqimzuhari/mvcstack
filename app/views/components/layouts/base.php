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

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Overpass+Mono:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Alpinejs -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Tailwindcss -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Tailwindcss script -->
    <script src="<?=asset('js/tailwind.js')?>"></script>

    <style type="text/tailwindcss">
        .transition-default {
            @apply transition duration-300 ease-in-out;
        }
        .transition-fast {
            @apply transition duration-100 ease-in-out;
        }

        .flex-center {
        @apply flex items-center justify-center;
        }

        .btn {
            @apply transition-default focus:outline-none;
        }
        .btn-primary {
            @apply text-indigo-50 bg-indigo-500 hover:bg-indigo-600 focus:ring-4 focus:ring-offset-1 focus:ring-indigo-200 focus:bg-indigo-600 rounded-lg tracking-wider font-semibold text-sm shadow-sm shadow-black/20;
        }
        .btn-secondary {
            @apply text-zinc-900 bg-zinc-200 hover:bg-zinc-300 focus:ring-4 focus:ring-offset-1 focus:ring-zinc-200 focus:bg-zinc-300 rounded-lg tracking-wider font-semibold text-sm shadow-sm shadow-black/20;
        }
        .btn-danger {
            @apply text-rose-50 bg-rose-500 hover:bg-rose-600 focus:ring-4 focus:ring-offset-1 focus:ring-rose-200 focus:bg-rose-600 rounded-lg tracking-wider font-semibold text-sm shadow-sm shadow-black/20;
        }
        .btn-disabled {
            @apply text-zinc-400 bg-zinc-200 rounded-lg tracking-wider font-semibold text-sm shadow-sm shadow-black/20 cursor-not-allowed pointer-events-none;
        }

        .form {
            @apply flex flex-col items-start space-y-1;
        }

        .label {
            @apply text-sm font-semibold;
        }
        .label.danger {
            @apply text-rose-900;
        }

        .form-input-group {
            @apply w-full relative;
        }
        .form-input {
            @apply appearance-none focus:outline-none transition-fast text-xs tracking-wider font-normal rounded-lg w-full focus:ring-4 focus:ring-offset-1;
        }
        .form-input.primary {
            @apply text-gray-800 placeholder-gray-300 bg-gray-100 hover:bg-white focus:bg-white focus:ring-blue-200;
        }
        .form-input.danger {
            @apply text-red-900 placeholder-red-300 border-red-100 bg-red-100 focus:bg-red-50 focus:ring-red-100
        }

        .form-error {
            @apply flex space-x-1 items-center text-rose-900 text-xs font-semibold;
        }

        .form-input-icon {
            @apply absolute inset-y-0 flex-center pointer-events-none
        }

        .link-primary {
            @apply hover:underline hover:text-indigo-500 transition-fast;
        }
    </style>

    <!-- Custom Styles -->
    <link href="<?= asset('css/styles.css') ?>" rel="stylesheet">

    <!-- Page title -->
    <title><?= $title ?? TITLE ?></title>
</head>

<body class="bg-gray-100 text-gray-800 tracking-wider">
    @content

    <!-- Flash notification -->
    <?php $flash = new Component('flash'); $flash->close() ?>

    <!-- Custom scripts -->
    <script src="<?= asset('js/scripts.js') ?>"></script>
</body>
</html>