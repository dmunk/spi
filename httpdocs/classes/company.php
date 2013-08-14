<?php
class Company
{
  private $_company_id;
  private $_company_name;
  private $_company_address_1;
  private $_company_address_2;
  private $_company_city;
  private $_company_state;
  private $_company_zip;
  private $_annual_case_production;
  private $_current_suppliers;
  private $_company_notes;
  private $_company_phone;
  private $_company_fax;
  private $_company_facebook_url;
  private $_company_twitter_url;
  private $_company_website;
  private $_company_email;
  private $_last_updated;
  private $_create_date_time;
  
  function __construct( $name, $company_id = NULL, $address_1 = NULL, $address_2 = NULL, $city = NULL, $state = NULL, $zip = NULL, 
                        $annual_case_production = NULL, $current_suppliers = NULL, $notes = NULL, $phone = NULL, $fax = NULL, $facebook_url = NULL, 
                        $twitter_url = NULL, $website = NULL, $email = NULL )
  {
    $this->_company_id = $company_id;
    $this->_company_name = $name;
    $this->_company_address_1 = $address_1;
    $this->_company_address_2 = $address_2;
    $this->_company_city = $city;
    $this->_company_state = $state;
    $this->_company_zip = $zip;
    $this->_annual_case_production = $annual_case_production;
    $this->_current_suppliers = $current_suppliers;
    $this->_company_notes = $notes;
    $this->_company_phone = $phone;
    $this->_company_fax = $fax;
    $this->_company_facebook_url = $facebook_url;
    $this->_company_twitter_url = $twitter_url;
    $this->_company_website = $website;
    $this->_company_email = $email;
    $this->_create_date_time = date('Y-m-d H:i:s');
  }
  
  public function getCompanyId()
  {
    return $this->_company_id;
  }
  
  public function setCompanyId( $company_id )
  {
    $this->_company_id = $company_id;
  }
  
  public function getName()
  {
    return $this->_company_name;
  }
  
  public function setName( $company_name )
  {
    $this->_company_name = $company_name;
  }
  
  public function getAddress1()
  {
    return $this->_company_address_1;
  }
  
  public function setAddress1( $company_address_1 )
  {
    $this->_company_address_1 = $company_address_1;
  }
  
  public function getAddress2()
  {
    return $this->_company_address_2;
  }
  
  public function setAddress2( $company_address_2 )
  {
    $this->_company_address_2 = $company_address_2;
  }
  
  public function getCity()
  {
    return $this->_company_city;
  }
  
  public function setCity( $company_city )
  {
    $this->_company_city = $company_city;
  }
  
  public function getState()
  {
    return $this->_company_state; 
  }
  
  public function setState( $company_state )
  {
    $this->_company_state = $company_state;
  }
  
  public function getZip()
  {
    return $this->_company_zip;
  }
  
  public function setZip( $company_zip )
  {
    $this->_company_zip = $company_zip;
  }
  
  public function getAnnualCaseProduction()
  {
    return $this->_annual_case_production;
  }
  
  public function setAnnualCaseProduction( $annual_case_production )
  {
    $this->_annual_case_production = $annual_case_production;
  }
  
  public function getCurrentSuppliers()
  {
    return $this->_current_suppliers;
  }
  
  public function setCurrentSuppliers( $current_suppliers )
  {
    $this->_current_suppliers = $current_suppliers;
  }
  
  public function getNotes()
  {
    return $this->_company_notes;
  }
  
  public function setNotes( $company_notes )
  {
    $this->_company_notes = $company_notes;
  }
  
  public function getPhone()
  {
    return $this->_company_phone;
  }
  
  public function setPhone( $company_phone )
  {
    $this->_company_phone = $company_phone;
  }
  
  public function getFax()
  {
    return $this->_company_fax;
  }
  
  public function setFax( $company_fax )
  {
    $this->_company_fax = $company_fax;
  }
  
  public function getFacebookURL()
  {
    return $this->_company_facebook_url;
  }
  
  public function setFacebookURL( $company_facebook_url )
  {
    $this->_company_facebook_url = $company_facebook_url;
  }
  
  public function getTwitterURL()
  {
    return $this->_company_twitter_url;
  }
  
  public function setTwitterURL( $company_twitter_url )
  {
    $this->_company_twitter_url = $company_twitter_url;
  }
  
  public function getWebsite()
  {
    return $this->_company_website;
  }
  
  public function setWebsite( $company_website )
  {
    $this->_company_website = $company_website;
  }

  public function getEmail()
  {
    return $this->_email;
  }
  
  public function setEmail( $email )
  {
    $this->_email = $email;
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
    
    $rawCompanyData = get_object_vars( $this );
    $companyData = array();

    foreach( $rawCompanyData as $key => $item )
      $companyData[substr($key, 1)] = $item;

    if( !empty( $this->_company_id ) )
      $result = updateData( 'companies', $companyData, 'company_id' );
    else
    {
      $result = insertData( 'companies', $companyData );
      
      if( $result )
        $this->_company_id = $result;
    }
    
    return $result;
  }
  
  public function load()
  {
    require_once( PHP_CLASSES."sql.php" );
    
    $select = sqlquery( "SELECT * FROM companies WHERE company_id = ".mysql_escape( $this->_company_id ) );

    if( !empty( $select['data'] ) )
    {
      $loadItem = $select['data'][0];

      $this->setCompanyId( $loadItem['company_id'] );
      $this->setName( $loadItem['company_name'] );
      $this->setAddress1( $loadItem['company_address_1'] );
      $this->setAddress2( $loadItem['company_address_2'] );
      $this->setCity( $loadItem['company_city'] );
      $this->setState( $loadItem['company_state'] );
      $this->setZip( $loadItem['company_zip'] );
      $this->setEmail( $loadItem['company_email'] );

      foreach( $loadItem as $key => $value )
        $_POST[$key] = $value;
    }
  }
}
?>