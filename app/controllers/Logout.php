<?php
class Logout extends Controller
{
    public function Index() {
        auth()->close();
        return redirect(DEFAULT_NON_AUTH_ROUTE);
    }
}