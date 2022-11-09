<?php  
/*include('connect.php');
$firstname = $_POST['Firstname'];  
$lastname = $_POST['Lastname']; 
$username = $_POST['Username'];  
$password = $_POST['password'];
$code = $_POST['code'];  
$contact = $_POST['Contact']; 

$sql = 'INSERT INTO users(Firstname,Lastname,Username,password,code,Contact) VALUES (?,?,?,?,?,?)';  
if(mysqli_query($con, $sql)){  
 echo "Record inserted successfully";  
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
}  

mysqli_close($conn);*/ 

session_start();
require_once "connect.php";
#$servername ="localhost";
#$username = "root";
#$password = "";
#$dbname = "darlsworld";
#$conn = new mysqli($servername, $username, $password, $dbname);
#if($conn->connect_error){
	#die("connection failed");
#}
if(isset($_POST["Firstname"])) {
$firstname = $_POST["Firstname"];
$lastname = $_POST["Lastname"];
$username = $_POST["Username"];
$password = $_POST["password"];
$code = $_POST["code"];
$contact = $_POST["Conatct"];
//$salt = "codeflix";
//$password_encrypted = sha1($password.$salt);
#if($fname != null && $lname != null && $contact != null && $email != null && $password1 != null && $password2 != null) {

    //Check if passwords are equal
    //if($password1 != $password2) {
    //    echo "Passwords does not match";
   // } else {
        //Check if email is not registered
      //  $password = md5($password1);

        //register user
      //  $register = "INSERT INTO users(id, firstname, lastname, email, tele, password) VALUES('1', '$fname', '$lname', '$email', '$contact', '$password')";
      //  if($sql->query($register)) {
         //   echo "true";

#}
$conn = OpenCon();
$check_username = "SELECT * FROM users WHERE Username = '$username'";
$username_result = $conn->query($check_username);
if($username_result->num_rows > 0) {
	$_SESSION["Username"] = $username;
	echo "Username is aleady registered";
} else {
	$register = "INSERT INTO users (Firstname, Lastname, Username, password, code, Contact) 
VALUES ('$firstname', '$lastname', '$username', '$password', '$code', '$contact')";
        $_SESSION["Username"] = $username;
		if($conn->query($register)) {
            echo "true";
            $_SESSION["Username"] = $username;

			header("location: ./login and registration.html");
			?>
	<script>
		alert('Values have been inserted');
	</script>
	<?php
	//header("location: ./index.php");
}
else{
	?>
	<script>
		alert('user not registered');
	</script>
	<?php
        } //else {
	//echo "user not registered: ".$sql->error;
//}
}

header("location: ./login and registration.html");

#if($conn->query($sql) === TRUE){
#
} else {
	echo "You have empty fields";
}

?>





















