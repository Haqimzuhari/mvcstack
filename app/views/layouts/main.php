<?php $base = new Component('layouts.base', ['title' => $this->title]) ?>
    @content
<?php $base->close() ?>