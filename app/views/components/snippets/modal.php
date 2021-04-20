<div 
    class="fixed inset-0 z-50 flex flex-col items-center justify-end px-5 overflow-y-auto bg-gray-600 bg-opacity-50 sm:justify-start sm:px-0" 
    x-data="{modal:false}" 
    x-show="modal" 
    x-on:modal-overlay.window="if ($event.detail.id == '<?=$modal_id?>') modal=true" 
    x-transition:enter="transition ease-out duration-500" 
    x-transition:enter-start="opacity-0" 
    x-transition:enter-end="opacity-100" 
    x-transition:leave="transition ease-in duration-500" 
    x-transition:leave-start="opacity-100" 
    x-transition:leave-end="opacity-0" 
    x-cloak>
	<div 
        class="w-full mb-5 transition-all transform sm:mt-20 sm:mb-0 sm:max-w-2xl" 
        x-show="modal" 
        x-transition:enter="transition ease-out duration-300" 
        x-transition:enter-start="opacity-0 -translate-y-4 sm:translate-y-4" 
        x-transition:enter-end="opacity-100 translate-y-0" 
        x-transition:leave="transition ease-in duration-300" 
        x-transition:leave-start="opacity-100 translate-y-0" 
        x-transition:leave-end="opacity-0 -translate-y-4 sm:translate-y-4" 
        x-on:click.away="modal=false, bsd(false)">
		<div class="p-10 bg-white rounded-sm shadow-sm">
			@content
		</div>
	</div>
</div>