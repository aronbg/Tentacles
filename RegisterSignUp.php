<?php
include('LoginDB.php');

session_start();

$email =$_POST["email"];
$name = $_POST["name"];


//$query = "SELECT * FROM users WHERE email = '$email' AND Wachtwoord = '$password'";
$query = "INSERT INTO TentaclesList(id, name, email) VALUES (NULL, '$name','$email')";

if (!($result = $mysqli->query($query)))
showerror($mysqli->errno,$mysqli->error);

$row = $result->fetch_assoc();

//echo json_encode($row["name"]) . json_encode["email"];

?>
