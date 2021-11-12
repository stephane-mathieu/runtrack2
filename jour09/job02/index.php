<?php

$var = mysqli_connect("localhost","root","","jour08");

mysqli_set_charset($var,"utf8");

$requette = mysqli_query($var,"SELECT nom, capacite FROM salles");

$etudiants = mysqli_fetch_all($requette,MYSQLI_ASSOC);


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
                 <th>nom</th>
                 <th>capacite</th>
                </tr>
            </thead>
        <tbody>
            <tr>
                <td>
                    <?php foreach($etudiants as $tabetudiant) {echo $tabetudiant['nom']."<br>";} ?>
                </td>
                
                <td>
                    <?php foreach($etudiants as $tabetudiant) {echo $tabetudiant['capacite']."<br>";} ?>
                </td>
            </tr>
        </tbody>
        </table>
    </div>
</body>
</html>