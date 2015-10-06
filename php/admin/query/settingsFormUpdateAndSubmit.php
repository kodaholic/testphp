<?
if(isset($_POST['submitted'])==1){
	
	$ID = mysqli_real_escape_string($dbc, $_POST['id']);
	$Label = mysqli_real_escape_string($dbc, $_POST['label']);
	$Value = mysqli_real_escape_string($dbc, $_POST['value']);
	
    $q = "UPDATE settings SET id = '$ID', label = '$Label', value = '$Value' WHERE id ='$_POST[id]'";
	$r = mysqli_query($dbc, $q);
	if($r){
		$message = "<P class=\"alert alert-success\">DONE!</P>";
	} else {
		$message = "<P class=\"alert alert alert-danger\">Opps! there was a problem!</P>".mysqli_error($dbc); 
	} 
}
?>