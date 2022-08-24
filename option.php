<?php
  require_once 'php/init.php';

?>
<html>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Centro Teatro</title>
		<link rel="shortcut icon" href="img/favicon.ico">
		<link rel="stylesheet" type="text/css" href="resource/css/style.css?v=<?php echo time(); ?>">
		<link rel="icon" type="image/png" href="img/logo.png">
		<link rel="shortcut icon" href="resource/img/logo.png">
	</head>
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
		<img src="resource/img/logo.png" class="img-fluid logo1">
	</nav>
	<body class= "wrapper">
		<div class="container">
			<div class="seat-map">
				<div class="screen">SCREEN</div>
					<div class="row">
						<?php
						$seats = new seats;
						$seats->generateRowOne();
						?>
					</div>

					<div class="row">
						<?php
						$seats = new seats;
						$seats->generateRowTwo();
						?>
					</div>

					<div class="row">
						<?php
						$seats = new seats;
						$seats->generateRowThree();
						?>
					</div>

					<div class="row">
						<?php
						$seats = new seats;
						$seats->generateRowFour();
						?>
					</div>

					<div class="row">
						<?php
						$seats = new seats;
						$seats->generateRowFive();
						?>
					</div>

					<div class="row">
						<?php
						$seats = new seats;
						$seats->generateRowSix();
						?>
					</div>

					<ul class="showcase">
					<li>
					<div class="seat"></div>
					<small>Available</small>
					</li>
					<li>
					<div class="seat selected"></div>
					<small>Selected</small>
					</li>
					<li>
					<div class="seat booked"></div>
					<small>Booked</small>
					</li>
				</ul>
			</div>
			</div>
			<div class="booking-form-container">

			<div class="col mt-4 bg-light">
          		<div class="container mt-5">
            		<h2 class="head">Booking Details</h2>
            		<h5 class="seat-no">Selected Seats:</h5>
            		<div id=overflowTest>
						<div class="container">
							<div id="select-seat">
							</div>
						</div>
            		</div>
            		<br/><br/>
            		<input placeholder="DATE" type="date" id="myDate" required>
            		
                    <select name="time" id="myTime" required>
                        <option value="" disabled selected>TIME</option>
                        <option value="09:00:00">09:00 AM</option>
                        <option value="12:00:00">12:00 PM</option>
                        <option value="15:00:00">03:00 PM</option>
                        <option value="18:00:00">06:00 PM</option>
                        <option value="21:00:00">09:00 PM</option>
                    </select>
				<button type="button" name="Submit" id="save">Book</button>

				<div id="myModal" class="modal">
					<div class="modal-content">
						<div class="modal-header">
							<span class="close" onClick="window.location.reload()">&times;</span>
						</div>
						<div class="modal-body">
							<p>Thank you for booking ticket through</p>
							<p>Centro Theatro Cinema!</p>
							<p id="demo"></p>
						</div>
					</div>
				</div>
				<script>
				var modal = document.getElementById("myModal");
				var btn = document.getElementById("save");

				btn.onclick = function() {
					modal.style.display = "block";
				}
				</script>
     	   </div> 
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script>
			var i;
			var ids = [];
			$seatid = ids;
			$(document).ready(function() {
				var htmlString;
				$('.seat').click(function(){
					var id = jQuery(this).attr("id");
					if ($(this).hasClass('available') && !$(this).hasClass('selected')){
						ids.push(id);
						console.log(ids);
					}else if($(this).hasClass('selected')){
						if(ids.indexOf(id) > -1) {
							i = ids.indexOf(id);
							ids.splice(i, 1)
							console.log(ids);
						}
					}
					document.getElementById("select-seat").innerHTML = '<p>' + ids +'</p>'                     
				});
			});

			$('#save').click(function(){
				$date = document.getElementById("myDate").value;
			  	$time = document.getElementById("myTime").value;
			  	console.log($date);
			  	console.log($time);
				$.post("class/myAjaxHandler.php", 
				{ 
					seatid: $seatid,
					time: $time,
					date: $date
					
				}, 
					function(data, status){
					console.log('data',data);
					console.log('status',status);
				});
			});
		</script>
		<script src="resource/js/script.js" type="text/javascript"></script>
	</body>
</html>
