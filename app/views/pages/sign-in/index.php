<?php $layout = new Elem('layout.base') ?>
    <main class="flex items-center justify-center min-h-screen">
        <div class="w-full max-w-sm px-8 space-y-4">
            <div>
                <img src="<?= asset("images/sign-in.png") ?>" />
            </div>
            <div>
                <p class="text-3xl font-black"><?= TITLE ?></p>
                <p class="text-xl font-medium">Sign-in to continue</p>
            </div>
            <form method="post" class="space-y-6">
                <div class="space-y-2">
                    <div>
                        <label for="email" class="input-label">Email address</label>
                        <input type="email" name="email" id="email" placeholder="Registered email address" class="input-field" required />
                    </div>
                    <div>
                        <label for="password" class="input-label">Password</label>
                        <input type="password" name="password" id="password" class="input-field" required />
                    </div>
                </div>
                <button type="submit" name="sign_in" class="button-primary w-full text-sm font-semibold">Sign-in</button>
            </form>
            <div>
                <p class="text-sm">Forgot password? <a href="<?= route("reset-password") ?>" class="text-zinc-900 transition hover:text-zinc-700 underline decoration-2 font-semibold">Reset password here</a></p>
                <p class="text-sm">Don't have an account? <a href="<?= route("sign-up") ?>" class="text-zinc-900 transition hover:text-zinc-700 underline decoration-2 font-semibold">Sign-up here</a></p>
            </div>
        </div>
    </main>
<?php $layout->close() ?>