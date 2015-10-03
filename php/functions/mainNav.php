
<?php 
function Nav_data($dbc,$path_info){
	$q = "SELECT * FROM pages";
	$r = mysqli_query($dbc, $q);	
		while($nav = mysqli_fetch_assoc($r)){

?>		
			
<li <?php compare($path_info['call_parts'][0], $nav['nav'], 'class = "active"');?>> <a href="<?php echo $nav['nav'];?>"><?php echo $nav['nav']?></a></li>	

<?php	
}}					
?>
					
					