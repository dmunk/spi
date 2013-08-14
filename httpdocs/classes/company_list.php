<?php
class CompanyList
{
  private $_companies;
  
  public function __construct()
  {
    $this->_companies = array();
  }
  
  public function addCompany( Company $company )
  {
    $this->_companies[] = $company;
  }
  
  public function getCompanies()
  {
    return $this->_companies;
  }

  public function setCompanies( CompanyList $companyList )
  {
    $this->_companies = $companyList;
  }
  
  public function loadCompanies()
  {
    $select = sqlquery( "SELECT * FROM companies ORDER BY company_name" );
    
    if( !empty( $select['data'] ) ) 
    {
      foreach( $select['data'] as $company )
      {
        $this->addCompany( 
          new Company( 
                       $company['company_name'], $company['company_id'], $company['company_address_1'], $company['company_address_2'], $company['company_city'], 
                       $company['company_state'], $company['company_zip'], $company['annual_case_production'], $company['current_suppliers'], 
                       $company['company_notes'], $company['company_phone'], $company['company_fax'], $company['company_facebook_url'], 
                       $company['company_twitter_url'], $company['company_website'], $company['company_email']
                     )
        );
      }
    }
    
    return $this->_companies;
  }
}
?>