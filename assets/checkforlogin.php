<?php 
	
	include '../db.php';
	if(!empty($_POST['email']) && !empty($_POST['pass'])) {
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$pwd=md5($pass);
		
		$qry = "SELECT * FROM `user` WHERE `Email`='$email' AND `Password`='$pwd'";
		$run = mysqli_query($conn, $qry);
		$row = mysqli_num_rows($run);
		if ($row < 1)
		{
			?>
			<script>
				alert ('Email or Password not matched please try again ... ');
				window.location.href = "login.php";
			</script>
			<?php 
		}
		else 
		{
			session_start();
			$_SESSION['email'] = $email;
			header('location: ../index.php');
		}
	} else {
		header('location: login.php');
	}

?>