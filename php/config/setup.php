<?php 
// setup File:
error_reporting(0);
#Database connection:
include 'admin/config/connection.php';

// functions
include 'functions/cleanURL.php';
include 'functions/compare.php';
include 'functions/data.php';
include 'functions/mainNav.php';
include 'functions/settings.php';


# page setup
// clean URL function invocation.
$path_info = parse_path();

if(!isset($path_info['call_parts'][0]) || $path_info['call_parts'][0] == '')
{
// $path_info['call_parts'][0] = 'Home';	
header('Location: Home');
}  



#page data
$page = data_page($dbc, $path_info['call_parts'][0]);





#page settings 
// settings table returns 1 or 0 to load / disable the debug option.
$debug = page_settings($dbc, 'debug-status');


// echo '<pre>'.print_r($path_info, true).'</pre>';

?>