<!DOCTYPE html>
<html>
	<head>
		<title>Događaj</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Luckiest+Guy&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet">
        <link rel = "stylesheet" href="uredjivanjeDogadjaja.css">
		<link rel = "stylesheet" href="tabele.css">
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
		<script src="validacija.js"></script>
	</head>
	<body>
		<header>
			<div class="row no-gutters">
				<div class="col-xl-5">
					<h1 class="pl-5 pt-2">Tabela</h1>
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
										<a class="nav-link px-2 navbarLink" href="../QnA/qna.php">QnA</a>
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
                    <?php

                        $target_dir = "../uploads/";
                        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                        $uploadOk = 1;
                        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                        //formati
                        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                            $uploadOk = 0;
                        }
                        // ako je 0 , fajl ne moze biti uplodaovan
                        if ($uploadOk == 0) {
                            echo " Slika nije zapamcena!";
                        // pokusaj uploadovanja
                        } else {
                            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                                //echo "Slika je  zapamcena!";
                            } else {
                                echo "Izvinite , postoji greska prilikom pamcenja slike.";
                            }
                        }

                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "hakaton";

                        $conn = new mysqli($servername, $username, $password, $dbname);

                        $naziv=$_POST["naziv"];
                        $email=$_POST["email"];
                        $br_tel=$_POST["br_tel"];
                        $mesto_odr=$_POST["mesto_odr"];
                        $vreme_odr=$_POST["vreme_odr"];
                        $naziv_dog=$_POST["naziv_dog"];
                        $kategorija=$_POST["kategorija"];
                        $opis=$_POST["opis"];

                        if(isset($_POST["insert"]))
                        {
                            $file = $_FILES["fileToUpload"]["tmp_name"];
                            $sql="INSERT INTO hakaton.korisnikEvents (naziv, email, br_tel, mesto_odr, dat_odr, naziv_dog, kategorija, opis, slika) 
                            VALUES ('$naziv','$email', '$br_tel', '$mesto_odr', '$vreme_odr', '$naziv_dog', '$kategorija', '$opis', '$file')";

                        	if ($conn->query($sql) === TRUE) {
								//    echo "New record created successfully";
								$result ="SELECT id, naziv, email, br_tel, mesto_odr, dat_odr, naziv_dog, kategorija, opis
							FROM hakaton.korisnikEvents ORDER BY id DESC LIMIT 1";
							
							
							
							$resultkorisnik = $conn->query($result);
							
							if($resultkorisnik->num_rows > 0)
							{ 
								while($row = $resultkorisnik->fetch_assoc())
								{
									$GLOBALS['$test']=$row["id"];
									echo "<table class='table table-dark fontField w-75 m-auto'>
										<tr><th>Ime i prezime/Organizacija</th><th>" 
									.$row["naziv"]. " </th></tr><tr><th>Email</th><th> " 
									.$row["email"]. " </th></tr><tr><th>Broj telefona</th><th> " 
									.$row["br_tel"]. " </th></tr><tr><th>Mesto odrzavanja</th><th> " 
									.$row["mesto_odr"]. " </th></tr><tr><th>Datum odrzavanja</th><th> " 
									.$row["dat_odr"] . "</th></tr><tr><th>Naziv dogadjaja</th><th>" 
									.$row["naziv_dog"]. "</th></tr><tr><th>Kategorija</th><th>" 
									.$row["kategorija"]. "</th></tr><tr><th>Opis</th><th>"
									.$row["opis"]. "</th></tr>
										</table>";
								}
							}
							else
							{
								echo "0 results";
							}

							$conn->close();
								} else {
									echo "Nevalidan oblik datuma";
								} 

							}
                    ?>
            <form name="myForm" action="delete.php" method="post" enctype="multipart/form-data">
                <br>
				
				<input type="hidden" name="test" value="<?php echo $GLOBALS['$test']; ?>" />
				<input type="submit" value="Izbriši" class="w-25 changeButtons"/>
			</form>
			<form name="myForm" action="update.php" method="post"  enctype="multipart/form-data">
				<input type="submit" value="Ažuriraj" class="w-25 changeButtons"/>	
			</form>
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