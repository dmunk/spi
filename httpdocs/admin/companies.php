<?php
require_once("../config.php");

require_once(PHP_CLASSES."company.php");
require_once(PHP_CLASSES."company_list.php");

if( !empty( $_POST ) )
{
  try
  {
    $optionalFields = array( 
                              'company_address_1', 'company_address_2', 'company_city', 'company_state', 'company_zip', 'company_phone', 'company_fax', 
                              'company_facebook_url', 'company_twitter_url', 'company_website', 'annual_case_production', 'current_suppliers', 'company_notes', 
                              'company_email'
                            );

    foreach( $optionalFields as $field )
    {
      if( !isset( $_POST[$field] ) )
        $_POST[$field] = NULL;
    }
    
    $newCompany = new Company( 
                               $_POST['company_name'], $_POST['company_id'], $_POST['company_address_1'], $_POST['company_address_2'], $_POST['company_city'], 
                               $_POST['company_state'], $_POST['company_zip'], $_POST['annual_case_production'], $_POST['current_suppliers'], 
                               $_POST['company_notes'], $_POST['company_phone'], $_POST['company_fax'], $_POST['company_facebook_url'], 
                               $_POST['company_twitter_url'], $_POST['company_website'], $_POST['company_email']
                             );
    if( $newCompany->save() )
    {
      header( "Location: companies.php" );
      exit;
    }
  }
  catch( Exception $e )
  {
    echo $e->getMessage();
  }
}

require_once(PHP_INCLUDES."header.php");
require_once(PHP_INCLUDES."admin_menu.php");
?>
<div class="adminBody">
      <h2>Manage Companies</h2>
      <a href="company.php">Add Company</a>
<?php
try
{
  $company_list = new CompanyList();
  $companies = $company_list->loadCompanies();
  if( !empty( $companies ) )
  {
?>
      <table class="grid">
        <thead>
          <td>Company Name</td>
          <td>City</td>
          <td>Actions</td>
        </thead>
        <tbody>
<?php
    $companyCount = 0;
    
    foreach( $companies as $company )
    {
?>
          <tr class="<?= $companyCount++ % 2 == 0 ? 'even' : 'odd' ?>">
            <td><?= $company->getName() ?></td>
            <td><?= $company->getCity() ?></td>
            <td><a href="company.php?company_id=<?= $company->getCompanyId() ?>">Edit</a></td>
          </tr>
<?php
    }
?>
        </tbody>
      </table>
<?php
  }
}
catch( Exception $e )
{
  echo 'Error occurred: '.$e->getMessage();
}
?>
</div>
<?php
require_once(PHP_INCLUDES."footer.php");
?>