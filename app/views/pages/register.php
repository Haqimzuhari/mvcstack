<section class="flex items-center justify-center min-h-screen">

    <div class="flex flex-col w-full max-w-sm p-10 bg-white rounded-lg shadow-sm">

        <div class="flex flex-col gap-5">

            <div>
                <a href="<?= route('') ?>" class="text-xs link secondary">
                    Cancel
                </a>
            </div>
            
            <h1 class="text-xl font-bold">REGISTER AN ACCOUNT</h1>

            <div class="flex items-start gap-2 text-xs">
                <p>HAVE AN ACCOUNT?</p>
                <a href="<?=route('login')?>" class="link primary">
                    LOGIN NOW
                </a>
            </div>

            <!-- Create account form -->
            <form class="flex flex-col gap-5" method="post" action="<?=route('register')?>" x-data="{password:false, confirm:false}">

                <div class="flex flex-col gap-1">
                    <label for="email" class="input-label">EMAIL</label>
                    <input type="email" name="email" id="email" class="form-input primary" autofocus />
                </div>

                <div class="flex flex-col gap-1">
                    <label for="first_name" class="input-label">FIRST NAME</label>
                    <input type="text" name="first_name" id="first_name" class="form-input primary" />
                </div>

                <div class="flex flex-col gap-1">
                    <label for="last_name" class="input-label">LAST NAME</label>
                    <input type="text" name="last_name" id="last_name" class="form-input primary" />
                </div>

                <div class="flex flex-col gap-1">
                    <label for="contact" class="input-label">CONTACT NO.</label>
                    <input type="number" name="contact" id="contact" class="form-input primary" />
                </div>

                <div class="flex flex-col gap-1">
                    <label for="password" class="input-label">PASSWORD</label>
                    <span class="relative w-full">
                        <input type="password" name="password" id="password" class="form-input primary" x-bind:type="password?'text':'password'" />
                        <span class="absolute inset-y-0 right-0 flex items-center justify-center w-10 text-gray-400 transition duration-300 ease-in-out cursor-pointer hover:text-gray-600 focus:outline-none" x-on:click="password=!password">
                            <i x-bind:class="{'las la-eye':!password, 'las la-low-vision':password}"></i>
                        </span>
                    </span>
                    </span>
                </div>

                <div class="flex flex-col gap-1">
                    <label for="confirm_password" class="input-label">CONFIRM PASSWORD</label>
                    <span class="relative w-full">
                        <input type="password" name="confirm_password" id="confirm_password" class="form-input primary" x-bind:type="confirm?'text':'password'" />
                        <span class="absolute inset-y-0 right-0 flex items-center justify-center w-10 text-gray-400 transition duration-300 ease-in-out cursor-pointer hover:text-gray-600 focus:outline-none" x-on:click="confirm=!confirm">
                            <i x-bind:class="{'las la-eye':!confirm, 'las la-low-vision':confirm}"></i>
                        </span>
                    </span>
                    </span>
                </div>

                <div>
                    <button type="submit" name="register" class="button primary">
                        CREATE ACCOUNT
                    </button>
                </div>

            </form>
            <!-- /Create account form -->

        </div>

    </div>

</section>
