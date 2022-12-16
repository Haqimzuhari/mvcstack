<form method="post" class="space-y-6">
    <div class="space-y-2">
        <?php $field = new Elem('field.profile', ['crud'=>'c']); $field->close() ?>
        <?php $field = new Elem('field.user', ['crud'=>'c']); $field->close() ?>
    </div>
    
    <button type="submit" name="create_account" class="btn btn-primary text-center py-2 w-full">
        Create Account
    </button>
</form>