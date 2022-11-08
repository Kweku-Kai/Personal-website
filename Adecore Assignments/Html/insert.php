<?php
$Firstname = $_POST['Firstname'];
$Lastname = $_POST['Lastname'];
$Username = $_POST['Username'];
$Password = $_POST['Password'];
$Contact = $_POST['Contact'];
$code = $_POST['Code'];

if (!empty($Firstname) || !empty($Lastname) || !empty($Username) ||!empty($Password) || !empty($Contact) || !empty($Code)){
    $host = "localhost";
    $dbUsername = "root";
    $dbpassword = "";
    $dbname = "mine";

    $conn = new mysqli($host, $dbUsername, $dbpassword, $dbname);

    if(mysqli_connect_error()){
        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    }else{
        $SELECT = "SELECT Username FROM users WHERE Username = ? Limit 1";
        $INSERT = "INSERT Into users (Firstname, Lastname, Username, Password, Contact, Code) values(?,?,?,?,?,?)";

        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $Username);
        $stmt->execute();
        $stmt->bind_result($Username);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if ($rnum==0){
            $stmt->close();
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("ssssis", $Firstname,$Lastname,$Username,$Password,$Contact,$Code);
            $stmt->execute();
            echo "New record inserted successfully";

        }else{
            echo "Username already taken";
        }
        $stmt->close();
        $conn->close();
    }
} else{
    echo "All fields are required";
    die();
}
?>