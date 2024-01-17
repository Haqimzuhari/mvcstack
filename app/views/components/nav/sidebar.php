<nav class="fixed inset-y-0 left-0 flex-none w-64 space-y-6 bg-white border-r border-zinc-200">
    <div class="flex items-center h-16 px-9">
        <a href="<?= route(DEFAULT_AUTH_ROUTE) ?>" class="text-2xl font-black flex space-x-2">
            <i class="las la-cubes text-3xl text-yellow-500"></i><p><?= TITLE ?></p>
        </a>
    </div>
    <div class="grid grid-cols-1 gap-10">
        <div class="flex flex-col space-y-1 px-6">
            <a href="<?= route('dashboard') ?>" class="flex items-center py-1 px-4 space-x-3 rounded-lg transition hover:text-neutral-900 hover:bg-zinc-100 text-neutral-700">
                <i class="las la-cube text-2xl"></i>
                <p class="text-sm font-medium">Dashboard</p>
            </a>
            <?php if (auth()->user()->isAdmin): ?>
                <a href="<?= route('user') ?>" class="flex items-center py-1 px-4 space-x-3 rounded-lg transition hover:text-neutral-900 hover:bg-zinc-100 text-neutral-700">
                    <i class="las la-user-friends text-2xl"></i>
                    <p class="text-sm font-medium">Users</p>
                </a>
            <?php endif; ?>
        </div>
    </div>
</nav>