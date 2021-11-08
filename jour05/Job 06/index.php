<?php

function leetspeak($str)
{
    $i = 0;
    $te = "abeglstABEGLST";
    while (isset($str[$i])) {
        $a = 0;
        while (isset($te[$a])) {
            if ($str[$i] == $te[$a]) {
                // if($str[$i] == 'a'){
                //     $str[$i] = 4;
                // }
                switch ($str[$i]) {
                    case 'a':
                    case 'A':
                        $str[$i] = 4;
                        break;

                    case 'b':
                    case 'B':
                        $str[$i] = 8;
                        break;

                    case 'e':
                    case 'E':
                        $str[$i] = 3;
                        break;

                    case 'g':
                    case 'G':
                        $str[$i] = 6;
                        break;

                    case 'l':
                    case 'L':
                        $str[$i] = 1;
                        break;

                    case 's':
                    case 'S' :
                        $str[$i] = 5;
                        break;


                    case "t":
                    case "T":
                        $str[$i] = 7;
                        break;

                    case 'r':
                        $str[$i] = 9;
                        break;
                }
            }
            $a++;
        }
        $i++;
    }
    return ($str);
}


echo leetspeak("BonjoursS");
