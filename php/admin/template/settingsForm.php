<!-- gives feedback to the users about update -->
<h4 style="text-align: center;"><?php if(isset($message)) {echo $message;}?></h4>
<?php
	$q = "SELECT * FROM settings";
	$r = mysqli_query($dbc, $q);
	while ($settings_list = mysqli_fetch_assoc($r)) { ?>

		<form class="form-inline" method="post" action="?page=settings">
		  <div class="form-group">
		    <label>ID: </label>
		    <input type="text" class="form-control" name="id"  value="<?php echo $settings_list['id'];?> ">
		  </div>
		  <div class="form-group">
		    <label>Label: </label>
		    <input type="text" class="form-control" name="label" value="<?php echo $settings_list['label'];?>">
		  </div>  
		  <div class="form-group">
		    <label>Value: </label>
		    <input type="text" class="form-control" name="value" value="<?php echo $settings_list['value'];?>">
		  </div>
		  <input type="hidden" name="submitted" value="1" />
		  <button type="submit" class="btn btn-default">Save</button>
		</form>	
<?php	
}
?>