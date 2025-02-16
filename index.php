<?php
session_start();
include "config/dbh.classes.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frizerski salon</title>
    <link rel="stylesheet" href="public/style.css">
    <link rel="stylesheet" href="public/style/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/style/index.css">



</head>

<body>


    <header class="p-0">
        <div>
            <div class="header-blue">
                <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
                    <div class="container"><a class="navbar-brand" href="#">FrizerskiSalon</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navcol-1">
                            <ul class="nav navbar-nav">
                                <li class="nav-item" role="presentation"><a class="nav-link active" href="#">Usluge</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link active" href="#">Galerija</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link active" href="views/reservation.php">Rezervacije</a></li>
                                <li class="nav-item  mr-3" role="presentation"><a class="nav-link active" href="#">Kontakt</a></li>
                                <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Profil </a>
                                    <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="views/login.php">Login</a><a class="dropdown-item" role="presentation" href="views/signup.php">Sign Up</a></div>
                                </li>
                            </ul>

                        </div>
                        <div style="right:0;" class="nav-item">
                        </div>
                    </div>
                </nav>
                <div class="container hero">
                    <div class="row">
                        <div class="col-12 col-lg-6 col-xl-5 offset-xl-1">
                            <h1>Vaša kosa zaslužuje najbolje.</h1>
                            <p>Mi znamo kako da oblikujemo vaš izgled – elegantno, moderno i s karakterom. </p><button class="btn btn-light btn-lg action-button" type="button">Zakaži lako</button>
                        </div>
                        <div
                            class="col-md-5 col-lg-5 offset-lg-1 offset-xl-0 d-none d-lg-block phone-holder">
                            <div class="iphone-mockup"><img src="assets/img/iphone.svg" class="device">
                                <div class="screen"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <div class="container mt-5">
        <div class="row">

            <div class="col-md-3">
                <h4 class="text-center"><strong>Klasično šišanje</strong></h4>
                <hr>
                <div class="profile-card-4 text-center">
                    <img src="public/images/clasic-haircut.jpg" class="img img-responsive">
                    <div class="profile-content">
                        <div class="profile-name">Klasično šišanje
                        </div>
                        <!-- <div class="profile-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</div> -->
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="profile-overview" style="display: inline-block;">
                                    <p>Cena</p>
                                    <h4>800</h4>
                                </div>
                                <div class="profile-overview" style="display: inline-block; margin-left:2rem">
                                    <p>Trajanje</p>
                                    <h4>20 min</h4>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <h4 class="text-center"><strong>Fade</strong></h4>
                <hr>
                <div class="profile-card-4 text-center">
                    <img src="public/images/stylish-man-sitting-barbershop.jpg" class="img img-responsive">
                    <div class="profile-content">
                        <div class="profile-name">Fade
                        </div>
                        <!-- <div class="profile-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</div> -->
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="profile-overview" style="display: inline-block;">
                                    <p>Cena</p>
                                    <h4>1200</h4>
                                </div>
                                <div class="profile-overview" style="display: inline-block; margin-left:2rem">
                                    <p>Trajanje</p>
                                    <h4>30 min</h4>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <h4 class="text-center"><strong>Pranje kose</strong></h4>
                <hr>
                <div class="profile-card-4 text-center">
                    <img src="public/images/washingHair.jpg" class="img img-responsive" style="max-width: 300px; max-height:400px ">
                    <div class="profile-content">
                        <div class="profile-name">Pranje kose
                        </div>
                        <!-- <div class="profile-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</div> -->
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="profile-overview" style="display: inline-block;">
                                    <p>Cena</p>
                                    <h4>200</h4>
                                </div>
                                <div class="profile-overview" style="display: inline-block; margin-left:2rem">
                                    <p>Trajanje</p>
                                    <h4>5 min</h4>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <h4 class="text-center"><strong>Sredjivanje brade</strong></h4>
                <hr>
                <div class="profile-card-4 text-center">
                    <img src="public/images/trimming-beard.jpg" class="img img-responsive" style="max-width: 100%;">
                    <div class="profile-content">
                        <div class="profile-name">Sredjivanje brade
                        </div>
                        <!-- <div class="profile-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</div> -->
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="profile-overview" style="display: inline-block;">
                                    <p>Cena</p>
                                    <h4>400</h4>
                                </div>
                                <div class="profile-overview" style="display: inline-block; margin-left:2rem">
                                    <p>Trajanje</p>
                                    <h4>10 min</h4>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php
        if (isset($_SESSION["userid"]))
            echo "Ulogovani smo";
        else echo "Nismo ulogovani";


        //API za slanje poruka na WA
        // function send_whatsapp($message = "Test")
        // {
        //     $phone = "+381628724002";  // Enter your phone number here
        //     $apikey = "8675127";       // Enter your personal apikey received in step 3 above

        //     $url = 'https://api.callmebot.com/whatsapp.php?source=php&phone=' . $phone . '&text=' . urlencode($message) . '&apikey=' . $apikey;

        //     if ($ch = curl_init($url)) {
        //         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        //         curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        //         $html = curl_exec($ch);
        //         $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        //         // echo "Output:".$html;  // you can print the output for troubleshooting
        //         curl_close($ch);
        //         return (int) $status;
        //     } else {
        //         return false;
        //     }
        // }

        // send_whatsapp("Cao Dusane ovde bajic");

        // ?>
        <button><a href="src/auth/logout/logout.src.php">Izloguj se</a></button>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
        <script src="public/style/js/bootstrap.min.js"></script>
</body>

</html>