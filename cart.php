<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="styles/cart.css">
    <link rel="stylesheet" href="styles/product.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="styles/cart.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
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



    <div class="container-produse">
       <div class="container-produs">
           <div class="imagine-titlu">
                <div class="imagine">
                    <img src="images/login_wallpaper.jpg" alt="">
                </div>
                <span class="info">
                        <p> Ar trebui sa vina titlul si o descirie scurta despre fiecare parfum in parte , ca un fel de mini rezumat al parfumului di nou</p>
                    </span>
           </div>
           <div class="informatii">
           <span class="cantitate">
                    <h3>Cantitate:</h3>
                    <input type="number" name="cantitate" id="cantitate">
                </span>
                <span class="pret-unitar">
                    <h3>Pret unitar:</h3>
                    <p>150.00$</p>
                </span>
                <span class="pret-total">
                    <h3>Pret total:</h3>
                    <p>300.00$</p>
                </span>
           </div>
       </div>
       <div class="container-produs">
            <div class="imagine-titlu">
                <div class="imagine">
                    <img src="images/LoginWallpaperFinal.jpg" alt="">
                </div>
                <span class="info">
                        <p> Ar trebui sa vina titlul si o descirie scurta despre fiecare parfum in parte , ca un fel de mini rezumat al parfumului di nou</p>
                        <br>
                    </span>
           </div>
           <div class="informatii">
                <span class="cantitate">
                    <h3>Cantitate:</h3>
                </span>
                <span class="pret-unitar">
                    <h3>Pret unitar:</h3>
                </span>
                <span class="pret-total">
                    <h3>Pret total:</h3>
                </span>
           </div>
       </div>
       <div class="container-produs">
            <div class="imagine-titlu">
                <div class="imagine">
                    <img src="images/LoginWallpaperFinal.jpg" alt="">
                </div>
                <span class="info">
                        <p> Ar trebui sa vina titlul si o descirie scurta despre fiecare parfum in parte , ca un fel de mini rezumat al parfumului di nou</p>
                        <br>
                    </span>
           </div>
           <div class="informatii">
                <span class="cantitate">
                    <h3>Cantitate:</h3>
                </span>
                <span class="pret-unitar">
                    <h3>Pret unitar:</h3>
                </span>
                <span class="pret-total">
                    <h3>Pret total:</h3>
                </span>
           </div>
       </div>
       <div class="container-produs">
            <div class="imagine-titlu">
                <div class="imagine">
                    <img src="images/LoginWallpaperFinal.jpg" alt="">
                </div>
                <span class="info">
                        <p> Ar trebui sa vina titlul si o descirie scurta despre fiecare parfum in parte , ca un fel de mini rezumat al parfumului di nou</p>
                        <br>
                    </span>
           </div>
           <div class="informatii">
                <span class="cantitate">
                    <h3>Cantitate:</h3>
                </span>
                <span class="pret-unitar">
                    <h3>Pret unitar:</h3>
                </span>
                <span class="pret-total">
                    <h3>Pret total:</h3>
                </span>
           </div>
       </div>
       <hr>
       <div class="checkout-info">
            <span class="total-price">
                <h2>Cost produse:</h2>
                <h2 class="price-checkout"> 350.00$</h2>
            </span>
            <span class="total-cumparate">
                <h2>Produse cumparate: </h2>
                <h2>6</h2>
            </span>
            <span class="cost-transport">
                <h2>Cost transport: </h2>
                <h2>10$</h2>
            </span>
            <span class="total-checkout">
                <h1>Total produse cumparate:</h1>
                <h1 class="price-total">360.00$</h1>
            </span>
            <span class="finalizare-comanda">
                <a href="checkout.php">Continuare comanda</a>
            </span>
       </div>
    </div>
    

    <script src="js_scripts/cart.js"></script>
    <script src="js_scripts/home.js"></script>
</body>

</html>