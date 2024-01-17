<?php
class Profile extends Controller
{
    public function __construct() {
        if (!auth()->check()) return redirect(DEFAULT_NON_AUTH_ROUTE);
    }
    
    public function Index() {
        if (request()->has('update_email')) {
            $validate = request()->validate([
                'email' => 'unique:UserModel,email',
            ]);

            if ($validate) {
                UserModel::where('id', auth()->user()->id)->update(['email'=>request()->input('email')])->save();
                Toast::flash('success', 'Account updated');
            }
        }

        if (request()->has('update_password')) {
            $validate = request()->validate([
                'new_password' => 'confirm:new_password_confirmation',
            ]);

            if ($validate) {
                UserModel::where('id', auth()->user()->id)->update(['password'=>md5(request()->input('new_password'))])->save();
                Toast::flash('success', 'Account updated');
            }
        }

        if (request()->has('update_personal')) {
            $personal_inputs = request()->only('name');
            ProfileModel::where('user_id', auth()->user()->id)->update($personal_inputs)->save();
            Toast::flash('success', 'Personal details updated');
        }

        if (request()->has('update_profile_picture')) {
            $profile_picture_input = request()->input('profile_picture');
            $save_to = storage_folder("dp");
            $picture_tmp = $profile_picture_input["tmp_name"];
            $picture_name = auth()->user()->id . "_" . uniqid() . "_" . basename($profile_picture_input["name"]);
            $save_file_fullpath = $save_to . DS . $picture_name;
            try {
                move_uploaded_file($picture_tmp, $save_file_fullpath);
                if (auth()->user()->profile->picture != "" and file_exists($save_to . DS . auth()->user()->profile->picture)) unlink($save_to . DS . auth()->user()->profile->picture);
                ProfileModel::where("user_id", auth()->user()->id)->update([
                    "picture" => $picture_name,
                ])->save();
                Toast::flash("success", "Profile picture updated");
            } catch (Exception $e) {
                Toast::flash("danger", "Failed to update profile picture");
            }
        }
        
        $this->view('profile.index', [
            'user' => UserModel::where('id', auth()->user()->id)->first()
        ]);
    }
}