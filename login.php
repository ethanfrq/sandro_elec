<?php
$servername = "localhost:3308"; // Ajoutez le numéro de port ici
$username = "root";
$password = "";
$dbname = "site1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("La connexion à la base de données a échoué : " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM utilisateurs WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
  $row = $result->fetch_assoc();
  if (password_verify($password, $row['password'])) {
    // Connexion réussie, rediriger vers la page d'accueil
    header("Location: sandro.html");
    exit();
  } else {
    echo "Mot de passe incorrect.";
  }
} else {
  echo "Utilisateur non trouvé.";
}

$conn->close();
?>
