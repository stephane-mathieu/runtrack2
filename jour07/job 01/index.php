<?php
session_start();


$_SESSION['nbvisites']++;


if (isset($_POST["reset"])){
    $_SESSION['nbvisites'] = 1;
    session_destroy();
}


echo $_SESSION['nbvisites'];


?>

<form action="index.php" method="POST">
<input type="submit" value="Reset" name="reset">
</form>