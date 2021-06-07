<!DOCTYPE html>
<?php
    

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="formular">
            <form action="addToDB_script.php" id="addToDB" method="POST">
                <label for="denumire">Denumire:</label>
                <input type="text" name="denumire" id="denumire">
                <br>
                <label for="descriere">Descriere</label>
                <textarea name="descriere" id="decscriere" cols="30" rows="2" form="addToDB"></textarea>
                <br>
                <label for="compozitie">Compozitie:</label>
                <textarea name="compozitie" id="compozitie" cols="30" rows="2" form="addToDB"></textarea>
                <br>
                <label for="categorie">Categorie</label>
                <input type="text" name="categorie" id="categorie">
                <br>
                <label for="pret">Pret:</label>
                <input type="text" name="pret" id="pret">
                <br>
                <button type="submit">Add product</button>
            </form>
        </div>
    </div>
</body>
</html>