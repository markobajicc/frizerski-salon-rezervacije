<?php

if(isset($_POST["submit"])){


    //Grabbing the data
    $uid = $_POST["uname"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];
    $email = $_POST["email"];

    include "../../../config/dbh.classes.php";
    include "classes/signup.classes.php";
    include "classes/signup-contr.classes.php";

    $signup = new SignupContr($uid, $pwd , $pwdrepeat, $email);

    $signup->signupUser();

    header("location: /frizerski_salon/index.php?error=none");

}