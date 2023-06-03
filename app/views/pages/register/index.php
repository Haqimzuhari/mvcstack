<?php $layout = new Elem('layout.base') ?>
    <main class="h-screen flex-center">
        <div class="bg-white p-10 flex-col-center rounded-2xl space-y-8 shadow-lg w-full max-w-md">
            <div class="w-10/12 space-y-3">
                <h3 class="text-center text-3xl font-bold">Register Account</h3>
                <h5 class="text-center">Please fill all these information to create a new account</h5>
            </div>

            <form method="post" class="w-full space-y-10">
                <div class="flex-col-center space-y-4">
                    <div class="flex-col-default w-full space-y-1">
                        <label for="email" class="text-sm font-semibold">Email Address *</label>
                        <input type="email" name="email" id="email" class="form-control text-sm px-4 py-2 rounded" required/>
                    </div>

                    <div class="flex-col-default w-full space-y-1">
                        <label for="first_name" class="text-sm font-semibold">First Name *</label>
                        <input type="text" name="first_name" id="first_name" class="form-control text-sm px-4 py-2 rounded" required/>
                    </div>

                    <div class="flex-col-default w-full space-y-1">
                        <label for="last_name" class="text-sm font-semibold">Last Name *</label>
                        <input type="text" name="last_name" id="last_name" class="form-control text-sm px-4 py-2 rounded" required/>
                    </div>

                    <div class="flex-col-default w-full space-y-1">
                        <label for="password" class="text-sm font-semibold">Password *</label>
                        <input type="password" name="password" id="password" class="form-control text-sm px-4 py-2 rounded" required/>
                    </div>

                    <div class="flex-col-default w-full space-y-1">
                        <label for="password_confirmation" class="text-sm font-semibold">Re-type Password *</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control text-sm px-4 py-2 rounded" required/>
                    </div>
                </div>
                <div class="flex-col-center space-y-2">
                    <button type="submit" name="register" class="btn-primary px-4 py-2 w-full text-sm">Register</button>
                    <p class="text-sm">Already have an account? <a href="<?=route('login')?>" class="link-primary">Login now</a></p>
                </div>
            </form>
        </div>
    </main>
<?php $layout->close() ?>