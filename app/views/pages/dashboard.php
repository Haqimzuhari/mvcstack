<section class="flex flex-col items-center justify-center min-h-screen gap-4">

    <h1 class="text-lg font-bold">Welcome to MVCSTACK</h1>
    
    <p class="text-sm font-light">Nothing to see here</p>

    <?php echo Component::use('modal') ?>

    <span x-data="{modal: false}" x-cloak>

        <button type="button" class="text-white bg-green-500 button hover:bg-green-600" x-on:click="modal=true">Modal</button>

        <div
            class="fixed inset-0 z-10 overflow-y-auto" 
            x-show="modal" 
            x-transition:enter="transition ease-out duration-500" 
            x-transition:enter-start="opacity-0" 
            x-transition:enter-end="opacity-100" 
            x-transition:leave="transition ease-in duration-500" 
            x-transition:leave-start="opacity-100" 
            x-transition:leave-end="opacity-0">

            <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                </div>

                <!-- This element is to trick the browser into centering the modal contents. -->
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                <div 
                    class="inline-block w-full overflow-hidden text-left align-bottom transition-all transform bg-white rounded-sm shadow-xl sm:my-8 sm:align-middle sm:max-w-2xl" 
                    role="dialog" 
                    aria-modal="true" 
                    aria-labelledby="modal-headline" 
                    x-show="modal" 
                    x-transition:enter="transition ease-out duration-300" 
                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" 
                    x-transition:leave="transition ease-linear duration-200" 
                    x-transition:leave-start="opacity-100 translate-y-0" 
                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0" 
                    x-on:click.away="modal=false">
                    
                    <div class="p-5">
                        MODAL CONTENT
                    </div>
                </div>
            </div>
        </div>
    </span>
    
    <form method="post" action="<?= route('logout') ?>">
        <button type="submit" class="button primary">
            Logout
        </button>
    </form>

</section>