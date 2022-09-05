<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname ="login_sample_db";

if(!$conn = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname)){
    die("Connection Failed");
}
