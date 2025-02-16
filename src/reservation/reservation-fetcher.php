<?php
include_once "../../config/dbh.classes.php";
include_once "classes/reservation-fetcher.classes.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);
    
    $reservationDate = $input['selectedDate'] ?? date("Y-m-d");
    if(!empty($reservationDate)){
        $reservationFetcher = new ReservationFetcher();
        $reservations = $reservationFetcher->fetchReservations($reservationDate);

        echo json_encode(['success' => true, 'data' => $reservations]);
    } else {
        echo json_encode(['success' => false, 'message' => 'No date provided.']);
    }
} 


