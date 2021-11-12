<?php

$var = mysqli_connect("localhost","root","","jour08");

mysqli_set_charset($var,"utf8");

$requette1 = mysqli_query($var,"SELECT SUM(`superficie`) FROM `etage`");


$etudiant1 = mysqli_fetch_all($requette1,MYSQLI_ASSOC);




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
                <th>superficie_totale</th>
                </tr>
            </thead>
        <tbody>
            <tr>
                <td>
                    <?php foreach($etudiant1 as $tabe) {echo $tabe['SUM(`superficie`)']."<br>";} ?>
                </td>
            </tr>
        </tbody>
        </table>
    </div>
</body>
</html>