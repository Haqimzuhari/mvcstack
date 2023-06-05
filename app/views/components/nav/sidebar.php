<nav class="fixed w-80 top-0 bottom-0 left-0 bg-white p-4 flex flex-col space-y-10">
    <div class="flex-none">
        <div class="flex items-center space-x-4 px-6">
            <div class="w-14 h-14 rounded-full bg-zinc-100 overflow-hidden">
                <img src="<?=auth()->default_picture_link()?>" class="w-full h-full object-cover"/>
            </div>
            
            <div>
                <p class="font-semibold text-xl">Welcome,</p>
                <p class="font-light"><?=(auth()->check()) ? auth()->user()->profile->fullname : ''?></p>
            </div>
        </div>
    </div>

    <div class="h-full">
        <a href="<?=route('dashboard')?>" class="flex-start space-x-4 p-4 rounded text-zinc-500 transition-default hover:bg-indigo-100 hover:text-indigo-800">
            <span class="w-10 flex-none text-center"><i class="fa-solid fa-fire"></i></span>
            <p class="flex-grow font-semibold">Dashboard</p>
        </a>
    </div>

    <div class="flex-none flex flex-col justify-end">
        <a href="<?=route('profile')?>" class="flex-start space-x-4 p-4 rounded text-zinc-500 transition-default hover:bg-indigo-100 hover:text-indigo-800">
            <span class="w-10 flex-none text-center"><i class="fa-solid fa-user-astronaut"></i></span>
            <p class="flex-grow font-semibold">Profile</p>
        </a>

        <a href="<?=route('logout')?>" class="flex-start space-x-4 p-4 rounded text-zinc-500 transition-default hover:bg-indigo-100 hover:text-indigo-800">
            <span class="w-10 flex-none text-center"><i class="fa-solid fa-arrow-right-from-bracket"></i></span>
            <p class="flex-grow font-semibold">Log out</p>
        </a>
    </div>
</nav>