<?php 
$conn = mysqli_connect('localhost', 'root', '', 'project');
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"]=="POST"){


	$email = isset($_POST['email']) ? $_POST['email'] : '';
	$password = isset($_POST['password']) ? $_POST['password'] : '';

   $sql = "SELECT * FROM users where email = '$email'";
   $result = mysqli_query($conn, $sql);
   $num = mysqli_num_rows($result);
   if($num == 1){
    while ($row = mysqli_fetch_assoc($result)) {
        if(password_verify($password,$row['password'])){
            $login = true; 
            $name = $row['username'];
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email;
            $_SESSION['name'] = $name;
            header("location: index.php");
            exit; // Add this line to exit the loop and stop further iterations
        }
    }
    // If the loop completes without finding a matching password
    $showError = "Invalid password";
}


 else{
   $showError = "Invalid Ceredentials";
 }

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
    if ($login){
    echo 
    '<div class="alert alert-success" role="alert">
  You are logged in.
</div>';
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
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="">
  	<?php  ?>
  	<div class="input-group">
  		<label>Email</label>
  		<input type="email" name="email" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>