<?php

$var = mysqli_connect("localhost","root","","jour08");

mysqli_set_charset($var,"utf8");

$requette = mysqli_query($var,"SELECT * FROM `salles`");
$requette2 = mysqli_query($var,"SELECT AVG(`capacite`) FROM `salles`");

$etudiants = mysqli_fetch_all($requette,MYSQLI_ASSOC);

$etudiant2 = mysqli_fetch_all($requette2,MYSQLI_ASSOC);


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
<div>
        <table>
         <thead>
                <tr>
                <th>id</th>
                 <th>nom</th>
                 <th>id_etage</th>
                 <th>capacite</th>
                 <th>moyenne des salles.</th>
                </tr>
                </tr>
            </thead>
        <tbody>
        <?php foreach ($etudiants as $st) {  ?>
                    <tr>
                        <td> <?= $st['id']; ?> </td>
                        <td> <?= $st['nom']; ?> </td>
                        <td> <?= $st['id_etage']; ?> </td>
                        <td> <?= $st['capacite']; ?> </td>
                                <td>
                                    <?php  if($st['id'] == 1){foreach($etudiant2 as $tabetudiant2) {echo $tabetudiant2['AVG(`capacite`)']."<br>";}} ?>
                                </td>
                    </tr>
            <?php }; ?>

        </tbody>
        </table>
    </div>
</body>
</html>