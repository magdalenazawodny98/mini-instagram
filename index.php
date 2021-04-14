<!DOCTYPE html>
<html lang="PL">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>Mini Instagram</title>

    <meta http-equiv="X-Ua-Compatible" content="IE=edge"/>

    <link rel="stylesheet" href="css/index.css"/>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat%7COpen+Sans%7CSource+Sans+Pro&amp;display=swap"
          rel="stylesheet"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>
    <script src="http://code.jquery.com/jquery-3.0.0.js"></script>


</head>
<body>
<div class="header-cnt">
    <header>
        <nav class="navbar navbar-light navbar-expand-sm">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="./img/logo4.png" alt=""/></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu"
                        aria-controls="menu" aria-haspopup="true">
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

    <div class="header-content-cnt">
        <div class="header-content-text">
            <div class="content-title-cnt">
                <span class="content-title">PLATFORMA SOCIAL</span><!--zmienić font -->
                <div class="content-title-element-left"></div>
                <div class="content-title-element-right"></div>
            </div>
        </div>
        <div class="header-content-buttons">
            <a href="#hrefRedmore" class="content-btn-first">
                CZYTAJ WIĘCEJ
            </a>
            <a href="register.php" class="content-btn-second">
                DOŁĄCZ DO NAS
            </a>
        </div>
    </div>
</div>

<main>
    <div class="main-readmore-cnt">
        <div class="readmore">

            <div class="readmore-title" id="hrefRedmore"><span style="color:#315160">DOŁĄCZ DO </span><span
                        style="color:#ffc529">WEWNĘTRZNEGO </span><span style="color:#315160">KOMUNIKATORA!</span>
            </div>

            <div class="readmore-widgets">
                <div class="readmore-item">
                    <i class="fas fa-users"></i>
                    <h4>SPOŁECZNOŚĆ</h4>
                </div>
                <div class="readmore-item">
                    <i class="fas fa-envelope-square"></i>
                    <h4>KOMUNIKACJA</h4>
                </div>
                <div class="readmore-item">
                    <i class="fas fa-code"></i>
                    <h4>TECHNOLOGIA</h4>
                </div>
            </div>
            <div class="readmore-widgets-text">
                <h2>SPOŁECZNOŚĆ</h2><br>
                <p>Nasz portal ma na celu ułatwić komunikację między ludźmi z krajów z całego świata.
                    Zachęć znajomych i rodzinę do korzystania z naszego Mini Instagrama i ciesz się
                    z jego możliwości już dziś.</p>
            </div>
        </div>
    </div>
</main>

<div class="counter-bg">
    <div class="counter-elements">

        <div class="counter">
            <i class="fas fa-table"></i>
            <div class="counter-stats"><h3 style="display:inline-block;margin:0 5px 0 0">10</h3> UŻYTKOWNIKÓW</div>
        </div>
        <div class="counter">
            <i class="fas fa-eye"></i>
            <div class="counter-stats"><h3 style="display:inline-block;margin:0 5px 0 0">120</h3> WIZYT</div>
        </div>
        <div class="counter">
            <i class="fas fa-list"></i>
            <div class="counter-stats"><h3 style="display:inline-block;margin:0 5px 0 0">12</h3> WPISÓW</div>
        </div>
        <div class="counter">
            <i class="fas fa-images"></i>
            <div class="counter-stats"><h3 style="display:inline-block;margin:0 5px 0 0">6</h3> ZDJĘĆ</div>
        </div>

    </div>
</div>

<footer>
    <div class="footer-copyright">
        <img src="./img/logo2.png" alt="logofooter"/><br>
        <div class="copyright-text">
            Copyright &copy; Mini Instagram | 2019
        </div>
    </div>
</footer>


<script src="js/readmore.js"></script>
</body>
</html>