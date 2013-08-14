<?php
#
# (c) COPYRIGHT 2007-2009, Oceanpeak, Inc. All rights reserved.
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

$dbConfigDefault = array(
	'dbType'	=>	"mysql",
	'hostname'	=>	"localhost",
	'username'	=>	"",
	'password'	=>	"",
	'database'	=>	"",
	'privacy'	=>	true,
	'schema'	=>	false
);

foreach( $dbConfigDefault as $key => $value )
{
	if( !isset($dbConfig[$key]) )
		$dbConfig[$key] = $value;
}

if( !function_exists( "mtime" ) )
{
	function mtime()
	{
		return array_sum( explode( " ", microtime() ) );
	}
}

function mysql_escape($escapeString)
{
	static $dbStates;

	if(!is_array($dbStates))
		$dbStates = array();

	global $dbConfig;
	global $curlOptionText;

	$info = &$dbConfig;
		
	$result['schema']	= false;
	$result['status']	= false;
	$result['dbType']	= &$info['dbType'];

	$dbConnPtr = implode( '|', array( $info['dbType'], $info['hostname'], $info['username'], $info['password'] ) );

	if( $info['dbType'] == "mysql")
	{
		if( function_exists( "mysql_connect" ) )
		{
			if( !$info['privacy'] )
				$result['connectionInfo'] = $info;

			if(!isset($dbStates[$dbConnPtr]))
			{
				$serverConnection = @mysql_connect( $info['hostname'], $info['username'], $info['password'] );
				if($serverConnection)
					$dbStates[$dbConnPtr] = array( 'connection' => $serverConnection,	'database' => '' );
			}
			else
				$serverConnection = $dbStates[$dbConnPtr]['connection'];
				
			if( $serverConnection )
			{
        return mysql_real_escape_string( $escapeString );
			}
			else
			{
				$result['connection'] = "false";
				$result['error'] = mysql_error();
			}
		}
		else
		{
			$result['status'] = false;
			$result['error'] = "Your version of PHP does not have MySQL support installed.";
		}
	}
}

if( !function_exists( "SQLConnect" ) )
{
	function SQLConnect()
	{
		global $dbConfig;

		$connect = mysql_pconnect($dbConfig['hostname'], $dbConfig['username'], $dbConfig['password']);
		if (!$connect)
			report_error('500', $connect, 'dbase');

		# Before we return the result, we should unset $dbConfig for security purposes.
		unset( $dbConfig );
		return $connect;
	}
}

