<?php
// include database connection file
require_once'connection_index.php';
if(isset($_POST['insert']))
{
// Posted Values  
$id=$_POST['id'];
$na=$_POST['na'];
$d=$_POST['d'];
// Call the store procedure for insertion
$sql=mysqli_query($con,"call insertUsers('$id','$na','$d')");
if($sql)
{
// Message for successfull insertion
echo "<script>alert('Record inserted successfully');</script>";
echo "<script>window.location.href='users.php'</script>"; 
}
else 
{
// Message for unsuccessfull insertion
echo "<script>alert('Something went wrong. Please try again');</script>";
echo "<script>window.location.href='users.php'</script>"; 
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Students Details</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-12">
<h3>Students Details</h3><hr />
<a href="users.php"><button class="btn btn-warning">Back</button></a>
<hr />
</div>
</div>

<form name="insertrecord" method="post">
<div class="row">
<div class="col-md-4"><b>Student ID</b>
<input type="text" name="id" class="form-control" required>
</div>
<div class="col-md-4"><b>Name</b>
<input type="text" name="na" class="form-control" required>
</div>
<div class="col-md-4"><b>Department</b>
<input type="text" name="d" class="form-control" required>
</div>
</div>  

<div class="row" style="margin-top:1%">
<div class="col-md-8">
<input type="submit" name="insert" value="Submit">
</div>
</div> 
</form>
     
</div>
</div>
</body>
</html>