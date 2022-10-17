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
            'success' => 'bg-green-200',
            'warning' => 'bg-yellow-200',
            'danger' => 'bg-red-200',
            'information' => 'bg-blue-200',
        ];

        $icon = [
            'success' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-green-600"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>',
            'warning' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-yellow-600"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" /></svg>',
            'danger' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-red-600"><path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>',
            'information' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-blue-600"><path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" /></svg>',
        ];
    ?><div class="p-4 rounded-xl <?=$bg_color[$flash['type']]?> space-y-2 shadow-2xl w-full max-w-xs fixed top-4 right-4 z-30" x-data x-ref="flash">
        <div class="flex justify-between">
            <div class="flex items-center space-x-2">
                <?=$icon[$flash['type']]?>
                <p class="text-sm font-semibold"><?=$flash['title']?></p>
            </div>
            <button x-on:click="$refs.flash.style.display='none'" type="button" class="w-5 h-5 btn rounded-full flex items-center justify-center text-gray-300 hover:text-gray-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <div class="text-xs font-light text-gray-800 space-y-1">
            <?php foreach ($flash['message'] as $key => $message): ?>
                <p><?= $message ?></p>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>
