<?php require('header.php'); ?>

<body>
    <div class="container px-lg-5 mt-5">
        <form class="mb-3" method="post" action="login.php">
            <div>
                <p class="color" style="font-weight: bold; font-size: 2rem;">Login with your Email and Password</p>
            </div>
            <span>Email Id :</span>
            <input class="form-control mb-3" type="email" name="email" placeholder="Enter Email Id"></input>
            <span>Password :</span>
            <input class="form-control mb-3" type="password" name="password" placeholder="Enter password"></input>

            <div>
                <input class="form-control btn btn-primary w-25 mt-4 mx-m" type="submit" name="login"></input>
                <a href="registration.php" class="" style="float:right;">Registration</a>
            </div>
        </form>
    </div>
</body>

</html>