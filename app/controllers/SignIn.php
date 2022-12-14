<?php

class SignIn extends Controller
{
    public function __construct()
    {
        if (auth()) return redirect(DEFAULT_AUTH_ROUTE);
    }
    
    public function Index()
    {
        dd(UserModel::where('id', 1)->first());
        $this->view('authentication.sign-in');
    }
}