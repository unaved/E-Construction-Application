<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="with=device-width, initial-scale=1.0">
	<link rel="stylesheet"  href="css/cb.css">

	<!-- google font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&display=swap" rel="stylesheet">
	<!-- font awesome 4 cdn-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!------- font awesome---------------------->
	<script src="https://kit.fontawesome.com/332a215f17.js" cross origin="anonymous"></script>

	<title>Cascade Built</title>
</head>
<body>
	<section class="sub-header">
	<?php include('assets/navigation.php');?>
		<h1>Gallery</h1>
	</section>

	<!-----------Services-------------------->

	<section class="service">
		
		<div class="row">
			<div class="service-col">
            <a href="image/img1.jpg"><img src="image/img1.jpg"width="300" height="200"></a>
			</div>

			<div class="service-col">
            <a href="image/img2.jpg"><img src="image/img2.jpg"width="300" height="200"></a>
			</div>

			<div class="service-col">
            <a href="image/img3.jpg"><img src="image/img3.jpg"width="300" height="200"></a>
			</div>
		</div>

        <div class="row">
			<div class="service-col">
            <a href="image/img4.jpg"><img src="image/img4.jpg"width="300" height="200"></a>
			</div>

			<div class="service-col">
            <a href="image/img5.jpg"><img src="image/img5.jpg"width="300" height="200"></a>
			</div>

			<div class="service-col">
            <a href="image/img6.jpg"><img src="image/img6.jpg"width="300" height="200"></a>
			</div>
		</div>


		

	</section>

	<!-----------Features------------>

<section class="">

</section>


<!-----------engineering consultancy------------>


<!---------Civil construction------------>

<section class="service2">

</section>


	




	







<!-------Footer---------------->

	
<section class="footer">
	<h4>About Us</h4>
	<p>We collect and analyze information about your general usage of the website, products, services, and courses.<br> We might track your usage patterns to see what features of the website you commonly use.</p>

	<div class="icons">
		<i class="fa fa-facebook"></i>
		<i class="fa fa-twitter"></i>
		<i class="fa fa-instagram"></i>
		<i class="fa fa-whatsapp"></i>
	</div>
	<p>Made with<i class="fa fa-heart-o"></i> by Cascade Built</p>
</section>













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

</body>
</html>