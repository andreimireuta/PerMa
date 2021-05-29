<!DOCTYPE html>
<?php
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
                <i class="fas fa-search"></i>
                <a href="shop.php">Shop</a>
            </li>
            <li>
                <i class="fas fa-user"></i>
                <a href="account.php" id="account-link">Account</a>
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
    <?php
                $produs = $_REQUEST["produs"];
                if (!($rez = $mysql->query ('select id,denumire,descriere,compozitie,categorie,pret from products where id='.$produs))) {
                    die ('A survenit o eroare la interogare');
                }
                while ($inreg = $rez->fetch_assoc()) {
                    echo('
       <div class="product-image">
            <img class="image-pr1" src="images/products/'.$inreg['id'].'.png" alt="">
       </div>
        <div class="product-info">
            <h1>'.$inreg['denumire'].'</h1>
            <p>cod produs: ETCETC100</p>
            <p><span class="bold-title-info">Opinia clientilor:</span>
            <span class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half"></i>
            </span>
            <span id="price"><h2>'.$inreg['pret'].' lei</h2></span>
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

            <form action="php_scripts/addToCart.php" method="post">
                <span class="cantitate">
                    <label for="cantitate"> <span class="bold-title-info">Cantitate:</span> </label>
                    <input type="number" name="cantitate" id="cantitate" min="0">
                    <input type="hidden" value='.$inreg['id'].' name="nameid" id="nameid">
                </span>
                <button class="Add-to-cart" type="submit">Add to cart</button>
            </form >

            <h3 id="fullDesc">See full description <i class="fas fa-arrow-down"></i></h3>
            <h3 id="fullDesc1">Hide full description <i class="fas fa-arrow-up"></i></h3>

        </div>
    </div>
    <div id="product-description">
                <span class="bold-title-info"><h2>Despre brand:</h2></span> <br>
                '.$inreg['descriere'].'
                <br><br>
                <ul><span class="bold-title-info"><h2>Compozitie:</h2></span>
                    '.$inreg['compozitie'].'
                </ul>
    </div>
    ');
                }

    ?>
    <footer id="footer">
        <div id="bottom">
            <div class="scholarly">
                <a href="#">Scholarly HTML</a>
            </div>
            <span id="line1"> | </span>
            <div class="contact">
                <a href="#">Contact</a>
            </div>
        </div>
        <span id="line2">
            Created by Andrei Mireuta & Adrian Cojocaru
        </span>


    </footer>
    <script src="js_scripts/product.js"></script>
    <script src="js_scripts/shop.js"></script>
</body>

</html>