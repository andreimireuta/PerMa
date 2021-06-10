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
            <h2>Autori:</h2>
            <p class="intro">Mireuta Andrei-Marian</p>
            <p class="intro">email: andreimireutam@gmail.com</p>
            <p class="intro">tel: +40758186092</p>
            <p class="intro">Cojocaru Adrian</p>
            <p class="intro">email:</p>
            <p class="intro">tel:</p>
        </span>
        <div class="introducere">
            <h2>Introducere</h2>
            <p class="intro">PerMa (Smart Perfume Web Management) este o aplicatie Web de management al resurselor dintr-o perfumerie, care ofera utilizatorilor diverse tipuri de parfumuri. </p>
            <p class="intro">Fiecare parfum are atasat proprietati specifice, cum ar fi: pret, ingredinte,etc. </p>
            <p class="intro">Utilizatorii isi pot crea un cont si se pot intra in site folosind acel cont. Odata intrati in site, utilizatorii ajung pe pagina de home, unde se afla cateva parfumuri care le sunt recomadnate</p>
            <p class="intro"> PerMa se comporta ca un magazin on-line classic in care oamenii pot sa isi comande niste parfumuri. </p>
        </div>
        <div class="head">
            <h2>Head-ul site-ului</h2>
            <p>Head-ul site-ului contine informatii despre unele fonturi folosite, unele kit-uri web folosite sau link-uri catre paginile CSS</p>
            <img src="screenshots/head.png" alt="head-ul site-ului">
        </div>
        <div class="pagini">
            <h2>Paginile site-ului:</h2>
            <div class="pagina">
                <h3>-- Pagina Home --</h3>
                <p>Pagina home este pagina unde ajungem dupa ce ne-am inregistrat cu succes pe site. Aceasta pagina contine imagini cu anumite parfumuri pe care le recomadna site-ul.
                    Aceasta pagina are rolul de a fi "first page" a site-ului. Pe aceasta pagina se afla niste butoane de tip radio, folosite pentru a schimba, pe rand, imaginile afisate.
                </p>
                <img src="screenshots/radio.png" alt="butoane radio">
            </div>
            <div class="pagina">
                <h3>--Pagina Shop--</h3>
                <p>Pagina Shop este cea mai importanta pagina a site-ului deoarece pe aceasta se afla parfumurile pe care le are site-ul. In functie de dimensiunea ecranului, perfumurile vor fi afisate cate 3, 2 sau cate 1.
                    Aceasta pagina contine titlurile parfumurilor impreuna cu pretul acestora si un "review" (nufunctional, este doar de design, momentan). De asemenea, cand dam scroll peste produse, vor aparea iste icon-uri
                    care au ca scop introducerea produselor in cos, in lista de favorite sau in lista de vizionare(nefunctional momentan).
                </p>
                <img src="screenshots/produs_home.png" alt="un produs de pe shop page">
            </div>
            <div class="pagina">
                <h3>--Pagina Account--</h3>
                <p>Pe aceasta pagina, utilizatorul paote sa vada detalii despre contul sau, sa schimbe parola, email-ul si sa isi adauge niste date personale. De asemenea, de pe acasta pagina el poate iesi din site si poate da sign out.
                    Pagina contine un meniu lateral cu diferite optini si o pagina principala de afisare al acestor optiuni.
                </p>
                <img src="screenshots/bara_account.png" alt="bara de navigatie de pe pagina account">
            </div>
            <div class="pagina">
                <h3>--Pagina Cart--</h3>
                <p>Pagina cart este si ea una foarte imporatnta, deoarece aici utilizatorul poate vedea toate produsele pe care el le-a pus in cos cu scopul de a le cumpara. Aici se gasesc pozele produselor din magazin impreuna cu pretul total al acestora , cantitatea si pretul total al comenzii.
                    In functie de pretul comenzii este afisat si pretul transportului. De asemenea utilizatorul va putea vedea cate produse a comandat, care este pretul pe bucata si pretul total al fiecarui produs.
                    In imaginea de mai jso se paote vedea un cos in care utilizatorul nu a pus nimic.
                </p>
                <img src="screenshots/cos_gol.png" alt="col gol" width="50%">
            </div>
            <div class="pagina">
                <h3>--Pagina de checkout--</h3>
                <p>Pagina de checkout este pagina care se va afisa dupa ce utilizatorul se decide sa achizitioneze produsele care se afla in cos. El va fi nevoit sa completeze informatiile dintr-un formular pentru a reusi sa finalizeze comanda.
                    Dupa ce face acest lucru si comanda este finalizata cu succes utilizatorul va di redirectionat catre o pagina de multumire.
                </p>
                <img src="screenshots/checkout_front.png" alt=" pagina de checkout">
            </div>
            <div class="pagina">
                <h3>--Pagina pentru admin--</h3>
                <p>Pe aceasta pagina se pot vedea informatii despre comenzile plasate, despre pretul total al incasarilor, dar si despre clienti, numarul lor si alte detalii.
                    De asemenea, in aceasta pagina avem mai multe link-uri catre diferite optiuni, cum ar fi pagina de introducere a datelor in baza de date, pagina de descarcare a rapoturilor in formatul csv/pdf
                    si sign out.
                </p>
                <img src="screenshots/admindash.png" alt="pagina de admin dashboard" width="50%">
            </div>
        </div>
        <div class="pagini">
            <h2>--Partea de back-end a site-ului--</h2>
            <div class="pagina">
                <h3>Register page</h3>
                <p>Pe aceasta pagina utilizatorii isi vor crea un cont. Pentru a face acest lucru am folosit un formular si metoda "POST" pentru a extrage datele din el.
                    La crearea unui cont, se vor crea niste variabile de tip session care vor tine minte numele utilizatorului si id-ul acestuia.
                </p>
                <img src="screenshots/registererror.png" alt="">
                <p>In cazul in care datele introduse de utilizator sunt corecte (nu exista alt username sau alt email la fel) acesta va fi adaugat in baza de date
                    In tot acest proces se va verifica incalcarea securitatii site-ului pentru a preveni mySql injection
                </p>
                <img src="screenshots/registarecusucces.png" alt="" >
            </div>
            <div class="pagina">
                <h3>--Login page--</h3>
                <p>Pe aceasta pagina utilizatorul se paote loga in site folosind datele introduse in formularul de inregistrare. Pentru a face acest lucru vom lua datele din formularul
                    de login si le vom cauta in baza de date. Daca vom gasi un user care sa corespunda datelor introduse atunci acesta este redirectionat catre pagina de home, altfel
                    va fi nevoit sa incerce din nou, pana cand datele introduse vor fi corecte.
                </p>
                <img src="screenshots/loginpage.png" alt="">
                <p>In cazul in care totul decurge bine, si nu vor fi erori, utilizatorul va fi redirectionat catre pagina de home , fiind logat in contul sau.
                    In acest proces vor fi create doua cookie-uri care vor tine minte id-ul clientului si numele acestuia, timp de 7 zile, sau pana cand acesta se delogheaza
                </p>
                <img src="screenshots/loginsuccess.png" alt="">
            </div>
            <div class="pagina">
                 <h3>Shop page</h3>
                 <p>In pagina de shop se afla toate parfumurile care se afla in baza de date. Acestea sunt afisate prestabilite cate 3 pe rand.
                    Pe baza unui id pe care il are fiecare imagine acestea vor fi afisare in ordinea acestuia. 
                 </p>
                 <img src="screenshots/productshop.png" alt="">
                 <p>Atat timp cat in baza de date mai sunt parfumuri care mai pot fi afisate, acest lucru se va intampla. Pe aceasta pagina de afiseaza, de asemenea si titlul 
                     fiecarui parfum, impreuna cu unele detalii despre el, cum ar fi pretul sau review-urile acestuia.
                 </p>
            </div>
            <div class="pagina">
                <h3>Product page</h3>
                <p> Folosind id-ului produsului care a fost selectat din shop page, in pagina product va fi afisat acesta. Din baza de date vom selecta produsul al carui ID corespunde cu cel al produsului din shop page.</p>
                <img src="screenshots/product1.png" alt="">
                <p>Din baza de date se va extrage, tot pe baza ID-ului produsului, informatii despre pretul acestuia, categoria din care face parte, o scurta descriere si ingredientele din care acesta este compus.</p>
                <img src="screenshots/product2.png" alt="">
            </div>

        </div>
    </div>
</body>
</html>