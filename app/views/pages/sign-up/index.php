<?php $layout = new Elem('layout.base') ?>
<main class="flex items-center justify-center min-h-screen">
        <div class="w-full max-w-sm px-8 space-y-4">
            <div>
                <img src="<?= asset("images/sign-up.png") ?>" />
            </div>
            <div>
                <p class="text-3xl font-semibold"><?= TITLE ?></p>
                <p class="text-2xl font-medium">Sign-up with us</p>
            </div>
            <form method="post" class="space-y-6">
                <div class="space-y-2">
                    <div>
                        <label for="name" class="block text-sm leading-6 text-neutral-500">Name</label>
                        <input type="text" name="name" id="name" placeholder="Your full name" class="block text-sm w-full px-4 py-2.5 placeholder-gray-300 transition bg-zinc-50 border rounded-xl outline-none appearance-none focus:ring-4 focus:bg-white hover:bg-white border-zinc-300 hover:border-zinc-600 focus:border-indigo-600 focus:ring-indigo-200" required />
                    </div>
                    <div>
                        <label for="email" class="block text-sm leading-6 text-neutral-500">Email address</label>
                        <input type="email" name="email" id="email" placeholder="Valid email address" class="block text-sm w-full px-4 py-2.5 placeholder-gray-300 transition bg-zinc-50 border rounded-xl outline-none appearance-none focus:ring-4 focus:bg-white hover:bg-white border-zinc-300 hover:border-zinc-600 focus:border-indigo-600 focus:ring-indigo-200" required />
                    </div>
                    <div>
                        <label for="password" class="block text-sm leading-6 text-neutral-500">Password</label>
                        <input type="password" name="password" id="password" class="block text-sm w-full px-4 py-2.5 placeholder-gray-300 transition bg-zinc-50 border rounded-xl outline-none appearance-none focus:ring-4 focus:bg-white hover:bg-white border-zinc-300 hover:border-zinc-600 focus:border-indigo-600 focus:ring-indigo-200" required />
                    </div>
                    <div>
                        <label for="password_confirmation" class="block text-sm leading-6 text-neutral-500">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="block text-sm w-full px-4 py-2.5 placeholder-gray-300 transition bg-zinc-50 border rounded-xl outline-none appearance-none focus:ring-4 focus:bg-white hover:bg-white border-zinc-300 hover:border-zinc-600 focus:border-indigo-600 focus:ring-indigo-200" required />
                    </div>
                </div>
                <button type="submit" name="sign_up" class="px-4 py-2.5 text-center text-white transition rounded-xl bg-zinc-800 hover:bg-zinc-700 w-full text-sm font-semibold">Sign-up</button>
            </form>
            <p class="text-sm">Had an account? <a href="<?= route("sign-in") ?>" class="text-zinc-900 transition hover:text-zinc-700 underline decoration-2 font-semibold">Sign-in here</a></p>
        </div>
    </main>
<?php $layout->close() ?>