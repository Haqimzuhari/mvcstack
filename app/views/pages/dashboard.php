<section class="min-h-screen flex flex-col items-center justify-center">
    <h1>Welcome to MVCStack</h1>
    <p>Nothing to see here</p>
    <form method="post" action="<?= route('logout') ?>">
        <button type="submit" class="px-4 py-2 text-sm bg-blue-400 hover:bg-blue-500 transition duration-300 ease-in-out focus:outline-none text-white">
            Logout
        </button>
    </form>
</section>