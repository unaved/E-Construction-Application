<?php
include('../db.php');
if(isset($_POST['submit']))
{
//$imagename = $_FILES['img1']['name']; // storing file name
//$tempimagename = $_FILES['img1']['tmp_name']; // temp name stored

$name=$_POST['name'];
$Email=$_POST['Email'];
$password=$_POST['pass'];
$pwd=md5($password);

$query="INSERT INTO `admin`(`name`, `email`, `password`) VALUES ('$name','$Email','$password')";
//move_uploaded_file($tempimagename,"userimg/$imagename");




$count=0;
$res=mysqli_query($conn,"SELECT * FROM `admin` WHERE `Email`='$Email'");
$count=mysqli_num_rows($res);
if($count>0)
{
	?>
	<script type="text/javascript">
	alert("This Email is already existed .");
	window.location.href = "../admin_reg.php";
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
	window.location.href = "../admin_log.php";
	</script>
	<?php
	}
}
}
?>





