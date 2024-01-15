<?php if (Toast::exists()): ?>
    <?php $toast = Toast::message() ?>
    <div x-data="{flash: true}" x-show="flash" class="fixed inset-x-0 z-50 pointer-events-none top-4">
        <div x-show="flash" x-transition:leave="transform transition ease-out duration-200" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-2" class="w-full max-w-sm p-6 mx-auto space-y-3 bg-white shadow-xl pointer-events-auto rounded-xl ring-1 ring-inset ring-zinc-200">
            <div class="flex items-center space-x-4">
                <span class="flex-none w-5">
                    <?php if ($toast['type'] == "success"): ?>
                        <i class="fa-solid fa-circle-check text-green-400 text-xl"></i>
                    <?php elseif ($toast['type'] == "danger"): ?>
                        <i class="fa-solid fa-ban text-red-400 text-xl"></i>
                    <?php elseif ($toast['type'] == "warning"): ?>
                        <i class="fa-solid fa-circle-exclamation text-yellow-400 text-xl"></i>
                    <?php else: ?>
                        <i class="fa-solid fa-circle-info text-blue-400 text-xl"></i>
                    <?php endif; ?>
                </span>
                <p class="w-full text-sm font-semibold"><?=$toast['message']?></p>
                <button x-on:click="flash=false" type="button" class="flex-none w-4 transition text-neutral-400 hover:text-neutral-900">
                    <i class="fa-solid fa-xmark text-xs"></i>
                </button>
            </div>
            <?php if (!is_null($toast['details'])): ?>
                <p class="text-sm font-light"><?=$toast['details']?></p>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>
