<?php

    $host = "localhost";
    $user = "root";
    $pass = "Wedanta123";
    $db   = "e_voting";

    $conn = mysqli_connect($host, $user, $pass, $db);

    mysqli_select_db($conn, $db);

?>