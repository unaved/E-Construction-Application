<?php include 'include/header.php'; ?>
<!doctype html>
<html lang="en" class="no-js">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="theme-color" content="#3e454c">
  <title>User Log In</title>
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">>
  <link rel="stylesheet" href="css/bootstrap-social.css">
  <link rel="stylesheet" href="css/bootstrap-select.css">
  <link rel="stylesheet" href="css/fileinput.min.css">
  <link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
  <link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="js/validation.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
  
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
                <div class="panel panel-primary">
                  <div class="panel-heading">User Log In</div>
                  <div class="panel-body">
                  <form name="login"  action="assets/checkforlogin.php" method="post">
   
   <div class="container">
     <label class="col-sm-2 control-label"><b>Email</b></label>
     <input type="text" placeholder="Enter Email" name="email" class="form-control mb" required>

     <label class="col-sm-2 control-label"><b>Password</b></label>
     <input type="password" placeholder="Enter Password" class="form-control mb" name="pass"  required>
      
     <button type="submit" class="btn btn-primary" name="login">Login</button>

   </div>
    </form>
 
      </div>
        <div class="col-md-2">
      </div>
    
  </div>
   
</div>

  </body>

</html>