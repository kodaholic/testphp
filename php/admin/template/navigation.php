

     <nav class="navbar navbar-default">
     	<?php if($debug==1){ ?>
     	<button type="button" id = "debug" class="btn btn-danger" style="top:7px;"><i class="fa fa-bug" ></i></button> <!-- debug button -->
		<?php } ?>
		
					<ul class="nav navbar-nav">
						
						<li> <a href="?page=dashboard">Dash Board</a></li>
						<li ><a href="?page=users">Users</a></li>
						<li ><a href="?page=pages">Pages</a></li>
						<li ><a href="?page=settings">Settings</a></li>
					</ul>
				<div class="pull-right">
					<ul class="nav navbar-nav" >
						<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo  $user['first'];?> <span class="caret"></span></a>
					          <ul class="dropdown-menu">
					            <li><a href="logout.php">Logout</a></li>
					            <li><a href="#">Another action</a></li>
					            <li><a href="#">Something else here</a></li>
					            <li role="separator" class="divider"></li>
					            <li><a href="#">Separated link</a></li>
					          </ul>
			            </li>
					</ul>
			    </div>
	 </nav> <!-- end of nav     -->


            