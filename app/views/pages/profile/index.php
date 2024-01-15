<?php $layout = new Elem('layout.auth', ['page_name'=>'Profile']) ?>
    <div class="space-y-2">
        <section class="bg-white rounded-lg p-4 space-y-10 ring-1 ring-inset ring-zinc-200">
            <div>
                <p class="text-lg font-semibold">Account Information</p>
            </div>

            <div class="space-y-8">
                <div class="flex space-x-2">
                    <div class="w-full max-w-md">
                        <p>Email Address</p>
                        <p class="font-light text-sm">This email being use to login to your account</p>
                    </div>
                    <div class="w-full max-w-lg">
                        <form method="post" class="space-y-3">
                            <input type="email" name="email" id="email" class="block text-sm w-full px-4 py-2.5 placeholder-gray-300 transition bg-zinc-50 border rounded-xl outline-none appearance-none focus:ring-4 focus:bg-white hover:bg-white border-zinc-300 hover:border-zinc-600 focus:border-indigo-600 focus:ring-indigo-200" placeholder="Email Address" value="<?=$this->user->email?>" required />
                            <div class="flex justify-end">
                                <button type="submit" name="update_email" class="px-4 py-2.5 text-center text-white transition rounded-xl bg-zinc-800 hover:bg-zinc-700 text-xs font-semibold">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
    
                <div class="flex space-x-2">
                    <div class="w-full max-w-md">
                        <p>Password</p>
                        <p class="font-light text-sm">Update your password regularly</p>
                    </div>
                    <div class="w-full max-w-lg">
                        <form method="post" class="space-y-3">
                            <input type="password" name="new_password" id="new_password" class="block text-sm w-full px-4 py-2.5 placeholder-gray-300 transition bg-zinc-50 border rounded-xl outline-none appearance-none focus:ring-4 focus:bg-white hover:bg-white border-zinc-300 hover:border-zinc-600 focus:border-indigo-600 focus:ring-indigo-200" placeholder="New Password" required/>
                            <input type="password" name="confirm_new_password" id="confirm_new_password" class="block text-sm w-full px-4 py-2.5 placeholder-gray-300 transition bg-zinc-50 border rounded-xl outline-none appearance-none focus:ring-4 focus:bg-white hover:bg-white border-zinc-300 hover:border-zinc-600 focus:border-indigo-600 focus:ring-indigo-200" placeholder="Re-type New Password" required/>
                            <div class="flex justify-end">
                                <button type="submit" name="update_password" class="px-4 py-2.5 text-center text-white transition rounded-xl bg-zinc-800 hover:bg-zinc-700 text-xs font-semibold">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="bg-white rounded-lg p-4 space-y-10 ring-1 ring-inset ring-zinc-200">
            <div>
                <p class="text-lg font-semibold">Personal Information</p>
            </div>

            <div class="space-y-8">
                <div class="flex space-x-2">
                    <div class="w-full max-w-md">
                        <p>Name</p>
                        <p class="font-light text-sm">Update your personal details</p>
                    </div>
                    <div class="w-full max-w-lg">
                        <form method="post" class="space-y-3">
                            <input type="text" name="first_name" id="first_name" class="block text-sm w-full px-4 py-2.5 placeholder-gray-300 transition bg-zinc-50 border rounded-xl outline-none appearance-none focus:ring-4 focus:bg-white hover:bg-white border-zinc-300 hover:border-zinc-600 focus:border-indigo-600 focus:ring-indigo-200" placeholder="First Name" value="<?=$this->user->profile->name?>" required/>
                            <div class="flex justify-end">
                                <button type="submit" name="update_personal" class="px-4 py-2.5 text-center text-white transition rounded-xl bg-zinc-800 hover:bg-zinc-700 text-xs font-semibold">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- <div class="space-y-8">
                <div class="flex space-x-2">
                    <div class="w-full max-w-md">
                        <p>Profile Picture</p>
                    </div>
                    <div class="w-full max-w-lg flex">
                        <div class="w-1/3 flex-none flex-center">
                            <img src="<?=auth()->default_picture_link()?>" class="w-28 h-28 rounded-full object-cover" id="dp-preview"/>
                        </div>
                        <form method="post" class="w-full space-y-3 flex flex-col" enctype="multipart/form-data">
                            <div class="h-full">
                                <input type="file" name="profile_picture" id="profile_picture" class="form-control text-sm px-4 py-2 rounded" onchange="previewImage(event)" required/>
                            </div>
                            <div class="flex justify-end">
                                <button type="submit" name="update_profile_picture" class="btn-primary px-4 py-2 text-sm">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> -->
        </section>
    </div>
<?php $layout->close() ?>

