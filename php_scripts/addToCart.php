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

    $produsul = $_REQUEST["cantitate"];
    $nume = $_POST['nameid'];
    $numeClient = $_COOKIE['userName'];
    echo('Avem cantitatea: '.$produsul.' ');
    echo('Avem produsul: '.$nume.' ');

    $link = mysqli_connect("localhost","root","","parfumes");
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    if(isset($_COOKIE['userName']) && !empty($_COOKIE['userName']))
                        echo('Hi, '.$numeClient);

    
    $sql = mysqli_prepare($link,"SELECT id from users where username like ? ");
    mysqli_stmt_bind_param($sql,"s", $_COOKIE['userName']);
    mysqli_stmt_execute($sql);
    mysqli_stmt_bind_result ( $sql, $res1);
    mysqli_stmt_fetch($sql);
    echo('Avem id client: '.$res1.'');

    //creare cookie id client
    $cookie_name = "userID";
    setcookie($cookie_name,$res1,time() + (86400 * 30), "/");

    /*
    $sql1 = mysqli_prepare($link,"SELECT denumire, categorie, pret from products where id = ?");
    mysqli_stmt_bind_param($sql1,"i", $_POST['nameid']);
    mysqli_stmt_execute($sql1);
    mysqli_stmt_bind_result ( $sql1, $den, $cat, $pret);
    mysqli_stmt_fetch($sql1);
    echo('Avem urmatoarele: '.$den.' '.$cat.' '.$pret.' ');
    */

    $sql = "SELECT denumire, categorie, pret from products where id = ".$_POST['nameid'];
    $result = mysqli_query($link,$sql);

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $den = $row["denumire"];
            $cat = $row["categorie"];
            $pret= $row["pret"];
            echo " denumire: " .$den. " categorie: " .$cat. " pret: ".$pret. " ";
        }
    }else{
        echo "Nu a mers, 0 linii returnate";
    }

    $stmt = mysqli_prepare($link, "INSERT INTO cart(id_produs,denumire,categorie,pret,cantitate,id_client) VALUES (?,?,?,?,?,?)");
    mysqli_stmt_bind_param($stmt,'issiii', $nume, $den, $cat, $pret, $produsul, $res1 );
    mysqli_stmt_execute($stmt);
    header('Location: ../shop.php');
    
?>