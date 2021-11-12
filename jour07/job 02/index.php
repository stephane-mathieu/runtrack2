<?php

$cookie =  time() + 60 *60 *24 * 1000;

setcookie('nbvisites', $_COOKIE['nbvisites'] + 1, $cookie);

echo $_COOKIE['nbvisites'];

if (isset($_POST["reset"])){
    setcookie('nbvisites');
}
?>

<form action="index.php" method="post">
<input type="submit" value="Reset" name="reset">
</form>