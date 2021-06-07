<!DOCTYPE html>
<?php
$total_vanzari = 0;
$comenzi=0;
$useri=0;
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

$rez1= ("SELECT pret_total from comenzi");
$rez3= mysqli_query($mysql,$rez1);
if(mysqli_num_rows($rez3) > 0){
    while($row = mysqli_fetch_assoc($rez3)){
        $preturi=$row["pret_total"];
        $total_vanzari += $preturi;
        $comenzi+=1;
    }
}
$rez4= ("SELECT username,email from users");
$rez5= mysqli_query($mysql,$rez4);
if(mysqli_num_rows($rez5) > 0){
    while($row = mysqli_fetch_assoc($rez5)){
        $user=$row["username"];
        $useri+=1;
    }
}
// $total_vanzari +=$inreg['pret_total'];

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/adminDashboard.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="styles/adminDashboard.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <title>Dashboard</title>
</head>
<body>
    
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="title" id="admin"><h2>Admin Dashboard</h2></span>
                    </a>
                    
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="title">Dashboard</span>
                    </a>
                    
                </li>
                <li>
                    <a href="admin/addToDB.php">
                        <span class="icon"><i class="fas fa-plus-square"></i></span>
                        <span class="title">Add new parfumes</span>
                    </a>
                    
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-users"></i></span>
                        <span class="title">Customers</span>
                    </a>
                    
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-comments"></i></span>
                        <span class="title">Messages</span>
                    </a>    
                    
                </li>
                <li>
                    <a href="loginadmin.php">
                       <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
                        <span class="title">Sign out</span> 
                    </a>
                </li>
            </ul>
        </div>

        <div class="main">
            <div class="topbar">
                <div class="toggle"></div>
                <div class="search">
                    <label for="search">
                        <input type="text" placeholder="Search here" name="search">
                    </label>
                </div>
                <div class="user">
                    <img src="images/fragrance.png" alt="">
                </div>
            </div>

            <div class="cardBox">
                <div class="card">
                    <div>
                        <span class="numbers"><?php echo $useri ?></span>
                        <span class="cardName">Useri</span>
                    </div>
                    <div class="iconBox">
                        <i class="fas fa-eye"></i>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <span class="numbers"><?php echo $comenzi ?></span>
                        <span class="cardName">Comenzi</span>
                    </div>
                    <div class="iconBox">
                    <i class="fas fa-shopping-cart"></i>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <span class="numbers"><?php echo $total_vanzari ?> lei</span>
                        <span class="cardName">Incasari</span>
                    </div>
                    <div class="iconBox">
                    <i class="fas fa-dollar-sign"></i>
                    </div>
                </div>
            </div>
            
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Recent Orders</h2>
                        <a href="#" class="btn">View all</a>
                    </div>

                    <table>
                    <thead>
                        <tr>
                            <td>Nume client</td>
                            <td>Pret comanda</td>
                            <td>Nr. comanda</td>
                            <td>Payment</td>
                            <td>Status</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $produs = 0;
                            if (!($rez = $mysql->query ('select id,denumire,categorie,pret_total,id_client,nume_client from comenzi where cod_postal='.$produs))) {
                                die ('A survenit o eroare la interogare');
                            }
                            while ($inreg = $rez->fetch_assoc()) {
                                echo('  <tr>
                                            <td>'.$inreg['nume_client'].'</td>
                                            <td>'.$inreg['pret_total'].'</td>
                                            <td>'.$inreg['id'].'</td>
                                            <td>Paid</td>
                                            <td><span class="status delivered">Delivered</span></td>

                                        </tr>
                            '); 
                          
                        }
                        ?>
                    </tbody>
                </table>

                </div>

                

                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Recent Customers</h2>
                    </div>
                    <table>
                        <tbody>
                            <?php
                                $afisare=0;
                                $rez10=('SELECT username,email FROM users');
                                $rez11=mysqli_query($mysql,$rez10);
                            while($row = $rez11->fetch_assoc()){
                                if($afisare<8){
                                    echo (' <tr>
                                                <td><i class="fas fa-user-circle"></i></td>
                                                <td><h4>'.$row['username'].' <br><span> '.$row['email'].'</span></h4></td>
                                            </tr>') ;
                                    
                                    }
                                }
                                $afisare+=1;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>

        
    </div>

</body>
</html>