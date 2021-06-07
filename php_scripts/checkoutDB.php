<?php
// header('location: ../thankyou.php');
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

$idClient = $_COOKIE["userID"];
$total =$_SESSION["totalComanda"];

$link = mysqli_connect("localhost","root","","parfumes");
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

$query = ("SELECT * from cart where id_client='$idClient'");
$result = mysqli_query($link,$query);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $den = $row["denumire"];
        $cat = $row["categorie"];
        $pret= $row["pret"];
        $cant= $row["cantitate"];
        $idP = $row["id_produs"];
        echo " denumire: " .$den. " categorie: " .$cat. " pret: ".$pret. " \n";
        echo "<br>";
    }
}else{
    echo "Nu a mers, 0 linii returnate";
}

$query1 = ("INSERT INTO comenzi(id_produs,categorie,pret,cantitate,id_client,pret_total,denumire) VALUES ('$idP','$cat','$pret','$cant','$idClient','$total','$den') ");
mysqli_query($link,$query1);


echo $_SESSION["totalComanda"];



?>