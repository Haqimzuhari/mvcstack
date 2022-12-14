<div 
    class="fixed inset-0 z-50 flex flex-col items-center justify-end px-5 overflow-y-auto bg-slate-800 bg-opacity-50 sm:justify-start sm:px-0" 
    x-data="{modal:false}" 
    x-show="modal" 
    x-on:modal-overlay.window="if ($event.detail.id == '<?=$id?>') modal=true" 
    x-on:close-modal-overlay.window="if ($event.detail.id == '<?=$id?>') modal=false" 
    x-transition:enter="transition ease-out duration-500" 
    x-transition:enter-start="opacity-0" 
    x-transition:enter-end="opacity-100" 
    x-transition:leave="transition ease-in duration-500" 
    x-transition:leave-start="opacity-100" 
    x-transition:leave-end="opacity-0" 
    x-cloak>
	<div 
        class="w-full my-10 transition-all transform sm:max-w-md" 
        x-show="modal" 
        x-transition:enter="transition ease-out duration-400" 
        x-transition:enter-start="opacity-0 -translate-y-4 sm:translate-y-4" 
        x-transition:enter-end="opacity-100 translate-y-0" 
        x-transition:leave="transition ease-in duration-400" 
        x-transition:leave-start="opacity-100 translate-y-0" 
        x-transition:leave-end="opacity-0 -translate-y-4 sm:translate-y-4" 
        x-on:click.away="modal=false"
        x-cloak>
		<div class="p-6 bg-white rounded-sm shadow-sm">
            @content
		</div>
	</div>
</div>