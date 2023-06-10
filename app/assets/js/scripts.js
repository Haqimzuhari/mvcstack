// Dont resend form
if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}

function previewImage (event) {
    var reader = new FileReader();
    reader.onload = function(){
        var output = document.getElementById('dp-preview');
        output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
}