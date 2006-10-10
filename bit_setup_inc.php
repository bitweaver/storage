<?php
global $gBitSystem, $gBitUser ;

$registerHash = array(
	'package_name' => 'storage',
	'package_path' => dirname( __FILE__ ).'/',
);
$gBitSystem->registerPackage( $registerHash );

?>
