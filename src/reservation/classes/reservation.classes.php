<?php

class Reservation extends Dbh{

    protected function setReservation($userId,$date,$startTime,$treatmentDuration,$note,$endTime){
        $stmt = $this->connect()->prepare('INSERT INTO reservation (userId,reservationDate,startTime,treatmentDuration,note,endTime) VALUES (?,?,?,?,?,?);');

        if(!$stmt->execute([$userId, $date, $startTime, $treatmentDuration, $note,$endTime])){
            $stmt = null;
            header("location: /frizerski_salon/index.php?error=stmtfailed");
            exit();
        }

       $stmt = null;
    }

    //PROVERITI LOGIKU
    protected function checkIsAppointmentTaken($date, $startTime,$endTime) {
        $stmt = $this->connect()->prepare(
            'SELECT * FROM reservation 
            WHERE reservationDate = ?
            AND NOT (
                ? >= endTime OR ? <= startTime
            );'
        );
    
    
        if (!$stmt->execute([$date, $startTime, $endTime])) {
            $stmt = null;
            header("location: /frizerski_salon/index.php?error=stmtfailed");
            exit();
        }
    
        return $stmt->rowCount()>0;
    }
    
    protected function dailyReservationPerUser($userId,$date){
        $stmt = $this->connect()->prepare(
            'SELECT * FROM reservation
            WHERE reservationDate = ?
            AND userId = ?
        ');
        if(!$stmt->execute([$date,$userId])){
            $stmt = null;
            header("location: /frizerski_salon/index.php?error=stmtfailed");
            exit();
        }

        return $stmt->rowCount();
    }

    

}