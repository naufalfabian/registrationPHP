<?php
 
$server = "localhost";
$user = "";
$password = "";
$nama_database = "registration_db";
 
$db = mysqli_connect($server, $user, $password, $nama_database);
 
if (!$db) {
    die("fail connect: " . mysqli_connect_error());
}