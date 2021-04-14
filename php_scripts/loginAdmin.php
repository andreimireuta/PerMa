<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $adminname = "";
    $email = "";
    $errorrs = array();

    //connect to theb database
    $mysqli = mysqli_connect('localhost','root','','parfumes');

    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }

    $adminname = $mysqli -> real_escape_string($_POST['adminname']);
    $password = $mysqli ->real_escape_string($_POST['password']);

     //veriricam daca nu sunt lasate goale campurile
     if(empty($adminname)){
        array_push($errorrs, "Admin name is required!");
    }
    if(empty($password)){
        array_push($errorrs, "Password is required!");
    }

    if(count($errorrs) == 0){
        //$password = md5($password);  //criptam parola inainte sa o comparam cu cea din baza de date
        $query = "SELECT * FROM admins WHERE name='$adminname' AND password='$password'";
        $reuslt = mysqli_query($mysqli,$query);
        if(mysqli_num_rows($reuslt) == 1){
            //log user in
            $_SESSION['name'] = $adminname;
            $_SESSION['success'] = "You are now loged in";
            echo "salut $adminname";
            header('location: ../adminDashboard.php');
        }
        else{
            echo "Wrong Admin name/password";
        }
    }
}


/*
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $adminname = $_POST['adminname'];
        $password = $_POST['password'];

        if(preg_match('/[\/\'"^£$%&*():;} {@#~?>!<>,|=_+¬-]/', $password) != 0 || 
            preg_match('/[\/\'"^£$%&*():;} {#~?>!<>,|=_+¬-]/', $adminname) != 0){
            echo "Not allowed characters in form fields !!";
        }
        else{
            $link1 = mysqli_connect("localhost","root","","parfumes");
            
            if($link1 === false){
                die("ERROR: Could not connect." . mysqli_connect_error());
            }

            if(empty($adminname) || empty($password)){
                echo "Complete the entire form";
            }
            else{

                $sql = mysqli_prepare()
            }
        }

    }
     */
?>