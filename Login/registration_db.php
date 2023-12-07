<?php 
session_start();
require('connection.php'); 

$name = $_POST["name"];
$number = $_POST["number"];
$email = $_POST["email"];
$password = $_POST["password"];

$sql = "INSERT INTO login.login(name,phone,email,password) VALUES('$name','$number','$email','$password')";

if($con-> query($sql)=== TRUE){
    echo '<script> alert("Registration successfully")
    window.location="index.php"</script>';
}
else{
    echo "Error : ".$sql."<br>".$con->error;
}
?>