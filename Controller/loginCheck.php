<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if ($username == "lemon" && $password == "lemon") {
        header("location:../View/blogAdmin.php");
        session_start();
        $_SESSION['id'] = "skd";
    } else {
        echo "Wrong";
    }
}
