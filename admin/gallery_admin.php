<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gallery</title>
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
  
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>

			<div class="col-md-8">
					
			<form action="g_insert.php" method="post" enctype="multipart/form-data">
			<div>
				<input type="text" name="name" class="form-control" placeholder="Enter Image Name">
			</div>
<br>
			<div>
				<input type="file" name="img1" class="form-control-file">
			</div>
<br>
			<div>
				<input type="submit" name="submit" class="btn btn-primary" value="Upload Image">
				<a href="../crop.php" class="btn btn-dark"> Back </a>
			</div>
</form>


			</div>

			<div class="col-md-2"></div>
		</div>
	</div>

</body>
</html>

<br>
		
			