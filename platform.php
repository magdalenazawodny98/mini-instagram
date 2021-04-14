<?php

session_start();

if (!isset($_SESSION['logged'])) {
    header('Location:login.php');
}
?>

<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Wpisy</title>

    <meta http-equiv="X-Ua-Compatible" content="IE=edge">

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


    <script>
        function submitChat() {
            if (form1.msg.value == '') {
                alert("NIE WPISANO WIADOMOŚCI!!!");
                return;
            }
            var msg = form1.msg.value;
            var xmlhttp = new XMLHttpRequest();

            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById('chatlogs').innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open('GET', 'insert.php?&msg=' + msg, true);
            xmlhttp.send();
        }

        $(document).ready(function (e) {
            $.ajaxSetup({cache: false});
            setInterval(function () {
                $('#chatlogs').load('logs.php');
            }, 2000);
        });

    </script>
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

<div class="chat-cnt">
    <form class="form1" name="form1" method="post">
        <div class="post-msg-cnt">
            <label id="post-msg-label" for="msg"><i class="far fa-sticky-note"></i>Treść wiadomości</label>
            <textarea id="post-msg" name="msg"></textarea><br>
            <div class="post-msg-submit-cnt">
                <input class="submit-post" type="button" onclick="submitChat()" value="Wyslij">
            </div>
        </div>
    </form>

    <div id="chatlogs">
        <img id="loadgif" src="img/load2.gif" alt="load">
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

</body>
</html>