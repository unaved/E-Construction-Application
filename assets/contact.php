<?php
include('../db.php');
if(isset($_POST['submit']))
{
//$imagename = $_FILES['img1']['name']; // storing file name
//$tempimagename = $_FILES['img1']['tmp_name']; // temp name stored

$name=$_POST['name'];
$email=$_POST['email'];
$work=$_POST['work'];
$msg=$_POST['msg'];

$query="INSERT INTO `msg`(`name`, `email`, `work`, `msg`) VALUES ('$name','$email','$work','$msg')";
//move_uploaded_file($tempimagename,"userimg/$imagename");




$count=0;
$res=mysqli_query($conn,"SELECT * FROM `user` WHERE `Email`='$Email'");
$count=mysqli_num_rows($res);
if($count>0)
{
	?>

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
	window.location.href = "index.php";
	</script>
	<?php
	}
}
}
?>





