<?php
function OpenCon()
{
$servername ="localhost";
$username = "root";
$password = "";
$dbname = "darlsworld";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("connection failed");
}
return $conn;
 }

//function CloseCon($conn)
//{
// $conn -> close();
 //}
 ?>
