<section class="min-h-screen flex-center p-4 bg-cover" style="background-image:url('https://images.unsplash.com/photo-1618367588411-d9a90fefa881?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1974&q=80')">
    <div class="py-12 px-8 rounded-2xl shadow-2xl backdrop-blur-md bg-white/30 w-full max-w-sm flex flex-col space-y-8">
        <div>
            <p class="text-2xl font-semibold">Sign-in</p>
            <p class="text-sm text-gray-500">Please sign-in to continue.</p>
        </div>

        <form method="post" class="grid gap-4">
            <div class="form">
                <div class="form-input-group">
                    <input type="email" name="email" class="form-input primary p-3" placeholder="Email Address" value="<?=$this->email?>" required/>
                </div>
            </div>

            <div class="form">
                <div class="form-input-group">
                    <input type="password" name="password" class="form-input primary p-3" placeholder="Password" required/>
                </div>
            </div>

            <button type="submit" name="login" class="btn btn-primary w-full py-3">Sign In</button>
        </form>

        <div class="flex flex-col items-center space-y-4">
            <a href="#" class="text-xs text-gray-500 link-primary">Forgot Password?</a>
            <hr class="w-full border-gray-300">
            <a href="<?=route('create-account')?>" class="text-xs text-gray-500 link-primary">Don't have an account? Create an account</a>
        </div>
    </div>
</section>