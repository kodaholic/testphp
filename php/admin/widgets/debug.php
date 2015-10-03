<div id = "debugConsol" class="container" >
	
	<?php if($debug=='1'){ 
	$allVars = get_defined_vars();	
		?>
	<pre> <h3>userid </h3>	
	<?
	// place tempt variable here to check random variable every now and then :)
	
	?>		
   <pre> <h3>GET </h3>
   	<?php print_r($_GET); ?>
         <h3>POST</h3>
    <?php print_r($_POST) ; ?>
         <h3>Session</h3>
    <?php print_r($_SESSION); ?>
         <h3>user_list</h3>
    <?php print_r($user_list); ?>
    <h3>user</h3>
    <?php print_r($users); ?>
   </pre>
    <?php } ?>		
</div>