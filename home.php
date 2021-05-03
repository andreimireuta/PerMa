<?php
    //     --------------------Aici am vrut sa incerc sa nu las userul sa intre in homepage daca nu e logat
    //include('php_scripts/loginProcess.php');
   // if(empty($_SESSION['username'])){
      //  header('location: loginProcess');
    //}

    error_reporting(0);
    session_start();

    if(!isset($_COOKIE['username']) || empty($_COOKIE['username'])){
        $name = "Welcome";
    }else{
        $name = "Hi, ".$_COOKIE['username'];
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="styles/shop.css">
    <link rel="stylesheet" href="styles/home.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="styles/home.css?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>

    </script>
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
                <i class="fas fa-search"></i>
                <a href="shop.php">Shop</a>
            </li>
            <li>
                <i class="fas fa-user"></i>
                <a href="account.php" id="account-link">Account</a>
                <div id="account-show">
                    <a href="#" class="account-item">WatchList</a>
                    <a href="#" class="account-item">Favourite List</a>
                    <a href="#" class="account-item" id="sign-out">Sign out</a>
                </div>
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

    <div class="banner1">
        <span class="asc">
            <label for="radio1" class="manual-btn">
               <input type="radio" name="radio-btn" id="radio1"> 
            </label>
            
            <label for="radio2" class="manual-btn">
                <input type="radio" name="radio-btn" id="radio2">
            </label>
            
            <label for="radio3" class="manual-btn">
                <input type="radio" name="radio-btn" id="radio3">
            </label>
            
            <label for="radio4" class="manual-btn">
                <input type="radio" name="radio-btn" id="radio4">
            </label>
            
        </span>
        <div id="slide1">
            <img src="images/slider1.jpg" alt="" id="img1">
            <span class="text-box">
               <h1>Parfum barbati</h1> 
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto dolorem cum corrupti tenetur cupiditate vel in tempore, animi ad commodi laboriosam ratione cumque totam. Id, dolorum numquam tempore dicta ipsa dolores accusantium eaque temporibus beatae in blanditiis debitis sint sapiente.
               </p>
            </span>
            
        </div>
        
        <div id="slide2">
            <img src="images/silder2.jpg" alt="" id="img2">
            <span class="text-box">
               <h1>Parfum femei</h1> 
               <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, unde veniam architecto exercitationem corrupti in molestiae sed voluptate. Id odio voluptates incidunt, perspiciatis neque magnam aliquid aut error illum impedit enim molestiae reiciendis optio. Beatae in voluptatum nihil eius ipsa.
               </p>
            </span>
            
        </div>
        <div id="slide3">
            <img src="images/LoginWallpaperFinal.jpg" alt="" id="img3">
            <span class="text-box">
               <h1>cumparar un parfum pentru femei</h1> 
               <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto ea modi eum laudantium cumque labore voluptates recusandae in natus, veniam facere praesentium tenetur. Ex, modi quod hic ab eos minima quam repellat error temporibus inventore officiis! Error ut incidunt quasi rem esse facere laboriosam eos, id dignissimos, neque consectetur tempore.
               </p>
            </span>
            
        </div>
        <div id="slide4">
            <img src="images/login_wallpaper.jpg" alt="" id="img4">
            <span class="text-box">
               <h1>Cumperi un parfum si mai primesti unul</h1> 
               <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores maiores ex sequi, iste necessitatibus at nemo tempora placeat voluptate, omnis quas similique nesciunt earum quibusdam eaque expedita itaque, quos atque repellat. Tempora accusantium laudantium fugiat, aliquid maiores dolor delectus exercitationem? Reprehenderit, architecto voluptatibus! Adipisci saepe deleniti sed recusandae, officia quibusdam?
               </p>
            </span>
            
        </div>
    </div>






    <!--<div class="slider">
        <div class="slides">

            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">

            <div class="slide first">
                <img src="images/slider1.jpg" alt="">
            </div>
            <div class="slide">
                <img src="images/silder2.jpg" alt="">
            </div>
            <div class="slide">
                <img src="images/slider1.jpg" alt="">
            </div>
            <div class="slide">
                <img src="images/silder2.jpg" alt="">
            </div>

        <!--automatic navigation start here

        <div class="nav-auto">
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
            <div class="auto-btn4"></div>
        </div>

        <!--Manual navigation start here

        <div class="nav-man">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
        </div>


       </div>
    </div>-->

    
    <script src="js_scripts/home.js"></script>
    <script src="js_scripts/shop.js"></script>
</body>

</html>