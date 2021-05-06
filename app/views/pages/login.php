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

                <div class="flex flex-col gap-1">
                    <label for="email" class="input-label">EMAIL</label>
                    <input type="email" name="email" id="email" placeholder="" class="form-input primary" autofocus/>
                </div>

                <div class="flex flex-col gap-1">
                    <label for="password" class="input-label">PASSWORD</label>
                    <span class="relative w-full">
                        <input name="password" id="password" placeholder="" class="form-input primary" x-bind:type="password?'text':'password'"/>
                        <span class="absolute inset-y-0 right-0 flex items-center justify-center w-10 text-gray-400 cursor-pointer hover:text-gray-600 focus:outline-none" x-on:click="password=!password">
                            <i x-bind:class="{'las la-eye':!password, 'las la-low-vision':password}"></i>
                        </span>
                    </span>
                </div>

                <div>
                    <button type="submit" name="login" class="button primary">
                        LOGIN
                    </button>
                </div>

            </form>
            <!-- /Login form -->

        </div>

    </div>

</section>
