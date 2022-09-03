<?php
$showAlert=false;
$conn=new mysqli('localhost','admin','your_password','demo');
if($conn->connect_error)
{
	die("Connection Error".$conn->connect_error);
}

session_start();

include "db_conn.php";

$username = $_GET['username'];
$password = $_GET['password'];
$cpassword = $_GET['cpassword'];
if($password == $cpassword){
        $sql = "INSERT INTO `loginform` VALUES ('$password', DEFAULT, '0', '$username')";
        $result = $conn->query($sql);
        if($result){
	    $showAlert = true;
            header("location: http://192.168.0.154/Sensorproject/login.html");
	    exit();
        }
    }
    else{
        echo "Passwords do not match!";
    }

?>
