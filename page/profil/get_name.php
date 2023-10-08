<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "site1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}

$sql = "SELECT * FROM utilisateurs WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Bonjour, " . $row["prenom"];
    }
} else {
    echo "Aucun résultat trouvé";
}

$conn->close();
?>
