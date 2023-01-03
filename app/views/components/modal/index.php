<div 
    class="fixed inset-0 z-50 flex flex-col items-center justify-start p-2 overflow-y-auto bg-zinc-600 bg-opacity-50" 
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
		<div class="p-5 bg-white rounded-xl shadow-sm space-y-6">
            <div class="flex items-center">
                <div class="w-full"><p class="text-sm font-bold"><?=(isset($title)) ? $title : 'Modal Title'?></p></div>
                <div class="w-8 flex-none flex-center">
                    <button 
                        type="button" 
                        class="p-1 rounded-lg text-zinc-400 hover:text-black hover:bg-zinc-200 transition-default" 
                        x-on:click="modal=false, bsd(false)">
                            <?php $close=new Elem('icon.x-mark', ['size'=>'w-4 h-4']); $close->close() ?>
                    </button>
                </div>
            </div>

            <div>@slot</div>
        </div>
	</div>
</div>