<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hakaton";

$ime;
$prezime;
$email;
$komentar;
$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error) {
    exit('Could not connect');
}
            $sql = "SELECT komentar, ime, prezime, email, datum FROM hakaton.komentari";
        
            $stmt = $conn->prepare($sql);
            // $stmt->bind_param("s", $_GET['txtHint']);
            $stmt->execute();
            $stmt->store_result();
            $result = $stmt->get_result();

            $stmt->bind_result($komentar, $ime, $prezime, $email, $datum);
            while($stmt->fetch()){
                echo '<div class="commentContainer">';
                echo	'	<div class="flexboxRow">';
                echo	'		<p class="commentUsername">' . $ime . ' ' . $prezime . '</p>';
                echo	'		<p class="commentDate">' . $datum . '</p>';
                echo	'	</div>  ';
                echo	'	<div class="row no-gutters"> ';
                echo	'		<div class="col-1">';
                echo	'			<div class="centerDiv"> ';
                echo	'				<img src="../img/userDefaultIcon.png" alt="Icon" class="commentIcon">	';
                echo	'			</div> ';
                echo	'		</div> ';
                echo	'		<div class="col-11"> ';
                echo	'			<p class="commentPara">' . $komentar . '</p> ';
                echo	'		</div> ';
                echo	'	</div>		'	;
                echo	' </div> ';
            }

        $stmt->close();
?>
