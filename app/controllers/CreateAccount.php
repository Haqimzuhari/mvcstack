<?php

class CreateAccount extends Controller
{
    public function __construct()
    {
        if(auth()) return redirect(DEFAULT_AUTH_ROUTE);
    }
    
    public function Index()
    {
        $this->view('authentication.create-account');
    }
}