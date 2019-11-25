<!DOCTYPE html>
<html>
	<head>
		<title>Događaj</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<script src="validacija.js"></script>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
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
		<link rel = "stylesheet" href="uredjivanjeDogadjaja.css">
	</head>
	<body>
		<header>
			<div class="row no-gutters">
				<div class="col-xl-5">
					<h1 class="pl-5 pt-2">Dogadjaj</h1>
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
			<form action="cuvanjePodataka.php" onsubmit="return validateForm()" method="post" enctype="multipart/form-data" name="myForm">
						<div class="boxSizing">
							<h2>Podaci o organizatoru</h2>
							<span>Ime i prezime/Organizacija</span><input type="text" class="inputField formStyle" name="naziv"><br><br>
							<span>E-mail</span><input type="text" class="inputField formStyle" name="email" placeholder=" korona@gmail.com"><br><br>
							<span>Broj telefona</span><input type="text" class="inputField formStyle" name="br_tel"><br><br>
							<h2>Podaci o događaju</h2>
							<span>Mesto održavanja</span><input type="text" class="inputField formStyle" name="mesto_odr"><br><br>
							<span>Datum održavanja</span><input type="text" class="inputField formStyle" name="vreme_odr" placeholder=" yyyy.mm.dd"><br><br>
							<span>Naziv događaja</span><input type="text" class="inputField formStyle" name="naziv_dog"><br><br>
							<span>Kategorija</span>
							<select class="inputField form-control fontField" name="kategorija">
								<option>Izaberi</option>
								<option>Naucnik</option>
								<option>Avanturista</option>
								<option>Sportista</option>
								<option>Partymaniac</option>
								<option>Muzicar</option>
							</select><br><br>
							<div class="input-group my-3">
								<div class="custom-file">
									<input type="file" class="custom-file-input" name="fileToUpload" id="inputGroupFile01">
									<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
								</div>
									
							</div>
							<span>Opis</span><br><br>
							<textarea type="text" class="messageField fontField" rows="6" name="opis"></textarea><br><br>
							<input type="submit" class="buttonSend form-control" value="POŠALJI" name="insert" id="insert">
							<script>
								$(document).ready(function(){
									$('#insert').click(function(){
										var image_name=$('#inputGroupFile01').val();
										if(image_name=='')
										{
											alert("Ubacite sliku");
											return false;
										}
										else
										{
											var extension = $('#inputGroupFile01').val().split('.').pop().toLowerCase();
											if(jQuery.inArray(extension, ['gif','png','jpg','jpeg'])==-1)
											{
												alert('Nevalidan Img File');
												$('#inputGroupFile01').val('');
												return false;
											}
										}
									})
								});
						</script>
						</div>
			</form>
		</div>
		<form action="dogadjaj.php" method="POST" enctype="multipart/form-data">
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
								<input type="email" placeholder = " E-mail" name="emailText" id="footerInput">
								
							</li>
							<li class="footerLi">
								<input type="submit" name="dugmePrimaj" value = "PRIMAJTE OBAVEŠTENJA" id="footerButton">
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