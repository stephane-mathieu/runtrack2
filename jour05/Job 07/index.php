<form action="./index.php" method="post">
    <label for="Str">Str :</label>
    <input type="text" name="str" id="str"><br>
    <select name="fonction" id="fonction">
        <option value="choix">---Choisissez la fonction---</option>
        <option value="gras">Gras</option>
        <option value="cesar">Cesar</option>
        <option value="plateforme">Plateforme</option>
    </select>
    <input type="submit" value="Send">
</form>



<?php


select();


function select (){

    $str = $_POST["str"];

    if ($_POST["fonction"] == 'gras') {
        echo gras($str);
    }
    else if ($_POST["fonction"] == 'plateforme') {
        echo plateforme($str);
    }
    else if ($_POST["fonction"] == 'cesar') {
        echo cesar($str,2);
    }

}



function gras($str){
    $i = 0;
    $MAJ = "ABCDEFGHIJKLMNOPQRSTUVWXYZ ";
    $Min = "abcdefghijklmnopqrstuvwxyz ";
    $spacing = " ";
    while (isset($str[$i])) {
        $j = 0;
        while (isset($MAJ[$j])) {
            if ($str[$i] == $MAJ[$j]) {
                while($str[$i] != $spacing){
                    echo "<b>".$str[$i]."</b>";
                    $i++;
                }
                echo($spacing);
            }
            else if($str[$i] == $Min[$j]){
                while($str[$i] != $spacing){
                    echo($str[$i]);
                    $i++;
                }
            }
            $j++;
        }
        $i++;
    }
    return ($str);
}


function plateforme($str){
    $i = 0;
        if($str[-1] == 'e' || $str[-2] == 'm'){
            $str = $str."_";
        }
        return($str);

}


function cesar($str,$decalage){
    $i = 0;
    $decal2="abcdefghijklmnopqrstuwxyz";
    if($decalage == 2){
    while (isset($str[$i])){
            switch ($str[$i]) {
                case 'a' :
                $str[$i] = 'c';
                break;

                case 'b' :
                $str[$i] = 'd';
                break;

                case 'c' :
                $str[$i] = 'e';
                break;

                case 'd' :
                $str[$i] = 'f';
                break;


                case 'e' :
                $str[$i] = 'g';
                break;


                case 'f' :
                $str[$i] = 'h';
                break;


                case 'g' :
                $str[$i] = 'i';
                break;


                case 'h' :
                $str[$i] = 'j';
                break;


                case 'i' :
                $str[$i] = 'k';
                break;


                case 'j' :
                $str[$i] = 'l';
                break;


                case 'k' :
                $str[$i] = 'm';
                break;


                case 'l' :
                $str[$i] = 'n';
                break;


                case 'm' :
                $str[$i] = 'o';
                break;


                case 'n' :
                $str[$i] = 'p';
                break;


                case 'o' :
                $str[$i] = 'q';
                break;


                case 'p' :
                $str[$i] = 'r';
                break;


                case 'q' :
                $str[$i] = 's';
                break;


                case 'r' :
                $str[$i] = 't';
                break;


                case 's' :
                $str[$i] = 'u';
                break;


                case 't' :
                $str[$i] = 'v';
                break;


                case 'u' :
                $str[$i] = 'w';
                break;


                case 'v' :
                $str[$i] = 'x';
                break;

                case 'w' :
                $str[$i] = 'y';
                break;

                case 'x' :
                $str[$i] = 'z';
                break;

                case 'y' :
                $str[$i] = 'a';
                break;

                case 'z' :
                $str[$i] = 'b';
                break;
            }
         $i++;
    }
}
    return($str);
}



?>