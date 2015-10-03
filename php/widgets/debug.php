<div id = "debugConsol" class="container" >
	<?php if($debug=='1'){ 
	$allVars = get_defined_vars();	
		?>	
		<pre>
			<h3>All Vars</h3>
    <?php print_r($allVars); ?>
		</pre>
	 <pre>   
		 	<h3>Path Array</h3>
    <?php// print_r($path_info); ?>
          <h3>path_info</h3>
    <?php// print_r($path_info['call_parts'][0]); ?>
    </pre>
  
  
  
   <pre> <h3>GET </h3>
   	<?php// print_r($_GET); ?>
   	
         <h3>POST</h3>
    <?php // print_r($_POST) ; ?>
         <h3>Page Array</h3>
    <?php // print_r($page); ?>
     

   </pre>
    <?php } ?>		
</div>