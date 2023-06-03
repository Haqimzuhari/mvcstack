// Dont resend form
if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}

var password_inputs = document.querySelectorAll('input[type="password"]')