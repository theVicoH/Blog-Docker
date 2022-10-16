<?php
    session_start();

    echo "Bonjour ".$_SESSION['firstName']." ".$_SESSION['lastName']."";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcourir</title>
</head>
<body>
    <a href="./deconnexion.php">Déconnexion</a>
</body>
</html>