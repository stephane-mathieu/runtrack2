<?php

$var = mysqli_connect("localhost","root","","jour08");

mysqli_set_charset($var,"utf8");

$requette1 = mysqli_query($var,"SELECT SUM(`superficie`) FROM `etage`");


$etudiant1 = mysqli_fetch_all($requette1,MYSQLI_ASSOC);

$requette2 = mysqli_query($var,"SELECT * FROM `etage`");

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
                 <th>numero</th>
                 <th>superficie</th>
                <th>superficie_totale</th>
                </tr>
            </thead>
        <tbody>
        <?php foreach ($etudiant2 as $st) {  ?>
                    <tr>
                        <td> <?= $st['id']; ?> </td>
                        <td> <?= $st['nom']; ?> </td>
                        <td> <?= $st['numero']; ?> </td>
                        <td> <?= $st['superficie']; ?> </td>
                                <td>
                                    <?php  if($st['id'] == 1){foreach($etudiant1 as $tabe) {echo $tabe['SUM(`superficie`)']."<br>";}} ?>
                                </td>
                    </tr>
            <?php }; ?>
        </tbody>
        </table>
    </div>
</body>
</html>