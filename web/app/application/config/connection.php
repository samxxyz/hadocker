<?php
    $hostname = "db";
    $user = "root";
    $password = "hnmlaundry";
    $database = "laundry";

    $connection = mysqli_connect ($hostname, $user, $password, $database) or die(mysqli_error($connection));

?>
