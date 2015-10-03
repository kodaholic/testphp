 <html>  
 <head> 

</head>

<body>
<?php include('admin/config/connection.php');?>
<?php 

	$q = "SELECT * FROM pages";
	$r = mysqli_query($dbc, $q);
	// $fullpage[] = mysqli_fetch_assoc($r); 	
		
		while($nav = mysqli_fetch_assoc($r)){
			
			// saves individula rows in following arrays
			if($nav['nav'] == 'Home') {$homepage["nav"] = $nav['nav']; $homepage["header"] = $nav['header']; $homepage["body"] = $nav['body']; }
			if($nav['nav'] == 'About Us') {$aboutuspage["nav"] = $nav['nav']; $aboutuspage["header"] = $nav['header']; $aboutuspage["body"] = $nav['body'];}
			if($nav['nav'] == 'test') {$testpage["nav"] = $nav['nav']; $testpage["header"] = $nav['header']; $testpage["body"] = $nav['body']; }

		} 
		// $jasonHome = json_encode($homepage);
		// $jasonAboutUs = json_encode($homepage);
		// $jasonTest = json_encode($homepage);
?>	

<?php //  echo $homepage ;?>
<div>
	<ul>
		<button type="button" onclick = "displayData(1)" >Home</button>
		<button type="button" onclick = "displayData(2)" >About us</button>
		<button type="button" onclick = "displayData(3)" >test</button>
		
	</ul>
</div>
<div id="displayHead" >
</div>
<div  >
	<p id="displayBody"></p>
</div>

<pre> <?php // print_r($homepage);?></pre>

<script>

 
function displayData(number){
	if(number == 1) {document.getElementById("displayHead").innerHTML =  <?php echo json_encode($homepage['header']); ?> ;
	                 document.getElementById("displayBody").innerHTML =  <?php echo json_encode($homepage['body']); ?> ; }
	if(number == 2)	{document.getElementById("displayHead").innerHTML =  <?php echo json_encode($aboutuspage['header']); ?> ;
	                 document.getElementById("displayBody").innerHTML =  <?php echo json_encode($aboutuspage['body']); ?> ; }
	if(number == 3)	{document.getElementById("displayHead").innerHTML =  <?php echo json_encode($testpage['header']); ?> ;
	                 document.getElementById("displayBody").innerHTML =  <?php echo json_encode($testpage['body']); ?> ; }	 
}
	
</script>
</body>
</html>   





