<div class="fixed inset-x-0 top-0 z-10 h-16 px-6 left-64 bg-white border-b border-zinc-200">
    <div class="flex items-center justify-between h-full">
        <div class="w-full">
            <p class="text-lg font-semibold"><?= $page_name ?></p>
        </div>
        <div class="flex items-center justify-end w-full space-x-4">
            <?php $dropdown = new Elem('dropdown') ?>
                <?php $trigger = new Elem('dropdown.trigger') ?>
                    <button type="button" class="flex items-center justify-center w-10 h-10 overflow-hidden rounded-full ring-1 ring-inset ring-indigo-400">
                        <img src="https://api.dicebear.com/7.x/micah/svg?seed=<?= auth()->user()->nameNoSpace ?>&backgroundColor=EAB308" alt="avatar" class="object-cover" />
                    </button>
                <?php $trigger->close() ?>
                <?php $body = new Elem('dropdown.body') ?>
                    <div class="py-1">
                        <a href="<?= route("profile") ?>" class="dropdown-link">
                            <?php $icon = new Elem("icon", ['name'=>'las la-user-circle', 'size'=>'w-5 h-5', 'class'=>'text-lg']); $icon->close() ?>
                            <p>Account</p>
                        </a>
                    </div>
                    <div class="py-1">
                        <form method="post" action="<?= route("sign-out") ?>" class="flex w-full">
                            <button type="submit" name="sign_out" class="dropdown-link">
                                <?php $icon = new Elem("icon", ['name'=>'las la-sign-out-alt', 'size'=>'w-5 h-5', 'class'=>'text-lg']); $icon->close() ?>
                                <p>Sign Out</p>
                            </button>
                        </form>
                    </div>
                <?php $body->close() ?>
            <?php $dropdown->close() ?>
        </div>
    </div>
</div>