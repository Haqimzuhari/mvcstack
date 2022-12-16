<?php if ($crud == "d"): ?>
    <input type="hidden" name="user_id" value="<?=$value->id??''?>"/>
<?php else: ?>
    <?php if ($crud == "u"): ?>
        <input type="hidden" name="user_id" value="<?=$value->id??''?>"/>
    <?php endif; ?>
    <div class="space-y-2">
        <?php 
            $input = new Elem('input', ['type'=>'email', 'label'=>'Email', 'name'=>'email', 'value'=>$value->email??'']); $input->close();
            $input = new Elem('input', ['type'=>'password', 'label'=>'Password', 'name'=>'password']); $input->close();
            if ($crud == "c") {
                $input = new Elem('input', ['type'=>'password', 'label'=>'Confirm Password', 'name'=>'password_confirmation']); $input->close();
            }
        ?>
    </div>
<?php endif; ?>