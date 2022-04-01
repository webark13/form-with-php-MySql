
<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "rehman";

    // create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // check connection
    if (!$conn) {
        die ("Connections failed: " . mysqli_connect_error());
    }

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

        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }

        
?>
