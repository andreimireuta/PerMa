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
$numeClient= $_COOKIE['userName'];
echo $numeClient;

$idComanda = ("SELECT MAX(id)  as 'MaxID' from comenzi");
echo "<script>alert(".$idComanda.")</script>";
$idComanda= $idComanda;

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $den = $row["denumire"];
        $cat = $row["categorie"];
        $pret= $row["pret"];
        $cant= $row["cantitate"];
        $idP = $row["id_produs"];
        echo " denumire: " .$den. " categorie: " .$cat. " pret: ".$pret. " \n";
        echo "<br>";
        $query3=("INSERT INTO produse_cumparate(id_produs,id_comanda,denumire,categorie,pret,cantitate,id_client) VALUES('$idP','$idComanda','$den','$cat','$pret','$cant','$idClient')");
        mysqli_query($link,$query3);
    }
}else{
    echo "Nu a mers, 0 linii returnate";
}

$query1 = ("INSERT INTO comenzi(id_produs,categorie,pret,cantitate,id_client,pret_total,denumire,nume_client) VALUES ('$idP','$cat','$pret','$cant','$idClient','$total','$den','$numeClient') ");
mysqli_query($link,$query1);

//stergem din tabela cart detaliile comenzii
$query2= ("DELETE FROM cart where id_client='$idClient'");
mysqli_query($link,$query2);


echo $_SESSION["totalComanda"];



?>