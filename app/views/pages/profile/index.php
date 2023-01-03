<?php $layout = new Elem('layout.auth') ?>
    <div class="space-y-14">
        <section>
            <p class="text-2xl font-bold">Profile</p>
        </section>
    
        <div class="space-y-12">
            <?php $form=new Elem('form.profile', ['value'=>auth()->user()->profile]); $form->close() ?>
            <?php $form=new Elem('form.profile.account', ['value'=>auth()->user()]); $form->close() ?>
            <?php $form=new Elem('form.profile.password', ['value'=>auth()->user()]); $form->close() ?>
        </div>
    </div>
<?php $layout->close() ?>
