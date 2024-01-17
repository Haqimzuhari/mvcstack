<?php $layout = new Elem('layout.base') ?>
<main class="flex items-center justify-center min-h-screen">
    <div class="w-full max-w-sm px-8 space-y-4">
        <div>
            <img src="<?= asset("images/reset-password.png") ?>" />
        </div>
        <div>
            <p class="text-3xl font-black"><?= TITLE ?></p>
            <p class="text-xl font-medium">Reset Password</p>
        </div>
        <form method="post" class="space-y-6">
            <div class="space-y-2">
                <div>
                    <label for="email" class="input-label">Email address</label>
                    <input type="email" name="email" id="email" placeholder="Valid email address" class="input-field" required />
                </div>
                <div>
                    <label for="new_password" class="input-label">New Password</label>
                    <input type="password" name="new_password" id="new_password" class="input-field" required />
                </div>
                <div>
                    <label for="new_password_confirmation" class="input-label">Confirm New Password</label>
                    <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="input-field" required />
                </div>
            </div>
            <button type="submit" name="reset" class="px-4 py-2.5 text-center text-white transition rounded-xl bg-zinc-800 hover:bg-zinc-700 w-full text-sm font-semibold">Reset Password</button>
        </form>
        <p class="text-sm">Had an account? <a href="<?= route("sign-in") ?>" class="text-zinc-900 transition hover:text-zinc-700 underline decoration-2 font-semibold">Sign-in here</a></p>
    </div>
</main>
<?php $layout->close() ?>