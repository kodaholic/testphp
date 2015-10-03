<?php
function data_page($dbc, $pageID) {
	$q = "SELECT * FROM pages WHERE id = $pageID";

	$r = mysqli_query($dbc, $q);
	$page = mysqli_fetch_assoc($r);
	return $page;
}
?>