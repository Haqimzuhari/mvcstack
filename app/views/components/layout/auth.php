<?php $layout = new Elem('layout.base') ?>
    <?php $sidebar = new Elem('nav.sidebar'); $sidebar->close() ?>
    <?php $topbar = new Elem('nav.topbar', ['page_name'=>$page_name ?? '']); $topbar->close() ?>
    <div class="px-2 pt-12 ml-64">
        <main class="py-2">@slot</main>
    </div>
<?php $layout->close() ?>