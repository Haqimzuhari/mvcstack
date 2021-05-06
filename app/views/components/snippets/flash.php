<div class="fixed bottom-0 right-0 cursor-pointer mb-5 mr-5 transition duration-300 ease-in-out p-5 rounded-sm shadow flex flex-col gap-2 <?= $color ?>" x-data x-ref="flash" x-on:click="$refs.flash.style.display='none'">
    <div class="flex items-center gap-1">
        <span class="<?= $icon_type ?> <?= $icon_color ?>">
            <?= $icon_label ?>
        </span>
        <p class="text-xs font-black tracking-wider"><?= $flash_label ?></p>
    </div>
    <div class="flex flex-col gap-1">
        <?php
        foreach($messages as $key => $message) {
            ?>
            <p class="text-xs font-semibold tracking-wider"><?=$message?></p>
            <?php
        }
        ?>
    </div>
</div>
