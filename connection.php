<?php

$servername = "localhost";
$username = "root";
$password = "";
$database="login";

// create connection
$con = new mysqli($servername,$username,$password,$database);
// conncetion check
if($con -> connect_error){
    die("Connection failed : ".$con -> connect_error);
}
// echo "connected successfully ";

?>