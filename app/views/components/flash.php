<div class="fixed bottom-0 right-0 cursor-pointer mb-5 mr-5 transition duration-300 ease-in-out p-6 rounded-sm shadow-md flex gap-6 cursor-default <?= $color ?>" x-data x-ref="flash" x-on:click="$refs.flash.style.display='none'">
    <div>
        <span class="text-3xl">
            <?= $icon ?>
        </span>
    </div>
    <div class="flex flex-col justify-center">
        <?php
        foreach($messages as $key => $message) {
            ?>
            <p class="text-sm tracking-wide font-semibold"><?=$message?></p>
            <?php
        }
        ?>
    </div>
</div>
