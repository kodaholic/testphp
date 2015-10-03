<?php 
# Start a session
session_start();
include 'config/connection.php';?>

<?php 
if($_POST)
{
	$q = "SELECT * FROM users WHERE email = '$_POST[email]' AND password = SHA1('$_POST[password]')";
	$r = mysqli_query($dbc, $q);
	
	if(mysqli_num_rows($r) == 1)
	{
		
		$_SESSION['username'] = $_POST['email'];
		header('Location: index.php');
		
	}
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Admin Login</title>
		<?php include 'config/css.php'; ?>
		<?php include 'config/js.php'; ?>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					 <div class="panel panel-info">
					  <div class="panel-heading"> <strong>Login</strong> </div>
					   <div class="panel-body">
						 <form action="login.php" method="post">
							  <div class="form-group">
							    <label for="exampleInputEmail1">Email address</label>
							    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
							  </div>
							  <div class="form-group">
							    <label for="exampleInputPassword1">Password</label>
							    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
							  </div>
							  
							  <button type="submit" class="btn btn-default">Submit</button>
						  </form>
						 </div><!-- end of panel body-->
					 </div> <!-- end of panel-->
				 </div><!-- end of coloumn -->
			</div> <!-- end of row-->
		</div> <!-- end of container-->
      
		
		 <!-- Debug console-->
		<?php include 'widgets/debug.php'; ?>

	</body>

</html>