<?php

class Logout extends Controller
{
    public function Index()
    {
        if (Auth::close() == true) {
            return redirect('');
        }
    }
}