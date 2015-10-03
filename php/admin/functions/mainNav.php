
<?php 
function Nav_data($dbc,$pageID){
$q = "SELECT * FROM pages";
$r = mysqli_query($dbc, $q);	
while($nav = mysqli_fetch_assoc($r)){
?>		
			
<li <?php if($pageID==$nav['id']){echo'class="active"'; } ?>> <a href="?page=<?php echo $nav['id'];?>"><?php echo $nav['nav']?></a></li>	

<?php	
}}					
?>
					
					