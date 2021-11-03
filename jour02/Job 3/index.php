<?php

display_number();

function display_number(){
    $i = 0;
    while($i != 100){
        $i++;
        echo '</br>';
        if ($i === 42){
            echo "La Plateforme_";
        } else if($i >= 25 && $i<= 50){
            echo "<u>".$i."</u>";
        } else if($i <= 20) {
            echo "<i>".$i."</i>";
        } else{
            echo $i;
        }
    }

}
?>