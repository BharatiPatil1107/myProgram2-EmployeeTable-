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
    	<style type="text/css">
		
	.container{
		background-color:skyblue;
		width: 600px;
		align:centre;
		border:2px solid #404040;
		margin-bottom:5px;
		position:relative;
        
        margin-top:30px;

	}
	h3{
		color:#CC3366;
		text-align:center;
        margin-top:60px;
        margin-right:15px;
		
	}
	.form-group label{
		color:black;
		font-family:Bold;
	}
	.form-row{
		color:black;
		font-family:Bold;

	}
	.col10{
		color:black;
		height:100px;
		width:auto;
		margin-left:10px;
		margin-bottom:100px;
	
	}
	
	table{
		border:3px dotted gray;
        margin-left: 250px;
		
	}
	th,td{
		color:black;
	}
	
	

	
	#text2{
	width: 100px;
	}
	

	</style>
<h3>Employee Data</h3>
  <div class="container">
      
  <div class="col-lg-12">
  <form action="" name="form1" method="post" >
  <div class="form-group">
  <label for="example">Id</label>
    <input type="text" class="form-control" id="id" name="id" aria-describedby="emailHelp" placeholder="Enter id" onkeypress="return isNumberKey(event);" required>
	
  </div>
   <div class="form-group">
    <label for="example">Name</label>
    <input type="text" class="form-control" id="name1" name="name" aria-describedby="emailHelp" placeholder="Enter name" required>
	
  </div>
  <div class="form-row">
   <div class="col-5">
    <label>Department</label>
    <select id="inputdepartment" class="form-control" name="department">
	<option>Choose...</option>
	<option>BCA- Bachelor of Computer Applications</option>
	<option>MCA-Master Of Computer Application</option>
    <option>B.Sc.- Information Technology</option>
	<option>BBA- Bachelor of Business Administration</option>
    <option>BE/B.Tech- Bachelor of Technology</option>
    <option>CA- Chartered Accountancy</option>
    
	</select>
	</div>

  </div>

  <div class="form-group">
    <label for="example">Age</label>
    <input type="text" class="form-control" id="text2" name="age">
  </div>


   <div class="form-group">
    <label for="example">Salary</label>
    <input type="text" class="form-control" id="exampleInputSalary1" name="salary">
  </div>

  


   <button type="submit" name="Insert" class="btn btn-primary">Add</button>
  
</form>
</div>
</div>

  </body>


  <!-- Inesrt code -->

  <?php
  if(isset($_POST["Insert"]))
  {
	  mysqli_query($con,"insert into employee values('$_POST[id]','$_POST[name]','$_POST[department]','$_POST[age]','$_POST[salary]')");

  ?>
 <script type="text/javascript">
      window.location="display.php";
    </script>

    <?php
        
    }
     
  ?>
</html>




































