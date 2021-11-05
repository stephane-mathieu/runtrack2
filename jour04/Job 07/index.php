
<form action="./index.php" method="POST">
    <label for="Hauteur">hauteur</label>
    <input type="text" name="hauteur" id="hauteur"><br>
    <label for="Largeur">largeur</label>
    <input type="text" name="largeur" id="largeur"><br>
    <input type="submit" value="Submit">
</form>

<?php
/* toit */
$spaceToit = $_POST['largeur'];
$nbrLa = $_POST['largeur']/2;
$milToit = 0;

if(isset($_POST['largeur']) == true){

    while($spaceToit > 0){
        echo '&nbsp';
        $spaceToit--; 
    }
    echo "/\<br/>";
    $spaceToit2 = $_POST['largeur'];
    
    while($nbrLa > 0){
        $spaceToit = $spaceToit2 - 2;
        $spaceToit2 = $spaceToit;
        while($spaceToit > 0){
            echo '&nbsp';
            $spaceToit--; 
        }
        echo "/_";
        $temp = $milToit;

        while($milToit > 0){
            echo "_";
            $milToit--;
        }      
            
        echo "_\<br/>";
        $nbrLa--;
        $milToit = $temp + 2;
    }
        
}

/* base */
$espaceBase = $_POST['largeur'] *2;
$nbrHa = $_POST['hauteur'];
$milBase = $_POST['largeur'];

if(isset($_POST['hauteur']) == true){
    while($nbrHa > 0){
        echo '|';
        $espaceBase2 = $espaceBase;
        while($espaceBase2 > 0){
            echo '&nbsp';
            $espaceBase2--;
        }
        echo '|<br/>';
        $nbrHa--;
    }   
    echo '|';
    while($milBase > 0){
        echo "_";
        $milBase--;
    } 
    echo '|';
}

?>
