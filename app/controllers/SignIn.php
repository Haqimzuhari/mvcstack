<?php
class SignIn extends Controller
{
    public function __construct()
    {
        if (auth()->check()) return redirect(DEFAULT_AUTH_ROUTE);
    }
    
    public function Index()
    {
        if (request()->has('sign_in')) {
            if (auth()->attempt(request()->only(['email', 'password']))) {
                return redirect('');
            }
        }

        $this->view('authentication.sign-in');
    }
}