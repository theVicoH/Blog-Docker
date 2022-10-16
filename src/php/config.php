<?php
    try{
        $engine="mysql";
        $server="db";
        $port="3306";
        $dbname="data";
        $user = 'root';
        $pass = 'password';

        $db = new PDO("$engine:host=$server:$port;dbname=$dbname", $user, $pass);

        $createUserTable = $db->prepare('
        CREATE TABLE IF NOT EXISTS users (
            id INT AUTO_INCREMENT,
            firstName VARCHAR(255) NOT NULL,
            lastName VARCHAR(255) NOT NULL,
            email VARCHAR(255) NOT NULL,
            password VARCHAR(255) NOT NULL,
            admin BOOLEAN DEFAULT false,
            PRIMARY KEY (id)
        ) ENGINE=InnoDB;');
        $createUserTable->execute();
        $createUserTable->closeCursor();

        // create the article table
        $createArticleTable = $db->prepare('
        CREATE TABLE IF NOT EXISTS articles (
            id INT AUTO_INCREMENT,
            user_id INT NOT NULL,
            content VARCHAR(255),
            PRIMARY KEY (id),
            FOREIGN KEY (user_id) REFERENCES users (id)
        ) ENGINE=InnoDB;');
        $createArticleTable->execute();
        $createArticleTable->closeCursor();

        
    } catch (PDOException $e){
        die("Erreur" . $e->getMessage());
    }
?>