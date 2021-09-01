<?php 
require 'conn.php';
?>
<?php
    include 'submit.php';
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<!-- <title>My Login Page</title> -->
	<link rel="stylesheet" 
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/my-login.css">
    <script src="https://hcaptcha.com/1/api.js" async defer></script>
</head>

<body class="my-login-page">
	<section class="h-100">
	<a style = "margin-left : 1200px;" href="admin.php" class ="btn btn-info btn-sm">Admin Login</a>
		<br><br><br>
		<div class="container h-100">
			<!-- <button><a href="#"><h4 class="card-title button">Employe Login</h4></a></button> -->
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<!-- <div class="brand">
						<img src="img/logo.jpg" alt="logo">
					</div> -->
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Feedback Form</h4>
                            <?php if(!empty($statusMsg)) {?>  
                                <p class= "status-msg <?php echo $status; ?>"><?php echo $statusMsg; ?> </p>
                            <?php } ?>
							<form method="POST" class="my-login-validation" onSubmit="window.location.reload() novalidate="">
							`                                   <div class="form-group">
									<label for="text">Name</label>
									<input type="text" name="name" class="form-control" value="<?php echo !empty($postData['name'])?$postData['name']:'';?>" placeholder="Your name" required="" />
									<div class="invalid-feedback">
                                    Name is required
									</div>
								</div>

								<div class="form-group">
									<label for="email">Email Address</label>
									<input type="email" name="email" class="form-control" value= "<?php echo !empty($postData['email'])?$postData['email']:'';?>" placeholder="Your email" required="" />
								    <div class="invalid-feedback">
								    	
                                        Email is invalid
							    	</div>
								</div>
								<div class="form-group">
									<label for="text">Feedback</label>
									<textarea name="message" class="form-control" placeholder="Give Feedback..." ><?php echo !empty($postData['message'])?$postData['message']:'';?></textarea>
									<div class="invalid-feedback">
								    	feedback is required
							    	</div>
								</div>

								<div class="h-captcha" data-sitekey="<?php echo $sitekey; ?>"></div>
								<div class="form-group m-0">
									<button type="submit" value = "refresh" name = "submit" class="btn btn-primary btn-block">
										Submit Feedback
									</button>
								</div>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<?php 
 if( isset($_POST["submit"]) )
   {
    $name= $_POST['name'];
	$email=$_POST['email'];
    $message=($_POST['message']);

	$sql = "INSERT INTO feedback(name,email,message) VALUES ('$name', '$email', '$message')";

    if(mysqli_query($conn, $sql))
    {
      echo "<script> alert('feedback updated successfully'); </script>";
	  header("Refresh: 0"); 
      //header('Location:employees.php');

    } else {
            echo "Error:" , mysqli_error($conn);
           }
   }
  ?>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src='js/my-login.js'></script>
</body>
</html>
