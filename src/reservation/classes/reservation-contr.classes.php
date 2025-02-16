<?php

class ReservationContr extends Reservation{

    private $userId;
    private $date;
    private $startTime;
    private $treatmentDuration;
    private $endTime;
    private $note;

    public function __construct($userId,$date,$startTime,$treatmentDuration,$note,$endTime)
    {
        $this->userId = $userId;
        $this->date = $date;
        $this->startTime = $startTime;
        $this->treatmentDuration = $treatmentDuration;
        $this->note = $note;
        $this->endTime = $endTime;
    }

    public function addReservation(){
        if($this->emptyInput()){
            header("location: /frizerski_salon/index.php?error=emptyInput");
            exit();
        }
        if($this->pastDate()){
            header("location: /frizerski_salon/index.php?error=pastDate");
            exit();
        }
        if($this->maxTreatmentDuration()){
            header("location: /frizerski_salon/index.php?error=toMuchTime");
            exit();
        }
        if($this->offHour()){
            header("location: /frizerski_salon/index.php?error=offHour");
            exit();
        }
        if($this->isAppointmentTaken()){
            header("location: /frizerski_salon/index.php?error=AppointmentIsTaken");
            exit();
        }
        if($this->checkDailyReservationLimit()){
            header("location: /frizerski_salon/index.php?error=MoreThan3ReservationPerDay");
            exit();
        }
        if($this->afterWorkingTime()){
            header("location: /frizerski_salon/index.php?error=afterWorkingTime");
            exit();
        }

        $this->setReservation($this->userId,$this->date,$this->startTime,$this->treatmentDuration,$this->note,$this->endTime);
        
    }

    private function emptyInput(){
        return empty($this->userId) || empty($this->date) || empty($this->startTime) || empty($this->treatmentDuration) || empty($this->note);
    }

    private function pastDate(){
        return (strtotime($this->date)<strtotime(date('Y-m-d')));
    }

    private function maxTreatmentDuration(){
        return ($this->treatmentDuration>50);
    }

    private function offHour(){
        $hour = explode(':', $this->startTime)[0];
        return $hour<9 || $hour>20;
    }

    private function isAppointmentTaken(){
        return $this->checkIsAppointmentTaken($this->date,$this->startTime,$this->endTime);
    }

    private function checkDailyReservationLimit(){
        return $this->dailyReservationPerUser($this->userId,$this->date)>2;
    }
    
    private function afterWorkingTime(){
        return ($this->endTime >"20:01");
    }

}