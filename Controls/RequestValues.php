<?php
include('LoginDB.php');

session_start();

$deviceid =$_POST["did"];

if(isset($deviceid) && $deviceid!=0)
{
$query = "SELECT * FROM LightsControlCenter WHERE d_id = '$deviceid'  ORDER BY date DESC LIMIT 1";
//$query = "SELECT * FROM users WHERE email = '$email' AND Wachtwoord = '$password'";
//$query = "INSERT INTO users(id, lantern1, date) VALUES (NULL, '$lantern1',NULL)";

if (!($result = $mysqli->query($query)))
showerror($mysqli->errno,$mysqli->error);

$row = $result->fetch_assoc();


        $_SESSION["input_1"]=$row["input1"];
        $_SESSION["input_2"]=$row["input2"];
        $_SESSION["did"]=$deviceid;
        header('location:Lantern_1.php');
}

?>