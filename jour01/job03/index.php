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
            <td>bool</td>
            <td>$mybool</td>
            <td> <?php echo "$mybool"; ?></td>
        </tr>
        <tr>
            <td>bool</td>
            <td>$mybool2</td>
            <td> <?php echo "0"; ?></td>
        </tr>
        <tr>
            <td>int</td>
            <td>$val</td>
            <td><?php echo "$val"; ?></td>
        </tr>
        <tr>
            <td>str</td>
            <td>$str</td>
            <td><?php echo "$str"; ?></td>
        </tr>
        <tr>
            <td>int</td>
            <td>$a</td>
            <td><?php echo "$a"; ?></td>
        </tr>
    </tbody>
</table>
</html>