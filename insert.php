
<?php

   include "connection.php";
   include "variables.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
          $nameErr = "Name is required";
        } else {
          $name = test_input($_POST["name"]);
        }
        if (empty($_POST["city"])) {
          $cityErr = "City is Required";
        } else {
          $city = test_input($_POST["city"]);
        }
        if (empty($_POST["hobby"])) {
          $hobbyErr = "Hobby is Required";
        } else {
          $hobby = test_input($_POST["hobby"]);
        }
      }

        $sql = "SELECT * FROM hobies";

        $result = mysqli_query($conn, $sql);
      
      if ($name != "" AND $city != "" AND $hobby != "") {

        $sql = "INSERT INTO hobies (name, city, hobbies)
                VALUES ('$name', '$city', '$hobby')";
        if (mysqli_query($conn, $sql)) {
          // redirect to display table
          header("location: view.php");
        } 
      }
      //  else {
      //   echo "<h2> Please Fill All Fields </h2>";
      // } 

        
?>

