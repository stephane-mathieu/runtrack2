<?php


function tab(){

    $tab = [200,204,173,98,171,404,459];
    foreach($tab as $value){
        if($value % 2 == 0) {
            echo  $value. " est paire<br />";
        } else {
            echo  $value. " est impaire<br />";
        }
    }

}

tab();

?>