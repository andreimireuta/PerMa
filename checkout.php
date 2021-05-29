<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="styles/checkout.css">
    <link rel="stylesheet" href="styles/shop.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="styles/checkout.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
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


    <div class="checkout-container">
        <h1>Completati urmatoarele campuri pentru a finaliza comanda</h1>
        <p>Trebuie sa ne gandim la un text pe care sa il punem aici</p>
        <div class="rand">
            <div class="col-80">
                <div class="container">
                    <form action="">
                        <div class="rand">
                            <div class="col-50">
                                <h3>Billing Address</h3>

                                <label for="fname"><i class="fa fa-user"></i>Full Name</label>
                                <input type="text" id="fname" name="fname" placeholder="Popescu Ion">

                                <label for="email"><i class="fa fa-envelope"></i>Email</label>
                                <input type="email" name="email" id="email" placeholder="popescuion@exemplu.com">

                                <label for="adress"><i class="fas fa-address-card"></i>Address</label>
                                <input type="text" name="address" id="address" placeholder="Bvd. Independentei nr.1">

                                <label for="city"><i class="fas fa-city"></i>City</label>
                                <input type="text" id="city" name="city" placeholder="Iasi">

                                <div class="rand">
                                    <div class="col-50">
                                        <label for="judet">Judet</label>
                                        <input type="text" id="judet" name="judet" placeholder="Iasi">
                                    </div>
                                    <div class="col-50">
                                        <label for="cod-postal">Cod postal</label>
                                        <input type="text" id="cod-postal" name="cod-postal" placeholder="Iasi">
                                    </div>
                                </div>
                            </div>
                            <div class="col-50">
                                <h3>Metode de plata</h3>
                                <label for="fname"> Accepted Cards:</label>

                                <span class="icon-container">
                                    <i class="fab fa-cc-visa" style="color: navy;"></i>
                                    <i class="fab fa-cc-paypal" style="color: blue;"></i>
                                    <i class="fab fa-cc-mastercard" style="color: red;"></i>
                                    <i class="fab fa-google-pay" style="color: green;"></i>
                                </span>
                                <label for="cname">Name on Card</label>
                                <input type="text" id="cname" name="cname" placeholder="Popescu Ion">

                                <label for="cnumber">Credit card number</label>
                                <input type="text" id="cnumber" name="cnumber" placeholder="1111-2222-3333-4444">

                                <label for="expmonth">Exp Month</label>
                                <input type="text" id="expmonth" name="expmonth" placeholder="10 / Octomber">

                                <div class="rand">
                                    <div class="col-50">
                                        <label for="expyear">Exp Year</label>
                                        <input type="text" id="expyear" name="expyear" placeholder="2024">
                                    </div>
                                    <div class="col-50">
                                        <label for="cvv">Exp Year</label>
                                        <input type="text" id="cvv" name="cvv" placeholder="345">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <label for="">
                            <input type="checkbox" checked="checked" name="sameaddress"> Livreaza la aceeasi adresa de
                            plata
                        </label>
                        <button type="submit" value="Plaseaza comanda" class="button">Plaseaza comanda</button>
                    </form>
                    <a href="thankyou.php">mergi mai departe</a>
                </div>
            </div>
            <div class="col-20">
                <div class="container">
                    <h4>Cart <span class="price" style="color: red;"><i class="fa fa-shopping-cart"></i> <b>4</b></span>
                    </h4>
                    <p><a href="#">Product 1</a><span class="price">50$</span></p>
                    <p><a href="#">Product 2</a><span class="price">60$</span></p>
                    <p><a href="#">Product 3</a><span class="price">70$</span></p>
                    <p><a href="#">Product 4</a><span class="price">80$</span></p>
                    <hr>
                    <p>Total: <span class="price"><b>260$</b></span></p>
                </div>
            </div>
        </div>
    </div>
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


    <script src="js_scripts/checkout.js"></script>
    <script src="js_scripts/shop.js"></script>
</body>

</html>