<?php
    require_once 'pdo.php';

    if(isset($_POST['login'])){
        $email = $_POST['emailLogin'];
        $password = $_POST['passwordLogin'];
        $signin = $db->prepare("SELECT * FROM users WHERE email='$email' and password='".hash('sha256', $password)."'");
        $signin->execute();
        $signin_array = $signin->fetch(PDO::FETCH_ASSOC);
        $count = $signin->rowCount();
        if($count==1){
            $_SESSION['firstName'] = $signin_array["firstName"];
            $_SESSION['lastName'] = $signin_array["lastName"];
            $_SESSION['id'] = $signin_array["id"];
            header('Location: ./homepage.php');
        } else {
            $errors[]="Email ou mot de passe incorrecte";
        }
    }
?>