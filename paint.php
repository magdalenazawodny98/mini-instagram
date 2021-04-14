<?php

session_start();

if (!isset($_SESSION['logged'])) {
    header('Location:login.php');
}
?>

<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html lang="pl">
<head>
    <meta charset="utf-8">
    <title>Paint</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="paint.css">
    <link rel="stylesheet" href="css/platform.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
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
                        <li class="nav-item">
                            <a class="nav-link" href="platform.php">Wpisy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="gallery.php">Galeria</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="paint.php">Zabawa w paintcie</a>
                        </li>
                        <li class="nav-item mt-2 bg-darkblue">
                            <div style="font-size:13px" class="btn-user text-white py-1 px-3" title="button">
                                <?php
                                echo '<p style="margin:0">Witaj ' . $_SESSION['user'] . '! [<a style="color:white" href="logout.php">Wyloguj się</a>]</p>';
                                ?>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
    </header>
</div>


<div class="paint">
    <div class="paint-bar">
        <input id="paintSize" type="range" class="paint-size" min="1" max="50" value="5">
        <output for="paintSize" class="paint-size-val"></output>

        <input type="color" class="paint-color">

        <div class="paint-buttons-cnt">
            <button data-mode="draw" class="button-mode" type="button">
                Draw
            </button>
            <button data-mode="line" class="button-mode" type="button">
                Line
            </button>
            <button data-mode="rectangle" class="button-mode" type="button">
                Rectangle
            </button>
        </div>
    </div>
    <div class="paint-canvas-cnt">
    </div>
</div>

<footer>
    <div class="container">
        <div class="footer-copyright">
            <img src="./img/logo2.png" alt="logofooter"><br>
            <div class="copyright-text">
                Copyright &copy; Mini Instagram | 2019
            </div>
        </div>

    </div>
</footer>
<script src="app.js"></script>
</body>
</html>