<?php
    //     --------------------Aici am vrut sa incerc sa nu las userul sa intre in homepage daca nu e logat
    //include('php_scripts/loginProcess.php');
   // if(empty($_SESSION['username'])){
      //  header('location: loginProcess');
    //}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="styles/shop.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="styles/shop.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
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
                <a href="" id="account-link">Account</a>
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


    <div class="container-poze">
       <h1>Parfumuri pentru femei</h1>
       <div class="row">
           <div class="container-produs">
               <div class="produs">
               <a href="product.php"><img src="images/image_wallpaper1.jpg" alt=""></a> 
                    <div class="overlay"> 
                        <button type="button" class="button-produs WatchList" title="WatchList"><i class="fa fa-eye" onclick="MyFunction()" id="fa-eye"></i></button>
                        <button type="button" class="button-produs like unlike" title="FavoriteList"><i class="fa fa-heart" onclick="this.style.color='red'"></i></button>
                        <button type="button" class="button-produs" title="Quick Shop"><i class="fa fa-shopping-cart"></i></button>
                    </div>
               </div>
               <div class="produs-info">
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star-half"></i>
                   <h2>Parfum dama Versace</h2>
                   <h3>$500.00</h3>
               </div>
           </div>
           <div class="container-produs">
               <div class="produs">
               <a href="product.php"><img src="images/image_wallpaper1.jpg" alt=""></a> 
                    <div class="overlay"> 
                        <button type="button" class="button-produs WatchList" title="WatchList"><i onmouseover="this.style.color='black'" onmouseout="this.style.color='white'" class="fa fa-eye"></i></button>
                        <button type="button" class="button-produs like unlike" title="FavoriteList"><i class="fa fa-heart"></i></button>
                        <button type="button" class="button-produs" title="Quick Shop"><i class="fa fa-shopping-cart"></i></button>
                    </div>
               </div>
               <div class="produs-info">
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star-half"></i>
                   <h2>Parfum dama Versace</h2>
                   <h3>$500.00</h3>
               </div>
           </div>
           <div class="container-produs">
               <div class="produs">
               <a href="product.php"><img src="images/image_wallpaper1.jpg" alt=""></a> 
                    <div class="overlay"> 
                        <button type="button" class="button-produs" title="WatchList"><i class="fa fa-eye"></i></button>
                        <button type="button" class="button-produs like unlike" title="FavoriteList"><i class="fa fa-heart"></i></button>
                        <button type="button" class="button-produs" title="Quick Shop"><i class="fa fa-shopping-cart"></i></button>
                    </div>
               </div>
               <div class="produs-info">
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star-half"></i>
                   <h2>Parfum dama Versace</h2>
                   <h3>$500.00</h3>
               </div>
           </div>
           <div class="container-produs">
               <div class="produs">
               <a href="product.php"><img src="images/image_wallpaper1.jpg" alt=""></a> 
                    <div class="overlay"> 
                        <button type="button" class="button-produs" title="WatchList"><i class="fa fa-eye"></i></button>
                        <button type="button" class="button-produs" title="FavoriteList"><i class="fa fa-heart"></i></button>
                        <button type="button" class="button-produs" title="Quick Shop"><i class="fa fa-shopping-cart"></i></button>
                    </div>
               </div>
               <div class="produs-info">
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star-half"></i>
                   <h2>Parfum dama Versace</h2>
                   <h3>$500.00</h3>
               </div>
           </div>
           <div class="container-produs">
               <div class="produs">
               <a href="product.php"><img src="images/image_wallpaper1.jpg" alt=""></a> 
                    <div class="overlay"> 
                        <button type="button" class="button-produs" title="WatchList"><i class="fa fa-eye"></i></button>
                        <button type="button" class="button-produs" title="FavoriteList"><i class="fa fa-heart"></i></button>
                        <button type="button" class="button-produs" title="Quick Shop"><i class="fa fa-shopping-cart"></i></button>
                    </div>
               </div>
               <div class="produs-info">
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star-half"></i>
                   <h2>Parfum dama Versace</h2>
                   <h3>$500.00</h3>
               </div>
           </div>
           <div class="container-produs">
               <div class="produs">
               <a href="product.php"><img src="images/image_wallpaper1.jpg" alt=""></a> 
                    <div class="overlay"> 
                        <button type="button" class="button-produs" title="WatchList"><i class="fa fa-eye"></i></button>
                        <button type="button" class="button-produs" title="FavoriteList"><i class="fa fa-heart"></i></button>
                        <button type="button" class="button-produs" title="Quick Shop"><i class="fa fa-shopping-cart"></i></button>
                    </div>
               </div>
               <div class="produs-info">
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star-half"></i>
                   <h2>Parfum dama Versace</h2>
                   <h3>$500.00</h3>
               </div>
           </div>
           <div class="container-produs">
               <div class="produs">
               <a href="product.php"><img src="images/image_wallpaper1.jpg" alt=""></a> 
                    <div class="overlay"> 
                        <button type="button" class="button-produs" title="WatchList"><i class="fa fa-eye"></i></button>
                        <button type="button" class="button-produs" title="FavoriteList"><i class="fa fa-heart"></i></button>
                        <button type="button" class="button-produs" title="Quick Shop"><i class="fa fa-shopping-cart"></i></button>
                    </div>
               </div>
               <div class="produs-info">
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star-half"></i>
                   <h2>Parfum dama Versace</h2>
                   <h3>$500.00</h3>
               </div>
           </div>
           <div class="container-produs">
               <div class="produs">
               <a href="product.php"><img src="images/image_wallpaper1.jpg" alt=""></a> 
                    <div class="overlay"> 
                        <button type="button" class="button-produs" title="WatchList"><i class="fa fa-eye"></i></button>
                        <button type="button" class="button-produs" title="FavoriteList"><i class="fa fa-heart"></i></button>
                        <button type="button" class="button-produs" title="Quick Shop"><i class="fa fa-shopping-cart"></i></button>
                    </div>
               </div>
               <div class="produs-info">
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star-half"></i>
                   <h2>Parfum dama Versace</h2>
                   <h3>$500.00</h3>
               </div>
           </div> <div class="container-produs">
               <div class="produs">
               <a href="product.php"><img src="images/image_wallpaper1.jpg" alt=""></a> 
                    <div class="overlay"> 
                        <button type="button" class="button-produs" title="WatchList"><i class="fa fa-eye"></i></button>
                        <button type="button" class="button-produs" title="FavoriteList"><i class="fa fa-heart"></i></button>
                        <button type="button" class="button-produs" title="Quick Shop"><i class="fa fa-shopping-cart"></i></button>
                    </div>
               </div>
               <div class="produs-info">
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star-half"></i>
                   <h2>Parfum dama Versace</h2>
                   <h3>$500.00</h3>
               </div>
           </div>
           <div class="container-produs">
               <div class="produs">
               <a href="product.php"><img src="images/image_wallpaper1.jpg" alt=""></a> 
                    <div class="overlay"> 
                        <button type="button" class="button-produs" title="WatchList"><i class="fa fa-eye"></i></button>
                        <button type="button" class="button-produs" title="FavoriteList"><i class="fa fa-heart"></i></button>
                        <button type="button" class="button-produs" title="Quick Shop"><i class="fa fa-shopping-cart"></i></button>
                    </div>
               </div>
               <div class="produs-info">
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star-half"></i>
                   <h2>Parfum dama Versace</h2>
                   <h3>$500.00</h3>
               </div>
           </div>
           <div class="container-produs">
               <div class="produs">
               <a href="product.php"><img src="images/image_wallpaper1.jpg" alt=""></a>    
                    <div class="overlay"> 
                        <button type="button" class="button-produs" title="WatchList"><i class="fa fa-eye"></i></button>
                        <button type="button" class="button-produs" title="FavoriteList"><i class="fa fa-heart"></i></button>
                        <button type="button" class="button-produs" title="Quick Shop"><i class="fa fa-shopping-cart"></i></button>
                    </div>
               </div>
               <div class="produs-info">
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star-half"></i>
                   <h2>Parfum dama Versace</h2>
                   <h3>$500.00</h3>
               </div>
           </div>
           
           <br>


           <h1>Parfumuri pentru barbati</h1>
          

       </div>
    </div>

    

    <script src="js_scripts/shop.js">

    </script>
</body>

</html>