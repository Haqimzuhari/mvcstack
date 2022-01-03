<?php if (Flash::exists()): ?>
    <?php 
        $flash = Flash::all();

        $text_color = [
            'success' => 'text-green-400',
            'warning' => 'text-yellow-400',
            'danger' => 'text-red-400',
            'information' => 'text-blue-400',
        ];

        $bg_color = [
            'success' => 'bg-green-400',
            'warning' => 'bg-yellow-400',
            'danger' => 'bg-red-400',
            'information' => 'bg-blue-400',
        ];

        $icon = [
            'success' => '<i data-feather="check-circle" class="w-5 h-5"></i>',
            'warning' => '<i data-feather="alert-circle" class="w-5 h-5"></i>',
            'danger' => '<i data-feather="x-circle" class="w-5 h-5"></i>',
            'information' => '<i data-feather="alert-octagon" class="w-5 h-5"></i>',
        ];
    ?>
    <div class="bg-white p-4 rounded-lg shadow-lg w-full max-w-sm space-y-2 fixed top-5 right-5 z-30" x-data x-ref="flash">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-2">
                <span class="<?= $text_color[$flash['type']] ?>">
                    <?= $icon[$flash['type']] ?>
                </span>
                <p class="font-bold <?= $text_color[$flash['type']] ?>"><?= $flash['title'] ?></p>
            </div>
            <div>
                <button x-on:click="$refs.flash.style.display='none'" type="button" class="text-gray-400 hover:text-gray-800 hover:bg-gray-100 p-1 rounded-lg transition duration-300 ease-in-out">
                    <i data-feather="x" class="w-4 h-4"></i>
                </button>
            </div>
        </div>
        <div class="text-sm">
            <?php foreach ($flash['message'] as $key => $message): ?>
                <p class="text-gray-800"><?= $message ?></p>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>
