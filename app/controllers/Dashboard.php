<?php

class Dashboard extends Controller
{
    public function __construct()
    {
        if(auth() == false) {

            return redirect('login');
        }

        $this->Database = new Database;
        $this->layout = "auth";
    }
    
    public function index()
    {
        $this->title = "Dashboard &mdash; " . TITLE;
        $this->view('dashboard');
    }
}