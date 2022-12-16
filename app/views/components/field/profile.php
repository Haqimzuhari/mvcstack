<?php if ($crud == "d"): ?>
    <input type="hidden" name="profile_id" value="<?=$value->id??''?>"/>
<?php else: ?>
    <?php if ($crud == "u"): ?>
        <input type="hidden" name="profile_id" value="<?=$value->id??''?>"/>
    <?php endif; ?>
    <div class="space-y-2">
        <?php $input = new Elem('input', ['label'=>'Name', 'name'=>'name', 'value'=>$value->name??'']); $input->close() ?>
    </div>
<?php endif; ?>