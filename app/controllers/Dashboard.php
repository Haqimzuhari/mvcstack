<?php

class Dashboard extends Controller
{
    public function __construct()
    {
        if (!auth()) return redirect(DEFAULT_NON_AUTH_ROUTE);
        $this->Database = new Database;
    }
    
    public function Index()
    {
        $this->view('dashboard');
    }
}