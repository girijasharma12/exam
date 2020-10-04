<?php

$servername = "sql12.freemysqlhosting.net";
$username = "sql12368794";
$password = "S7L7tWGZAL";
$db = "sql12368794";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
