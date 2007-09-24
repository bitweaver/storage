<?php
global $gBitSystem, $gBitUser ;

$registerHash = array(
	'package_name' => 'storage',
	'package_path' => dirname( __FILE__ ).'/',
	'required_package'=> TRUE,
);
$gBitSystem->registerPackage( $registerHash );

// set in kernel/config_inc.php
if( !defined( 'STORAGE_HOST_URI' ) ) {
	define( 'STORAGE_HOST_URI', BIT_ROOT_URI );
}

?>
