<?php

class Dashboard extends Controller
{
    public function __construct()
    {
        if(auth() == false) return redirect('login');

        $this->Database = new Database;
        $this->layout = "auth";
    }
    
    public function index()
    {
        $this->view('dashboard');
    }
}