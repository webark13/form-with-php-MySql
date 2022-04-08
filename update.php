<?php
  include "variables.php";
  include 'connection.php';
  $id = $_GET["id"];

  $sql = "SELECT * FROM hobies WHERE id = $id";

	$result = mysqli_query($conn, $sql);

  $row = mysqli_fetch_assoc($result);
  
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
   <?php include "sidebar.php"; ?>

 	    <div class="centered">
        <h2 class="main-text">What's Your Hobby?</h2>
        <form action="modify.php?id=<?= $id ?>" method="post">

          <!-- create a hidden input to store id -->
          <input type="hidden" name="id" value= "<?= $row['id'] ?>">
          <input class="inputStyle" placeholder="Your Name" type="text" name="name" value="<?= $row['name']?>"> 
          <span class="error">* <?php echo $nameErr;?></span><br>
          <input class="inputStyle" placeholder="Your City" type="text" name="city" value="<?= $row['city']?>"> 
          <span class="error">* <?php echo $cityErr;?></span>  <br>
          <input class="inputStyle" placeholder="Your Hobby" type="text" name= "hobby" value="<?= $row['hobbies']?>"> 
          <span class="error">* <?php echo $hobbyErr;?></span>  <br>
          <input type="submit" name="editForm" class="button" value="Submit">

        </form>
      </div>
    <script type="text/javascript" src="sidebar.js"></script>
  </body>
 </html>
 
<