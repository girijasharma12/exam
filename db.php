<?php

$servername = "sql12.freemysqlhosting.net";
$username = "sql12362372";
$password = "S7L7tWGZAL";
$db = "sql12362372";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
