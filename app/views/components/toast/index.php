<?php if (Toast::exists()): ?>
    <?php $toast = Toast::message() ?>
    <div class="fixed top-2 right-2 bg-white shadow-xl rounded-xl p-5 w-full max-w-xs space-y-2 border border-gray-100" x-data x-ref="toast">
        <div class="flex items-center">
            <div class="w-8 flex-none">
                <?php if ($toast['type'] == "success"): ?>
                    <i class="fa-solid fa-circle-check text-green-400 text-xl"></i>
                <?php elseif ($toast['type'] == "danger"): ?>
                    <i class="fa-solid fa-ban text-red-400 text-xl"></i>
                <?php elseif ($toast['type'] == "warning"): ?>
                    <i class="fa-solid fa-circle-exclamation text-yellow-400 text-xl"></i>
                <?php else: ?>
                    <i class="fa-solid fa-circle-info text-blue-400 text-xl"></i>
                <?php endif; ?>
            </div>
            
            <div class="flex-grow">
                <p class="text-sm font-semibold"><?=$toast['message']?></p>
            </div>

            <div class="w-8 flex-none flex-end">
                <button type="button" x-on:click="$refs.toast.style.display='none'" class="w-4 h-4 rounded-full flex-center text-zinc-300 hover:text-zinc-900 transition-default">
                    <i class="fa-solid fa-xmark text-xs"></i>
                </button>
            </div>
        </div>
        <?php if (!is_null($toast['details'])): ?>
            <p class="text-sm"><?=$toast['details']?></p>
        <?php endif; ?>
    </div>
<?php endif; ?>
