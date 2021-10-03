<?php

session_start();

if (isset($_SESSION["logged"]) && $_SESSION["logged"] == true) {
    header("Location: ./index.php");
    exit;
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $db = new PDO('sqlite:/database/database.db');
        $email = $_POST["email"];
        $password = md5($_POST["password"]);
        $query = "SELECT * FROM t_akun WHERE username = $email AND password = $password";
        $fetch = $db->query($query);
        echo $fetch;
    } catch (PDOException $e) {
        print "Couldn't access db: " . $e->getMessage();
        print getcwd()."\n";
        $myfiles = array_diff(scandir('.'), array('.', '..')); 
        print_r($myfiles)."\n";
    }
}