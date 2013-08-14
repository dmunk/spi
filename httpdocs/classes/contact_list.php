<?php
class ContactList
{
  private $_contacts;
  
  public function __construct()
  {
    $this->_contacts = array();
  }
  
  public function addContact( Contact $contact )
  {
    $this->_contacts[] = $contact;
  }
  
  public function getContacts()
  {
    return $this->_contacts;
  }

  public function setContacts( ContactList $contactList )
  {
    $this->_contacts = $contactList;
  }
  
  public function loadContacts( $company_id )
  {
    $select = sqlquery( "SELECT * FROM contacts WHERE company_id = ".mysql_escape( $company_id )." ORDER BY contact_last_name, contact_first_name" );
    
    if( !empty( $select['data'] ) ) 
    {
      foreach( $select['data'] as $contact )
      {
        $this->addContact(
          new Contact( 
                        $contact['contact_first_name'], $contact['contact_last_name'], $contact['company_id'], $contact['contact_id'], $contact['contact_suffix'], 
                        $contact['contact_title'], $contact['contact_address_1'], $contact['contact_address_2'], $contact['contact_city'], 
                        $contact['contact_state'], $contact['contact_zip'], $contact['contact_notes'], $contact['contact_phone'], $contact['contact_fax'], 
                        $contact['contact_email'], $contact['contact_facebook_url'], $contact['contact_twitter_url']
                     )
        );
      }
    }
    
    return $this->_contacts;
  }
}
?>