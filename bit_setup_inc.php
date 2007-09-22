<?php
global $gBitSystem, $gBitUser ;

$registerHash = array(
	'package_name' => 'storage',
	'package_path' => dirname( __FILE__ ).'/',
	'required_package'=> TRUE,
);
$gBitSystem->registerPackage( $registerHash );


// add default STORAGE_HOST_URI for optionally splitting off storage files to separate host
// to serve thumbnails and other files from a different server from your web server, add similar to your kernel/config_inc.php
// define( 'STORAGE_HOST_URI', 'http://myfiles.example.com' ); or whatever your storage host name is...
if( !defined( 'STORAGE_HOST_URI' ) ) {
	define( 'STORAGE_HOST_URI', BIT_ROOT_URI );
}

?>
