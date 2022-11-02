<?php $base = new Component('layouts.base', ['title' => $this->title]) ?>
    <?php $topbar = new Component('nav.topbar'); $topbar->close() ?>
    <main>
        @content
    </main>
<?php $base->close() ?>