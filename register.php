<?php

session_start();

if ((isset($_SESSION['logged'])) && ($_SESSION['logged'] == true)) {
    header('Location:platform.php');
    exit();
}

if (isset($_POST['r_email'])) {
    $confirmed = true;

    $r_nick = $_POST['r_nick'];
    if ((strlen($r_nick) < 3) || (strlen($r_nick) > 20)) {
        $confirmed = false;
        $_SESSION['e_nick'] = "Nazwa użytkownika musi posiadać od 3 do 20 znaków!";
    }
    if (ctype_alnum($r_nick) == false) {
        $confirmed = false;
        $_SESSION['e_nick'] = "Nazwa użytkowniak może składać się tylko z liter i cyfr (bez polskich znaków)!";
    }

    $r_email = $_POST['r_email'];
    $r_emailSan = filter_var($r_email, FILTER_SANITIZE_EMAIL);

    if ((filter_var($r_emailSan, FILTER_VALIDATE_EMAIL) == false) || ($r_emailSan != $r_email)) {
        $confirmed = false;
        $_SESSION['e_email'] = "Podaj poprawny adres e-mail!";
    }

    $r_password1 = $_POST['r_password1'];
    $r_password2 = $_POST['r_password2'];

    if ((strlen($r_password1) < 8) || (strlen($r_password1) > 20)) {
        $confirmed = false;
        $_SESSION['e_password'] = "Hasło musi posiadać od 8 do 20 znaków!";
    }

    if ($r_password1 != $r_password2) {
        $confirmed = false;
        $_SESSION['e_password'] = "Podaje hasła nie są identyczne";
    }

    if (!isset($_POST['regul'])) {
        $confirmed = false;
        $_SESSION['e_regul'] = "Potwierdź regulamin!";
    }


    $_SESSION['fr_nick'] = $r_nick;
    $_SESSION['fr_email'] = $r_email;
    $_SESSION['fr_password1'] = $r_password1;
    $_SESSION['fr_password2'] = $r_password2;
    if (isset($_POST['regul'])) $_SESSION['fr_regul'] = true;

    require_once "connect.php";
    mysqli_report(MYSQLI_REPORT_STRICT);

    try {
        $connect = new mysqli($host, $db_user, "$db_password", "$db_name");
        if ($connect->connect_errno != 0) {
            throw new Exception(mysqli_connect_errno());
        } else {
            //Email?
            $result = $connect->query("SELECT id FROM uzytkownicy WHERE email='$r_email'");

            if (!$result) throw new Exception($connect->error);
            $sumEmail = $result->num_rows;
            if ($sumEmail > 0) {
                $confirmed = false;
                $_SESSION['e_email'] = "Istnieje już konto z takim adresem email";
            }
            //Nick?

            $result = $connect->query("SELECT id FROM uzytkownicy WHERE user='$r_nick'");

            if (!$result) throw new Exception($connect->error);
            $sumNick = $result->num_rows;
            if ($sumNick > 0) {
                $confirmed = false;
                $_SESSION['e_nick'] = "Istnieje już taki użytkownik!";
            }

            //allright

            if ($confirmed == true) {
                if ($connect->query("INSERT INTO uzytkownicy VALUES (NULL,'$r_nick','$r_password1','$r_email')")) {
                    $_SESSION['allright'] = true;
                    header('Location: welcome.php');
                } else {
                    throw new Exception($connect->error);
                }
            }

            $connect->close();
        }
    } catch (Exception $e) {
        echo '<span style="color:red;">Błąd serwera! Prosimy przyjdź później.</span>';
    }


}

?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Rejestracja</title>
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

    <style>

    </style>
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
<div class="join-cnt-register">
    <div class="register-cnt">

        <form method="post">
            <h2>REJESTRACJA</h2>
            <div class="register-form-row">

                <label for="r_nick">Nazwa użytkownika:</label>
                <input class="r_nick" type="text" name="r_nick" value="<?php
                if (isset($_SESSION['fr_nick'])) {
                    echo $_SESSION['fr_nick'];
                    unset($_SESSION['fr_nick']);
                }
                ?>">
                <?php
                if (isset($_SESSION['e_nick'])) {
                    echo '<div class="error">' . $_SESSION['e_nick'] . '</div>';
                    unset($_SESSION['e_nick']);
                }
                ?>
                <label for="r_email">E-mail:</label>
                <input class="r_email" type="text" name="r_email" id="r_email" value="<?php
                if (isset($_SESSION['fr_email'])) {
                    echo $_SESSION['fr_email'];
                    unset($_SESSION['fr_email']);
                }
                ?>">
                <?php
                if (isset($_SESSION['e_email'])) {
                    echo '<div class="error">' . $_SESSION['e_email'] . '</div>';
                    unset($_SESSION['e_email']);
                }
                ?>
                <label for="r_password1">Hasło:</label>
                <input class="r_password1" type="password" name="r_password1" id="r_password1" value="<?php
                if (isset($_SESSION['fr_password1'])) {
                    echo $_SESSION['fr_password1'];
                    unset($_SESSION['fr_password1']);
                }
                ?>">
                <?php
                if (isset($_SESSION['e_password'])) {
                    echo '<div class="error">' . $_SESSION['e_password'] . '</div>';
                    unset($_SESSION['e_password']);
                }
                ?>
                <label for="r_password2">Powtórz hasło:</label>
                <input class="r_password2" type="password" name="r_password2" id="r_password2" value="<?php
                if (isset($_SESSION['fr_password2'])) {
                    echo $_SESSION['fr_password2'];
                    unset($_SESSION['fr_password2']);
                }
                ?>">
            </div>
            <div class="register-form-submit">
                <label for="r_checkbox" style="font-size:12px">
                    <input style="margin-right:8px" type="checkbox" name="regul" id="r_checkbox" <?php
                    if (isset($_SESSION['fr_regul'])) {
                        echo "checked";
                        unset($_SESSION['fr_regul']);
                    }
                    ?> >Potwierdzam 100% znajomość regulaminu.</label>
                <input class="btn btn-join" type="submit" value="Zarejestruj">
            </div>
            <?php
            if (isset($_SESSION['e_regul'])) {
                echo '<div class="error">' . $_SESSION['e_regul'] . '</div>';
                unset($_SESSION['e_regul']);
            }
            ?>
        </form>
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