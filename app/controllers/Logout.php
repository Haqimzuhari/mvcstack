<?php

class Logout extends Controller
{
    public function index()
    {
        if(Auth::close() == true) {
            return redirect('');
        }
    }
}