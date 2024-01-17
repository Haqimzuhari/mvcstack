<div x-cloak x-show="dropdown" x-on:click.away="dropdown=false" x-transition:enter="transform transition ease-in duration-200" x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transform transition ease-out duration-100" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-2" class="absolute right-0 z-20 mt-1 bg-white border rounded-xl shadow-sm border-zinc-200">
    <div class="flex flex-col divide-y divide-zinc-200">
        @slot
    </div>
</div>