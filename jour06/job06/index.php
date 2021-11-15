<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php

if ($_POST["style"] == 'style1') {

   echo " <link rel='stylesheet' href='style1.css' type='text/css'>";
}else if($_POST["style"] == 'style2'){
    echo " <link rel='stylesheet' href='style2.css' type='text/css'>";
}
else if($_POST["style"] == 'style3'){
    echo " <link rel='stylesheet' href='style3.css' type='text/css'>";
}


?>
    <title>Document</title>
</head>

<body>
<form action="./index.php" method="post">
    <select name="style" id="style">
        <option class="choice" value="choix">---Choisissez le style---</option>
        <option class="style1" value="style1">style1</option>
        <option class="style2" value="style2">style2</option>
        <option class="style3" value="style3">style3</option>
    </select>
    <input type="submit" value="Send">
</form>

</body>

</html>

