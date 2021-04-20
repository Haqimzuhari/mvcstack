<section class="flex flex-col items-center justify-center min-h-screen gap-4">

    <h1 class="font-serif text-2xl font-bold">Welcome to MVCSTACK</h1>
    
    <p class="text-sm font-light">Nothing to see here</p>

    <?php Component::start('buttons.modal-trigger', ['class' => 'button primary', 'target' => 'modal-example']) ?>
        Open Modal
    <?php Component::end() ?>

    <?php Component::start('snippets.modal', ['modal_id'=>'modal-example']) ?>
        Hello from modal
    <?php Component::end() ?>
    
    <form method="post" action="<?= route('logout') ?>">
        <button type="submit" class="link secondary">
            Logout
        </button>
    </form>

</section>