
<?php
$compteur = 0;

foreach($_POST as $key => $value){
    $compteur++;
}
echo $compteur;

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="page.css" type="text/css">
    <title>Document</title>
</head>
<body>

<form action="./index.php" method="POST">
    <label for="affichage">Prénom</label>
    <input type="text" name="fname01" id="fname01">
    <label for="affichage">Nom</label>
    <input type="text" name="lname01" id="lname01">
    <label for="affichage">email</label>
    <input type="text" name="mail" id="mail">
    <input type="submit" value="Envoyer">
</form>
</body>
</html>




