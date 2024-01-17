<?php if (in_array($crud, ['c', 'u'])): ?>
    <?php $trigger = new Elem('modal.trigger', ['id'=>($crud == 'c') ? 'modal_register_user' : 'modal_update_user']) ?>
        <button type="button" class="<?= ($crud == 'c') ? 'button-primary text-xs font-semibold' : 'dropdown-link' ?>">
        <?php if ($crud == 'u'): ?>
            <?php $icon = new Elem('icon', ['name'=>'las la-pencil-alt']); $icon->close() ?>
        <?php endif; ?>
        <?= ($crud == 'c') ? 'Register' : '<p>Update</p>' ?></button>
    <?php $trigger->close() ?>
    <?php $modal = new Elem('modal', ['id'=>($crud == 'c') ? 'modal_register_user' : 'modal_update_user', 'title'=>($crud == 'c') ? 'Register User' : 'Update User']) ?>
        <form method="post">
            <div class="space-y-4">
                <div class="space-y-2">
                    <?php $model = new Elem('model.user', ['crud'=>$crud, 'user'=>$user ?? null]); $model->close() ?>
                    <?php $model = new Elem('model.profile', ['crud'=>$crud, 'profile'=>$profile ?? null]); $model->close() ?>
                </div>
                <div class="flex justify-end">
                    <button type="submit" name="<?= ($crud == 'c') ? 'create' : 'update' ?>" class="button-primary text-sm font-semibold"><?= ($crud == 'c') ? 'Register' : 'Update' ?></button>
                </div>
            </div>
        </form>
    <?php $modal->close() ?>
<?php else: ?>
    <?php $trigger = new Elem('modal.trigger', ['id'=>'modal_delete_user']) ?>
        <button type="button" class="dropdown-link">
            <?php $icon = new Elem('icon', ['name'=>'las la-trash-alt']); $icon->close() ?>
            <p>Delete</p>
        </button>
    <?php $trigger->close() ?>
    <?php $modal = new Elem('modal', ['id'=>'modal_delete_user', 'title'=>'Delete User']) ?>
        <form method="post">
            <input type="hidden" name="user_id" value="<?= $user->id ?>">
            <div class="space-y-4">
                <div>
                    <p>Are you confirm to continue?</p>
                    <p class="text-sm font-semibold">This action cannot be undone</p>
                </div>
                <div class="flex justify-end">
                    <button type="submit" name="delete" class="button-primary text-sm font-semibold">Delete</button>
                </div>
            </div>
        </form>
    <?php $modal->close() ?>
<?php endif ?>