<?php
    $username = "";
    $email = "";
    $errorrs = array();

    //connect to theb database
    $mysqli = mysqli_connect('localhost','root','','parfumes');

    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
      }

    //if the register button is clicked
    if(isset($_POST['register'])){
        $username = $mysqli -> real_escape_string($_POST['username']);
        $email = $mysqli -> real_escape_string($_POST['email']);
        $password = $mysqli ->real_escape_string($_POST['password']);

        //veriricam daca nu sunt lasate goale campurile
        if(empty($username)){
            array_push($errorrs, "Username is required!");
        }
        if(empty($email)){
            array_push($errorrs, "Email is required!");
        }
        if(empty($password)){
            array_push($errorrs, "Password is required!");
        }
        
        //Daca dupa acesti pasi nu sunt erori, atunci introducem in baza de date valorile pe care le adauga userul
        if(count($errorrs) == 0){
            $password = md5($password);// criptam parola inainte sa o adaugam in baza de date
            $sql = "INSERT INTO users (username, email, password)
                    VALUES ('$username','$email','$password')";
            mysqli_query($mysqli,$sql);
        }
          $mysqli -> close();
    }

?>