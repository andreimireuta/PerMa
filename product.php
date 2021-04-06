<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="styles/product.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="styles/product.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
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



    <div class="container-produs">
       <div class="product-image">
            <img class="image-pr1" src="images/image_wallpaper1.jpg" alt="">
       </div>
        <div class="product-info">
            <h1>Parfum femeie Versace</h1>
            <p>cod produs: ETCETC100</p>
            <p><span class="bold-title-info">Opinia clientilor:</span>
            <span class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half"></i>
            </span>
            <span id="price"><h2>USD $150.00</h2></span>
            <p><span class="bold-title-info">Brand:</span>  Versace</p>
            <p><span class="bold-title-info">Colectie:</span>  Primavara</p>
            <p><span class="bold-title-info">Disponibilitate:</span>  In stoc</p>
            <span class="cantitate">
                <label for="marime"> <span class="bold-title-info">Selectati marimea:</span> </label>
                <select type="number" name="marime" id="marime">
                    <option value="50">50ml</option>
                    <option value="100">100ml</option>
                    <option value="200">200ml</option>
                </select>
            </span>
            <br><br>
            <span class="cantitate">
                <label for="cantitate"> <span class="bold-title-info">Cantitate:</span> </label>
                <input type="number" name="cantitate" id="cantitate" min="0" >
            </span>
            <button class="Add-to-cart" type="button">Add to cart</button>
            <h3 id="fullDesc">See full description <i class="fas fa-arrow-down"></i></h3>
            <h3 id="fullDesc1">Hide full description <i class="fas fa-arrow-up"></i></h3>

        </div>
    </div>
    <div id="product-description">
                <span class="bold-title-info"><h2>Despre brand:</h2></span> <br>
                Brandul Calvin Klein este un brand de lifestyle si una dintre cele mai importante case de moda din America.
                <br>
                Look-ul Calvin este simplu si clasic cu influente minimaliste. Gamele de parfumuri Calvin Klein sunt atragatoare in aceeasi masura pentru femei si pentru barbati, cu un spirit modern.
                <br>
                Exoticul Euphoria este un parfum floral-fructat, cu o aroma imbatatoare, orientala, plina de fructe exotice, flori de orhidee neagra, violete.
                <br><br>
                <ul><span class="bold-title-info"><h2>Compozitie:</h2></span>
                    <li><span class="bold-title-info">  Note de varf: </span>tonuri verzi, curmal japonez, rodie;</li>
                    <li><span class="bold-title-info">  Note de mijloc: </span>lotus, orhidee;</li>
                    <li><span class="bold-title-info">  Note de baza: </span>mosc, tonuri de crema, chihlimbar, violeta, mahon.</li>
                </ul>
    </div>
    

    <script src="js_scripts/product.js"></script>
    <script src="js_scripts/shop.js"></script>
</body>

</html>