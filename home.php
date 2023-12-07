<?php require('header.php'); ?>
<?php 
session_start();
require('connection.php');
?>
<div class="container px-lg-5 mt-5">
    <div>
    <p class="color" style="font-weight: bold; font-size: 2rem;">Welcome to Home Page</p>
    </div>
    <div>
        <a href="logout.php" style="float:right; font-size:20px;">Logout</a>
    </div>
    <div>
        <span class="form-control text">Name : <?php echo $_SESSION['name']; ?> </span>
        <span class="form-control text">Phone Number : <?php echo $_SESSION['phone']; ?> </span>
        <span class="form-control text">Email : <?php echo $_SESSION['email']; ?> </span>
        <span class="form-control text">Password : <?php echo $_SESSION['password']; ?> </span>
    </div>
</div>


<style>
    .text{
        font-weight: bold;
        border: none;
        font-size: 23px;
    }
</style>