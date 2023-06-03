<div 
    class="fixed inset-0 z-50 flex flex-col items-center justify-start p-2 overflow-y-auto bg-zinc-600 bg-opacity-50 text-left" 
    x-data="{modal:false}" 
    x-show="modal" 
    x-on:modal-overlay.window="if ($event.detail.id == '<?=$id?>') modal=true" 
    x-transition:enter="transition ease-out duration-500" 
    x-transition:enter-start="opacity-0" 
    x-transition:enter-end="opacity-100" 
    x-transition:leave="transition ease-in duration-500" 
    x-transition:leave-start="opacity-100" 
    x-transition:leave-end="opacity-0" 
    x-cloak>
	<div 
        class="w-full my-10 transition-all transform sm:<?=(isset($size)) ? $size : 'max-w-md'?>" 
        x-show="modal" 
        x-transition:enter="transition ease-out duration-200" 
        x-transition:enter-start="opacity-0 -translate-y-4 sm:translate-y-4" 
        x-transition:enter-end="opacity-100 translate-y-0" 
        x-transition:leave="transition ease-in duration-200" 
        x-transition:leave-start="opacity-100 translate-y-0" 
        x-transition:leave-end="opacity-0 -translate-y-4 sm:translate-y-4" 
        x-on:click.away="modal=false, bsd(false)"
        x-cloak>
		<div class="p-8 bg-white rounded-xl shadow-sm space-y-6">
            <div class="flex items-center">
                <div class="w-full"><p class="font-bold text-lg"><?=(isset($title)) ? $title : 'Modal Title'?></p></div>
                <div class="w-8 flex-none flex-center">
                    <button 
                        type="button" 
                        class="w-6 h-6 flex-center transition-default bg-zinc-100 hover:bg-zinc-300 text-zinc-400 hover:text-zinc-800 rounded-full" 
                        x-on:click="modal=false, bsd(false)">
                            <i class="fa-solid fa-xmark text-xs"></i>
                    </button>
                </div>
            </div>

            <div>@slot</div>
        </div>
	</div>
</div>