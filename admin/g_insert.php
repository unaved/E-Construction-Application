<?php
include('../db.php');
if(isset($_POST['submit']))
{
$imagename = $_FILES['img1']['name']; // storing file name
$tempimagename = $_FILES['img1']['tmp_name']; // temp name stored
$name=$_POST['name'];

$query="INSERT INTO `gallery`(`name`, `image`) VALUES ('$name','$imagename')";


move_uploaded_file($tempimagename,"userimg/$imagename");
$count=0;
$res=mysqli_query($conn,"SELECT * FROM `user` WHERE `Email`='$email'");
$count=mysqli_num_rows($res);
if($count>0)
{
	?>
	<script type="text/javascript">
	alert("Photo Upload fail.");
	window.location.href = "gallery_admin.php";
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
	alert("Photo Upload Sucessfull.");
	window.location.href = "gallery_admin.php";
	</script>
	<?php
	}
}
}
?>