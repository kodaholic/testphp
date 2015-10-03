<?php
function data_page($dbc, $pageID) {
	if(is_numeric($pageID)){
	       $q = "SELECT * FROM pages WHERE id = $pageID";
	} else{
		   $q = "SELECT * FROM pages WHERE nav = '$pageID'";
	}
	$r = mysqli_query($dbc, $q);
	$page = mysqli_fetch_assoc($r);
	return $page;
}
?>