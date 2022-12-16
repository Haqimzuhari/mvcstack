<?php $layout = new Elem('layout.base') ?>
    <main class="h-screen flex">
        <section class="w-full max-w-screen-xl mx-auto grid grid-cols-4 gap-6 p-6">
            <div class="col-span-2 flex flex-col">
                <div class="flex-none h-12">
                    <div class="flex items-center space-x-2">
                        <span><img class="w-8 h-8" src="<?=asset('icons/plainstack-dark.png')?>"/></span>    
                        <p class="font-semibold uppercase"><?=TITLE?></p>
                    </div>
                </div>

                <div class="h-full flex-center">
                    <div class="w-full max-w-md space-y-10 bg-white p-10 rounded-2xl">
                        <div class="flex-col-center">
                            <p class="text-3xl font-serif font-semibold">Welcome</p>
                            <p class="text-sm">Please enter your details</p>
                        </div>

                        <?php $form = new Elem('form.authentication.sign-in'); $form->close() ?>

                        <div class="flex-col-center">
                            <p class="text-xs font-light">Don't have an account? <a href="<?=route('create-account')?>" class="font-semibold link primary">Create account</a></p>
                        </div>
                    </div>
                </div>

                <div class="flex-none h-12">
                    <p class="font-light text-xs">&copy; <?=date('Y')?> <span class="uppercase"><?=TITLE?></span></p>
                </div>
            </div>
    
            <div class="col-span-2 h-full max-h-screen">
                <img class="w-full h-full object-cover rounded-2xl" src="https://images.pexels.com/photos/2911527/pexels-photo-2911527.jpeg"/>
            </div>
        </section>
    </main>
<?php $layout->close() ?>