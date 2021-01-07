<section class="flex items-center justify-center min-h-screen">

    <div class="flex flex-col w-full max-w-sm p-10 bg-white rounded-lg shadow-sm">

        <div class="flex flex-col gap-5">

            <div>
                <a href="<?= route('') ?>" class="text-xs stack-link secondary">
                    Cancel
                </a>
            </div>

            <h1 class="text-xl font-bold">LOGIN NOW</h1>

            <div class="flex items-start gap-2 text-xs">

                <p>NEW USER?</p>

                <a href="<?=route('register')?>" class="stack-link primary">
                    REGISTER NEW ACCOUNT
                </a>
                
            </div>

            <!-- Login form -->
            <form class="flex flex-col gap-5" method="post" action="<?=route('login')?>" x-data="{password:false}">

                <div class="flex flex-col gap-1">
                    <label for="email" class="stack-form-label">EMAIL</label>
                    <input type="email" name="email" id="email" placeholder="" class="stack-form primary" autofocus/>
                </div>

                <div class="flex flex-col gap-1">
                    <label for="password" class="stack-form-label">PASSWORD</label>
                    <span class="relative w-full">
                        <input name="password" id="password" placeholder="" class="stack-form primary" x-bind:type="password?'text':'password'"/>
                        <span class="absolute inset-y-0 right-0 flex items-center justify-center w-10 text-gray-400 stack-button-basic hover:text-gray-600" x-on:click="password=!password">
                            <i class="far" x-bind:class="{'fa-eye':!password, 'fa-eye-slash':password}"></i>
                        </span>
                    </span>
                </div>

                <div>
                    <button type="submit" name="login" class="stack-button primary">
                        Login
                    </button>
                </div>

            </form>
            <!-- /Login form -->

        </div>

    </div>

</section>
