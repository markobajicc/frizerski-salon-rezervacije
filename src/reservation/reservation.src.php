
<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(isset($_POST["submit"])){

        $note = "";
        $treatmentDuration = 0;
        $userId = null;
        $startTime = $_POST['selected_time'];
        $endTime;
        $date = $_POST['reservationDate'] ?? date("Y-m-d", time());

        $services = $_POST['services']; 
        foreach ($services as $service) {
            $note .= $service . " "; 
            if($service == "Sisanje")
            $treatmentDuration+=20;
            if($service == "Fejd")
            $treatmentDuration+=30;
            if($service == "Pranje kose")
            $treatmentDuration+=10;
            if($service == "Brada")
            $treatmentDuration+=10;
        }
        if (isset($_SESSION["userid"])) {
            $userId = $_SESSION["userid"]; 
            
        } else {
            echo "Niste prijavljeni.";
        }

        $endTime = date('H:i:s',strtotime($startTime)+$treatmentDuration*60);


        //echo $note . " " . $treatmentDuration . " " . $userId . " " . $startTime . "<br>";
        
        include "../../config/dbh.classes.php";
        include "classes/reservation.classes.php";
        include "classes/reservation-contr.classes.php";


        $reservation = new ReservationContr($userId,$date,$startTime,$treatmentDuration,$note,$endTime);

        $reservation->addReservation();
        header("location: /frizerski_salon/index.php?error=none");


    }      
}
