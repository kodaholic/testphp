<h1>Settings Manager</h1>

<?
if(isset($_POST['submitted'])==1){
	
	$ID = mysqli_real_escape_string($dbc, $_POST['id']);
	$Label = mysqli_real_escape_string($dbc, $_POST['label']);
	$Value = mysqli_real_escape_string($dbc, $_POST['value']);
	
    $q = "UPDATE settings SET id = '$ID', label = '$Label', value = '$Value'";
	$r = mysqli_query($dbc, $q);
	if($r){
		$message = "<P class=\"alert alert-success\">DONE!</P>";
	} else {
		$message = "<P class=\"alert alert alert-danger\">Opps! there was a problem!</P>".mysqli_error($dbc); 
	}
}
?>
<?php
	$q = "SELECT * FROM settings";
	$r = mysqli_query($dbc, $q);
	while ($settings_list = mysqli_fetch_assoc($r)) { ?>

		<form class="form-inline">
		  <div class="form-group">
		    <label>ID</label>
		    <input type="text" class="form-control" name="id"  value="<?php echo $settings_list['id'];?> ">
		  </div>
		  <div class="form-group">
		    <label>Label</label>
		    <input type="text" class="form-control" name="label" value="<?php echo $settings_list['label'];?>">
		  </div>  
		  <div class="form-group">
		    <label>Value</label>
		    <input type="email" class="form-control" name="value" value="<?php echo $settings_list['value'];?>">
		  </div>
		  <input type="hidden" name="submitted" value="1" />
		  <button type="submit" class="btn btn-default">Save</button>
		</form>	
<?php	
}
?>

