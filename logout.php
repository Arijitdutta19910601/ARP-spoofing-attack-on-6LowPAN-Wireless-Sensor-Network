<?php

session_start();

session_unset();

session_destroy();

header("Location: http://192.168.0.154/Sensorproject/login.html");

?>
