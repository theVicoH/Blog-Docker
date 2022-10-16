<?php
    require_once 'pdo.php';

    if (isset($_POST['register'])){
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm = $_POST['confirm'];

        $email_verif = $db->prepare("SELECT * FROM users WHERE email = '$email'");
        $email_verif->execute();
        $email_verif_array = $email_verif->fetch(PDO::FETCH_ASSOC);

        
        if(empty($firstName)){
            $errors[] = "Le champs prénom n'a pas été rempli";
        } else if (!preg_match('/^[A-Za-z-. ]+$/', $firstName)){
            $errors[] = "Le champs prénom contient des charactères autres que des lettres";
        }

        if(empty($lastName)){
            $errors[] = "Le champs nom n'a pas été rempli";
        } else if (!preg_match('/^[A-Za-z-. ]+$/', $lastName)){
            $errors[] = "Le champs nom contient des charactères autres que des lettres";
        }

        if(empty($email)){
            $errors[] = "Le champs email n'a pas été rempli";
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors[] = "Ce n'est pas un email";
        } else if ($email_verif_array == null){
        } else if ($email_verif_array == $email){
            $errors[] = "Ce mail est déjà utilisé";
        } 

        if(empty($password)){
            $errors[] = "Le champs password n'a pas été rempli";
        } else if ($password == $firstName){
            $errors[] = "Le champs password doit être différent du prénom";;
        } else if ($password == $lastName){
            $errors[] = "Le champs password doit être différent du nom";;
        } else if ($password == $email){
            $errors[] = "Le champs password doit être différent de l'email";;
        } else if (strlen($password)<5){
            $errors[] = "Le champs password doit contenir plus de 5 charactères";;
        } 

        if (empty($confirm)){
            $errors[] = "Le champs confirm n'a pas été rempli";
        }
        if($password!=$confirm){
            $errors[] = "Le mot de passe est différent";
        }

        if(empty($errors)){
            $signup = $db->prepare("INSERT INTO users(firstName, lastName, email, password) VALUES ('$firstName', '$lastName', '$email', '".hash('sha256', $password)."')");
            $signup->execute();
            $_POST = array();
            $register="Inscription réussie";
        
        }
        
        
    }
    
?>