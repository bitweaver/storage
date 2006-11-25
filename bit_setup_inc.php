<?php
global $gBitSystem, $gBitUser ;

$registerHash = array(
	'package_name' => 'storage',
	'package_path' => dirname( __FILE__ ).'/',
	'required_package'=> TRUE,
);
$gBitSystem->registerPackage( $registerHash );

?>
