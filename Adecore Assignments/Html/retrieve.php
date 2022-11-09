<?php
session_start();
require_once "connect.php";
//
//$servername ="localhost";
//$username = "root";
//$password = "";
//$dbname = "darlsworld";

//$conn = new mysqli($servername, $username, $password, $dbname);

//if($conn->connect_error){
//	die("connection failed");
//}
if(isset($_POST["Username"]) && isset($_POST["password"])) {
$username = $_POST["Username"];
$password = $_POST["password"];
//$salt = "codeflix";
//$password_encrypted = sha1($password.$salt);


//$sql = mysqli_query($conn, "SELECT count(*) as total from signup WHERE email = '".$email."' and 
	//password = '".$password."'");
//$row = mysqli_fetch_array($sql);

//if($row["total"] > 0){
	
	//<script>
	//	alert('Login successful');
	//</script>
	
//	<?php
//}
//else{

	//<script>
	//	alert('Login failed');
	//</script>
	//<?php
//}


$conn = OpenCon();
$login = "SELECT * FROM users WHERE Username ='$username' && password = '$password'";
$login_result = $conn->query($login);
if($login_result->num_rows > 0){
	$_SESSION["Username"] = $username;
	$_SESSION["logged_in"] = "true";

	header("location: ./index.html");
	?>
	<script>
		alert('Login successful');
	</script>
	
	<?php
//header("location: ./index.php");
}
}
else {
	header("location: ./index.html")
	?>
	<script>
		alert('Login failed');
	</script>
	<?php
}
?>

