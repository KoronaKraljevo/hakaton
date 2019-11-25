<!DOCTYPE html>
<html>
    <head>
		<title>Gde</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Luckiest+Guy&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet">
        <script src="https://use.fontawesome.com/2a921c3ab1.js"></script>
		<script src="tabelaGde.js"></script>
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
		<link rel = "stylesheet" href="uredjivanjeGde.css">
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
										<a class="nav-link px-2 navbarLink" href="../index.php">Pocetna<span class="sr-only">(current)</span></a>
									</div>
								</li>
								<li class="nav-item font">
									<div class="flexboxRow">
										<a class="nav-link px-2 navbarLink" href="gde.php">Gde</a>
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
                <div class="row">
                    <div class="col-xl-6">             
                            <form action=""> 
                                <select name="customers" id="customers" onchange="showCustomer(this.value)" class="form-control fontA">
                                  <option value="">Izaberite grad</option>
                                  <option value="Kraljevo">Kraljevo</option>
                                  <option value="Beograd ">Beograd</option>
                                  <option value="Novi Sad">Novi Sad</option>
                                  <option value="Cacak">Cacak</option>
                                  <option value="Kragujevac ">Kragujevac</option>
                                  <option value="Nis">Nis</option>
                                </select><br>
                            </form>              
                              <div id="txtHint"></div>  
                    </div>
                    <div class="col-xl-6 centerMap">
                        <div class="mapouter">

                            <div class="gmap_canvas">
                                <iframe class="mapIframe" id="gmap_canvas" src="https://maps.google.com/maps?q=beograd&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                                <a href="https://www.whatismyip-address.com"></a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="offset-lg-1"></div>
                    <div class="col-lg-2">
						<a href="../KoSamJa/kosamja.php#naucnik" target="_blank" class="link">
                        <div class="card" id="c1">
                            <img src="../img/naucnik.png" class ="avatarImage" onclick="povecaj1()">
                            <div class="avatarLine"><h4 class="link">Naucnik</h4></div>
                        </div>
						</a>
                    </div>
                    <div class="col-lg-2">
						<a href="../KoSamJa/kosamja.php#avanturista" target="_blank" class="link">
                        <div class="card" id="c2">
                                <img src="../img/avanturista.png" class ="avatarImage" onclick="povecaj2()">
                                <div class="avatarLine"><h4 class="link">Avanturista</h4></div>
                        </div>
						</a>
                    </div>
                    <div class="col-lg-2">
						<a href="../KoSamJa/kosamja.php#sportista" target="_blank" class="link">
                        <div class="card" id="c3">
                                <img src="../img/sportista.png" class ="avatarImage" onclick="povecaj3()">
                                <div class="avatarLine"><h4 class="link">Sportista</h4></div>
                        </div>
						</a>
                    </div>
                    <div class="col-lg-2">
						<a href="../KoSamJa/kosamja.php#partymaniac" target="_blank" class="link">
                        <div class="card" id="c4">
                                <img src="../img/party-maniac.png" class ="avatarImage" onclick="povecaj4()">
                                <div class="avatarLine"><h4 class="link">Partymaniac</h4></div>
                        </div>
						</a>
                    </div>
                    <div class="col-lg-2">
						<a href="../KoSamJa/kosamja.php#muzicar" target="_blank" class="link">
                        <div class="card" id="c5">
                                <img src="../img/muzicar.png" class ="avatarImage" onclick="povecaj5()">
                                <div class="avatarLine"><h4 class="link">Muzicar</h4></div>
                        </div>
						</a>
                    </div>
                    <div class="offset-lg-1"></div>
                </div>
            </form>
		</div>
		<form action="gde.php" method="POST" enctype="multipart/form-data" name="myForm">
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