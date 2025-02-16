<?php

session_start();
session_unset();
session_destroy();

header("location: /frizerski_salon/index.php?error=none");
