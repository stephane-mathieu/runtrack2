<?php

    $str = "On n est pas le meilleur quand on le croit mais quand on le sait";
    $dic = [
        "consonnes" => ['b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z','B','C','D','F','G','H','J','K','L','M','N','P','Q','R','S','T','V','W','X','Z'],
        "voyelles" => ['a','e','i','o','u','y','A','E','I','O','U','Y']
    ];

$voyelles = 0;
$consonnes = 0;
    $i = 0;
    while(isset($str[$i]) == true) {
        $a = 0;
        $b = 0;
        while(isset($dic["voyelles"][$a]) == true) {
            if($str[$i] == $dic["voyelles"][$a]) {
                $voyelles++;
            }
            $a++;
        }
        while(isset($dic["consonnes"][$b]) == true) {
            if($str[$i] == $dic["consonnes"][$b]) {
                $consonnes++;
            }
            $b++;
        }
        $i++;
    }

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
                <th>Voyelles</th>
                <th>Consonnes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> <?php echo "$voyelles"; ?></td>
                <td> <?php echo "$consonnes"; ?></td>
            </tr>
        </tbody>
        </table>
</body>
</html>