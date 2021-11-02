<?php
$mybool = true;
$val = 6;
$a = 1.23456789;
$str = "Hello LaPlateforme!";
$mybool2 = false;
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
                <td>float</td>
                <td>$a</td>
                <td><?php echo "$a"; ?></td>
            </tr>
        </tbody>
        </table>
</body>
</html>