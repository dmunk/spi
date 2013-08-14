<?php
class Contact
{
  private $_contact_id;
  private $_company_id;
  private $_contact_first_name;
  private $_contact_last_name;
  private $_contact_suffix;
  private $_contact_title;
  private $_contact_address_1;
  private $_contact_address_2;
  private $_contact_city;
  private $_contact_state;
  private $_contact_zip;
  private $_contact_notes;
  private $_contact_phone;
  private $_contact_fax;
  private $_contact_email;
  private $_contact_facebook_url;
  private $_contact_twitter_url;
  private $_last_updated;
  private $_create_date_time;
  
  function __construct( $first_name, $last_name, $company_id, $contact_id = NULL, $suffix = NULL, $title = NULL, $address_1 = NULL, $address_2 = NULL, $city = NULL, 
                        $state = NULL, $zip = NULL, $notes = NULL, $phone = NULL, $fax = NULL, $email = NULL, $facebook_url = NULL, $twitter_url = NULL )
  {
    $this->_contact_id = $contact_id;
    $this->_company_id = $company_id;
    $this->_contact_first_name = $first_name;
    $this->_contact_last_name = $last_name;
    $this->_contact_suffix = $suffix;
    $this->_contact_title = $title;
    $this->_contact_address_1 = $address_1;
    $this->_contact_address_2 = $address_2;
    $this->_contact_city = $city;
    $this->_contact_state = $state;
    $this->_contact_zip = $zip;
    $this->_contact_notes = $notes;
    $this->_contact_phone = $phone;
    $this->_contact_fax = $fax;
    $this->_contact_email = $email;
    $this->_contact_facebook_url = $facebook_url;
    $this->_contact_twitter_url = $twitter_url;
    $this->_create_date_time = date('Y-m-d H:i:s');
  }
  
  public function getContactId()
  {
    return $this->_contact_id;
  }
  
  public function setContactId( $contact_id )
  {
    $this->_contact_id = $contact_id;
  }
  
  public function getCompanyId()
  {
    return $this->_company_id;
  }
  
  public function setCompanyId( $company_id )
  {
    $this->_company_id = $company_id;
  }
  
  public function getFirstName()
  {
    return $this->_contact_first_name;
  }
  
  public function setFirstName( $first_name )
  {
    $this->_contact_first_name = $first_name;
  }

  public function getLastName()
  {
    return $this->_contact_last_name;
  }
  
  public function setLastName( $last_name )
  {
    $this->_contact_last_name = $last_name;
  }
  
  public function getTitle()
  {
    return $this->_contact_title;
  }
  
  public function setTitle( $title )
  {
    $this->_contact_title = $title;
  }
  
  public function getAddress1()
  {
    return $this->_contact_address_1;
  }
  
  public function setAddress1( $contact_address_1 )
  {
    $this->_contact_address_1 = $contact_address_1;
  }
  
  public function getAddress2()
  {
    return $this->_contact_address_2;
  }
  
  public function setAddress2( $contact_address_2 )
  {
    $this->_contact_address_2 = $contact_address_2;
  }
  
  public function getCity()
  {
    return $this->_contact_city;
  }
  
  public function setCity( $contact_city )
  {
    $this->_contact_city = $contact_city;
  }
  
  public function getState()
  {
    return $this->_contact_state;
  }
  
  public function setState( $contact_state )
  {
    $this->_contact_state = $contact_state;
  }
  
  public function getZip()
  {
    return $this->_contact_zip;
  }
  
  public function setZip( $contact_zip )
  {
    $this->_contact_zip = $contact_zip;
  }

  public function getNotes()
  {
    return $this->_contact_notes;
  }
  
  public function setNotes( $contact_notes )
  {
    $this->_contact_notes = $contact_notes;
  }
  
  public function getPhone()
  {
    return $this->_contact_phone;
  }
  
  public function setPhone( $contact_phone )
  {
    $this->_contact_phone = $contact_phone;
  }
  
  public function getFax()
  {
    return $this->_contact_fax;
  }
  
  public function setFax( $contact_fax )
  {
    $this->_contact_fax = $contact_fax;
  }

  public function getEmail()
  {
    return $this->_contact_email;
  }
  
  public function setEmail( $contact_email )
  {
    $this->_contact_email = $contact_email;
  }
  
  public function getFacebookURL()
  {
    return $this->_contact_facebook_url;
  }
  
  public function setFacebookURL( $contact_facebook_url )
  {
    $this->_contact_facebook_url = $contact_facebook_url;
  }
  
  public function getTwitterURL()
  {
    return $this->_contact_twitter_url;
  }
  
  public function setTwitterURL( $contact_twitter_url )
  {
    $this->_contact_twitter_url = $contact_twitter_url;
  }
  
  public function getSuffix()
  {
    return $this->_contact_suffix;
  }
  
  public function setSuffix( $suffix )
  {
    $this->_contact_suffix = $suffix;
  }
  
  public function getCreateDateTime()
  {
    return $this->_create_date_time;
  }
  
  public function setCreateDateTime( $create_date_time )
  {
    $this->_create_date_time = $create_date_time;
  }
  
  public function getLastUpdated()
  {
    return $this->_last_updated;
  }
  
  public function setLastUpdated( $last_updated )
  {
    $this->_last_updated = $last_updated;
  }
  
  public function save()
  {
    require_once( PHP_CLASSES."sql.php" );
    
    $result = false;
    
    $rawContactData = get_object_vars( $this );
    $contactData = array();

    foreach( $rawContactData as $key => $item )
      $contactData[substr($key, 1)] = $item;

    if( !empty( $this->_contact_id ) )
      $result = updateData( 'contacts', $contactData, 'contact_id' );
    else
    {
      $result = insertData( 'contacts', $contactData );
      
      if( $result )
        $this->_contact_id = $result;
    }
    
    return $result;
  }
  
  public function load()
  {
    require_once( PHP_CLASSES."sql.php" );
    
    $select = sqlquery( "SELECT * FROM contacts WHERE contact_id = ".mysql_escape( $this->_contact_id ) );

    if( !empty( $select['data'] ) )
    {
      $loadItem = $select['data'][0];
     
      $this->setContactId( $loadItem['contact_id'] ); 
      $this->setCompanyId( $loadItem['company_id'] );
      $this->setFirstName( $loadItem['contact_first_name'] );
      $this->setLastName( $loadItem['contact_last_name'] );
      $this->setSuffix( $loadItem['contact_suffix'] );
      $this->setTitle( $loadItem['contact_title'] );
      $this->setAddress1( $loadItem['contact_address_1'] );
      $this->setAddress2( $loadItem['contact_address_2'] );
      $this->setCity( $loadItem['contact_city'] );
      $this->setState( $loadItem['contact_state'] );
      $this->setZip( $loadItem['contact_zip'] );

      foreach( $loadItem as $key => $value )
        $_POST[$key] = $value;
    }
  }
}
?>