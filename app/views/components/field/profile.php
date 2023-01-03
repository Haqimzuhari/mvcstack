<?php if ($crud == "d"): ?>
    <input type="hidden" name="profile_id" value="<?=$value->id??''?>"/>
<?php else: ?>
    <?php if ($crud == "u"): ?>
        <input type="hidden" name="profile_id" value="<?=$value->id??''?>"/>
    <?php endif; ?>
    <div class="space-y-2">
        <?php $input = new Elem('input', ['label'=>(isset($no_label) and $no_label="yes")?'':'Name', 'name'=>'name', 'value'=>$value->name??'', 'placeholder'=>'Name']); $input->close() ?>
    </div>
<?php endif; ?>