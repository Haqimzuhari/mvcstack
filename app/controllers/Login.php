<?php
class Login extends Controller
{
    public function __construct() {
        if (auth()->check()) return redirect(DEFAULT_AUTH_ROUTE);
    }
    
    public function Index() {
        if (request()->has('login')) {
            if (auth()->attempt(request()->only(['email', 'password']))) {
                return redirect();
            }
        }
        
        $this->view('login.index');
    }
}