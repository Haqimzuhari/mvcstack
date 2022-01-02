<?php $base = new Component('layouts.base', ['title' => $this->title]) ?>
    <main class="bg-stone-100">
        @content
    </main>
<?php $base->close() ?>