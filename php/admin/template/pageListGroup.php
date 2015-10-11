<ul class="list-group">
	 <p class="list-group-item">
		<a href="?page=pages">
			<i class="fa fa-plus-circle"></i><strong> ADD NEW PAGE</strong> <br />
		</a>
	</p>
</ul>
		    
<ul class="list-group">	
<?php 
	$q = "SELECT * FROM pages ORDER BY header ASC";
	$r = mysqli_query($dbc, $q);
	while($page_list = mysqli_fetch_assoc($r)){
	$blurb = substr(strip_tags($page_list['body']),0,160);
?>
	
		<div class="list-group-item <?php if($page_list['id'] == $page['id'] ) { echo "active" ;}?>" id ="<?php echo $page_list['id']; ?>">
			<a href="#" id="<?php echo $page_list['id']; ?>" class="pull-right btn btn-danger btn-delete"><i class="fa fa-trash-o"></i></a>
			<a href="?page=pages&id= <?php echo $page_list['id'];?>"><button class="pull-right btn btn-info"><i class="fa fa-pencil-square-o"></i></button></a>
			<strong><?php echo$page_list['header'] ;?></strong> <br />
			<?php echo$blurb ;?>

		</div>
	
 <?php	
 }
 ?>
 </ul>
		  		
		  		
		  		