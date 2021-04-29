<?php
  include "connection.php";
  $id=$_GET["id"];
  $name="";
  $department="";
  $age="";
  $salary="";

  $res=mysqli_query($con,"select * from employee where id=$id");
  while ($row=mysqli_fetch_array($res))
  {
    $name=$row['name'];
    $department=$row['department'];
    $age=$row['age'];
    $salary=$row['salary'];
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
    input, select {
  display: block;
  width: 100%;
  border: 1px solid #ebebeb;
  padding: 11px 20px;
  box-sizing: border-box;
  font-family: 'Montserrat';
  font-weight: 500;
  font-size: 13px; }
  input:focus, select:focus {
    border: 1px solid #ff6801; }

label {
  font-size: 14px;
  font-weight: bold;
  font-family: 'Montserrat';
  margin-bottom: 2px;
  display: block; }

.form-radio {
  margin-bottom: 18px; }
  .form-radio input {
    width: auto;
    display: inline-block; }

.radio-label {
  padding-right: 72px; }
.form-checkbox{
       position: relative;
       margin-right: 30px;
       text-align: center;
    }
    
  </style>
}
</head>
<body>

<div class="container">
  <div class="col-lg-6">
  <h2>Student Registration Form</h2>
  <form action="" method="post">
    <div class="form-group">
      <label for="email">Id:</label>
      <input type="text" class="form-control"  placeholder="Enter roll numer" name="id" value="<?php echo $id;?>">
    </div>
    <div class="form-group">
      <label for="pwd">Name:</label>
      <input type="text" class="form-control" placeholder="Enter name" name="name" value="<?php echo $name;?>">
    </div>

    <div class="col-5">
    <label>Department</label>
    <select id="inputdepartment" class="form-control" name="department" value="<?php echo $department;?>">
	<option>Choose...</option>
	<option>BCA- Bachelor of Computer Applications</option>
	<option>MCA-Master Of Computer Application</option>
    <option>B.Sc.- Information Technology</option>
	<option>BBA- Bachelor of Business Administration</option>
    <option>BE/B.Tech- Bachelor of Technology</option>
    <option>CA- Chartered Accountancy</option>
    
	</select>
	</div>

    <div class="form-group">
       <label for="course">Age:</label>
      <input type="text" name="age" id="course" value="<?php echo $age;?>" >
       <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
     </div>
     <div class="form-row">
   
  
    <div class="form-group">
      <label for="email">Salary:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="salary" value="<?php echo $salary;?>">
    </div>

    
    <button type="submit" name="update" class="btn btn-default">Update</button>
  </form>
</div>
</div>
 
  <?php
     
  if(isset($_POST['update']))
  {
    mysqli_query($con,"update employee set name='$_POST[name]',department='$_POST[department]',age='$_POST[age]',salary='$_POST[salary]' where id=$id");
    ?>
    <script type="text/javascript">
      window.location="display.php";
    </script>
 <?php
  }   
  ?>
</body>
</html>