<?php

require_once(__DIR__  . "/config.php");

if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE username = :username;";
    $sth = $db->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute(array(":username" => $username));
    $users = $sth->fetchAll();
    
    if (count($users) > 0) {
        $msg = "Please use another USERNAME!";
    } else {
        $sql = "SELECT * FROM users;";
        $sth = $db->query($sql);
        $users = $sth->fetchAll(PDO::FETCH_ASSOC);

        foreach ($users as $user) {
            if (substr($user["password"], 0, strlen($password)) === $password) {
                $msg = "Password Policy Error!";
            }
        }
        /* CREATE USER
        $sql = "INSERT INTO `users` (`username`, `password`) VALUES ";
        $sql = $sql . "(`:username`, `:password`);";
        $sth = $db->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array(`:username` => $username, `:password` => $password));
        */
    }

} else {
    $msg = "Please Enter Username and Password!";
}
