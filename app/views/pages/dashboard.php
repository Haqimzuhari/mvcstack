<section class="flex flex-col items-center justify-center min-h-screen gap-4">

    <h1 class="font-serif text-2xl font-bold">Welcome to MVCSTACK</h1>
    
    <p class="text-sm font-light">Nothing to see here</p>

    <?php $card = new Component('buttons.modal-trigger', ['class' => 'button primary', 'target' => 'modal-example']) ?>
        Open Modal
    <?php $card->close() ?>

    <?php $modal = new Component('snippets.modal', ['modal_id'=>'modal-example']) ?>
        wow
    <?php $modal->close() ?>
    
    <form method="post" action="<?= route('logout') ?>">
        <button type="submit" class="text-blue-800 transition duration-300 ease-in-out hover:text-blue-600">
            Logout
        </button>
    </form>

</section>