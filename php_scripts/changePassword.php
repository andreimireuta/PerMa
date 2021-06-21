<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //connect to theb database
    $mysqli = mysqli_connect('localhost','root','','parfumes');

    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }
    $ok=1;
    $user = $mysqli -> real_escape_string($_SESSION['username']);
    $email= $mysqli -> real_escape_string($_SESSION['email']);
    echo $user;
    echo " ";
    echo $email;

    $currrentPass= $mysqli -> real_escape_string($_POST['currentPassword']);;
    if(empty($currrentPass)){
        echo "Introduceti o parola";
        $ok=0;
    }
    else{
         echo $currrentPass;
    }
    $newPass = $mysqli -> real_escape_string($_POST["newPassword"]);
    if(empty($newPass)){
        // echo "Introduceti o parola noua";
        echo "<script>alert('Introduceti o noua prola')</script>";
        // Header('Location: account.php');
        $ok=0;
    }

    $retypePass=  $mysqli -> real_escape_string($_POST["retypePassword"]);
    if(empty($retypePass)){
        // echo "introduceti din nou noua parola";
        echo "<script>alert('Introduceti din nou prola')</script>";
        $ok=0;
    }

    if(!($newPass == $retypePass)){
        // echo "Parolele nu coincid, va rog sa incercati din nou";
        echo "<script>alert('Parolele nu coincid, va rog sa incercati din nou')</script>";
        $ok=0;
    }
 if($ok==1 ){
    // $query = mysqli_prepare($mysqli,"SELECT count($email) FROM users WHERE email = ?");
    // mysqli_stmt_bind_param($query, "s", $email);
    // mysqli_stmt_execute($query);
    // mysqli_stmt_bind_result($query,$res1);
    // mysqli_stmt_fetch($query);
    // mysqli_stmt_close($query);
    // if($res1 !=1){
    //     echo "This e-mail is not registered";
    // }
    // else{
            $link_bd=mysqli_connect('localhost','root','','parfumes');
            $query1= mysqli_prepare($link_bd,"UPDATE users SET password= ? WHERE email=?");
            mysqli_stmt_bind_param($query1,"ss",$newPass,$email);
            mysqli_stmt_execute($query1);
            echo "<script>alert('Parola a fost schimbata cu succes')</script>";
        }
    // }
    


    // $reuslt = mysqli_query($mysqli,$query);
    // if(mysqli_num_rows($reuslt) == 1){
        
   
}
