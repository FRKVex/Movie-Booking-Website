<?php
    class seats extends config{

        public function generateRowOne(){
            $con = $this->con();
            $sql = "SELECT * FROM `tbl_booking` LIMIT 18";
            $data = $con->prepare($sql);
            $data->execute();
            $result = $data->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $data){
                echo "<div id='$data[seat_no]' class='seat $data[status]'>$data[seat_no]</div>";
            }
        }

        public function generateRowTwo(){
            $con = $this->con();
            $sql = "SELECT * FROM `tbl_booking` LIMIT 18 OFFSET 18";
            $data = $con->prepare($sql);
            $data->execute();
            $result = $data->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $data){
                echo "<div id='$data[seat_no]' class='seat $data[status]'>$data[seat_no]</div>";
            }
        }

        public function generateRowthree(){
            $con = $this->con();
            $sql = "SELECT * FROM `tbl_booking` LIMIT 18 OFFSET 36";
            $data = $con->prepare($sql);
            $data->execute();
            $result = $data->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $data){
                echo "<div id='$data[seat_no]' class='seat $data[status]'>$data[seat_no]</div>";
            }
        }

        public function generateRowFour(){
            $con = $this->con();
            $sql = "SELECT * FROM `tbl_booking` LIMIT 18 OFFSET 54";
            $data = $con->prepare($sql);
            $data->execute();
            $result = $data->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $data){
                echo "<div id='$data[seat_no]' class='seat $data[status]'>$data[seat_no]</div>";
            }
        }

        public function generateRowFive(){
            $con = $this->con();
            $sql = "SELECT * FROM `tbl_booking` LIMIT 18 OFFSET 72";
            $data = $con->prepare($sql);
            $data->execute();
            $result = $data->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $data){
                echo "<div id='$data[seat_no]' class='seat $data[status]'>$data[seat_no]</div>";
            }
        }

        public function generateRowSix(){
            $con = $this->con();
            $sql = "SELECT * FROM `tbl_booking` LIMIT 18 OFFSET 90";
            $data = $con->prepare($sql);
            $data->execute();
            $result = $data->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $data){
                echo "<div id='$data[seat_no]' class='seat $data[status]'>$data[seat_no]</div>";
            }
        }
    }
?>
