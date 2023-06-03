<?php $layout = new Elem('layout.base') ?>
    <main class="h-screen flex-center">
        <div class="bg-white p-10 flex-col-center rounded-2xl space-y-8 shadow-lg w-full max-w-md">
            <div class="w-10/12 space-y-3">
                <h3 class="text-center text-3xl font-bold">Reset Password</h3>
                <h5 class="text-center">Enter your account details so we can track and make changes</h5>
            </div>

            <form method="post" class="w-full space-y-10">
                <div class="flex-col-center space-y-4">
                    <div class="flex-col-default w-full space-y-1">
                        <label for="email" class="text-sm font-semibold">Email Address *</label>
                        <input type="email" name="email" id="email" class="form-control text-sm px-4 py-2 rounded" required/>
                    </div>

                    <div class="flex-col-default w-full space-y-1">
                        <label for="new_password" class="text-sm font-semibold">New Password *</label>
                        <input type="password" name="new_password" id="new_password" class="form-control text-sm px-4 py-2 rounded" required/>
                    </div>

                    <div class="flex-col-default w-full space-y-1">
                        <label for="new_password_confirmation" class="text-sm font-semibold">Re-type New Password *</label>
                        <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="form-control text-sm px-4 py-2 rounded" required/>
                    </div>
                </div>
                <div class="flex-col-center space-y-2">
                    <button type="submit" name="reset" class="btn-primary px-4 py-2 w-full text-sm">Reset</button>
                    <p class="text-sm">Remember your account? <a href="<?=route('login')?>" class="link-primary">Login now</a></p>
                </div>
            </form>
        </div>
    </main>
<?php $layout->close() ?>