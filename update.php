<?php
include "variables.php";
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

         <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

        
         <link rel="stylesheet" type="text/css" href="sidebar_style.css">
         <link rel="stylesheet" href="style.css">
        <title>Update</title>
    </head> 
 <body>
      <!-- sidebar -->
    <?php 
    include "sidebar.php";
    include 'connection.php';

    $id = $_GET['id'];

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
      if (empty($_POST["hobby"])) {
        $hobbyErr = "Hobby is Required";
      } else {
        $hobby = test_input($_POST["hobby"]);
      }
  }
      
    if ($hobby != "") {
        $sql = "UPDATE hobies SET hobbies='$hobby' WHERE id = $id";
        if (mysqli_query($conn, $sql)) {
        header("location: view.php");
         }
     } else {
        echo "Error: " . mysqli_error($conn);
      }

?>
 	    <div class="centered">
        <h2 class="main-text">Which Hobby do you want to Update?</h2>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="hidden" name="id" value="<?php echo $id?>">
        <input class="inputStyle" placeholder="Your Hobby" type="text" name= "hobby" value="">  
        <span class="error">* <?php echo $hobbyErr;?></span> <br>
        <button type="submit" value="submit" class="">Submit</button>
        </form>
    </div>
    <script type="text/javascript" src="sidebar.js"></script>
  </body>
 </html>
 
