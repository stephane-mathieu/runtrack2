<?php
$mybool = true;
$val = 6;
$a = 1.23456789;
$str = "Hello LaPlateforme!";
$mybool2 = false;
?>
<link rel="stylesheet" href="page.css" type="text/css">
<html>

<table>
    <thead>
    <tr>
       <th>type</th>
       <th>nom</th>
       <th>valeur</th>
   </tr>
    </thead>
    <tbody>
        <tr>
            <td>true</td>
            <td>booléen</td>
            <td> <?php echo "$mybool"; ?></td>
        </tr>
        <tr>
            <td>false</td>
            <td>booléen</td>
            <td> <?php var_dump($mybool2); ?></td>
        </tr>
        <tr>
            <td>int</td>
            <td>entier</td>
            <td><?php echo "$val"; ?></td>
        </tr>
        <tr>
            <td>str</td>
            <td>chaîne de caractères</td>
            <td><?php echo "$str"; ?></td>
        </tr>
        <tr>
            <td>int</td>
            <td>nombre à virgule flottante</td>
            <td><?php echo "$a"; ?></td>
        </tr>
    </tbody>
</table>
</html>