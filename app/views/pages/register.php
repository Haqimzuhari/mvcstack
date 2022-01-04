<section class="min-h-screen grid place-items-center">
    <div class="w-full max-w-md bg-white rounded-lg shadow-xl p-8 grid grid-cols-1 gap-8">
        <div>
            <h1 class="font-bold text-2xl">Register</h1>
        </div>

        <div class="flex space-x-2 text-sm">
            <p>Already have an account?</p>
            <a href="<?= route('login') ?>" class="text-blue-600 hover:text-blue-500 transition duration-300 ease-in-out">Login Here</a>
        </div>

        <form method="post" action="<?=route('register')?>" class="grid grid-cols-1 gap-8">
            <div class="grid grid-cols-1 gap-3">
                <div class="grid grid-cols-1">
                    <label>Email Address</label>
                    <input type="email" name="email_address" value="<?= $this->email_address ?? '' ?>" class="appearance-none py-2 px-4 bg-zinc-100 border border-zinc-100 rounded hover:bg-white transition duration-300 ease-in-out"/>
                </div>
    
                <div class="grid grid-cols-1">
                    <label>Password</label>
                    <input type="password" name="password" class="appearance-none py-2 px-4 bg-zinc-100 border border-zinc-100 rounded hover:bg-white transition duration-300 ease-in-out"/>
                </div>
    
                <div class="grid grid-cols-1">
                    <label>Confirm Password</label>
                    <input type="password" name="password_confirmation" class="appearance-none py-2 px-4 bg-zinc-100 border border-zinc-100 rounded hover:bg-white transition duration-300 ease-in-out"/>
                </div>
            </div>

            <div class="grid grid-cols-1">
                <button type="submit" name="register" class="py-2 text-center bg-blue-200 text-blue-800 hover:bg-blue-300 transition duration-300 ease-in-out focus:outline-none font-bold rounded">Register</button>
            </div>
        </form>
    </div>
</section>
