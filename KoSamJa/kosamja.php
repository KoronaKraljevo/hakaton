<!DOCTYPE html>
<html>

    <head>
		<title>Ko Sam Ja</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Luckiest+Guy&display=swap" rel="stylesheet">
		<script src="https://use.fontawesome.com/2a921c3ab1.js"></script>
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
        <link rel = "stylesheet" href="uredjivanjeKosamja.css">
    </head>
    <body>
		<header>
			<div class="row no-gutters">
				<div class="col-xl-5">
					<h1 class="pl-5 pt-2">KO SAM JA?</h1>
				</div>
				<div class="col-xl-7">
					<nav class="navbar navbar-dark bg-transparent navbar-expand-xl">
					
						<div class="centerMenuButton">
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
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
										<a class="nav-link px-2 navbarLink" href="../QnA/qna.php">Q&A</a>
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
        <div class="container-fluid">
			<div class="row no-gutters">
				<div class="col-lg-9 no-gutters">
					<div class="row no-gutters">
						<div class="col-lg-4 center">
							<img id="naucnik" class="avatarImage" src="../img/naucnik.png">
						</div>
						<div class="col-lg-8">
							<h2>Naucnik</h2>
							<p class="avatarText">Naučnici se ponose svojom inventivnošću i kreativnošću, svojom jedinstvenom pogledom na svet i visprenim intelektom. 
Obično poznati kao filozofi, mislioci ili rasejani profesori, osobe tipa Naučnik zaslužne su za mnoga naučna otkrića u istoriji čovečanstva.
Vrlo rado će prisustvovati naučnim i kulturnim događajima, ali za razliku od tipa Sportista, definitivno ne bi otišao na utakmicu.</p>
						</div>
					</div>
				</div>
				<div class="offset-lg-3"></div>
			</div>
			<div class="row no-gutters">
				<div class="offset-lg-3"></div>
				<div class="col-lg-9">
					<div class="row no-gutters">
						<div class="col-lg-8">
							<h2>Muzicar</h2>
							<p class="avatarText">Ako iko može iz čista mira da zapeva, to su osobe tipa Muzičar. Ove osobe lako ponese uzbuđenje, a želja im je da se i svi ostali tako osećaju. 
	U situacijama kada druge treba ohrabriti nijedan tip ličnosti nije tako velikodušan u pogledu svog vremena i energije 
	kao Muzičar i nijedan tip ličnosti to ne radi sa tako neodoljivim stilom. Ako neko zna da uživa svojim čulom sluha, to je Muzičar!</p>
						</div>
						<div class="col-lg-4 center">
							<img id="muzicar" class="avatarImage1" src="../img/muzicar.png">
						</div>
					</div>
				</div>
			</div>
			<div class="row no-gutters">
				<div class="col-lg-9">
					<div class="row no-gutters">
						<div class="col-lg-4 center">
							<img id="avanturista" class="avatarImage" src="../img/avanturista.png">
						</div>
						<div class="col-lg-8">
							<h2>Avanturista</h2>
							<p class="avatarText">Ličnosti tipa Avanturista su pravi umetnici, ali ne uvek u onom uobičajenom smislu da sede napolju i slikaju vesele
	jelkice. Ipak, oni su dovoljno često savršeno sposobni za tako nešto. Umesto toga, oni se služe estetikom, dizajnom, pa čak
	i sopstvenim izborima i aktivnostima kako bi pomerali granice ustaljenih društvenih pravila. Osobe tipa Avanturista uživaju 
	u remećenju tradicionalnih očekivanja tako što eksperimentišu sa lepotom i ponašanjem – sva je prilika da su više puta rekli “Ne ograničavajte me!”</p>
						</div>
					</div>
				</div>
				<div class="offset-lg-3">
				</div>
			</div>
			<div class="row no-gutters">
				<div class="offset-lg-3"></div>
				<div class="col-lg-9">
					<div class="row no-gutters">
						<div class="col-lg-8">
							<h2>Partymaniac</h2>
							<p class="avatarText">Osobe koje pripadaju tipu ličnosti Partymaniac-i su, u nedostatku boljeg izraza, popularni – što ima smisla, 
	imajući u vidu da je to ujedno i vrlo čest tip ličnosti kojem pripada dvanaest odsto stanovništva. 
	U srednjoj školi, Partymaniac-i su navijačice i sportisti, oni daju intonaciju, u središtu su pažnje i vode svoje 
	ekipe do pobede i slave. Kasnije u životu, Partymaniac-i i dalje sa uživanjem pružaju podršku svojim prijateljima i voljenim osobama, 
	organizuju društvena okupljanja i iz petnih žila se trude mogu da svi budu srećni.</p>
						</div>
						<div class="col-lg-4 center">
							<img id="partymaniac" class="avatarImage1" src="../img/party-maniac.png">
						</div>
					</div>
				</div>
			</div>
			<div class="row no-gutters">
				<div class="col-lg-9">
					<div class="row no-gutters">
						<div class="col-lg-4 center">
							<img id="sportista" class="avatarImage" src="../img/sportista.png">
						</div>
						<div class="col-lg-8">
							<h2>Sportista</h2>
							<p class="avatarText">Sportista, uvek spreman da dobrom i fer igrom sebi ulepša dan, a ozbiljnošću dostigne
	i najveći uspeh, neće dozvoliti da ga iko omete u tome. Bilo da je to vaterpolo, košarka,
	bungee-jumping ili ronjenje - najprijatnije se oseća u prisustvu društva sa kojim može baš to da radi.</p>
						</div>
					</div>
				</div>
				<div class="offset-lg-3">
				</div>
			</div>
		</div>
		<form action="kosamja.php" method="POST" enctype="multipart/form-data">
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