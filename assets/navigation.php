<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<meta name="viewport" content="with=device-width, initial-scale=1.0">
	<link rel="stylesheet"  href="css/cb.css">


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<!-- google font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&display=swap" rel="stylesheet">
	<!-- font awesome 4 cdn-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!------- font awesome---------------------->
	<script src="https://kit.fontawesome.com/332a215f17.js" cross origin="anonymous"></script>

	<script type="text/javascript">
		function valid()
		{
		if(document.registration.pass.value!= document.registration.cpassword.value)
		{
		alert("Password and Re-Type Password Field do not match  !!");
		document.registration.cpassword.focus();
		return false;
		}
		return true;
		}
		</script>
</head>
<body>
    
<section class="">
		<nav>
			<!-- <a href="index.php"><img src="image/cb.logo.jpg" ></a> -->
			<div class="nav-links" id="navLinks">
				<i class="fa fa-times" onclick="hideMenu()"></i>
				<ul>
					<li><a href="index.php">HOME</a></li>
					<li><a href="service.php">SERVICES</a></li>
					<li><a href="project.php">PROJECTS</a></li>
					<li><a href="T&C.php">T&C</a></li>
					<li><a href="about.php">ABOUT</a></li>
					<li><a href="contact.php">CONTACT US</a></li>
					<li><a href="gallery.php">Gallery</a></li>
					<li><a href="assets/logout.php">Logout</a></li>
					
<!-- Button to Open the Modal -->

<!-- Button to Open the Modal -->
				</ul>
			</div>
			<i class="fa fa-bars" onclick="showMenu()"></i>

		</nav>

	</section>




    


 






</body>



<!----JavaScript for Toggle Menu------>
<script>
		var navLinks = document.getElementById("navLinks");

		function showMenu(){
			navLinks.style.right = "0";
		}
		function hideMenu(){
			navLinks.style.right = "-200px";
		}

	</script>

<script>
	function checkAvailability() {
	
	$("#loaderIcon").show();
	jQuery.ajax({
	url: "check_availability.php",
	data:'emailid='+$("#email").val(),
	type: "POST",
	success:function(data){
	$("#user-availability-status").html(data);
	$("#loaderIcon").hide();
	},
	error:function ()
	{
	event.preventDefault();
	alert('error');
	}
	});
	}
	</script>
</html>