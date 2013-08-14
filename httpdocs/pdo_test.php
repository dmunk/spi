<?php
$pdo = new PDO('mysql:dbname=db434511885;host=127.0.0.1','dbo434511885','sp1r1t3d');
var_dump( $pdo );
$fetchStmt = $pdo->query('SELECT * FROM users');
$errorArray = $pdo->errorInfo();
echo '<pre>', print_r( $errorArray ), '</pre>';
var_dump( $fetchStmt );
$userId = 20;
$fetchStmt->bindValue(':userId', $userId, PDO::PARAM_INT);
$result = $fetchStmt->execute();
echo 'rowCount = '.$fetchStmt->rowCount().'<br />';
$fetchStmt->debugDumpParams();
if( $result )
  echo 'fetched<br />';
$resultArray = $fetchStmt->fetchAll();
echo '<pre>', print_r( $resultArray ), '</pre>';
$fetchStmt->closeCursor();
?>