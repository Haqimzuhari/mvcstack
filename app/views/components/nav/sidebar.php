<nav class="fixed left-0 top-0 bottom-0 w-56 p-6">
    <div class="w-full h-full flex flex-col space-y-20">
        <div class="h-8 flex-none flex items-center">
            <a href="<?=route('')?>" class="link-primary text-2xl font-bold uppercase"><?=TITLE?></a>
        </div>

        <div class="h-full flex flex-col space-y-4">
            <a href="<?=route('')?>" class="nav <?=(curr_route('dashboard')) ? 'nav-active' : 'nav-non-active' ?>">Dashboard</a>
            <a href="#" class="nav <?=(curr_route('about')) ? 'nav-active' : 'nav-non-active' ?>">About</a>
            <a href="#" class="nav <?=(curr_route('booking')) ? 'nav-active' : 'nav-non-active' ?>">Booking</a>
            <a href="#" class="nav <?=(curr_route('customer')) ? 'nav-active' : 'nav-non-active' ?>">Customer</a>
        </div>

        <div class="h-48 flex-none flex flex-col items-center justify-end space-y-6">
            <a href="<?=route('profile')?>" class="w-12 h-12 rounded-full overflow-hidden hover:ring hover:ring-rose-200 hover:ring-offset-2 transition-default">
                <img src="https://avatars.dicebear.com/api/bottts/:<?=auth()->user()->profile->name ?? 'nouser'?>.svg?background=%23FFC2CF" class="w-full h-full"/>
            </a>

            <div class="flex-col-center">
                <p class="text-xs font-black"><?=auth()->user()->profile->name ?? 'nouser'?></p>
                <p class="text-xs font-light text-zinc-400"><?=auth()->user()->email ?? 'nouser'?></p>
            </div>

            <form method="post" action="<?=route('logout')?>">
                <button type="submit" class="btn border border-zinc-200 hover:border-zinc-800 hover:bg-zinc-800 hover:text-zinc-50 rounded p-1">
                    <?php $icon=new Elem('icon.power', ['size'=>'w-5 h-5 stroke-2']); $icon->close() ?>
                </button>
            </form>
        </div>
    </div>
</nav>