<?php $layout = new Elem('layout.auth') ?>
    <div class="space-y-2">
        <section class="bg-white rounded-lg p-4">
            <p class="text-2xl font-bold">Profile</p>
            <p class="font-light">Manage your profile information</p>
        </section>
        
        <section class="bg-white rounded-lg p-4 space-y-10">
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
                            <input type="email" name="email" id="email" class="form-control text-sm px-4 py-2 rounded" placeholder="Email Address" value="<?=$this->user->email?>" required/>
                            <div class="flex justify-end">
                                <button type="submit" name="update_email" class="btn-primary px-4 py-2 text-sm">Update</button>
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
                            <input type="password" name="new_password" id="new_password" class="form-control text-sm px-4 py-2 rounded" placeholder="New Password" required/>
                            <input type="password" name="confirm_new_password" id="confirm_new_password" class="form-control text-sm px-4 py-2 rounded" placeholder="Re-type New Password" required/>
                            <div class="flex justify-end">
                                <button type="submit" name="update_password" class="btn-primary px-4 py-2 text-sm">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="bg-white rounded-lg p-4 space-y-10">
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
                            <input type="text" name="first_name" id="first_name" class="form-control text-sm px-4 py-2 rounded" placeholder="First Name" value="<?=$this->user->profile->first_name?>" required/>
                            <input type="text" name="last_name" id="last_name" class="form-control text-sm px-4 py-2 rounded" placeholder="Last Name" value="<?=$this->user->profile->last_name?>" required/>
                            <div class="flex justify-end">
                                <button type="submit" name="update_personal" class="btn-primary px-4 py-2 text-sm">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $layout->close() ?>

