			
			<?php 
			// following code will hide this section if a new user is being created.
			if(isset($_GET['id'])){ ?>
				 <div class="form-group">
					<label>status</label>
					 <input class="form-control" name="status" value = "<?php if(isset($_GET['id'])){if($users['status']==1){echo"active";}else{echo"not active";}}?>" placeholder="Status">
				</div>
			<?}
			?>		

			