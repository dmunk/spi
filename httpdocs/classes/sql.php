<?php
#
# (c) COPYRIGHT 2007-2011, Oceanpeak, Inc. All rights reserved.
#
# The Common Grant Application is a project of Oceanpeak, Inc.
# This software is confidential and proprietary to Oceanpeak, Inc.
# No part of this software may be reproduced, reformatted,
# excerpted, stored, transmitted, distributed, disclosed or used
# in any form or by any means other than as provided by the
# written User Agreement between Oceanpeak, Inc. and its Users.
#
# Oceanpeak, Inc. makes no warranties, either express or implied,
# including without limitation warranties of accuracy,
# completeness, title, non-infringement, merchantability and
# fitness for a particular purpose, with regard to the services,
# software, any related materials or use thereof.
#
# In no event shall Oceanpeak, Inc. be liable for any indirect,
# incidental, special, punitive or consequential damages in
# connection with or arising out of the use or inability to
# use these services, software, or any related materials
# whether based on breach of contract, tort (including
# negligence), product liability, or otherwise, and whether
# or not it has been advised of the possiblity of such damage.
#
# Common Grant Application
# A project of Oceanpeak, Inc.
# 530 Wilshire Blvd. Suite 207
# Santa Monica, CA  90401
# +1 (310) 490-1277
#
# Notes:
#
# None
#

function getEnumValues( $table, $field )
{
  static $schema = array();

  if(empty($schema[$table.'::'.$field]))
  {
	  $select = sqlquery("
		  DESCRIBE ".$table." ".$field."
	  ");
	  $select['data'][0]['Type'] = str_replace( "','", "';'", $select['data'][0]['Type'] );
	  $enumList = explode(";",trim(strstr($select['data'][0]['Type'],"("),")("));
	  foreach( $enumList as $key => $value )
	  {
	  	$tmp = trim($value,"'");
		  $enum[$tmp] = ucwords($tmp);
		}
	  $schema[$table.'::'.$field] = $enum;
	}
	else
	  $enum = $schema[$table.'::'.$field];
	return $enum;
}

function getTableMetadata($tableName, $fields=false)
{
  global $fieldData, $dbConfig;
  
  $where = "WHERE TABLE_NAME = '".mysql_escape($tableName)."' AND TABLE_SCHEMA = '".mysql_escape($dbConfig['database'])."'";
  
  if( !empty( $fields ) )
  {
    if( is_array( $fields ) )
    {
      $count = 0;
      $where .= " AND (";
      foreach( $fields as $field )
      {
        if( $count != 0 )
          $where .= " OR";
        $where .= " COLUMN_NAME = '".mysql_escape($field)."'";
        $count++;
      }
      $where .= ")";
    }
    else
      $where .= " AND COLUMN_NAME = '".mysql_escape($fields)."'"; 
  }
  else
    $where .= " AND COLUMN_NAME IS NOT NULL AND COLUMN_COMMENT <> '' ";
  
  $select = sqlquery("
              SELECT TABLE_NAME, COLUMN_NAME, COLUMN_COMMENT, DATA_TYPE 
              FROM INFORMATION_SCHEMA.COLUMNS 
              ".$where."
              GROUP BY COLUMN_NAME 
              ORDER BY COLUMN_COMMENT
            ");

  if( !empty( $select['data'] ) )
  {
    if( empty( $fieldData ) )
      $fieldData = $select['data'];
    else
      $fieldData = array_merge( $fieldData, $select['data'] );
  }
}

function insertData( $table, $data, $showQuery=false )
{
	global $errors;

  if( empty($_SESSION['userId']) )
    $userId = 0;
  else
    $userId = $_SESSION['userId'];
  
	if( $data = relevantDataArray( $table, $data ) )
	{
		$insert = sqlquery( "
			INSERT INTO ".$table."
			(`". implode( "`,`",array_keys($data) ) ."`)
			VALUES(". implode( ",", SQLValues($data) ) .")
		");
		if( $showQuery )
			echo "<pre>", print_r($insert), "</pre>";
			
		if( isset($insert['insertID']) )
			return $insert['insertID'];
		elseif( isset($insert['rowsAffected']) && $insert['rowsAffected'] == 1 )
			return true;
	  else
	  {
	    //TODO: Add exception handling here 
	  }
	}
	else
	{
	  //TODO: Add exception handling here
	}

	//TODO: Add exception handling here
	return false;
}

function relevantDataArray( $table, $array )
{
	$tableFields = tableColumns($table);

	if( !empty($tableFields) )
	{
		foreach( $array as $key => $value )
		{
			if( in_array($key, $tableFields) )
				$data[$key] = $value;
		}
		if( !empty( $data ) )
		  return $data;
		return false;
	}
	return false;
}

function SQLUpdateString( $array )
{
	if( is_array($array) )
	{
		$string = "";
		foreach( $array as $key => $value )
			$string .= "`$key` = ".SQLValue( $value ).", ";
		return rtrim($string,", ");
	}
}

function SQLValue( $string, $keepZero = false )
{
	if( trim($string) == "" && !$keepZero )
		$value = "NULL";
	else
		$value = "'".mysql_escape($string)."'";
	return $value;
}

function SQLValues( $data )
{
	if( is_array($data) )
	{
		foreach( $data as $key => $value )
			$data[$key] = SQLValue( $value );
	}
	else
		$data = SQLValue( $data );
	return $data;
}

function tableColumns($tableName)
{
  static $schema = array();

  if(empty($schema[$tableName]))
  {
	  $columns = sqlquery("SHOW COLUMNS FROM ".$tableName);

	  if( !empty($columns['data']) )
	  {
		  $column_array = array();
		  foreach( $columns['data'] as $column )
		  {
			  array_push($column_array, $column['Field']);
		  }
	  }
	  if( !empty( $column_array ) )
	    $schema[$tableName] = $column_array;
	  else
	    error_log('empty $column_array for table '.$tableName);
	}
	else
	{
	  $column_array = $schema[$tableName];
	}
	if( !empty($column_array) )
		return $column_array;
	return false;
}

function updateData( $table, $data, $key, $showQuery=false )
{
	global $errors;

  if( empty($_SESSION['userId']) )
    $userId = 0;
  else
    $userId = $_SESSION['userId'];

  $id = array();
  if(is_array($key))
  {
    foreach($key as $k)
    {
      $id[] = "`$k` = ".SQLValue($data[$k]);
	    unset($data[$k]);
    }
  }
  else
  {
	  $id[] = "`$key` = ".SQLValue($data[$key]);
	  unset($data[$key]);
  }
	if( $data = relevantDataArray( $table, $data ) )
	{
		$update = sqlquery("
			UPDATE $table
			SET ".SQLUpdateString( $data )."
			WHERE ".implode(' AND ', $id)."
		");
		
	  if( $table == 'contactOrg' || $table == 'appContactOrg' )
	    systemLog($_SESSION['userId'], 1, 'sql::updateData', 'invalid table', $update['query'] );

		if( $showQuery )
			echo "<pre>", print_r($update), "</pre>";
		if( !empty($update['rowsAffected']))
			return $update['rowsAffected'];
		else if( empty($update['errors']) )
			return true;
	  else
	    systemLog($_SESSION['userId'], 1, 'sql::updateData', '', 'updateData failed: update = '.print_r($update, true));
	}
	else
	  systemLog($_SESSION['userId'], 1, 'sql::updateData', '', 'updateData failed relevantDataArray check: table = '.$table.', data = '.print_r($data, true));

	setErrors(CHK_PAGE, '', '', 'Dbase record not updated.', qaz);
	return false;
}
?>