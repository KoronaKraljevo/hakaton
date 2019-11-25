 <?php

    $parameter = $_GET['q'];

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

    echo "<br><table class='table table-dark fontA'>";
    echo "<tr>";
    echo "<th>Naziv</th>";
    echo "<th>Datum</th>";
    echo "<th>Avatar</th>";
    echo "</tr>";
   

        $sql = "SELECT naziv, datum, avatar FROM hakaton.events WHERE mesto = '$parameter'";
        
        $stmt = $conn->prepare($sql);
        // $stmt->bind_param("s", $_GET['txtHint']);
        $stmt->execute();
        $stmt->store_result();
        $result = $stmt->get_result();

        $stmt->bind_result($naziv, $datum, $avatar);
        while($stmt->fetch()){
            echo "<tr>";
            echo "<td>" . $naziv . "</td>";
            echo "<td>" . $datum . "</td>";
            echo "<td>" . $avatar . "</td>";
            echo "</tr>";
        }

        $stmt->close();
             
    echo "</table>";
?>
