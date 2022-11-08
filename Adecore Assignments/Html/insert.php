<?php
$Firstname = $_POST['Firstname'];
$Lastname = $_POST['Lastname'];
$Username = $_POST['Username'];
$password = $_POST['password'];
$Contact = $_POST['Contact'];
$code = $_POST['code'];

$conn = new mysqli('localhost', 'root', '', 'mine');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into users(Firstname, Lastname, Username, password, Contact, code) values(?,?,?,?,?,?)");
    $stmt->bind_param("ssssss",$Firstname,$Lastname,$Username,$password,$Contact,$code);
    $stmt->execute();
    echo "registration successful...";
    $stmt->close();
    $conn->close();
}
?>