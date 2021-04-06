<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="styles/thankyou.css">
    <link rel="stylesheet" href="styles/home.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="styles/thankyou.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <title>Home</title>
</head>

<body>
    <nav class="navbar">

        <div class="logo" id="logo">
                <img src="images/fragrance.png" alt="" class="logo-img">
                <h4 class="logo-title">FIN</h4>
            
        </div>
        <ul class="nav-links">
            <li>
                <i class="fas fa-home"></i>
                <a href="home.php">Home</a>
            </li>
            <li>
                <i class="fas fa-user"></i>
                <a href="" id="account-link">Account</a>
                <div id="account-show">
                    <a href="#" id="sign-out">Sign out</a>
                </div>
            </li>
            <li>
                <i class="fas fa-shopping-cart"></i>
                <a href="" id="cart-link">Cart</a>
                <div id="cart-show">

                </div>
            </li>
        </ul>
        <div class="burger-menu">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>

    </nav>


    <div class="main-container">
       <h2>Thank you for purchasing from our website</h2>
       <p>Your order had been received. Please check the email for more details about the shipping process</p>
       <a href="home.php">Back in the shop</a>
    </div>
    

    <script src="js_scripts/thankyou.js"></script>
    <script src="js_scripts/home.js"></script>
</body>

</html>