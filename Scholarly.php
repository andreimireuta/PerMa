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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="styles/Scholarly.css" type="text/css">
    <link href="styles/Scholarly.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <title>Scholarly HTML</title>
</head>
<body>
    <div class="container">
        <span class="titlu"><h1>Documentatie proiect PerMa</h1></span>
        <span class="autori">
            <h2>autori:</h2>
            <p>Mireuta Andrei-Marian</p>
            <p>email:</p>
            <p>tel:</p>
            <p>Cojocaru Adrian</p>
            <p>email:</p>
            <p>tel:</p>
        </span>
        <div class="introducere">
            <h2>Introducere</h2>
            <p>PerMa (Smart Perfume Web Management) este o aplicatie Web de management al resurselor dintr-o perfumerie, care ofera utilizatorilor diverse tipuri de parfumuri. </p>
            <p>Fiecare parfum are atasat proprietati specifice, cum ar fi: pret, ingredinte,etc. </p>
            <p>Utilizatorii isi pot crea un cont si se pot intra in site folosind acel cont. Odata intrati in site, utilizatorii ajung pe pagina de home, unde se afla cateva parfumuri care le sunt recomadnate</p>
            <p> PerMa se comporta ca un magazin on-line classic in care oamenii pot sa isi comande niste parfumuri. </p>
        </div>
        <div class="head">
            <h2>Head-ul site-ului</h2>
            <p>Head-ul site-ului contine informatii despre unele fonturi folosite, unele kit-uri web folosite sau link-uri catre paginile CSS</p>
            <img src="screenshots/head.png" alt="head-ul site-ului">
        </div>
        <div class="pagini">
            <h2>Paginile site-ului:</h2>
            <div class="pagina">
                <h3>Pagina Home</h3>
                <p>Pagina home este pagina unde ajungem dupa ce ne-am inregistrat cu succes pe site. Aceasta pagina contine imagini cu anumite parfumuri pe care le recomadna site-ul.
                    Aceasta pagina are rolul de a fi "first page" a site-ului. Pe aceasta pagina se afla niste butoane de tip radio, folosite pentru a schimba, pe rand, imaginile afisate.
                </p>
                <img src="screenshots/radio.png" alt="butoane radio">
            </div>
            <div class="pagina">
                <h3>Pagina Shop</h3>
                <p>Pagina Shop este cea mai importanta pagina a site-ului deoarece pe aceasta se afla parfumurile pe care le are site-ul. In functie de dimensiunea ecranului, perfumurile vor fi afisate cate 3, 2 sau cate 1.
                    Aceasta pagina contine titlurile parfumurilor impreuna cu pretul acestora si un "review" (nufunctional, este doar de design, momentan). De asemenea, cand dam scroll peste produse, vor aparea iste icon-uri
                    care au ca scop introducerea produselor in cos, in lista de favorite sau in lista de vizionare(nefunctional momentan).
                </p>
                <img src="screenshots/produs_home.png" alt="un produs de pe shop page">
            </div>
            <div class="pagina">

            </div>
        </div>
    </div>
</body>
</html>