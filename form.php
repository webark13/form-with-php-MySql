

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form</title>
</head>
<body>

    <?php
         include "variables.php";
    ?>
   
    <div class="centered">
        <h2 class="main-text">What's Your Hobby?</h2>
        <form action="insert.php" method="post">
            <input class="inputStyle" placeholder="Your Name" type="text" name="name"> 
           <br>
            <span class="error">* <?php echo $nameErr;?></span>
           <br>
            <input class="inputStyle" placeholder="Your City" type="text" name="city" > 
            <br>
            <span class="error">* <?php echo $cityErr;?></span>  <br>
            <input class="inputStyle" placeholder="Your Hobby" type="text" name= "hobby" >  <br>
            <span class="error">* <?php echo $hobbyErr;?></span>  <br>
            <button type="submit" class="">Submit</button>
        </form>
    </div>
</body>
</html>

