<?php

if(isset($_POST["submit"])){


    //Grabbing the data
    $uid = $_POST["uname"];
    $pwd = $_POST["pwd"];


    include "../../../config/dbh.classes.php";
    include "classes/login.classes.php";
    include "classes/login-contr.classes.php";

    $login = new LoginContr($uid, $pwd);

    $login->loginUser();

    header("location: /frizerski_salon/index.php?error=none");

}