<section class="grid place-content-center min-h-screen">
    <div class="grid grid-cols-1 place-items-center gap-6">
        <h1 class="font-serif text-3xl font-black">Welcome</h1>

        <div>
            <?php $modal_trigger = new Component('modal.trigger', ['target' => 'modal-example']) ?>
                <button type="button" class="btn btn-primary px-6 py-3">Open Modal</button>
            <?php $modal_trigger->close() ?>

            <?php $modal = new Component('modal', ['id' => 'modal-example']) ?>
                Content
            <?php $modal->close() ?>
        </div>

        <form method="post" action="<?= route('logout') ?>">
            <button type="submit" name="logout" class="btn btn-secondary px-6 py-3">Logout</button>
        </form>
    </div>
</section>