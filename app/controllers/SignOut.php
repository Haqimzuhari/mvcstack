<?php
class SignOut extends Controller
{
    public function Index() {
        if (request()->has('sign_out')) {
            auth()->close();
            return redirect(DEFAULT_NON_AUTH_ROUTE);
        }
    }
}