<section class="flex flex-col items-center justify-center min-h-screen gap-4">

    <h1 class="text-lg font-bold">Welcome to MVCSTACK</h1>
    
    <p class="text-sm font-light">Nothing to see here</p>

    <span x-data="{modal: false}" x-cloak>

        <button type="button" class="text-white bg-green-500 button hover:bg-green-600" x-on:click="modal=true">Modal</button>

        <?php Component::start('modal', ['input'=>'Hi im input']) ?>
            <div class="p-5">
                Hello from modal
            </div>
        <?php Component::end() ?>
    </span>
    
    <form method="post" action="<?= route('logout') ?>">
        <button type="submit" class="button primary">
            Logout
        </button>
    </form>

</section>