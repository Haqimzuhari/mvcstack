<input type="hidden" name="user_id" value="<?=$value->id??''?>"/>
<div class="space-y-2">
    <?php 
        $input = new Elem('input', ['type'=>'password', 'label'=>(isset($no_label) and $no_label="yes")?'':'Password', 'name'=>'password', 'placeholder'=>'Password']); $input->close();
        $input = new Elem('input', ['type'=>'password', 'label'=>(isset($no_label) and $no_label="yes")?'':'Confirm Password', 'name'=>'password_confirmation', 'placeholder'=>'Confirm Password']); $input->close();
    ?>
</div>