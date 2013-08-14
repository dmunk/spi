<?php
$dbConfig = array( 
              'hostname' => 'localhost:3306', 
              'username' => 'dbo434511885', 
              'password' => 'sp1r1t3d', 
              'database' => 'db434511885'
            );

if( $_SERVER['HTTP_HOST'] == 'www.spiritedpackaging.com' || $_SERVER['HTTP_HOST'] == 'spiritedpackaging.com' )
{
  define( 'PHP_ROOT', '/homepages/38/d412108070/htdocs/' );
  $dbConfig['hostname'] = 'db434511885.db.1and1.com';
}
else
  define( 'PHP_ROOT', 'C:/Program Files/Apache Software Foundation/Apache2.4/htdocs/spi/httpdocs/' );

define( 'PHP_CLASSES', PHP_ROOT.'classes/' );
define( 'PHP_INCLUDES', PHP_ROOT.'includes/' );

require_once( PHP_CLASSES.'sqlquery.php' );

session_start();
if( !empty( $_GET['campaign_id'] ) )
  $_SESSION['campaign_id'] = $_GET['campaign_id'];
  
date_default_timezone_set('America/Los_Angeles');
?>