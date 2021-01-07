<section class="min-h-screen flex items-center justify-center">

    <div class="w-full max-w-sm flex flex-col p-10 bg-white shadow-sm rounded-lg">

        <div class="flex flex-col gap-5">

            <div>
                <a href="<?= route('') ?>" class="stack-link secondary text-xs">
                    Cancel
                </a>
            </div>
            
            <h1 class="font-bold text-xl">REGISTER AN ACCOUNT</h1>

            <div class="flex items-start gap-2 text-xs">
                <p>HAVE AN ACCOUNT?</p>
                <a href="<?=route('login')?>" class="stack-link primary">
                    LOGIN NOW
                </a>
            </div>

            <!-- Create account form -->
            <form class="flex flex-col gap-5" method="post" action="<?=route('register')?>" x-data="{password:false, confirm:false}">

                <div class="flex flex-col gap-1">
                    <label for="email" class="stack-form-label">EMAIL</label>
                    <input type="email" name="email" id="email" class="stack-form primary" autofocus />
                </div>

                <div class="flex flex-col gap-1">
                    <label for="first_name" class="stack-form-label">FIRST NAME</label>
                    <input type="text" name="first_name" id="first_name" class="stack-form primary" />
                </div>

                <div class="flex flex-col gap-1">
                    <label for="last_name" class="stack-form-label">LAST NAME</label>
                    <input type="text" name="last_name" id="last_name" class="stack-form primary" />
                </div>

                <div class="flex flex-col gap-1">
                    <label for="contact" class="stack-form-label">CONTACT NO.</label>
                    <input type="number" name="contact" id="contact" class="stack-form primary" />
                </div>

                <div class="flex flex-col gap-1">
                    <label for="password" class="stack-form-label">PASSWORD</label>
                    <span class="w-full relative">
                        <input type="password" name="password" id="password" class="stack-form primary" x-bind:type="password?'text':'password'" />
                        <span class="transition duration-300 ease-in-out absolute inset-y-0 right-0 flex items-center justify-center w-10 text-gray-400 hover:text-gray-600 cursor-pointer" x-on:click="password=!password">
                            <i class="far" x-bind:class="{'fa-eye':!password, 'fa-eye-slash':password}"></i>
                        </span>
                    </span>
                    </span>
                </div>

                <div class="flex flex-col gap-1">
                    <label for="confirm_password" class="stack-form-label">CONFIRM PASSWORD</label>
                    <span class="w-full relative">
                        <input type="password" name="confirm_password" id="confirm_password" class="stack-form primary" x-bind:type="confirm?'text':'password'" />
                        <span class="stack-button-basic absolute inset-y-0 right-0 flex items-center justify-center w-10 text-gray-400 hover:text-gray-600" x-on:click="confirm=!confirm">
                            <i class="far" x-bind:class="{'fa-eye':!confirm, 'fa-eye-slash':confirm}"></i>
                        </span>
                    </span>
                    </span>
                </div>

                <div>
                    <button type="submit" name="register" class="stack-button primary">
                        CREATE ACCOUNT
                    </button>
                </div>

            </form>
            <!-- /Create account form -->

        </div>

    </div>

</section>
