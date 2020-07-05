<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "LoginSystem";

$conn = mysqli_connect($host, $user, $pass, $dbname)
    or die("Couldnt connect to the database");