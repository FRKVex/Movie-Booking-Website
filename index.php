<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
			integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
		<link rel="stylesheet" href="resource/css/style.css">
		<link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap.min.css">
		<title>Centro Teatro</title>
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
		
	</head>
  	<body>
		<header id="Home">
			<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
			<img src="resource/img/logo.png" class="img-fluid logo">
				<div class="container-fluid">
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mx-auto mb-2 mb-lg-0">
						<li class="nav-item">
						<a class="nav-link" aria-current="page" href="#Home">Home</a>
						</li>
						<li class="nav-item">
						<a class="nav-link" href="#Movie-List">Movies</a>
						</li>
						<li class="nav-item">
						<a class="nav-link" href="#Coming-Soon">Discover</a>
						</li>
					</ul>
						<button class="btn btn-outline-success" type="submit">Sign in</button>
					</div>
				</div>
			</nav>

			<div class="mid">
				<video autoplay muted loop>
					<source class="embed-responsive" src="resource/img/VHS.mp4" type="video/mp4">
				</video>
				<div class="hero text-center">
					<h2 class="text-light display-4 font-weight-bold">Movie Booking Online</h2>
					<p class="text-light mx-auto">It's all about convinience. You have remote to everything.</p>
					<a href="#">Get Started</a>
				</div>	
			</div>
		</header>

		<section class="movies" id="Movie-List">
				<div class="compressor">
					<div class="row">
						<div class="col-4">
							<a href="option.php"><img src="resource/img/movie1.jpg"></a>
							<div class="movie-info">
								<h4>Joker</h4>
							</div>
						</div>
						<div class="col-4">
							<a href="option.php"><img src="resource/img/movie2.jpg"></a>
							<div class="movie-info">
								<h4>Project Power</h4>
							</div>
						</div>
					
						<div class="col-4">
							<a href="option.php"><img src="resource/img/movie3.jpg"></a>
							<div class="movie-info">
								<h4>No Time to Die</h4>
							</div>
						</div>

						<div class="col-4">
							<a href="option.php"><img src="resource/img/Movie4.jpg"></a>
							<div class="movie-info">
								<h4>Soul</h4>
							</div>
						</div>		
						
						<div class="col-4">
							<a href="option.php"><img src="resource/img/movie5.jpg"></a>
							<div class="movie-info">
								<h4>Tenet</h4>
							</div>>						
						</div>

						<div class="col-4">
							<a href="option.php"><img src="resource/img/movie6.jpg"></a>
							<div class="movie-info">
								<h4>Wonder Woman</h4>
							</div>
						</div>

						<div class="col-4">
							<a href="option.php"><img src="resource/img/Movie7.jpg"></a>
							<div class="movie-info">
								<h4>The New Mutants</h4>
							</div>
						</div>

						<div class="col-4">
							<a href="option.php"><img src="resource/img/movie8.jpg"></a>
							<div class="movie-info">
								<h4>Bloodshot</h4>
							</div>
						</div>

						<div class="col-4">
							<a href="option.php"><img src="resource/img/movie9.jpg"></a>
							<div class="movie-info">
								<h4>Rampage</h4>
							</div>
						</div>

						<div class="col-4">
							<a href="option.php"><img src="resource/img/movie10.jpg"></a>
							<div class="movie-info">
								<h4>6 Underground</h4>
							</div>
						</div>
					

					<div class="collapse" id="collapseProductView">
						<div class="row">
							<div class="col-4">
								<a href="option.php"><img src="resource/img/movie11.jpg"></a>
								<div class="movie-info">
									<h4>Robin Hood</h4>
								</div>
							</div>

							<div class="col-4">
								<a href="option.php"><img src="resource/img/movie12.jpg"></a>
								<div class="movie-info">
									<h4>Karate Kid</h4>
								</div>
							</div>

							<div class="col-4">
								<a href="option.php"><img src="resource/img/movie13.jpg"></a>
								<div class="movie-info">
									<h4>Extraction</h4>
								</div>
							</div>

							<div class="col-4">
								<a href="option.php"><img src="resource/img/movie14.jpg"></a>
								<div class="movie-info">
									<h4>Black Panther</h4>
								</div>
							</div>

							<div class="col-4">
								<a href="option.php"><img src="resource/img/movie15.jpg"></a>
								<div class="movie-info">
									<h4>Cherry</h4>
								</div>
							</div>
						</div>
					</div>
					<button class="btn btn-outline-dark mx-auto" id="toggle" type="button" data-bs-toggle="collapse" data-bs-target="#collapseProductView" aria-expanded="false" aria-controls="collapseProductView" onclick="style.display = 'block'">Show more</button>
				</div>
		</section>

		<section class="upcoming-movies py-5" id="Coming-Soon">
			<div class="row align-items-center container mx-auto">
				<div class="text col-lg-6 col-md-6 col-12 w-50">
					<img class="ms-auto" src="resource/img/logo.png">
					<h6>GET PREMIUM ACCESS</h6>
					<p>Grab the opportunity now! To get a chance exciting deals for these upcoming movies!<p>
					<a href="#">Reserve now!</a>
				</div>
				<div class="text col-lg-6 col-md-6 col-12 w-50 pt-5 pb-2">
					<video autoplay muted loop>
						<source class="embed-responsive" src="resource/img/cruella.mp4" type="video/mp4">
					</video>
					<video autoplay muted loop>
						<source class="embed-responsive" src="resource/img/FreeGuy.mp4" type="video/mp4">
					</video>
					<video autoplay muted loop>
						<source class="embed-responsive" src="resource/img/SJ.mp4" type="video/mp4">
					</video>

				</div>
		</section>
	

		<script>
			var content = document.getElementById("Movie-List");
			var button = document.getElementById("toggle");

			button.onclick = function () {

				if(content.className == "open"){
					//shrink the box
					content.className = "";
					button.innerHTML = "Show more";
				} else {
					//expand the box
					content.className = "open";
					button.innerHTML = "Show less";
				}

			};
		</script>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>
