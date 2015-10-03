<?php 
// setup File:
# Database connection here...
include 'connection.php';

// functions
include 'functions/data.php';
include 'functions/mainNav.php';
include 'functions/settings.php';
include 'functions/user.php';
# page setup

if(isset($_GET['page']))
{
$pageID = $_GET['page'];
} else {
	$pageID = "dashboard";
} 

#page data
// this will only get set when a user click on a link from the list group to load the data into the form
if(isset($_GET['id'])){
	$page = data_page($dbc, $_GET['id']);
}

#page settings 
// settings table returns 1 or 0 to load / disable the debug option.
$debug = page_settings($dbc, 'debug-status');

# User:
$user = getUser($dbc, $_SESSION['username']);


// open uni phone:01908541066
?>

