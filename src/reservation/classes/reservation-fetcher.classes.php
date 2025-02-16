<?php


class ReservationFetcher extends Dbh{
    public function fetchReservations($date){
        $stmt = $this->connect()->prepare("SELECT startTime, treatmentDuration FROM reservation WHERE DATE(reservationDate) = ?");

        if(!$stmt->execute([$date])){
            $stmt = null;
            header("location: /frizerski_salon/index.php?error=stmtfailed");
            exit();
        }

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }
}