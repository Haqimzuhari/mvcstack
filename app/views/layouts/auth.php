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

        <!-- Tailwind CSS -->
        <!-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> -->

        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
        
        <!-- Styles CSS -->
        <link href="<?=asset('css/styles.css')?>" rel="stylesheet">
        
        <!-- Alpine JS -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>

        <style>
            [x-cloak] { display: none; }
        </style>

        <!-- Page title -->
        <title><?=$this->title ?? TITLE?></title>

    </head>


    <body class="subpixel-antialiased tracking-widest bg-gray-50">

        <div>
            @content
        </div>
     
        <?php Flash::show() ?>
     
        <script src="<?=asset('js/scripts.js')?>"></script>

    </body>
</html>