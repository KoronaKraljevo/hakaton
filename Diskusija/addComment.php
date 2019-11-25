<?php

    
    $ime = $_POST["ime"];
    $prezime = $_POST["prezime"];
    $email = $_POST["email"];
    $komentar = $_POST["komentar"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hakaton";

    $naziv = "";
    $datum = "";
    $mesto = "";
    $avatar = "";
    $id = 0;

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error) {
        exit('Could not connect');
    }

        $vreme = date("m.d.Y");

        $sql = "INSERT into hakaton.komentari (komentar, ime, prezime, email, datum) 
        values ('$komentar', '$ime', '$prezime', '$email', '$vreme')";
        
        $conn->query($sql);
        $conn->close();     

?>
