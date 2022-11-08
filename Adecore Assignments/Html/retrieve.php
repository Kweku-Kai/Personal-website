<?php
$Username = $_POST['Username'];
$password = $_POST['password'];

$con = new mysqli("localhost", "root", "", "test");
if($con->connect_error) {
    die("Failed to connect : ".$con->connect_error);
}else {
    $stmt = $con->prepare("select * from users where Username = ?");
    $stmt->bind_param("s", $Username);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows > 0){
        $data = $stmt_result->fetch_assoc();
        if($data['password'] === $password){
            echo "Login Succesfully";
        }else {
            echo "Invalid Username or Password";
        }
    }else {
        echo "Invalid Username or Password";
    }
}
?>