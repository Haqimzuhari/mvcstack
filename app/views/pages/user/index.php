<?php $layout = new Elem('layout.auth', ['page_name' => 'User']) ?>
<div class="space-y-2">
    <div class="flex justify-between items-center">
        <p class="font-semibold">Registered Users</p>
        <?php $action = new Elem('action.user', ['crud'=>'c']); $action->close() ?>
    </div>
    
    <?php if (count($this->users) > 0): ?>
        <?php $table = new Elem('table') ?>
            <?php $thead = new Elem('table.thead') ?>
                <td class="table-header rounded-tl-lg">User</td>
                <td class="table-header rounded-tr-lg w-10"></td>
            <?php $thead->close() ?>
            <tbody>
                <?php foreach ($this->users as $user): ?>
                    <tr class="hover:bg-slate-50 transition">
                        <td class="p-4">
                            <p class="font-medium"><?= $user->profile->name ?></p>
                            <p class="font-light text-xs"><?= $user->email ?></p>
                        </td>
                        <td class="p-4">
                            <?php $dropdown = new Elem('dropdown') ?>
                                <?php $trigger = new Elem('dropdown.trigger') ?>
                                    <button type="button" class="table-action-trigger"><i class="las la-ellipsis-v text-lg"></i></button>
                                <?php $trigger->close() ?>
                                <?php $body = new Elem('dropdown.body') ?>
                                    <div class="py-1">
                                        <?php $action = new Elem('action.user', ['crud'=>'u', 'user'=>$user, 'profile'=>$user->profile]); $action->close() ?>
                                    </div>
                                    <div class="py-1">
                                        <?php $action = new Elem('action.user', ['crud'=>'d', 'user'=>$user]); $action->close() ?>
                                    </div>
                                <?php $body->close() ?>
                            <?php $dropdown->close() ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        <?php $table->close() ?>
    <?php else: ?>
        <?php $tableEmpty = new Elem('table.empty', ['message'=>'No user registered yet']); $tableEmpty->close() ?>
    <?php endif; ?>
</div>
<?php $layout->close() ?>