<?php
session_start();
$con=mysqli_connect("localhost","root","","php_ecommerce");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/php_ecommerce/');
define('SITE_PATH','http://127.0.0.1/php-ecommerce/');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'media/product/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'media/product/');
?>