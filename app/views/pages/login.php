<section class="flex items-center justify-center min-h-screen">

    <div class="flex flex-col w-full max-w-sm p-10 bg-white rounded-lg shadow-lg">

        <div class="flex flex-col gap-5">

            <h1 class="text-xl font-bold">LOGIN NOW</h1>

            <div class="flex items-start gap-2 text-xs">

                <p>NEW USER?</p>

                <a href="<?=route('register')?>" class="link primary">
                    REGISTER NEW ACCOUNT
                </a>
                
            </div>

            <!-- Login form -->
            <form class="flex flex-col gap-5" method="post" action="<?=route('login')?>" x-data="{password:false}">

                <div class="grid grid-cols-1 gap-1">
                    <label for="email" class="text-xs">EMAIL</label>
                    <input type="email" name="email" id="email" placeholder="" class="px-4 py-2 border border-gray-200 rounded"/>
                </div>

                <div class="grid grid-cols-1 gap-1">
                    <label for="password" class="text-xs">PASSWORD</label>
                    <span class="relative w-full">
                        <input name="password" id="password" class="w-full px-4 py-2 border border-gray-200 rounded" x-bind:type="password?'text':'password'"/>
                        <span class="absolute inset-y-0 right-0 flex items-center justify-center w-10 text-gray-400 cursor-pointer hover:text-gray-600 focus:outline-none" x-on:click="password=!password">
                            <i x-show="!password" data-feather="eye" class="w-4 h-4"></i>
                            <i x-show="password" data-feather="eye-off" class="w-4 h-4"></i>
                        </span>
                    </span>
                </div>

                <div>
                    <button type="submit" name="login" class="px-6 py-2 font-semibold text-blue-800 transition duration-300 ease-in-out bg-blue-200 rounded hover:bg-blue-300 focus:outline-none">
                        LOGIN
                    </button>
                </div>

            </form>
            <!-- /Login form -->

        </div>

    </div>

</section>
