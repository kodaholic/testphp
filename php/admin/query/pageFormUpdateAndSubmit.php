<?php 
if(isset($_POST['submitted']) == 1){
		
	// folowing variables are created to escape any single or double quotes
	$nav = mysqli_real_escape_string($dbc, $_POST['nav']) ;
	$title = mysqli_real_escape_string($dbc, $_POST['title']);
	$header = mysqli_real_escape_string($dbc, $_POST['header']);
	$body = mysqli_real_escape_string($dbc, $_POST['body']);
	
	// folowing condition checks if an existing page is being updated that has been loaded into the form or a new page is being added.
	
	if($_POST['pageId'] != ''){
    $q = "UPDATE pages SET user = '$user[id]', nav = '$nav', title = '$title', header = '$header', body = '$body' WHERE id = '$_POST[pageId]' ";
	} else {
	        	
    $q = "INSERT INTO pages (user, nav, title, header, body) values ('$user[id]' , '$nav','$title','$header','$body')";
	}
    
  mysqli_query($dbc, $q);
}
?>

