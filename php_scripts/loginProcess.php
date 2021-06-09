<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = "";
    $password= "";
    $errorrs = array();

    //connect to theb database
    $mysqli = mysqli_connect('localhost','root','','parfumes');

    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }

    $username = $mysqli -> real_escape_string($_POST['username']);
    $password = $mysqli ->real_escape_string($_POST['password']);

     //veriricam daca nu sunt lasate goale campurile
     if(empty($username)){
        array_push($errorrs, "Username is required!");
    }
    if(empty($password)){
        array_push($errorrs, "Password is required!");
    }

    if(count($errorrs) == 0){
        //$password = md5($password);  //criptam parola inainte sa o comparam cu cea din baza de date
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $reuslt = mysqli_query($mysqli,$query);
        if(mysqli_num_rows($reuslt) == 1){
            //log user in
            //$sql1 = "SELECT id from users where username ='$username'";
            //$res1 = mysqli_query($mysqli,$sql1);

             //creare cookie id client
            //$cookie_name = "userID";
            //setcookie($cookie_name,$res1,time() + (86400 * 30), "/");

            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now loged in";
            setcookie("userName", $username, time()+(86400*30), "/");
            setcookie("idClient",$id,time()+(86400*30), "/");
            echo "salut $username";
            header('location: ../home.php');
        }
        else{
            echo "Wrong username/password";
            echo "Please try again";
        }
    }
}
?>