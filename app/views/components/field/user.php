<?php if ($crud == "d"): ?>
    <input type="hidden" name="user_id" value="<?=$value->id??''?>"/>
<?php else: ?>
    <?php if ($crud == "u"): ?>
        <input type="hidden" name="user_id" value="<?=$value->id??''?>"/>
    <?php endif; ?>
    <div class="space-y-2">
        <?php 
            $input = new Elem('input', ['type'=>'email', 'label'=>(isset($no_label) and $no_label="yes")?'':'Email', 'name'=>'email', 'value'=>$value->email??'', 'placeholder'=>'Email Address']); $input->close();
            if (in_array($crud, ['c', 'r'])) {
                $input = new Elem('input', ['type'=>'password', 'label'=>'Password', 'name'=>'password', 'placeholder'=>'Password']); $input->close();
                if ($crud == "c") {
                    $input = new Elem('input', ['type'=>'password', 'label'=>'Confirm Password', 'name'=>'password_confirmation', 'placeholder'=>'Confirm Password']); $input->close();
                }
            }
        ?>
    </div>
<?php endif; ?>