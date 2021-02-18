<section class="flex flex-col items-center justify-center min-h-screen gap-4">
    <h1 class="text-lg font-bold">Welcome to MVCStack</h1>
    <p class="text-sm font-light">Nothing to see here</p>
    <form method="post" action="<?= route('logout') ?>">
        <button type="submit" class="button primary">
            Logout
        </button>
    </form>
</section>