<?php

class Logout extends Controller
{
    public function __construct()
    {
        //
    }
    
    public function index()
    {
        if(Auth::close() == true) {
            
            return redirect('');
        }
    }
}