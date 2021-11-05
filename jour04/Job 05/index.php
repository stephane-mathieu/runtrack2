<?php

    if (isset($_POST["username"]) == "John" && isset($_POST["password"]) == "Rambo"){
        echo "C’est pas ma guerre <br>";
    }
    else{
        echo " Votre pire cauchemar <br>";
    }
?>

<form action="./index.php" method="POST">
    <label for="Username">Username</label>
    <input type="text" name="username" id="username"><br>
    <label for="Password">Password</label>
    <input type="password" name="password" id="password"><br>
    <input type="submit" value="Send">
</form>