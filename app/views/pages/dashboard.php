<section class="grid place-content-center min-h-screen">
    <div class="grid grid-cols-1 place-items-center gap-6">
        <h1 class="font-serif text-3xl font-black">Welcome</h1>

        <div>
            <?php $modal_trigger = new Component('modal.trigger', ['target' => 'modal-example']) ?>
                <button type="button" class="px-6 py-2 rounded font-bold bg-rose-200 hover:bg-rose-300 text-rose-800 focus:outline-none transition duration-300 ease-in-out">
                    Open Modal
                </button>
            <?php $modal_trigger->close() ?>

            <?php $modal = new Component('modal', ['id' => 'modal-example']) ?>
                <div class="w-full max-w-sm bg-white mx-auto rounded">
                    Content
                </div>
            <?php $modal->close() ?>
        </div>

        <form method="post" action="<?= route('logout') ?>">
            <button type="submit" name="logout" class="px-6 py-2 rounded font-bold bg-gray-200 hover:bg-gray-300 text-gray-800 focus:outline-none transition duration-300 ease-in-out">
                Logout
            </button>
        </form>
    </div>
</section>