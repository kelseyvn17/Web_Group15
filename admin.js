function validate()
{
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    if (username == 'admin' && password == 'admin123')
    {
        window.location="cookie.html";
        return false;
    }
    else{
        alert("login failed");
    }
}
