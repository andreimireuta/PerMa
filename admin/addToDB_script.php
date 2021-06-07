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
    // echo $den .'\n' ,$desc,$comp,$cat,$pret;

    $sql = ("INSERT INTO products");
}
?>