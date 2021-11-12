<?php

$var = mysqli_connect("localhost","root","","jour08");

mysqli_set_charset($var,"utf8");

$requette = mysqli_query($var,"SELECT COUNT(*) FROM `etudiants`");
$requette2 = mysqli_query($var,"SELECT * FROM `etudiants`");

$etudiants = mysqli_fetch_all($requette,MYSQLI_ASSOC);

$etudiants2 = mysqli_fetch_all($requette2,MYSQLI_ASSOC);

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
                 <th>prenom</th>
                 <th>nom</th>
                 <th>naissance</th>
                 <th>sexe</th>
                 <th>email</th>
                <th>nb_etudiants</th>
                </tr>
            </thead>
        <tbody>
        <?php foreach ($etudiants2 as $st) {  ?>
                    <tr>
                        <td> <?= $st['id']; ?> </td>
                        <td> <?= $st['prenom']; ?> </td>
                        <td> <?= $st['nom']; ?> </td>
                        <td> <?= $st['naissance']; ?> </td>
                        <td> <?= $st['sexe']; ?> </td>
                        <td> <?= $st['email']; ?> </td>
                        <td>
                            <?php  if($st['id'] == 1){foreach($etudiants as $tabetudiant2) {echo $tabetudiant2['COUNT(*)']."<br>";}} ?>
                        </td>
                    </tr>
            <?php }; ?>
        </tbody>
        </table>
    </div>
</body>
</html>
