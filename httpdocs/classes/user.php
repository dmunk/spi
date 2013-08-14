<?php
class User
{
  private $_user_id;
  private $_username;
  private $_email;
  private $_first_name;
  private $_last_name;
  
  function __construct( $username, $email, $first_name, $last_name, $user_id = NULL )
  {
    $this->_username = $username;
    $this->_email = $email;
    $this->_first_name = $first_name;
    $this->_last_name = $last_name;
    $this->_user_id = $user_id;
  }
  
  public function login( $username, $password )
  {
    require_once( PHP_CLASSES."sql.php" );
    
    // TODO: Add validation for username and password params
    $loginSelect = 
  }
  
  public function getUserId()
  {
    return $this->_user_id;
  }
  
  public function setUserId( $user_id )
  {
    $this->_user_id = $user_id;
  }
  
  public function getUsername()
  {
    return $this->_username;
  }
  
  public function setUsername( $username )
  {
    $this->_username = $username;
  }
  
  public function getEmail()
  {
    return $this->_email;
  }
  
  public function setEmail( $email )
  {
    $this->_email = $email;
  }
  
  public function getFirstName()
  {
    return $this->_first_name;
  }
  
  public function setFirstName( $first_name )
  {
    $this->_first_name = $first_name;
  }
  
  public function getLastName()
  {
    return $this->_last_name;
  }
  
  public function setLastName( $last_name )
  {
    $this->_last_name = $last_name;
  }
}
?>