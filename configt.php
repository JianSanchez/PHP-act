<?php

$host = "localhost";
$username = "root";
$password = "";
$databaseN = "formal";

$con = mysqli_connect("$host", "$username", "$password", "$databaseN");

if (!$con) {
    die("Did not connect!");
}


?>