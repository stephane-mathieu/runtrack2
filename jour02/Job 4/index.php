<?php

display_number();

function display_number(){
    $i = 0;
    while($i != 100){
        $i++;
        echo '</br>';
        if ($i % 3 === 0 && $i % 5 === 0){
            echo "FizzBuzz";
        } else if($i % 3 === 0){
            echo "Fizz";
        } else if($i % 5 === 0){
            echo "Buzz";
        }else {
            echo $i;
        }
    }
}

?> 