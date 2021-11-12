<?php

$var = mysqli_connect("localhost","root","","jour08");

mysqli_set_charset($var,"utf8");

$requette2 = mysqli_query($var,"SELECT `prenom`,`nom`,`naissance` FROM `etudiants` WHERE `naissance` BETWEEN '1998-01-01' AND '2018-12-31';");

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
                <th>prenom</th>
                 <th>nom</th>
                 <th>naissance</th>
                </tr>
                </tr>
            </thead>
        <tbody>
        <?php foreach ($etudiant2 as $st) {  ?>
                    <tr>
                        <td> <?= $st['prenom']; ?> </td>
                        <td> <?= $st['nom']; ?> </td>
                        <td> <?= $st['naissance']; ?> </td>
                    </tr>
            <?php }; ?>

        </tbody>
        </table>
    </div>
</body>
</html>