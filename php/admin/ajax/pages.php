<?
include '../config/connection.php';
$pageID = $_GET['id'];
$q="DELETE FROM pages WHERE ID =$pageID";
$r=mysqli_query($dbc, $q);
if($r){
	echo "page deleted";
} else {
	echo "there was a problem!";
}
?>