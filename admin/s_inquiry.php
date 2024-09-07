<!DOCTYPE html>
<html lang="en">
<head>
  <title>Appointment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Cascade Build</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">HOME</a></li>
      <li><a href="s_inquiry.php">APPOINTMENT</a></li>
      <li><a href="s_msg.php">MASSAGES</a></li>
      <li><a href="gallery_admin.php">GALLERY</a></li>
      <li><a href="logout.php">LOGOUT</a></li>
    </ul>
  </div>
</nav>
  
<?php

include ('../db.php');
$output = '';

                    $sql="SELECT * from inquiri";
                
$result = mysqli_query($conn, $sql);
if ($result != null){
	if ($result->num_rows>0){

	$number = 1;
    $output .='<h4 aligen= "center">Search Result </h4>';
	$output .='<div class ="table-responsive">
                <table class="table table bordered">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                   
                  </tr>';
        while ($row = mysqli_fetch_array($result)) {
        $output .='<tr>
        <td>'.$number.'</td>
        <td>'.$row['name'].'</td>
        <td>'.$row['email'].'</td>
        <td>'.$row['contact'].'</td>
        </tr>';$number++;
  }
	echo $output;
}
else
{
	echo 'Data Not Found';
}
}else
{
	echo 'Enter Search';
}
?>