<?php
$i = 0;
$nb = [0,1,2,3,4,5,6,7,8,9];
    if(isset($_GET["nombre"])){
        if($_GET["nombre"] % 2 == 0){
        echo "Nombre pair";
        }
            else {
                echo "Nombre impair";
             }
    $i++;
    }
?>

<form action="./index.php" method="GET">
    <label for="Nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre"><br>
    <input type="submit" value="Submit">
</form>