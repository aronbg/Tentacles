<?php
include('LoginDB.php');

session_start();

$did =$_SESSION["did"];
$input1 =$_POST["input1"];
$input2 =$_POST["input2"];

if(isset($did) && $did!=0)
{
//$query = "SELECT * FROM users WHERE email = '$email' AND Wachtwoord = '$password'";
$query = "INSERT INTO LightsControlCenter (id, d_id, input1, input2, date) VALUES (NULL, '$did','$input1','$input2', NULL)";

if (!($result = $mysqli->query($query)))
showerror($mysqli->errno,$mysqli->error);
    
    header('location:index.html');
}
else{
    header('location:FailPage.html');
}
?>