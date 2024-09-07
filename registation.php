  
<!doctype html>
<html lang="en" class="no-js">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="theme-color" content="#3e454c">
  <title>User Registration</title>
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-social.css">
  <link rel="stylesheet" href="css/bootstrap-select.css">
  <link rel="stylesheet" href="css/fileinput.min.css">
  <link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
  <link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="js/validation.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
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
  <br>
  <br>
  <?php include('include/header.php');?>
  <div class="ts-main-content">
    <?php include('include/sidebar.php');?>
    <div class="content-wrapper">
      <div class="container-fluid">

        <div class="row">
          <div class="col-md-12">
          

            <div class="row">
              <div class="col-md-12">
                <div class="panel panel-primary">
                  <div class="panel-heading">Fill all Info</div>
                  <div class="panel-body">
      <form method="post" action="assets/insert.php" name="registration" class="form-horizontal" onSubmit="return valid();">
                      
                    



<div class="form-group">
<label class="col-sm-2 control-label">First Name : </label>
<div class="col-sm-8">
<input type="text" name="name" id="fname"  class="form-control" required="required" >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label"> Date Of Birth : </label>
<div class="col-sm-8">
<input type="date" name="dob" id="dob"  required="required" >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Address : </label>
<div class="col-sm-8">
<textarea rows="5" name="address" id="address" class="form-control" required="required"></textarea>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">City : </label>
<div class="col-sm-8">
<input type="text" name="city" id="city" class="form-control" required="required">
</div>
</div>


<div class="form-group">
      <label class="col-sm-2 control-label">State </label>
      <div class="col-sm-8">
      <select name="state" id="state" class="form-control" required=""> 
      <option value="">Select State</option>
      <option value="Andaman and Nicobar Island (UT)">Andaman and Nicobar Island (UT)</option>
      <option value="Andhra Pradesh">Andhra Pradesh</option>
      <option value="Arunachal Pradesh">Arunachal Pradesh</option>
      <option value="Assam">Assam</option>
      <option value="Bihar">Bihar</option>
      <option value="Chandigarh (UT)">Chandigarh (UT)</option>
      <option value="Chhattisgarh">Chhattisgarh</option>
      <option value="Dadra and Nagar Haveli (UT)">Dadra and Nagar Haveli (UT)</option>
      <option value="Daman and Diu (UT)">Daman and Diu (UT)</option>
      <option value="Delhi (NCT)">Delhi (NCT)</option>
      <option value="Goa">Goa</option>
      <option value="Gujarat">Gujarat</option>
      <option value="Haryana">Haryana</option>
      <option value="Himachal Pradesh">Himachal Pradesh</option>
      <option value="Jammu and Kashmir">Jammu and Kashmir</option>
      <option value="Jharkhand">Jharkhand</option>
      <option value="Karnataka">Karnataka</option>
      <option value="Kerala">Kerala</option>
      <option value="Lakshadweep (UT)">Lakshadweep (UT)</option>
      <option value="Madhya Pradesh">Madhya Pradesh</option>
      <option value="Maharashtra">Maharashtra</option>
      <option value="Manipur">Manipur</option>
      <option value="Meghalaya">Meghalaya</option>
      <option value="Mizoram">Mizoram</option>
      <option value="Nagaland">Nagaland</option>
      <option value="Odisha">Odisha</option>
      <option value="Puducherry (UT)">Puducherry (UT)</option>
      <option value="Punjab">Punjab</option>
      <option value="Rajastha">Rajastha</option>
      <option value="Sikkim">Sikkim</option>
      <option value="Tamil Nadu">Tamil Nadu</option>
      <option value="Telangana">Telangana</option>
      <option value="Tripura">Tripura</option>
      <option value="Uttarakhand">Uttarakhand</option>
      <option value="Uttar Pradesh">Uttar Pradesh</option>
      <option value="West Bengal">West Bengal</option>
      </select> </div>
      </div>


<div class="form-group">
<label class="col-sm-2 control-label">Contact No : </label>
<div class="col-sm-8">
<input type="text" name="contact" id="contact"  class="form-control" required="required">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Gender : </label>
<div class="col-sm-8">
<select name="gender" class="form-control" required="required">
<option value="">Select Gender</option>
<option value="male">Male</option>
<option value="female">Female</option>
<option value="others">Others</option>
</select>
</div>
</div>

 

<div class="form-group">
<label class="col-sm-2 control-label">Email id: </label>
<div class="col-sm-8">
<input type="email" name="Email" id="email"  class="form-control" onBlur="checkAvailability()" required="required">
<span id="user-availability-status" style="font-size:12px;"></span>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Password: </label>
<div class="col-sm-8">
<input type="password" name="pass" id="password"  class="form-control" required="required">
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Confirm Password : </label>
<div class="col-sm-8">
<input type="password" name="cpassword" id="cpassword"  class="form-control" required="required">
<!--<input id="pass" type="password" class="input" data-type="password">-->
</div>
</div>
<div class="col-sm-6 col-sm-offset-4">
<button class="btn btn-default" type="submit">Cancel</button>
<input type="submit" name="submit" Value="Register" class="btn btn-primary">
</div>
</form>

                  </div>
                  </div>
                </div>
              </div>
            </div>
              </div>
            </div>
          </div>
        </div>  
      </div>
    </div>
  </div>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap-select.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.dataTables.min.js"></script>
  <script src="js/dataTables.bootstrap.min.js"></script>
  <script src="js/Chart.min.js"></script>
  <script src="js/fileinput.js"></script>
  <script src="js/chartData.js"></script>
  <script src="js/main.js"></script>
</body>
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

</html>]