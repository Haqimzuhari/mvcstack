<?php
class Dashboard extends Controller
{
    public function __construct()
    {
        if (!auth()->check()) return redirect(DEFAULT_NON_AUTH_ROUTE);
    }
    
    public function Index()
    {
        $this->view('dashboard.index');
    }
}