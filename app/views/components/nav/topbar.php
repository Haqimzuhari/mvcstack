<nav class="fixed left-0 top-0 right-0 h-12">
    <div class="h-full w-full bg-white border-b border-gray-100 flex justify-between items-center px-4">
        <div>
            <a href="<?=route('')?>" class="link-primary">
                <?=TITLE?>
            </a>
        </div>

        <div class="flex space-x-2">
            <a href="<?=route('')?>" class="text-sm <?=(curr_route('dashboard')) ? 'text-indigo-800' : 'hover:text-indigo-800' ?>">
                Dashboard
            </a>

            <a href="#" class="text-sm <?=(curr_route('about')) ? 'text-indigo-800' : 'hover:text-indigo-800' ?>">
                About
            </a>
        </div>
    </div>
</nav>