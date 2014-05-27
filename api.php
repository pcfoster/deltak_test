<?php 

$root_url = 'http://seeking-wonderland.com/pcfoster/test3/';

// get hard-code info array for testing.

$branding_array = array(
	'peas' => array(
		'name'	=>	'Peas University',
		'logo'	=> 	$root_url . 'peas.jpg',
		'url'	=>	'http://www.peas.com'
	),
	'porridge' => array(
		'name'	=>	'Porridge University',
		'logo'	=> 	$root_url . 'porridge.jpg',
		'url'	=>	'http://www.porridge.com'
	),
	'hot' => array(
		'name'	=>	'Hot University',
		'logo'	=> 	$root_url . 'hot.jpg',
		'url'	=>	'http://www.hot.com'
	)
);


// get all keys for the client.api select element
$return_array = array(
	'all_keys'	=>	array_keys($branding_array)
);

// extract $id from URI
// without doing any mod_rewrite games in the htaccess, the id argument will be in in the query string:
$id = $_GET['id'];

//	if validate $id
// to be a proper REST API, this should be checking $_SERVER['REQUEST_METHOD'] as well for get, put, post, or delete, etc.
if ( $id && isset($branding_array[$id]) ) {

	$return_array['branding_data'] = $branding_array[$id];

}

header("Content-type: application/json");
print json_encode($return_array);

?>

