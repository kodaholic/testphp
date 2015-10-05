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

	// To varify if the password matches in both field.
    if($_POST['password']===$_POST['passwordV']){ $varify = true;} else {$varify = false;}
	
	// for updating existing users password
	if($_POST['password'] !='' && $varify==true){
	   {$passwordString = "password=sha1('$_POST[password]'),";}	
	} 
	if($_POST['password'] !='' && $varify==false){
	   {$passwordString = "404";}	
	}	

	// folowing condition checks if an existing page is being updated that has been loaded into the form or a new page is being added.	
	if($_POST['userid'] != ''){
    $q = "UPDATE users SET first = '$first', last = '$last', email = '$email', $passwordString status = $status WHERE id = '$_POST[userid]'";
	} else {
	 if($varify==true) {      	
    $q = "INSERT INTO users (first, last, email, password, status) values ('$first' , '$last','$email','$password',$status)";
    }
	}
    
  $result = mysqli_query($dbc, $q);
  
  // gives the user a feedback after submission.
  if($result){
  	$message = "<P class=\"alert alert-success\">User has been submitted.</P>";

  } else{
  	$message = "<P class=\"alert alert alert-danger\">Opps! there was a problem!</P>".mysqli_error($dbc);
      if($passwordString == "404" ) {$message = "<P class=\"alert alert-danger\">Password fields didn't match!</P>"; }
  }
}
?>