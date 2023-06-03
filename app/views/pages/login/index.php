<?php $layout = new Elem('layout.base') ?>
    <main class="h-screen flex-center">
        <div class="bg-white p-10 flex-col-center rounded-2xl space-y-8 shadow-lg w-full max-w-md">
            <div class="w-10/12 space-y-3">
                <h3 class="text-center text-3xl font-bold">Login Account</h3>
                <h5 class="text-center">Enter your account details to get sign in to your account</h5>
            </div>

            <form method="post" class="w-full space-y-10">
                <div class="flex-col-center space-y-4">
                    <div class="flex-col-default w-full space-y-1">
                        <label for="email" class="text-sm font-semibold">Email Address *</label>
                        <input type="email" name="email" id="email" class="form-control text-sm px-4 py-2 rounded" required/>
                    </div>

                    <div class="flex-col-default w-full space-y-1">
                        <label for="password" class="text-sm font-semibold">Password *</label>
                        <input type="password" name="password" id="password" class="form-control text-sm px-4 py-2 rounded" required/>
                    </div>

                    <p class="text-sm">Having trouble to login? <a href="<?=route('reset-password')?>" class="link-primary">Reset your password</a></p>
                </div>
                <div class="flex-col-center space-y-2">
                    <button type="submit" name="login" class="btn-primary px-4 py-2 w-full text-sm">Login</button>
                    <p class="text-sm">Or need an account? <a href="<?=route('register')?>" class="link-primary">Register now</a></p>
                </div>
            </form>
        </div>
    </main>
<?php $layout->close() ?>