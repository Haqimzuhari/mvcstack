<?php $layout = new Elem('layout.base') ?>
    <?php $sidebar = new Elem('nav.sidebar'); $sidebar->close() ?>
    <main class="ml-80 px-2">@slot</main>
<?php $layout->close() ?>