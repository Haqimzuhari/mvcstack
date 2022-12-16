<input type="hidden" name="user_id" value="<?=$value->id??''?>"/>
<div class="space-y-2">
    <?php 
        $input = new Elem('input', ['type'=>'password', 'label'=>'Password', 'name'=>'password']); $input->close;
        $input = new Elem('input', ['type'=>'password', 'label'=>'Confirm Password', 'name'=>'password_confirmation']); $input->close;
    ?>
</div>