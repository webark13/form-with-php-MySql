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
         
		<title>Hobbies</title>
</head>
<body>
	    <!-- sidebar -->
    <?php 
    include "sidebar.php";
    ?>
<div class="centered">
	<h2 class="main-text" >Hobbies of People</h2>
		 <!-- TABLE CONSTRUCTION-->
    <table>
        <tr>
            <!-- <th>Series</th> -->
            <th>Name</th>
            <th>City</th>
            <th>Hobby</th>
            <th>Actions</th>
        </tr>
<?php
	
	include "connection.php";
	include "variables.php";

	$sql = "SELECT * FROM hobies";

	$result = mysqli_query($conn, $sql);

	// php code to fetch data from rows
	if(mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
?>
		<tr>
			<!-- fetching data from each row of every column -->
			<!-- <td><?php echo $row['id'];?></td> -->
			<td><?php echo $row['name'];?></td>
			<td><?php echo $row['city'];?></td>
			<td><?php echo $row['hobbies'];?></td>
			<td>
				<a href="update.php?id=<?php echo $row['id']?>">Edit</a>
				 / 
				<a href="delete.php?id=<?php echo $row['id']?>">Delete</a>	
			</td>
		</tr>
<?php
		}
	}
?>
		</table>     
		</div>       
		<script type="text/javascript" src="sidebar.js"></script>
	</body>
</html>

