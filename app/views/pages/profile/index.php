<?php $layout = new Elem('layout.auth') ?>
    <div class="w-full max-w-screen-lg mx-auto space-y-10">
        <div class="space-y-2">
            <p class="text-lg font-semibold border-b">Account Information</p>
            <div class="space-y-6">
                <form method="post" class="space-y-2">
                    <div class="flex justify-end">
                        <button type="submit" name="update_email" class="px-4 py-2.5 text-center text-white transition rounded-xl bg-zinc-800 hover:bg-zinc-700 text-xs font-semibold">Update</button>
                    </div>
                    <div class="flex items-start">
                        <div class="w-full max-w-md flex-none">
                            <p>Email Address</p>
                            <p class="font-light text-sm">This email being use to login to your account</p>
                        </div>
                        <div class="w-full">
                            <input type="email" name="email" id="email" class="block text-sm w-full px-4 py-2.5 placeholder-gray-300 transition bg-zinc-50 border rounded-xl outline-none appearance-none focus:ring-4 focus:bg-white hover:bg-white border-zinc-300 hover:border-zinc-600 focus:border-indigo-600 focus:ring-indigo-200" placeholder="Email Address" value="<?=$this->user->email?>" required />
                        </div>
                    </div>
                </form>
    
                <form method="post" class="space-y-2">
                    <div class="flex justify-end">
                        <button type="submit" name="update_password" class="px-4 py-2.5 text-center text-white transition rounded-xl bg-zinc-800 hover:bg-zinc-700 text-xs font-semibold">Update</button>
                    </div>
                    <div class="flex items-start">
                        <div class="w-full max-w-md flex-none">
                            <p>Password</p>
                            <p class="font-light text-sm">Update your password regularly</p>
                        </div>
                        <div class="w-full space-y-2">
                            <input type="password" name="new_password" id="new_password" class="block text-sm w-full px-4 py-2.5 placeholder-gray-300 transition bg-zinc-50 border rounded-xl outline-none appearance-none focus:ring-4 focus:bg-white hover:bg-white border-zinc-300 hover:border-zinc-600 focus:border-indigo-600 focus:ring-indigo-200" placeholder="New Password" required/>
                            <input type="password" name="confirm_new_password" id="confirm_new_password" class="block text-sm w-full px-4 py-2.5 placeholder-gray-300 transition bg-zinc-50 border rounded-xl outline-none appearance-none focus:ring-4 focus:bg-white hover:bg-white border-zinc-300 hover:border-zinc-600 focus:border-indigo-600 focus:ring-indigo-200" placeholder="Re-type New Password" required/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        <div class="space-y-2">
            <p class="text-lg font-semibold border-b">Personal Information</p>
            <div class="space-y-6">
                <form method="post" class="space-y-3">
                    <div class="flex justify-end">
                        <button type="submit" name="update_personal" class="px-4 py-2.5 text-center text-white transition rounded-xl bg-zinc-800 hover:bg-zinc-700 text-xs font-semibold">Update</button>
                    </div>
                    <div class="flex items-start">
                        <div class="w-full max-w-md flex-none">
                            <p>Name</p>
                            <p class="font-light text-sm">Update your personal details</p>
                        </div>
                        <div class="w-full">
                            <input type="text" name="name" id="name" class="block text-sm w-full px-4 py-2.5 placeholder-gray-300 transition bg-zinc-50 border rounded-xl outline-none appearance-none focus:ring-4 focus:bg-white hover:bg-white border-zinc-300 hover:border-zinc-600 focus:border-indigo-600 focus:ring-indigo-200" placeholder="First Name" value="<?=$this->user->profile->name?>" required/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $layout->close() ?>

