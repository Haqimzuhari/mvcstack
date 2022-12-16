<form method="post" class="space-y-6">
    <div class="space-y-2">
        <?php $field = new Elem('field.user', ['crud'=>'r']); $field->close() ?>
    </div>
    
    <button type="submit" name="sign_in" class="btn btn-primary text-center py-2 w-full">
        Sign In
    </button>
</form>