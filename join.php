<?php

session_start();

if ((!isset($_POST['login'])) || (!isset($_POST['password']))) {
    header('Location:login.php');
}

require_once "connect.php";
$connect = new mysqli($host, "$db_user", "$db_password", "$db_name");

if ($connect->connect_errno != 0) {
    echo "Error: " . $connect->connect_errno;
} else {

    $login = $_POST['login'];
    $password = $_POST['password'];

    $login = htmlentities($login, ENT_QUOTES, "UTF-8");
    $password = htmlentities($password, ENT_QUOTES, "UTF-8");

    if ($result = @$connect->query(
        sprintf("SELECT * FROM uzytkownicy WHERE user='%s' AND pass='%s'",
            mysqli_real_escape_string($connect, $login),
            mysqli_real_escape_string($connect, $password)))) {
        $size = $result->num_rows;
        if ($size > 0) {

            $_SESSION['logged'] = true;

            $row = $result->fetch_assoc();
            $_SESSION['id'] = $row['id'];
            $_SESSION['user'] = $row['user'];

            unset($_SESSION['errorjoin']);

            $result->close();
            header('Location:platform.php');
        } else {
            $_SESSION['errorjoin'] = '<div class="error">Nieprawidłowy login lub hasło!</div>';
            header('Location:login.php');

        }
    }

    $connect->close();
}

?>