<?php

    $id = $_POST["id"];
    $naziv = $_POST["naziv"];
    $br_tel = $_POST["br_tel"];
    $email = $_POST["email"];
    $mesto_odr = $_POST["mesto_odr"];
    $dat_odr = $_POST["dat_odr"];
    $naziv_dog = $_POST["naziv_dog"];
    $kategorija = $_POST["kategorija"];
    $opis = $_POST["opis"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hakaton";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error) {
        exit('Could not connect');
    }
        $sql = "UPDATE hakaton.korisnikevents SET naziv = '$naziv', email = '$email', br_tel = $br_tel, 
        mesto_odr = '$mesto_odr', dat_odr = '$dat_odr', naziv_dog = '$naziv_dog', kategorija = '$kategorija', opis = '$opis'
        WHERE id = '$id'";
    
        $conn->query($sql);
        $conn->close();     

?>


