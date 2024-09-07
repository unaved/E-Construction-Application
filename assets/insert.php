<?php
include('../db.php');
if(isset($_POST['submit']))
{
//$imagename = $_FILES['img1']['name']; // storing file name
//$tempimagename = $_FILES['img1']['tmp_name']; // temp name stored

$name=$_POST['name'];
$dob=$_POST['dob'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$contact=$_POST['contact'];
$gender=$_POST['gender'];
$Email=$_POST['Email'];
$password=$_POST['pass'];
$pwd=md5($password);

$query="INSERT INTO `user`(`name`, `dob`, `address`, `city`, `state`, `mobile`, `gender`, `email`, `password`) VALUES ('$name','$dob','$address','$city','$state','$contact','$gender','$Email','$pwd')";
//move_uploaded_file($tempimagename,"userimg/$imagename");




$count=0;
$res=mysqli_query($conn,"SELECT * FROM `user` WHERE `Email`='$Email'");
$count=mysqli_num_rows($res);
if($count>0)
{
	?>
	<script type="text/javascript">
	alert("This Email is already existed .");
	window.location.href = "../login.php";
	</script>
	<?php
}
else 
{
	$run= mysqli_query($conn, $query);
	if ($run==true)
	{
		?>
	<script type="text/javascript">
	alert("Your account has been created sucessfully please log in to continue.");
	window.location.href = "../index.php";
	</script>
	<?php
	}
}
}
?>





