<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/login.css">
    <link rel="stylesheet" href="styles/">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="styles/loginadmin.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <title>Login Page</title>
</head>

<body>
    <div class="form-box">
        <div class="button-box">
            <h3 class="toggle-button-adm">Admin Log In</h3> 
        </div>

        <form class="input-group" action="php_scripts/loginProcess.php"  id="login" method="POST">
            
            <div class="input">
                <i class="fas fa-user" aria-hidden="false"></i>
                <input type="text" name="username" class="input-field" placeholder=" Admin username" required>
            </div>
            <div class="input">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" class="input-field" placeholder="Admin Password" required>
            </div>

            <button type="submit" class="submit-button-adm" name="login">Login</button>

        </form>
    </div>

    
    <div class="registerErrors">
        <?php
       //include('php_scripts/registerErrors.php');
        include('php_scripts/registerProcess.php');
    ?>
    </div>
    
</body>
</html>