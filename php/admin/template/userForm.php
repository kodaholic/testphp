<?php
if(isset($_GET['id'])){
$users = getUser($dbc, $_GET['id']);	
}

?>

	<div class="col-md-7">
		<form action="#" method="post">
			 <div class="form-group">
				<label>First Name</label>
				 <input class="form-control"  name="first" value = "<?php if(isset($_GET['id'])){echo $users['first'];}?>"placeholder="First Name">
			 </div>
			 <div class="form-group">
				<label>Last Name</label>
				 <input class="form-control" name="last" value = "<?php if(isset($_GET['id'])){echo $users['last'];}?>"placeholder="Last Name">
			 </div>
			 <div class="form-group">
				<label>Email</label>
				 <input class="form-control" name="email" value = "<?php if(isset($_GET['id'])){echo $users['email'];}?>" placeholder="Email">
			</div>						
			 <div class="form-group">
				<label>password</label>
				 <input class="form-control" name="password" placeholder="password">
			</div>
			<?php 
			// following code will hide this section if a new user is being created.
			if(isset($_GET['id'])){ ?>
				 <div class="form-group">
					<label>status</label>
					 <input class="form-control" value = "<?php if(isset($_GET['id'])){if($users['status']==1){echo"active";}else{echo"not active";}}?>" placeholder="Status">
				</div>
			<?}
			?>			
				 <div class="form-group">
					<label><?php if(isset($_GET['id'])){echo"Update Status";} else{echo"select status";}?></label>			        
					<select name="status">
					  <option value="">Select</option>
					  <option value="1">Active</option>
					  <option value="0">Not Active</option>					  
					</select>
				</div>			
			 <button type="submit" class="btn btn-default">Submit</button>
			 <input type="hidden" name="submitted" value="1" />
			 <input type="hidden" name="userid" value="<?php if(isset($_GET['id'])){echo $users['id'];}?>" />
		</form>
	</div><!-- end of form row -->
<div class="col-md-1"></div><!-- for padding perpose -->			 
</div><!-- end of raw-->