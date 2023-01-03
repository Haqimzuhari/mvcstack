<?php $layout = new Elem('layout.base') ?>
    <?php $nav = new Elem('nav.sidebar'); $nav->close() ?>
    <main class="pl-56 w-full">
        <div class="p-6">@slot</div>
    </main>
<?php $layout->close() ?>