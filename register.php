<?php
$servername = "localhost:3308"; // Assurez-vous de spécifier le port
$username = "root";
$password = ""; // Laissez le mot de passe vide si vous n'en avez pas configuré
$dbname = "site1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("La connexion à la base de données a échoué : " . $conn->connect_error);
}

if ($conn->connect_error) {
  die("La connexion à la base de données a échoué : " . $conn->connect_error);
}

$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO utilisateurs (username, email, password) VALUES ('$username', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
  // Rediriger vers la page de connexion
  header("Location: login.html");
  exit();
} else {
  echo "Erreur : " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
