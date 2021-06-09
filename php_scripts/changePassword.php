<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //connect to theb database
    $mysqli = mysqli_connect('localhost','root','','parfumes');

    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }

    $currrentPass= $_POST['currentPassword'];
    if(empty($currrentPass)){
        echo "Introduceti o parola";
        // echo "Veti fi redirectionati inapoi";
        // sleep(3);
        // header('Location : ../account.php');
    }
    else{
         echo $currrentPass;
    }
    $newPass = $_POST["newPassword"];
    if(empty($newPass)){
        echo "Introduceti o parola noua";
    }

    $retypePass= $_POST['']
   
}
?>