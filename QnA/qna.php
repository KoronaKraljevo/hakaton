<!DOCTYPE html>
<html>
	<head>
		<title>QnA</title>
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
						$("body").css("background-image","url(../img/background.jpg)");
					}
					else{
						$("body").css("background-image","url(../img/background2.jpg)");
					}
				});
			});
		</script>
		<link rel = "stylesheet" href="uredjivanjeQna.css">
	</head>
	
	<body>
		<header>
			<div class="row no-gutters">
					<div class="col-xl-5">
						<h1 class="pl-5 pt-2">Q&A</h1>
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
											<a class="nav-link px-2 navbarLink" href="../index.php">Pocetna<span class="sr-only">(current)</span></a>
									</div>
									</li>
									<li class="nav-item font">
										<div class="flexboxRow">
											<a class="nav-link px-2 navbarLink" href="../Gde/gde.php">Gde</a>
											<div class="navbarBorder"></div>
									</div>
									</li>
									<li class="nav-item font">
										<div class="flexboxRow">
											<a class="nav-link px-2 navbarLink" href="../Dogadjaj/dogadjaj.php">Dogadjaj</a>
											<div class="navbarBorder"></div>
									</div>
									</li>
									<li class="nav-item font">
										<div class="flexboxRow">
											<a class="nav-link px-2 navbarLink" href="../KoSamJa/kosamja.php">Ko sam ja</a>
											<div class="navbarBorder"></div>
									</div>
									</li>
									<li class="nav-item font">
										<div class="flexboxRow">
											<a class="nav-link px-2 navbarLink" href="#">Q&A</a>
											<div class="navbarBorder"></div>
									</div>
									</li>
									<li class="nav-item font">
										<div class="flexboxRow">
											<a class="nav-link px-2 navbarLink" href="../Diskusija/diskusija.php">Diskusija</a>
											<div class="navbarBorder"></div>
									</div>
									</li>
									<li class="nav-item font">
										<div class="flexboxRow">
											<a class="nav-link px-2 navbarLink" href="../Pregled/pregled.php">Pregled</a>
											<div class="navbarBorder"></div>
									</div>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</header>
		
		<h2>Kako organizovati dogadjaj?</h2>
		<div class="qnaAnswer">Imate odličnu ideju i organizaciju, a ne znate kako i da raširite glas o njoj? Mi vam baš nudimo tu mogućnost. Idite na stranicu pod nazivom 'Događaj' i prijavite svoj dogadjaj. Za uzvrat ne tražimo ništa, a ono što možemo obećati je da ce ceo region saznati za vaš događaj!</div>
		
		<h2>Kako se pridruziti dogadjaju?</h2>
		<div class="qnaAnswer">Dogadjaje organizuju ljudi širom Srbije i možete se pridružiti bilo kojem javnom događaju i tako sklopiti nova poznanstva! Klikom na dugme 'Ime dugmeta za dodavanje' dajete informaciju organizatoru da ćete prisustvovati njihovom događaju.</div>
		
		<h2>Da li mogu da otkazem dogadjaj koji sam ogranizovao?</h2>
		<div class="qnaAnswer">Možete u bilo kom trenutku otkazati organizovan događaj i svim korisnicima ovog sajta koji su trebali da prisustvuju događaju će stići mejl da je događaj otkazan tako da ne morate da javljate svakom korisniku ponaosob.</div>
		
		<h2>Izabrao sam svog avatara ali nisam dobio nikakve ponude.</h2>
		<div class="qnaAnswer">Kada izaberete svog avatara onda ćete biti odvedeni na stranicu koja će opisati vašeg avatara. Da biste dobili preporučene događaje morate posetiti stranicu Događaj klikom na dugme u navbaru 'Događaj' i kada izaberete grad prikazaće Vam se događaji koji su sortirani prema izboru vašeg avatara.</div>
		
		<h2>Da li moram da napravim nalog da bih prisustvovao i organizovao dogadjaje?</h2>
		<div class="qnaAnswer">Ne morate da pravite naloge za kreiranje i prijavljivanje prisustva na javnim događajima. Korisnici koji su napravili događaj mogu da vide koliko ljudi će da prisustvuje događaju. </div>
		<form action="qna.php" method="POST" enctype="multipart/form-data">
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
					</div>				
				</footer>
			</form>
	</body>
</html>