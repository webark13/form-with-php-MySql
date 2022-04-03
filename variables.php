<?php
    // define empty variable to store form data
    $name = "";
    $city = "";
    $hobby = "";

    // define variables to store warning messages 
    $nameErr = "";
    $cityErr = "";
    $hobbyErr = "";  
        
// define a function to filter input data
    function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }

?>