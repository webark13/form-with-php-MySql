<?php
include "connection.php";
// include "variables.php";

if(isset($_GET['id']) && isset($_POST['editForm'])){
    $id = $_GET['id'];
    $name = $_POST["name"];
    $hobby = $_POST['hobby'];
    $city = $_POST['city'];
    if ($name != "" AND $city != "" AND $hobby != "") {

        $sql = "UPDATE hobies SET 
                        name = '$name',
                        city = '$city',
                        hobbies = '$hobby'
                        WHERE id = '$id'";

        if (mysqli_query($conn, $sql)) {
            // redirect to display table
            header("location: view.php");
        } 
    } else {
        header("location: update.php?id=$id");
    }
}


