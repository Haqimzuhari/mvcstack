<section class="min-h-screen flex items-center">

    <div class="w-full max-w-2xl flex flex-col px-32 py-5">

        <div class="flex flex-col gap-5">
            
            <div>
                <h1 class="text-6xl font-black">MVCSTACK.</h1>
                <p class="text-lg font-bold">LIGHTWEIGHT PHP MVC FRAMEWORK.</p>
            </div>

            <div class="flex items-start gap-2 text-sm">
                <p>NEW USER?</p>
                <a href="<?=route('register')?>" class="stack-link primary">
                    CREATE NEW ACCOUNT
                </a>
            </div>

            <div class="flex items-start gap-2 text-sm">
                <p>HAVE AN ACCOUNT?</p>
                <a href="<?=route('login')?>" class="stack-link primary">
                    LOGIN NOW
                </a>
            </div>

        </div>

    </div>

</section>
