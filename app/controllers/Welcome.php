<?php

class Welcome extends Controller
{
    public function __construct()
    {
        //
    }
    
    public function index()
    {
        $this->view('welcome');
    }
}