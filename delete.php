<?php
    include "variables.php";
    // file for sidebar
    include "sidebar.php";
    // file for db connection
    include "connection.php";
    
    // store id from hobies table in $id var with _GET method
    $id = $_GET['id'];

    // delete records from table where id = $id
    $sql = "DELETE FROM hobies WHERE id = $id";
    if(mysqli_query($conn, $sql)) {
        header("location: view.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
?>


       
