<!DOCTYPE html>
<html>
	<head>
		<title>Početna</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Luckiest+Guy&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet">
		<script>
			$(document).ready(function()
			{
				//set initial state.
				//$("#checkbox1").val(this.checked);

				$("#checkbox1").change(function() {
					if(this.checked) {
						$("body").css("background-image","url(img/background.jpg)");
					}
					else{
						$("body").css("background-image","url(img/background2.jpg)");
					}
				});
			});
		</script>
		<link rel = "stylesheet" href="style.css">
	</head>
	<body>
		<header>
			<div class="row no-gutters">
				<div class="col-xl-5">
					<h1 class="pl-5 pt-2">Gde?</h1>
				</div>
				<div class="col-xl-7">
					<nav class="navbar navbar-dark bg-transparent navbar-expand-xl">
					
						<div class="centerMenuButton">
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon">
							</button>
						</div>
						
						<div class="collapse navbar-collapse" id="navbarNavDropdown">
							<ul class="navbar-nav ml-auto pt-5 pr-5">
									<li class="nav-item active font">
										<label class="switch">
											<input type="checkbox" id="checkbox1">
											<span class="slider round"></span>
										</label>
									</li>
								<li class="nav-item active font">
									<div class="flexboxRow">
										<div class="navbarBorder notVisible"></div>
										<a class="nav-link px-2 navbarLink" href="index.php">Pocetna</a>
									</div>
								</li>
								<li class="nav-item font">
									<div class="flexboxRow">
										<a class="nav-link px-2 navbarLink" href="Gde/gde.php">Gde</a>
										<div class="navbarBorder"></div>
									</div>
								</li>
								<li class="nav-item font">
									<div class="flexboxRow">
										<a class="nav-link px-2 navbarLink" href="Dogadjaj/dogadjaj.php">Dogadjaj</a>
										<div class="navbarBorder"></div>
									</div>
								</li>
								<li class="nav-item font">
									<div class="flexboxRow">
										<a class="nav-link px-2 navbarLink" href="KoSamJa/kosamja.php">Ko sam ja</a>
										<div class="navbarBorder"></div>
									</div>
								</li>
								<li class="nav-item font">
									<div class="flexboxRow">
										<a class="nav-link px-2 navbarLink" href="QnA/qna.php">Q&A</a>
										<div class="navbarBorder"></div>
									</div>
								</li>
								<li class="nav-item font">
									<div class="flexboxRow">
										<a class="nav-link px-2 navbarLink" href="Diskusija/diskusija.php">Diskusija</a>
										<div class="navbarBorder"></div>
									</div>
								</li>
								<li class="nav-item font">
									<div class="flexboxRow">
										<a class="nav-link px-2 navbarLink" href="Pregled/pregled.php">Pregled</a>
										<div class="navbarBorder"></div>
									</div>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</header>
		<div class="container-fluid">
			<div class="row no-gutters">
				<div class="col-xl-5">
					<a class="link" href="https://www.exitfest.org/" target="_blank">
						<div id="slider" class="carousel slide hoveringDiv" data-ride="carousel">

							<ul class="carousel-indicators">
								<li data-target="#slider" data-slide-to="0" class="active"></li>
								<li data-target="#slider" data-slide-to="1"></li>
								<li data-target="#slider" data-slide-to="2"></li>
							</ul>

							<div class="carousel-inner">
								<div class="carousel-item active">
									<img alt = "" src="img/exit_festival1.jpg" class="carouselImages" alt="Los Angeles">
								</div>
								<div class="carousel-item">
									<img alt = "" src="img/exit_festival2.jpg" class="carouselImages" alt="Chicago">
								</div>
								<div class="carousel-item">
									<img alt = "" src="img/exit_festival3.jpg" class="carouselImages" alt="New York">
								</div>
								<div class="cardTrack">
									<p class="trackPara">Exit Festival</p>
								</div>
							</div>

							<a class="carousel-control-prev" href="#slider" data-slide="prev">
								<span class="carousel-control-prev-icon"></span>
							</a>
							<a class="carousel-control-next" href="#slider" data-slide="next">
								<span class="carousel-control-next-icon"></span>
							</a>
						</div>
					</a>
					<div class="row no-gutters my-3">
						<div class="col-sm-5 hoveringDiv mt-5">
							<a class="link" href="https://gucafestival.rs/" target="_blank">
								<img alt = "" src="img/guca.jpg" class="imgStyle">
								<div class="festivalLine"><h3>Guca fest</h3></div>
							</a>
						</div>
						<div class="offset-sm-2">
						</div>
						<div class="col-sm-5 hoveringDiv mt-5">
							<a class="link" href="https://lovefest.rs/" target="_blank">
								<img alt = "" src="img/lovefest.jpg" class="imgStyle">
								<div class="festivalLine"><h3>Lovefest</h3></div>
							</a>
						</div>
					</div>
					<div class="row no-gutters my-3">
						<div class="col-sm-5 hoveringDiv mt-5">
							<a class="link" href="http://arsenalfest.rs/" target="_blank">
								<img alt = "" src="img/arsenal.jpg" class="imgStyle">
								<div class="festivalLine"><h3>Arsenal fest</h3></div>
							</a>
						</div>
						<div class="offset-sm-2">
						</div>
						<div class="col-sm-5 hoveringDiv mt-5">
							<a class="link" href="https://www.srbijazamlade.rs/putovanja/centralna-srbija/maglic-fest-21-5-2017" target="_blank">
								<img alt = "" src="img/maglic.jpg" class="imgStyle">
								<div class="festivalLine"><h3>Maglic fest</h3></div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-xl-7">
					<div class="row no-gutters">
						<div class="offset-xl-1"></div>
						<div class="col-xl-4">
							<a href="Novosti/novosti.php" class="link">
								<div class="hoveringTextDiv">
									<h2>NOVOSTI</h2>
									<br><h2>#1</h2>
											<p class="newsPara">U toku je humanitarna akcija koja će u saradnji sa LoveFest organizatorima pomoći u finansiranju lečenja deca koju boluju od autizma, kao i decije paralize. Sav novac od naplate karata će biti doniran u njihovu korist.
											</p>
									<br><h2>#2</h2>
											<p class ="newsPara"> U saradnji sa RADIO 96.2, poklanjamo ulaznice nasumično izvučenim učesnicima koji tačno odgovore
											na pitanja koja će postaviti voditelj Marko u toku dana.</p>
								</div>
							</a>
						</div>
						<div class="offset-xl-2"></div>
						<div class="col-xl-4">
							<a href="Uskoro/uskoro.php" class="link">
								<div class="hoveringTextDiv">
										<h2>USKORO</h2>
										<br><h2>#1</h2>
												<p class="newsPara">Dodata je nova ekstravagantna lokacija na našoj stranici koja se nalazi na prostoriji Beograda!
												Uz samo par klikova moći ćete da prisustvujete raznim događajima. Na našem sajtu takođe možete da organizujete javne događaje!</p>			
										<br><h2>#2</h2>
												<p class="newsPara">Festival nauke je u potrazi za volonterima koji će pomoći u realizaciji, kao i organizaciji ove
												fantastične bine za mlade. Ako si zainteresovan, prijave će se uskoro otvoriti, a mi te očekujemo!</p>
								</div>
							</a>
						</div>
						<div class="offset-xl-1"></div>
					</div>
					
					<h2 class="pt-5 pb-4">KAKO BISTE OPISALI SEBE?</h2>
					<div class="row">
						<div class="offset-1"></div>
						<div class="col-xl-2">
							<a href="KoSamJa/kosamja.php#naucnik" target="_blank">
								<div class="card"  id="c1">
									<img alt = "" class="avatarImage" src="img/naucnik.png" onclick="povecaj1()">
									<div class="avatarLine"><h4 class="link">Naucnik</h4></div>
								</div>
							</a>
						</div>
						<div class="col-xl-2">
							<a href="KoSamJa/kosamja.php#avanturista" target="_blank">
								<div class="card"  id="c2">
									<img alt = "" class="avatarImage" src="img/avanturista.png"  onclick="povecaj2()">
									<div class="avatarLine"><h4 class="link">Avanturista</h4></div>
								</div>
						</div>
						<div class="col-xl-2" >
							<a href="KoSamJa/kosamja.php#sportista" target="_blank">
								<div class="card" id="c3">
									<img alt = "" class="avatarImage" src="img/sportista.png"  onclick="povecaj3()">
									<div class="avatarLine"><h4 class="link">Sportista</h4></div>
								</div>
							</a>
						</div>
						<div class="col-xl-2">
							<a href="KoSamJa/kosamja.php#partymaniac" target="_blank">
								<div class="card" id="c4">
									<img alt = "" class="avatarImage" src="img/party-maniac.png"  onclick="povecaj4()">
									<div class="avatarLine"><h4 class="link">Partymaniac</h4></div>
								</div>
							</a>
						</div>
						<div class="col-xl-2">
							<a href="KoSamJa/kosamja.php#muzicar" target="_blank">
								<div class="card"  id="c5">
									<img alt = "" class="avatarImage" src="img/muzicar.png"  onclick="povecaj5()">
									<div class="avatarLine"><h4 class="link">Muzicar</h4></div>
								</div>
							</a>
						</div>
						<div class="offset-1"></div>
					</div>
				</div>
			</div>	
		</div>
		<footer class="pt-5">
				<div class="row no-gutters">
					<div class="col-md-3">
						
						<p class="footerHeader">Drustvene mreze</p>
						<ul class="footerUl">
						
							<li class="footerLi">
								<a href="https://www.facebook.com/Hakaton/" class="footerLink" target="_blank">
									<p class="footerList">Facebook</p>
								</a>
							</li>
							<li class="footerLi">
								<a href="https://twitter.com/hakatonrs" class="footerLink" target="_blank">
									<p class="footerList">Twitter</p>
								</a>
							</li>
							<li class="footerLi">
								<a href="https://www.instagram.com/hakaton_za_srednjoskolce/" class="footerLink" target="_blank">
									<p class="footerList">Instagram</p>
								</a>
							</li>
							
						</ul>
						
					</div>
					<div class="col-md-3">
					
						<p class="footerHeader">Kontakt</p>
						<ul class="footerUl">
							<li class="footerLi">
								<a href="https://www.instagram.com/andrija.slovic/?hl=sr" class="footerLink" target="_blank">
									<p class="footerList">Andrija Slović</p>
								</a>
							</li>
							<li class="footerLi">
								<a href="https://www.instagram.com/panto133/?hl=sr" class="footerLink" target="_blank">
									<p class="footerList">Strahinja Pantić</p>
								</a>
							</li>
							<li class="footerLi">
								<a href="https://www.instagram.com/weks01/?hl=sr" class="footerLink" target="_blank">
									<p class="footerList">Veljko Jovanović</p>
								</a>
							</li>
							<li class="footerLi">
								<a href="https://www.instagram.com/neplacena_kirija/?hl=sr" class="footerLink" target="_blank">
									<p class="footerList">Nevena Gligorov</p>
								</a>
							</li>
						</ul>
						
					</div>
					<div class="col-md-3">
					
						<p class="footerHeader">Saradnici</p>
						<ul class="footerUl">
							<li class="footerLi">
								<a href="http://hakaton.fonis.rs/" class="footerLink" target="_blank">
									<p class="footerList">Hakaton</p>
								</a>
							</li>
							<li class="footerLi">
								<a href="http://www.fon.bg.ac.rs/" class="footerLink" target="_blank">
									<p class="footerList">Fon</p>
								</a>
							</li>
							<li class="footerLi">
								<a href="https://www.interventure.info/" class="footerLink" target="_blank">
									<p class="footerList">Interventure</p>
								</a>
							</li>
							<li class="footerLi">
								<a href="https://www.catenamedia.com/" class="footerLink" target="_blank">
									<p class="footerList">Catenamedia</p>
								</a>
							</li>
						</ul>
					</div>
					<div class="col-md-3">
					<form action="index.php" method="POST" enctype="multipart/form-data" name="myForm" onsubmit="return validateForm()">
						<p class="footerHeader">Pratite obavestenja</p>
						<ul class="footerUl">
							<li class="footerLi">
								<input type="email" placeholder = " E-mail" name="emailText">
								
							</li>
							<li class="footerLi">
									<input type="submit" name="dugmePrimaj" value = "PRIMAJTE OBAVEŠTENJA">
										<?php 

										if((isset($_POST["emailText"])))
											$text = $_POST["emailText"];		
										else exit();

						
										$servername = "localhost";
										$username = "root";
										$password = "";
										$dbname = "hakaton";

										$conn = new mysqli($servername, $username, $password, $dbname);

										if ($conn->connect_error) {
										exit('Could not connect');
										}

										$sql = "INSERT INTO hakaton.pretplatnici (email) VALUE ('$text')";
										$conn->query($sql);
										$conn->close();

										?>
							</li>
						</ul>
					</div>
				</form>
				</div>			
			</footer>	
	</body>
</html>