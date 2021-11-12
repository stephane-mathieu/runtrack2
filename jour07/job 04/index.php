<?php


if (isset($_POST["connexion"])){
    setcookie('prenom', $_POST['prenom'], time()+365*24*3600);
    $_COOKIE['prenom'] = $_POST['prenom'];
        if($_COOKIE['prenom'] == $_POST['prenom']){
            echo "Bonjour " . $_COOKIE['prenom'] . " ! <br>";
        }
            echo "<style>
            #formulaire{
                visibility:hidden;
            }
            #deco{
            visibility:visible;
        }
        </style>
        ";
    
    }


if (isset($_POST["deco"])){
    setcookie('prenom');
    echo "<style>
    #deco{
        visibility:hidden;
    }
    </style>
    ";
   }

?>

<form action="index.php" method="post">
    <div id="formulaire">
        <label for="texte">ton prenom </label>
            <input type="text" id="prenom" name="prenom">
            <input type="submit" value="connexion" name="connexion">
    </div>

    <div id="deco"><input type='submit' value='deconnexion' name='deco'></div>
</form>

