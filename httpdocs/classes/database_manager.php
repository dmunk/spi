<?php
class DatabaseManager
{
  private static $instance;
  private $_dsn;
  private $_host;
  private $_port;
  private $_dbname;
  private $_options;
  
  private function __construct() {}
  
  public static function getInstance()
  {
    if( empty( self::$instance ) )
      self::$instance = new DatabaseManager();
  }
  
  public function getDSN()
  {
    return $this->_dsn;
  }
  
  public function setDSN( $dsn )
  {
    $this->_dsn = $dsn;
  }
  
  public function getHost()
  {
    return $this->_host;
  }
  
  public function setHost( $host )
  {
    $this->_host = $host;
  }
  
  public function getPort()
  {
    return $this->_port;
  }
  
  public function setPort( $port )
  {
    $this->_port = $port;
  }
  
  public function getDBName()
  {
    return $this->_dbname;
  }
  
  public function setDBName( $dbname )
  {
    $this->_dbname = $dbname;
  }
  
  public function getOptions()
  {
    return $this->_options;
  }
  
  public function setOptions( $options )
  {
    $this->_options = $options;
  }
}
?>