<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
        $sql = mysqli_query($mysql, "SELECT 
                                            *
                                        INTO OUTFILE 'comenzi.csv' 
                                            FIELDS TERMINATED BY ','
                                            ENCLOSED BY '\"'
                                            LINES TERMINATED BY '\n'
                                        FROM
                                            comenzi;
                                        ");

    $file = "D:\\xampp\mysql\data\parfumes\comenzi.csv";

    header("Content-Description: File Transfer"); 
    header("Content-Type: application/octet-stream"); 
    header("Content-Disposition: attachment; filename=\"". basename($file) ."\""); 

    readfile ($file);
    }
?>