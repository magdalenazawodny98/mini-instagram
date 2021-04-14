<?php
session_start();

if (!isset($_SESSION['allright'])) {
    header('Location:index.php');
    exit();
} else {
    unset($_SESSION['allright']);
}

if (isset($_SESSION['fr_nick'])) unset($_SESSION['fr_nick']);
if (isset($_SESSION['fr_password1'])) unset($_SESSION['fr_password1']);
if (isset($_SESSION['fr_passowrd2'])) unset($_SESSION['fr_password2']);
if (isset($_SESSION['fr_email'])) unset($_SESSION['fr_email']);
if (isset($_SESSION['fr_regul'])) unset($_SESSION['fr_regul']);

if (isset($_SESSION['e_nick'])) unset($_SESSION['e_nick']);
if (isset($_SESSION['e_email'])) unset($_SESSION['e_email']);
if (isset($_SESSION['e_password'])) unset($_SESSION['e_password']);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
Dziękujemy za rejestrację. Zapraszamy do zalogowania.<br>
<a href="login.php">Zaloguj się</a>
</body>
</html>