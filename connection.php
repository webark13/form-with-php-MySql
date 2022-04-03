<?php
 $servername = "localhost";
    $username = "root";
    $password = "admin";
    $dbname = "rehman";

    // create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // check connection
    if (!$conn) {
        die ("Connections failed: " . mysqli_connect_error());
    }
?>