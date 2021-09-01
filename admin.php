<?php

session_start();
require 'conn.php';

?>
<!DOCTYPE html>
<html>
<head>
     <title> Login </title>
     <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<!-- login -->
  <div class = "container">
    <div class = "row">
      <div class = "col-lg-4 col-md-4 col-lg-push-4 col-md-push-4">
        <div class = "panel panel-default" style = "margin-top: 50px;">
          <div class = "panel-heading">Login</div>
          <div class = "panel-body">
            <table align ="center">
             <form action = "" method = "POST">
                <div class = "form-group">
                  <input type = "text" class = "form-control input-sm" name = "u_name" required placeholder="Name">
                </div>
                <div class = "form-group">
                  <input type = "password" class = "form-control input-sm" name = "u_pass" required placeholder="Password">
                </div>
                <div class = "form-group">
                  <input type = "Submit" class = "btn btn-success btn-sm" name = "u_login" value ="Login as Admin">
                  <!-- <a  href="register.php" class ="btn btn-info btn-sm">Register</a> -->
                </div>
              </form>
              </table>
          </div>
        </div>
    </div>
   </div>
 </div>
 <!-- login -->

 <?php 
 if( isset($_POST["u_login"]) )
   {
    //$u_email=$_POST['u_email'];
    $u_name= $_POST['u_name'];
    $u_pass=md5($_POST['u_pass']);
   
    $sql = "SELECT * FROM users WHERE u_name='$u_name'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      //output data of eachrow 
      while( $user = mysqli_fetch_assoc($result) ) {
        if($u_name==$user['u_name'] && $u_pass= $user['u_pass'])
        {
          $_SESSION['u_name'] =$u_name; 
          header('Location:dash.php');
          //echo "<script> alert('Login successfully'); </script>";
        } else {
          echo "<script> alert('Error user name or password'); </script>";
        }
      }
   }
  }
  ?>
 <script src = "https://code.jquery.com/jquery-1.12.4.min.js"></script>
 <script src = "https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>



