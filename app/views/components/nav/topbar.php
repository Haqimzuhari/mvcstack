<div class="fixed inset-x-0 top-0 z-10 h-12 px-2 left-64 bg-slate-100">
        <div class="flex items-center justify-between h-full">
            <div class="w-full">
                <p class="text-lg font-semibold"><?= $page_name ?></p>
            </div>
            <div class="flex items-center justify-end w-full space-x-4">
                <div x-data="{dropdown: false}" class="relative">
                    <span x-on:click="dropdown = !dropdown">
                        <button type="button" class="flex items-center justify-center w-10 h-10 overflow-hidden rounded-full ring-1 ring-inset ring-indigo-400">
                            <img src="https://api.dicebear.com/7.x/micah/svg?backgroundColor=9a94fc" alt="avatar" class="object-cover" />
                        </button>
                    </span>
                    <div x-cloak x-show="dropdown" x-on:click.away="dropdown=false" x-transition:enter="transform transition ease-in duration-200" x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transform transition ease-out duration-100" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-2" class="absolute right-0 z-20 mt-3 bg-white border rounded-xl shadow-sm border-zinc-200">
                        <div class="flex flex-col divide-y divide-zinc-200">
                            <div class="py-2">
                                <a href="<?= route("profile") ?>" class="flex items-center w-full px-5 py-1 space-x-4 text-sm text-left transition text-neutral-900 hover:text-neutral-500 flex-nowrap whitespace-nowrap">
                                    <i class="fa-regular fa-user"></i>
                                    <p>Account</p>
                                </a>
                            </div>
                            <div class="py-2">
                                <form method="post" action="<?= route("sign-out") ?>" class="flex w-full">
                                    <button type="submit" name="sign_out" class="flex items-center w-full px-5 py-1 space-x-4 text-sm text-left transition text-neutral-900 hover:text-neutral-500 flex-nowrap whitespace-nowrap">
                                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                        <p>Sign Out</p>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>