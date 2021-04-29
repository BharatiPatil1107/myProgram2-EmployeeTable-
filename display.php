<?php
include "connection.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale="1>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> 


    <title>Employee Data</title>
  </head>
  
  <body style="">


    <!-- Optional JavaScript -->
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" ></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" ></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <center>
    	<div class="col-8" style="margin-top:100px;">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First</th>
      <th scope="col">Department</th>
	  <th scope="col">Age</th>
      
	  <th scope="col">Salary</th>
      
	  <th scope="col">Edit</th>
	  <th scope="col">Delete</th>

    </tr>
  </thead>
  <tbody>
   



  <!-- fetching data from database-->

   <?php
	$res=mysqli_query($con,"select * from employee");
	while($row=mysqli_fetch_array($res))
	{
		echo"<tr>";
		echo "<td>";echo $row["id"]; echo"</td>";
		echo "<td>";echo $row["name"]; echo"</td>";
		echo "<td>";echo $row["department"]; echo"</td>";
		echo "<td>";echo $row["age"]; echo"</td>";
		echo "<td>";echo $row["salary"]; echo"</td>";

		echo "<td>"; ?> <a href="update.php?id=<?php echo $row["id"];?>"> <button type="button" class="btn btn-success">Update</button></a><?php echo "</td>";
		echo "<td>"; ?> <a href="delete.php?id=<?php echo $row["id"];?>"> <button type="button" class="btn btn-danger">Delete</button></a><?php echo "</td>";

		

		echo"</tr>";
	}
	?>


  </tbody>
</table>
</div>

</center>




  </body>

</html>





