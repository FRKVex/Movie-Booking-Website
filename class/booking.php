<?php
require_once 'config.php';

class booking extends config{
    public $id;
    public $date;
    public $time;

    public function __construct($id, $date, $time){
        $this->id = $id;
        $this->date = $date;
        $this->time = $time;
    }

    public function bookSeat(){

        $selectedSeats = str_repeat('?,', count($this->id) - 1) . '?';

        $con = $this->con();
        $sql = "UPDATE `tbl_booking` SET `status`= 'booked', `date` = '$this->date', `time` = '$this->time' WHERE `seat_no` IN ($selectedSeats)";
        $data = $con->prepare($sql);

        echo $sql;

        if($data->execute($this->id)){
            return true;
        }else{
            return false;
        }
    }
}
?>