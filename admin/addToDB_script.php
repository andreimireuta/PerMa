<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $den="s";
    //connect to theb database
    $mysqli = mysqli_connect('localhost','root','','parfumes');

    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
      }

    $den=$_POST['denumire'] ;
    $desc=$_POST['descriere'];
    $comp=$_POST['compozitie'];
    $cat=$_POST['categorie'];
    $pret=$_POST['pret'];
    echo $den .'\n' ,$desc,$comp,$cat,$pret;

    $sql = ("INSERT INTO products(denumire,descriere,compozitie,categorie,pret) VALUES ('$den','$desc','$comp','$cat','$pret')");
    if(mysqli_query($mysqli,$sql)){
      echo "Succes";
    }
    else{
      echo "A avut loc o eroare";
    }
}
?>