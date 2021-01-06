<section class="min-h-screen flex items-center">

    <div class="w-full max-w-2xl flex flex-col px-32 py-5">

        <div class="flex flex-col gap-5">

            <div class="flex items-start gap-2 text-sm">
                <p>HAVE AN ACCOUNT?</p>
                <a href="<?=route('login')?>" class="transition duration-300 ease-in-out font-semibold text-indigo-400 hover:text-indigo-500 cursor-pointer focus:outline-none border-b-4 border-transparent hover:border-indigo-400">
                    LOGIN NOW
                </a>
            </div>

            <!-- Create account form -->
            <form class="flex flex-col gap-5" method="post" action="<?=route('register')?>" x-data="{password:false, confirm:false}">

                <h1 class="font-bold text-lg">CREATE AN ACCOUNT</h1>

                <div class="flex flex-col gap-1">
                    <label for="email" class="text-xs font-light text-gray-600">EMAIL</label>
                    <input type="email" name="email" id="email" placeholder="Email" class="w-full tracking-widest appearance-none transition duration-300 ease-in-out bg-gray-50 focus:outline-none focus:bg-white px-3 py-2 text-xs border border-transparent focus:border-indigo-500 rounded-sm placeholder-gray-500 text-gray-800" />
                </div>

                <div class="flex flex-col gap-1">
                    <label for="first_name" class="text-xs font-light text-gray-600">FIRST NAME</label>
                    <input type="text" name="first_name" id="first_name" placeholder="First Name" class="w-full tracking-widest appearance-none transition duration-300 ease-in-out bg-gray-50 focus:outline-none focus:bg-white px-3 py-2 text-xs border border-transparent focus:border-indigo-500 rounded-sm placeholder-gray-500 text-gray-800" />
                </div>

                <div class="flex flex-col gap-1">
                    <label for="last_name" class="text-xs font-light text-gray-600">LAST NAME</label>
                    <input type="text" name="last_name" id="last_name" placeholder="Last Name" class="w-full tracking-widest appearance-none transition duration-300 ease-in-out bg-gray-50 focus:outline-none focus:bg-white px-3 py-2 text-xs border border-transparent focus:border-indigo-500 rounded-sm placeholder-gray-500 text-gray-800" />
                </div>

                <div class="flex flex-col gap-1">
                    <label for="contact" class="text-xs font-light text-gray-600">CONTACT NO.</label>
                    <input type="number" name="contact" id="contact" placeholder="01XXXXXXXX" class="w-full tracking-widest appearance-none transition duration-300 ease-in-out bg-gray-50 focus:outline-none focus:bg-white px-3 py-2 text-xs border border-transparent focus:border-indigo-500 rounded-sm placeholder-gray-500 text-gray-800" />
                </div>

                <div class="flex flex-col gap-1">
                    <label for="password" class="text-xs font-light text-gray-600">PASSWORD</label>
                    <span class="w-full relative">
                        <input type="password" name="password" id="password" placeholder="Password" class="w-full tracking-widest appearance-none transition duration-300 ease-in-out bg-gray-50 focus:outline-none focus:bg-white px-3 py-2 text-xs border border-transparent focus:border-indigo-500 rounded-sm placeholder-gray-500 text-gray-800" x-bind:type="password?'text':'password'" />
                        <span class="transition duration-300 ease-in-out absolute inset-y-0 right-0 flex items-center justify-center w-10 text-gray-400 hover:text-gray-600 cursor-pointer" x-on:click="password=!password">
                            <i class="far" x-bind:class="{'fa-eye':!password, 'fa-eye-slash':password}"></i>
                        </span>
                    </span>
                    </span>
                </div>

                <div class="flex flex-col gap-1">
                    <label for="confirm_password" class="text-xs font-light text-gray-600">CONFIRM PASSWORD</label>
                    <span class="w-full relative">
                        <input type="password" name="confirm_password" id="confirm_password" placeholder="Re-type Password" class="w-full tracking-widest appearance-none transition duration-300 ease-in-out bg-gray-50 focus:outline-none focus:bg-white px-3 py-2 text-xs border border-transparent focus:border-indigo-500 rounded-sm placeholder-gray-500 text-gray-800" x-bind:type="confirm?'text':'password'" />
                        <span class="transition duration-300 ease-in-out absolute inset-y-0 right-0 flex items-center justify-center w-10 text-gray-400 hover:text-gray-600 cursor-pointer" x-on:click="confirm=!confirm">
                            <i class="far" x-bind:class="{'fa-eye':!confirm, 'fa-eye-slash':confirm}"></i>
                        </span>
                    </span>
                    </span>
                </div>

                <div>
                    <button type="submit" name="register" class="tracking-widest transition duration-300 ease-in-out bg-indigo-400 hover:bg-indigo-500 shadow-sm hover:shadow-lg font-semibold px-3 py-2 rounded-sm text-xs text-gray-50">
                        CREATE ACCOUNT
                    </button>
                </div>

            </form>
            <!-- /Create account form -->

        </div>

    </div>

</section>
