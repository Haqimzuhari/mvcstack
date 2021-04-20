<button 
    type="button" 
    class="transition duration-300 ease-in-out focus:outline-none <?=$class?>" 
    x-data="{id:'<?=$target?>'}" 
    x-on:click="bsd(true), $dispatch('modal-overlay',{id})">
    @content
</button>