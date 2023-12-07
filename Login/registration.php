<?php require 'header.php' ?>

<div class="container px-lg-5 mt-5">
    <form class="mb-3" method="post" action="registration_db.php">
        <div>
            <p class="color" style="font-weight: bold; font-size: 2rem;">Registration with your Email and Password</p>
        </div>
        <span>Name :</span>
        <input class="form-control mb-3" type="name" name="name" placeholder="Enter name"></input>
        <span>Phone Number :</span>
        <input class="form-control mb-3" type="number" name="number" placeholder="Enter Phone number"></input>
        <span>Email Id :</span>
        <input class="form-control mb-3" type="email" name="email" placeholder="Enter Email Id"></input>
        <span>Password :</span>
        <input class="form-control mb-3" type="password" name="password" placeholder="Enter password"></input>

        <div>
            <input class="form-control btn btn-primary w-25 mt-4 mx-m" type="submit" name="registration"></input>
            <a href="index.php" class="" style="float:right;">Login</a>
        </div>
    </form>
</div>