if( !function_exists( "SQLQuery" ) )
{
	function SQLQuery( $queryString , $inlineDBParams=false )
	{
		static $dbStates;

		if(!is_array($dbStates))
			$dbStates = array();

		global $dbConfig;
		global $curlOptionText;
		
		if( is_string( $queryString ) )
			$queryString = trim( $queryString );

		$startTime = mtime();
		$info = &$dbConfig;
		
		# if any of the db parameters have been passed inline
		# then loop through them and overwrite any existing db values
		
		if( is_array($inlineDBParams) )
		{
			foreach( $inlineDBParams as $key => $value )
			{
				if( isset($dbConfig[$key]) )
					$dbConfig[$key] = $value;
			}
		}
		
		$result['schema']	= false;
		$result['status']	= false;
		$result['dbType']	= &$info['dbType'];
		$result['query']	= &$queryString;

		$dbConnPtr = implode('|', array(
			$info['dbType'], $info['hostname'], $info['username'], $info['password']
		));

		if ( $info['dbType'] == "mysql")
		{
			if( function_exists( "mysql_connect" ) )
			{
				if( !$info['privacy'] )
					$result['connectionInfo'] = $info;

				if(!isset($dbStates[$dbConnPtr]))
				{
					$serverConnection = @mysql_connect( $info['hostname'], $info['username'], $info['password'] );
					if($serverConnection)
					{
						$dbStates[$dbConnPtr] = array(
							'connection' => $serverConnection
						,	'database' => ''
						);
					}
				}
				else
					$serverConnection = $dbStates[$dbConnPtr]['connection'];
				
				if ( $serverConnection )
				{
					$result['connection'] = true;
					
					# set names to utf8 for compatibility with DB collation
					$namesQuery = "SET NAMES = 'utf8';";
					@mysql_unbuffered_query( $namesQuery, $serverConnection );
					
					# if a database is defined in the db params select it
					# otherwise the query must define the database
					# cache database selection
					
					if($info['database'] === $dbStates[$dbConnPtr]['database'])
						$databaseSelection = 'selected';
					elseif( !empty($info['database']) )
					{
						$databaseSelection = @mysql_select_db( $info['database'], $serverConnection );

						if($databaseSelection)
							$dbStates[$dbConnPtr]['database'] = $info['database'];
					}
					else
						$databaseSelection = "query";
					
					if ( $databaseSelection )
					{
						$result['database'] 		= true;
						$result['rtime']['start']	= mtime();
						$mysqlDataResult		= @mysql_unbuffered_query( $queryString, $serverConnection );
						
						$result['rtime']['stop']	= mtime();
						$result['rtime']['elapsed']	= sprintf( "%.04f", $result['rtime']['stop'] - $result['rtime']['start'] );
						
						if( $mysqlDataResult !== false )
						{
							$result['status']	=	true;
							$queryTokens		=	preg_split( "/[\s,]+/", trim( $queryString ) );
							$queryTokens[0]		=	strtolower( $queryTokens[0] );
							if( $queryTokens[0] == "select" || $queryTokens[0] == "show" || $queryTokens[0] == "describe" || $queryTokens[0] == "explain" )
							{	
								$result['queryType']=	"select";
								$rowCount			=	0;

								while( true )
								{
									$result['data'][$rowCount]		=	@mysql_fetch_assoc( $mysqlDataResult );
									
									if( $result['data'][$rowCount] )
									{
										if( $rowCount == 0 )
											$result['allKeys']	=	array_keys( $result['data'][0] );
										
										$rowCount++;
									}
									else
									{
										unset( $result['data'][$rowCount] );
										break;
									}
								}

								$result['rows']	= sizeof( $result['data'] );
								
								if( $result['rows'] > 0)
								{
#									$result[columns]	=	mysql_num_fields( $mysqlDataResult );
									$result['assocCols']	=	sizeof( $result['data'][0]);
								}
							}
							else if( $queryTokens[0] == "insert" || $queryTokens[0] == "replace" )
							{
								$result['queryType']	=	"insert";
								$result['insertID']	=	mysql_insert_id( $serverConnection );
								$result['rowsAffected']	=	mysql_affected_rows( $serverConnection );
							}
							else if( $queryTokens[0] == "update" )
							{
								$result['queryType']	=	"update";
								$result['rowsAffected']	=	mysql_affected_rows( $serverConnection );
							}
							else if( $queryTokens[0] == "delete")
							{
								$result['queryType']	=	"delete";
								$result['rowsAffected']	=	mysql_affected_rows( $serverConnection );
							}
							
							$result['connection']			=	$serverConnection;
							
							@mysql_free_result( $mysqlDataResult );
						}
						else
						{
							$result['status'] = false;
							$result['error'] = mysql_error();
						}
					}
					else
					{
						$result['status'] = false;
						$result['error'] = mysql_error();
					}
				}
				else
				{
					$result['connection'] = "false";
					$result['error'] = mysql_error();
				}
			}
			else
			{
				$result['status'] = false;
				$result['error'] = "Your version of PHP does not have MySQL support installed.";
			}
		}

		$stopTime = explode(" ", microtime() );
		$stopTime = $stopTime[0] + $stopTime[1];
		
		$result['time']['start'] = $startTime;
		$result['time']['stop'] = $stopTime;
		$result['time']['elapsed'] = $stopTime - $startTime;
		
		ksort( $result );
		
		# Before we return the result, we should unset $dbConfig for security purposes.
		unset( $dbConfig );
		return $result;
	}
}
?>