<?php if (Toast::exists()): ?>
    <?php $toast = Toast::message() ?>
    <div class="fixed top-2 right-2 bg-white shadow-xl rounded-xl p-5 w-full max-w-xs space-y-4" x-data x-ref="toast">
        <div class="flex items-center">
            <div class="w-8 flex-none <?=($toast['type'] == "success")?'text-green-500':(($toast['type'] == "danger")?'text-red-500':(($toast['type'] == "warning")?'text-yellow-500':'text-blue-500'))?>">
                <?php
                if ($toast['type'] == "success") {
                    $icon = new Elem('icon.check-circle', ['size'=>'w-5 h-5']); $icon->close();
                } elseif ($toast['type'] == "danger") {
                    $icon = new Elem('icon.no-symbol', ['size'=>'w-5 h-5']); $icon->close();
                } elseif ($toast['type'] == "warning") {
                    $icon = new Elem('icon.exclamation-circle', ['size'=>'w-5 h-5']); $icon->close();
                } else {
                    $icon = new Elem('icon.information-circle', ['size'=>'w-5 h-5']); $icon->close();
                }
                ?>
            </div>
            
            <div class="w-full">
                <p class="text-sm font-semibold"><?=$toast['message']?></p>
            </div>

            <div class="w-8 flex-none flex-end">
                <button type="button" x-on:click="$refs.toast.style.display='none'" class="w-5 h-5 rounded-full flex-center text-zinc-300 hover:text-zinc-900 transition-default">
                    <?php $icon = new Elem('icon.x-mark', ['size'=>'w-5 h-5']); $icon->close() ?>
                </button>
            </div>
        </div>
        <?php if (!is_null($toast['details'])): ?>
            <p class="text-sm font-light"><?=$toast['details']?></p>
        <?php endif; ?>
    </div>
<?php endif; ?>
