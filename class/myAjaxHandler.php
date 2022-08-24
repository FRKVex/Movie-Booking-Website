<?php
require_once 'booking.php';

if(!empty($_POST) && isset($_POST['seatid']) && ($_POST['date']) && ($_POST['time'])) {
    $booking = new booking($_POST['seatid'] , $_POST['date'] , $_POST['time']);
    $result = $booking->bookSeat();
    echo $result; // Would get 1 for true & 0 for false
}

?>