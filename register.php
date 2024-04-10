<?php 
$conn = mysqli_connect('localhost', 'root', '', 'project');
$showAlert = false;
$showError = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Set the timezone to IST

    date_default_timezone_set('Asia/Kolkata');
    // Get user inputs
	$name = isset($_POST['name']) ? $_POST['name'] : '';
	$email = isset($_POST['email']) ? $_POST['email'] : '';
	$password = isset($_POST['password']) ? $_POST['password'] : '';
	$cpassword = isset($_POST['cpassword']) ? $_POST['cpassword'] : '';
	
    $submission_time = date("Y-m-d H:i:s");
    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $existsql ="SELECT * FROM `users` WHERE email = '$email'";
    $result = mysqli_query($conn,$existsql);
    $numExistRows = mysqli_num_rows($result);
    if ($numExistRows > 0) {
      // User already exists
	  $showError = "Email already registered.";
  } 
  else {
  
      // User does not exist, proceed with registration
	  if(($password == $cpassword)){
      $sql = "INSERT INTO users (username, email, password, time) VALUES ('$name','$email', '$hashedPassword','$submission_time')";
	  $result = mysqli_query($conn, $sql);
	  if($result){
		$showAlert = true;
		header('location: login.php');
	  }
	  }
	  else{
		$showError = "Password do not match.";
	  }
  }
    
  $conn->close();
  
	
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<?php
    if ($showAlert){
    echo 
    '<div class="alert alert-success" role="alert">
  	Success your account is now created.
	</div>'; 
	header("location: login.php");
    }
   	?>
	<?php
    if ($showError){
    echo 
    '<div class="alert alert-danger" role="alert">
  	'.$showError.'
	</div>';
    }
?>
  <div class="header">
  	<h2>Register</h2>
  </div>
  
  <form method="post" action="register.php">
  	<?php  ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="name" value="">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="cpassword">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>