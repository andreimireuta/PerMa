<!DOCTYPE html>
<?php
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
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/account.css">
    <link rel="stylesheet" href="styles/shop.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="styles/account.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <title>Account</title>
</head>

<body>
    
    <div class="container-principal">
       
        <div class="mainc">
            <div id="option11">
                <div class="main-container-opt">
                    <div class="inputs-opt">
                        <form action="">
                            <label for="firstName">First Name:</label>
                            <input type="text" name="firstName" value="">
                            <br>
                            <label for="lastName">Last Name:</label>
                            <input type="text" name="lastName" value="">
                            <br>
                            <label for="dataNasterii">Data Nasterii:</label>
                            <input type="date" name="dataNasterii" value="">
                            <br>
                            Sex:
                            <br>
                            <input type="radio" name="gender" value="male" id="male">
                            <label for="male" class="gender">Barbat</label>
                            <br>
                            <input type="radio" name="gender" id="female" value="female">
                            <label for="female" class="gender">Femeie</label>
                            <br>
                            <button type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
   
</body>

</html>

<?php
// function log_out(){
     //if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if( isset($_POST['log_out'])){
			setcookie("userName", "", time()+(86400*30), "/");

			Header('Location: login.php');
		}
	 //} 
    // }
?>