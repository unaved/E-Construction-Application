<?php 
	include '../db.php';
	if(!empty($_POST['email']) && !empty($_POST['pass'])) {
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		
		$qry = "SELECT * FROM `admin` WHERE `Email`='$email' AND `Password`='$pass'";
		$run = mysqli_query($conn, $qry);
		$row = mysqli_num_rows($run);
		if ($row < 1)
		{
			?>
			<script>
				alert ('Email or Password not matched please try again ... ');
				window.location.href = "../admin_reg.php";
			</script>
			<?php 
		}
		else 
		{
			session_start();
			$_SESSION['email'] = $email;
			header('location: dashboard.php');
		}
	} else {
		header('location: ../admin_reg.php');
	}

?>