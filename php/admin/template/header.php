<?php 
# Session start:
session_start();
if(!isset($_SESSION['username']))
{
	header('Location:login.php' ) ;
}

?>
<?php include 'config/setup.php';?>

<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Admin Home</title>
		<?php include 'config/css.php'; ?>
		<?php include 'config/js.php'; ?>
	</head>
	<body>
			<ul style = "display: inline;">
				<li><i class="fa fa-university fa-3x"></i></li>
				<li><h1 style="color: green; margin-left: 1%;">ADMIN  </h1></li>
			</ul>
		 
		
        <!-- Main Navigation-->
		<?php include('template/navigation.php');?>