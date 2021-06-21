<?php
    require_once '../vendor/autoload.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once '../vendor/autoload.php';
        $mysql = new mysqli (
            'localhost', // locatia serverului (aici, masina locala)
            'root',       // numele de cont
            '',    // parola (atentie, in clar!)
            'parfumes'   // baza de date
            );
        
        // verificam daca am reusit
        echo "<script> alert ('merge!')</script>";
        if (mysqli_connect_errno()) {
            die ('ERROR: Could not connect.');
        }
        $sql = mysqli_query($mysql, "SELECT * from  comenzi");
        if(mysqli_num_rows($sql)>0){
            $html='<table>';
            $html.='<tr><td>ID</td> <td>Name</td><td>E-mail</td></tr>';
            while($row= mysqli_fetch_assoc($sql)){
                $html.='<tr><td>'.$row['id'].'</td><td>'.$row['denumire'].'</td><td>'.$row['pret_total'].'</td></tr>';
            }
            $html.='</table>';
        }else{
            $html="Data no found";
        }
        echo $html;
        $mpdf =new Mpdf\Mpdf();
        $mpdf ->WriteHTML($html);
        $file = time().'.pdf';
        $mpdf->output($file,'D');
    }
?>