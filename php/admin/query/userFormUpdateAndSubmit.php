<?php 
 error_reporting();
if(isset($_POST['submitted']) == 1){
		
	// folowing variables are created to escape any single or double quotes
	$first = mysqli_real_escape_string($dbc, $_POST['first']) ;
	$last = mysqli_real_escape_string($dbc, $_POST['last']);
	$email = mysqli_real_escape_string($dbc, $_POST['email']);
	$password = sha1('$_POST[password]');
	$status = $_POST['status'];
	switch ($status) {
		case '': $status = 1;			
			break;
		case '0': $status = 0;			
			break;
		case '1': $status = 1;			
			break;		
	}
	if($_POST['password'] !=''){
	$passwordString = "password=sha1('$_POST[password]'),";
	}
	// folowing condition checks if an existing page is being updated that has been loaded into the form or a new page is being added.	
	if($_POST['userid'] != ''){
    $q = "UPDATE users SET first = '$first', last = '$last', email = '$email', $passwordString status = $status WHERE id = '$_GET[id]'";
	} else {
	        	
    $q = "INSERT INTO users (first, last, email, password, status) values ('$first' , '$last','$email','$password',$status)";
	}
    
  mysqli_query($dbc, $q);
}
?>