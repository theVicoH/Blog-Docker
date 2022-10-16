<?php
    session_start();
    require_once 'config.php';
    require_once 'login.php';
    require_once 'register.php';

    function showErrors($arr){
        foreach($arr as $ar){
            echo "<p>$ar</p>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    <h2>Connexion</h2>
    <form action="index.php" method="post">
        <input type="text" name="emailLogin" autocomplete="off" placeholder="email">
        <input type="password" name="passwordLogin" autocomplete="off" placeholder="Mot de passe">
        <input type="submit" name="login" value="Login">
    </form>
    <h2>Inscription</h2>
    <form action="index.php" method="post">
        <input type="text" name="lastName" autocomplete="off" placeholder="Nom" value="<?php echo isset($_POST['lastName']) ? $_POST['lastName'] : '' ?>">
        <input type="text" name="firstName" autocomplete="off" placeholder="Prénom" value="<?php echo isset($_POST['firstName']) ? $_POST['firstName'] : '' ?>">
        <input type="text" name="email" autocomplete="off" placeholder="Email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>">
        <input type="password" name="password" autocomplete="off" placeholder="Mot de passe" value="<?php echo isset($_POST['password']) ? $_POST['password'] : '' ?>">
        <input type="password" name="confirm" autocomplete="off" placeholder="Confirmer" value="<?php echo isset($_POST['confirm']) ? $_POST['confirm'] : '' ?>">
        <input type="submit" name="register" value="Register">
    </form>
    <?php echo "<p>$register</p>" ?>
    <?php showErrors($errors); ?>

</body>
</html>