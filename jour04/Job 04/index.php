

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="page.css" type="text/css">
    <title>Document</title>
</head>
<body>

<form action="./index.php" method="POST">
    <label for="affichage">Prénom</label>
    <input type="text"  id="Prenom" name="Prenom">
    <label for="affichage">Nom</label>
    <input type="text"  id="Nom" name="Nom">
    <label for="affichage">email</label>
    <input type="text" name="mail" id="mail">
    <input type="submit" value="Envoyer">
</form>
    <div>
        <table>
         <thead>
                <tr>
                 <th>argument</th>
                 <th>valeur</th>
                </tr>
            </thead>
        <tbody>
            <tr>
                <td> <?php foreach($_POST as $key => $value){
    echo $key."<br>";} ; ?></td>
                <td> <?php foreach($_POST as $key => $value) {
                    echo $value."<br>";
                }; ?></td>
            </tr>
        </tbody>
        </table>
    </div>
</body>
</html>