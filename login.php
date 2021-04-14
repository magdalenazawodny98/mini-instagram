<?php
session_start();

if ((isset($_SESSION['logged'])) && ($_SESSION['logged'] == true)) {
    header('Location:platform.php');
    exit();
}
?>

<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Logowanie</title>
    <link rel="stylesheet" href="css/reglog.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans|Source+Sans+Pro&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>
    <script src="http://code.jquery.com/jquery-3.0.0.js"></script>

</head>
<body>
<div class="header-cnt">
    <header>
        <nav class="navbar navbar-light navbar-expand-md">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="img/logo4.png" alt=""></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu"
                        aria-controls="menu" aria-expand="false" aria-haspopup="true">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="menu">
                    <ul class="navbar-nav">
                        <li class="nav-item mt-1 mr-3">
                            <a class="nav-link" href="login.php"><i class="fas fa-sign-in-alt"></i>Zaloguj</a>
                        </li>
                        <li>
                            <a class="nav-link mt-1" href="register.php"><i
                                        class="fas fa-registered"></i>Zarejestruj</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
    </header>
</div>
<div class="join-cnt-login">
    <div class="login-cnt">

        <form action="join.php" method="post">
            <h2>LOGOWANIE</h2>
            <div class="login-form-row">
                <label for="user">Nazwa użytkownika:</label>
                <input name="login" class="user" id="user" type="text">
                <label for="password">Hasło:</label>
                <input name="password" class="password" id="password" type="password">
            </div>
            <div class="login-form-submit">
                <input class="btn" id="btnRegister" type="submit" value="Zaloguj">
            </div>
        </form>

        <?php
        if (isset($_SESSION['errorjoin']))
            echo $_SESSION['errorjoin'];
        unset($_SESSION['errorjoin']);
        ?>

    </div>
</div>

<footer>
    <div class="footer-copyright">
        <img src="./img/logo2.png" alt="logofooter"><br>
        <div class="copyright-text">
            Copyright &copy; Mini Instagram | 2019
        </div>
    </div>
</footer>
</body>
</html>