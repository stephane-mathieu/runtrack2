<?php
    function isPrime($number) {
        for ($i = 2; $i < $number; $i++) {
            if ($number % $i == 0) {
                return FALSE;
            }
        }
        return TRUE;
    }
    function display_number(){
        for ($i = 2; $i < 1000; $i++) {
            if (isPrime($i)) {
                echo $i.' ';
            }
        }
    }

Display_number();

?>