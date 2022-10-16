<?php
include('LoginDB.php');

session_start();

$email =$_POST["email"];
$name = $_POST["name"];


//$query = "SELECT * FROM users WHERE email = '$email' AND Wachtwoord = '$password'";
$query = "INSERT INTO TentaclesList(id, name, email) VALUES (NULL, '$name','$email')";

if (!($result = $mysqli->query($query)))
showerror($mysqli->errno,$mysqli->error);

$query = "SELECT * FROM users WHERE email = '$email'";

if (!($result = $mysqli->query($query)))
showerror($mysqli->errno,$mysqli->error);

$row = $result->fetch_assoc();


if($email==$row["email"]){
    //echo session_id();
    $_SESSION["email"]=$row["email"];
    header('Location:LogOff.html');
    //verder verwijzen naar device overzicht.
echo "You're Already on the list";}
else{
    header('Location:index.html');
    //terugverwijzen naar Register
    
}

//echo json_encode($row["name"]) . json_encode["email"];

?>
