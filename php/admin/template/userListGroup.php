<div class="row">
	<div class="col-md-1"></div> <!-- for padding perpose -->
	<div class="col-md-3">		
					<ul class="list-group">
					 <li class="list-group-item">
						<a href="?page=users">
							<i class="fa fa-plus-circle"></i><strong> ADD NEW USER</strong> <br />
						</a>
					</li>
				</ul>
						    
				<ul class="list-group">	
				<?php 
					$q = "SELECT * FROM users";
					$r = mysqli_query($dbc, $q);
					while($user_list = mysqli_fetch_assoc($r)){
					// $blurb = substr(strip_tags($page_list['body']),0,160);
				?>
					<a href="?page=users&id=<?php echo $user_list['id'];?>"
						<p class="list-group-item <?php if($user_list['id'] == $_GET['id'] ) { echo "active" ;}?>">
							<strong><?php echo $user_list['first']." ".$user_list['last'] ;?></strong> <br />
						</p>
					</a>
				 <?php	
				 }
				 ?>
				 </ul>
	</div> <!-- end of list -->