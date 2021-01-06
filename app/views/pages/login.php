<section class="min-h-screen flex items-center">

    <div class="w-full max-w-2xl flex flex-col px-32 py-5">

        <div class="flex flex-col gap-5">

            <div class="flex items-start gap-2 text-sm">

                <p>NEW USER?</p>

                <a href="<?=route('register')?>" class="transition duration-300 ease-in-out font-semibold text-indigo-400 hover:text-indigo-500 cursor-pointer focus:outline-none border-b-4 border-transparent hover:border-indigo-400">
                    CREATE NEW ACCOUNT
                </a>
                
            </div>

            <!-- Login form -->
            <form class="flex flex-col gap-5" method="post" action="<?=route('login')?>" x-data="{password:false}">

                <h1 class="font-bold text-lg">LOGIN</h1>

                <div class="flex flex-col gap-1">
                    <label for="email" class="text-xs font-light text-gray-600">EMAIL</label>
                    <input type="email" name="email" id="email" placeholder="Email" class="tracking-widest appearance-none transition duration-300 ease-in-out bg-gray-50 focus:outline-none focus:bg-white px-3 py-2 text-sm border border-transparent focus:border-indigo-500 rounded-sm placeholder-gray-500 text-gray-800" />
                </div>

                <div class="flex flex-col gap-1">
                    <label for="password" class="text-xs font-light text-gray-600">PASSWORD</label>
                    <span class="w-full relative">
                        <input name="password" id="password" placeholder="Password" class="w-full tracking-widest appearance-none transition duration-300 ease-in-out bg-gray-50 focus:outline-none focus:bg-white px-3 py-2 text-sm border border-transparent focus:border-indigo-500 rounded-sm placeholder-gray-500 text-gray-800" x-bind:type="password?'text':'password'" />
                        <span class="transition duration-300 ease-in-out absolute inset-y-0 right-0 flex items-center justify-center w-10 text-gray-400 hover:text-gray-600 cursor-pointer" x-on:click="password=!password">
                            <i class="far" x-bind:class="{'fa-eye':!password, 'fa-eye-slash':password}"></i>
                        </span>
                    </span>
                </div>

                <div>
                    <button type="submit" name="login" class="tracking-widest transition duration-300 ease-in-out bg-indigo-400 hover:bg-indigo-500 shadow-sm hover:shadow-lg font-semibold px-3 py-2 rounded-sm text-xs text-gray-50">
                    LOGIN
                    </button>
                </div>

            </form>
            <!-- /Login form -->

        </div>

    </div>

</section>
