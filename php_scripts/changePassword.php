<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //connect to theb database
    $mysqli = mysqli_connect('localhost','root','','parfumes');

    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }
    $ok=1;
    $user= $_COOKIE['userName'];
    // $id = $_COOKIE['idClient'];
    echo $user;

    $currrentPass= $_POST['currentPassword'];
    if(empty($currrentPass)){
        echo "Introduceti o parola";
        $ok=0;
    }
    else{
         echo $currrentPass;
    }
    $newPass = $_POST["newPassword"];
    if(empty($newPass)){
        echo "Introduceti o parola noua";
        $ok=0;
    }

    $retypePass= $_POST["retypePassword"];
    if(empty($retypePass)){
        echo "introduceti din nou noua parola";
        $ok=0;
    }

    if(!($newPass == $retypePass)){
        echo "Parolele nu coincid, va rog sa incercati din nou";
        $ok=0;
    }

    $query = "SELECT * FROM users WHERE username='$user' AND password='$currrentPass'";
    $reuslt = mysqli_query($mysqli,$query);
    if(mysqli_num_rows($reuslt) == 1){
        if($ok==1 ){
            $query1= "UPDATE users SET password= $newPass WHERE username=$user";

        }
    }
   
}
?>