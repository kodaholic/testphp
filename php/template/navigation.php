

     <nav class="navbar navbar-default">
     	<?php if($debug==1){ ?>
     	<button type="button" id = "debug" class="btn btn-danger" style="top:7px;"><i class="fa fa-bug" ></i></button> <!-- debug button -->
		<?php } ?>
		<div class="container">
				<ul class="nav navbar-nav">
					<?php Nav_data($dbc,$path_info);?>
					<li <?php if($pageID==3){echo'class="active"'; } ?> >
						<a href="#">FAQ</a>
					</li>
					<li >
						<a href="#">Contact</a>
					</li>
				</ul>
		</div><!-- end of nav container-->		
	 </nav> <!-- end of nav-->


            