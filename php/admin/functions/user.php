<?php
function getUser($dbc, $id) {
 if(is_numeric($id)){
 	$q = "SELECT * FROM users WHERE id = $id";
 } else {
    $q = "SELECT * FROM users WHERE email = '$id'"; 
 }
	$r = mysqli_query($dbc, $q);
	$user = mysqli_fetch_assoc($r);
	return $user;
}


?>