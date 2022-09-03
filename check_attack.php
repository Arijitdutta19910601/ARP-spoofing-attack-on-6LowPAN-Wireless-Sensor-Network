<?php
    session_start();
    include "config.php";
    include "db_conn.php";
    $checktoken = "select * from loginforn_token where user='$_SESSION[userid]' and status=1";
    $checkresult=mysqli_query($con,$checktoken);
    $checkrow=mysqli_fetch_array($checkresult);
    if($checkrow['token']!=$_SESSION['token']){
	shell_exec('sh /var/www/html/Sensorproject/attack.sh');
        //header('location: .php'); // Redirect User to Logout Page to destroy session
    }
?>
