<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/login.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="styles/login.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <title>Login Page</title>
</head>

<body>
    <div class="form-box">
        <div class="button-box">
            <div id="button"></div>
            <button type="button" class="toggle-button" onclick="login()">Log In</button>
            <button type="button" class="toggle-button" onclick="register()" >Register</button>
        </div>

        <form class="input-group" action="php_scripts/loginProcess.php"  id="login" method="POST">
            
            <div class="input">
                <i class="fas fa-user" aria-hidden="false"></i>
                <input type="text" name="username" class="input-field" placeholder="Username" required>
            </div>
            <div class="input">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" class="input-field" placeholder="Enter Password" required>
            </div>

            <label for="checkbox" class="remember-me">Remember me</label>
            <input type="checkbox"  class="checkbox-button" name="checkbox">

            <button type="submit" class="submit-button" name="login">Login</button>

        </form>

        <form class="input-group" action="php_scripts/registerProcess.php"  id="register" method="POST">
            <div class="input">
                <i class="fas fa-user" aria-hidden="false"></i>
                <input type="text" class="input-field" placeholder="Username" name="username" required>
            </div>
            <div class="input">
                <i class="fas fa-envelope" aria-hidden="false"></i>
                <input type="email" class="input-field" name="email" placeholder="Enter email" required>
            </div>
            <div class="input">
                <i class="fas fa-lock"></i>
                <input type="password" class="input-field" name="password" placeholder="Enter Password" required>
            </div>

            <label for="checkbox" class="remember-me">I agree to the terms & conditions</label>
            <input type="checkbox" class="checkbox-button" name="checkbox">
            <button type="submit" class="submit-button" name="register">Register</button>

        </form>
    </div>

    <script>
        var alegere1 = document.getElementById("login");
        var alegere2 = document.getElementById("register");
        var alegere3 = document.getElementById("button");

        function register(){
            alegere1.style.left = "-400px";
            alegere2.style.left = "50px";
            alegere3.style.left = "120px";
            
        }
        function login(){
            alegere1.style.left = "50px";
            alegere2.style.left = "450px";
            alegere3.style.left = "0px";
        }
    </script>
    <div class="registerErrors">
        <?php
        include('php_scripts/registerErrors.php');
        include('php_scripts/registerProcess.php');
    ?>
    </div>
    
</body>
</html>