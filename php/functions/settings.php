<?php
function page_settings($dbc, $id)
{
$q = "SELECT * FROM settings WHERE id = '$id'";
$r = mysqli_query($dbc, $q);
$data = mysqli_fetch_assoc($r);
return $data['value'];	
}



?>