<nav class="fixed inset-y-0 left-0 flex-none w-64 space-y-2 bg-white border-r border-zinc-200">
    <div class="flex items-center h-12 px-4">
        <a href="<?= route(DEFAULT_AUTH_ROUTE) ?>" class="text-lg font-semibold"><?= TITLE ?></a>
    </div>
    <div class="grid grid-cols-1 gap-10 py-4">
        <div class="flex flex-col px-4 space-y-1">
            <p class="text-xs font-light text-neutral-300">Menu</p>
            <div class="flex flex-col space-y-2">
                <a href="<?= route('dashboard') ?>" class="flex items-center px-4 py-2.5 space-x-3 transition rounded-lg hover:text-neutral-900 hover:bg-zinc-100 text-neutral-500 bg-white">
                    <i class="fa-solid fa-cube text-sm"></i>
                    <p class="text-sm font-medium">Dashboard</p>
                </a>
            </div>
        </div>
        <?php if (auth()->user()->isAdmin): ?>
            <div class="flex flex-col px-4 space-y-1">
                <p class="text-xs font-light text-neutral-300">Admin</p>
                <div class="flex flex-col space-y-2">
                    <a href="<?= route('users') ?>" class="flex items-center px-4 py-2.5 space-x-3 transition rounded-lg hover:text-neutral-900 hover:bg-zinc-100 text-neutral-500 bg-white">
                        <i class="fa-solid fa-user-group text-sm"></i>
                        <p class="text-sm font-medium">Users</p>
                    </a>
                </div>
            </div>
        <?php endif; ?>
    </div>
</nav>