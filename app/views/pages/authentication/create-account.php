<?php $layout = new Elem('layout.base') ?>
    <main class="h-screen flex-center">
        <div class="w-full max-w-md space-y-10 bg-white p-10 rounded-2xl">
            <div class="flex-center space-x-2">
                <span><img class="w-10 h-10" src="<?=asset('icons/plainstack-outline.png')?>"/></span>    
            </div>

            <div class="flex-col-center">
                <p class="text-3xl font-serif font-semibold">Let's join us!</p>
                <p class="text-sm">Please enter your details</p>
            </div>

            <?php $form = new Elem('form.authentication.create-account'); $form->close() ?>

            <div class="flex-col-center">
                <p class="text-xs font-light">Have an account? <a href="<?=route('sign-in')?>" class="font-semibold link primary">Sign In</a></p>
            </div>

            <div class="flex-col-center">
                <p class="font-light text-xs">&copy; <?=date('Y')?> <span class="uppercase"><?=TITLE?></span></p>
            </div>
        </div>
    </main>
<?php $layout->close() ?>