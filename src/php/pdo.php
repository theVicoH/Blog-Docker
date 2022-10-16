<?php
    $engine="mysql";
    $server="db";
    $port="3306";
    $dbname="data";
    $user = 'root';
    $pass = 'password';

    $db = new PDO("$engine:host=$server:$port;dbname=$dbname", $user, $pass);

    $errors = [];
    $register = "";
?>