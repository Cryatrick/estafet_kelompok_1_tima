<?php 
$host = "10.11.12.109";
$user = "estafet_user";
$pass = "Qwerty123$%";
$db = "estafet_db";
$conn = mysqli_connect($host,$user,$pass,$db);
if (!$conn) {
    die("Connection Failed: " . Mysqli_connect_error());
}
?>