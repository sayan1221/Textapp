<?php 
session_start();
require('connection.php'); 

$email = $_POST["email"];
$password = $_POST["password"];

$sql = "SELECT * FROM login.login";
$result = mysqli_query($con,$sql);
$tem=0;
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        if($email == $row["email"] && $password == $row["password"]){
            $_SESSION['name'] = $row["name"];
            $_SESSION['phone'] = $row["phone"];
            $_SESSION['email'] = $row["email"];
            $_SESSION['password'] = $row["password"];

            $tem=1;
            break;
        }
    }
}

if($tem==0){
    echo '<script>alert("Enter valid Email and password") 
    window.location="index.php"</script>';
}
else{
    echo '<script>window.location="home.php" </script>';
}

?>