<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rezervacija termina</title>
    <link rel="stylesheet" href="../public/style.css">
    <link rel="stylesheet" href="../public/style/index.css">
    <link rel="stylesheet" href="../public/style/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/style.page/reservation.css">

</head>

<body>

    <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
        <div class="container"><a class="navbar-brand" href="../index.php">FrizerskiSalon</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#">Usluge</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#">Galerija</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#">Rezervacije</a></li>
                    <li class="nav-item  mr-3" role="presentation"><a class="nav-link active" href="#">Kontakt</a></li>
                    <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Profil </a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="../views/login.php">Login</a><a class="dropdown-item" role="presentation" href="../views/signup.php">Sign Up</a></div>
                    </li>
                </ul>

            </div>
            <div style="right:0;" class="nav-item">
            </div>
        </div>
    </nav>



    <section>

        <h1>Rezervacija termina</h1>

        <form id="reservationForm" action="../src/reservation/reservation.src.php" method="POST">
            <button type="submit" name="submit" onclick="prikaz()">Rezerviši</button>
            <div class="checkbox-group">
                <h3>Izaberite usluge:</h3>
                <label>
                    <input type="checkbox" name="services[]" value="Sisanje"> Šišanje
                </label><br>
                <label>
                    <input type="checkbox" name="services[]" value="Fejd"> Fejd
                </label><br>
                <label>
                    <input type="checkbox" name="services[]" value="Pranje kose"> Pranje kose
                </label><br>
                <label>
                    <input type="checkbox" name="services[]" value="Brada"> Trimiranje brade
                </label>
            </div>
            <br>
            <input type="date" name="reservationDate" id="dateInput"><br><br>
            <input type="hidden" name="selected_time" id="selectedTime" required>
        </form>
        <div class="startTime-reservation-div-class"></div>

        <h1 id="showSelectedTime">Odabrani termin : /</h1>

        <script>
            function prikaz() {
                console.log(document.querySelector("#selectedTime").value);
            }
        </script>

        <script src="../public/script.js"></script>

        <?php
        if (isset($_SESSION["userid"]))
            echo "Ulogovani smo";
        else echo "Nismo ulogovani";

        $userId = $_SESSION["userid"];
        echo $userId;

        ?>
    </section>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>



</html>