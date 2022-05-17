<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InstaKilogram</title>
    <link rel="stylesheet" href="login.css">
    <script src="https://kit.fontawesome.com/67c66657c7.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/logo.png" alt="logo">
            <h2>InstaKilogram</h2>
        </div>
        
        <div class="navi">
            <div class="search_box">
                <input type="search" placeholder="Search...">
                <span class="fa fa-search"></span>
            </div>
            <a href="form1.html"><button class="button">Sign Up</button></a>
            <a href="admin_login.html"><button class="button">Admin</button></a>
        </div>
    </header>
    
    <main>
        <div class="background">
            <div class="banner">
                <img src="img/banner.png" alt="background">
                <p>InstaKilogram is a space where you can share your moments.</p>
            </div>

            <div class="login">
                <form action="user.php" method="post">
                    <div class="login-form">
                        <h3 class="title">Sign In</h3>
                        <div class="input-box">
                            <span class="field">User name/ Email</span>
                            <input type="text" placeholder="Enter your email address" required>
                        </div>
                        <div class="input-box">
                            <span class="field">Password</span>
                            <input type="password" placeholder="Enter your password" required>
                        </div>
                            <input id="btn" type="submit" name="sign-in" value="Sign In" />
                </form>
            </div>
        </div>
    </main>
    <div class="guest-skip">
        <a href="guest.html"><p>Skip for Guest</p></a>
        <span class="fa fa-chevron-right"></span>
    </div>
    <footer class="footers">
        <div class="footer-left">
            <h3>Insta<span>Kilogram</span></h3>
    
            <p class="footer-links">
                <a href="#">Home</a>/
                <a href="about.html">About</a>/
                <a href="help.html">Help</a>/
                <a href="policy.html">Privay Policy</a>
            </p>
    
            <p class="footer-company-name">Copyright © 2022 <strong>InstaKilogram</strong> All rights reserved</p>
        </div>
    
        <div class="footer-right">
            <p class="footer-company-about">
                <span>About our product</span>
                <strong>InstaKilogram</strong> is a public platform that provide amazing trials for users.
            </p>
        </div>
    </footer>
</body>
</html>
