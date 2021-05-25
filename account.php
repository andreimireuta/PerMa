<!DOCTYPE html>
<?php
session_start();
$mysql = new mysqli (
	'localhost', // locatia serverului (aici, masina locala)
	'root',       // numele de cont
	'',    // parola (atentie, in clar!)
	'parfumes'   // baza de date
	);

// verificam daca am reusit
if (mysqli_connect_errno()) {
	die ('ERROR: Could not connect.');
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/account.css">
    <link rel="stylesheet" href="styles/shop.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="styles/account.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <title>Account</title>
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
                <i class="fas fa-search"></i>
                <a href="shop.php">Shop</a>
            </li>
            <li>
                <i class="fas fa-user"></i>
                <a href="account.php" id="account-link">
                    <?php 
                    
                    if(isset($_COOKIE['userName']) && !empty($_COOKIE['userName']))
                        echo('Hi, '.$_COOKIE['userName']);
                    else{
                        echo('<a href="login.php">Sign in</a>');
                        
                        //header('location: login.php');
                    }
                    ?>
                </a>
            </li>
            <li>
                <i class="fas fa-shopping-cart"></i>
                <a href="cart.php" id="cart-link">Cart</a>
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
    <div class="container-principal">
        <div class="navigation-ul">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-user-circle"></i></span>
                        <span class="title">Account details</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-heart"></i></span>
                        <span class="title">Favourite list</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-lock"></i></span>
                        <span class="title">Change password</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-envelope"></i></span>
                        <span class="title">Change email</span>
                    </a>
                </li>
                <li>
                    <form method="POST">
                        <a href="#">
                            <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
                            <span class="title"><button name="log_out" class="log_out">Sign out</button></span>
                        </a>
                    </form>
                </li>
            </ul>
        </div>
        <div class="mainc">
        

        </div>
    </div>

    <script src="js_scripts/account.js"></script>
    <script src="js_scripts/shop.js"></script>
</body>

</html>
<?php
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if( isset($_POST['log_out'])){
			setcookie("userName", "", time()+(86400*30), "/");

			Header('Location: login.php');
		}
	// } 
?>