<?php
require_once("../config.php");

require_once(PHP_CLASSES."company.php");
require_once(PHP_CLASSES."contact.php");
require_once(PHP_CLASSES."contact_list.php");
require_once(PHP_CLASSES."html_writer.php");

$html = new HTMLWriter();

$errors = array();

if( !empty( $_POST ) )
{
  try
  {
    $optionalFields = array( 
                              'contact_title', 'contact_address_1', 'contact_address_2', 'contact_city', 'contact_state', 'contact_zip', 'contact_phone', 
                              'contact_fax', 'contact_email', 'contact_facebook_url', 'contact_twitter_url', 'contact_notes'
                            );

    foreach( $optionalFields as $field )
    {
      if( !isset( $_POST[$field] ) )
        $_POST[$field] = NULL;
    }

    $newContact = new Contact(
                               $_POST['contact_first_name'], $_POST['contact_last_name'], $_POST['company_id'], $_POST['contact_id'], $_POST['contact_suffix'], 
                               $_POST['contact_title'], $_POST['contact_address_1'], $_POST['contact_address_2'], $_POST['contact_city'], 
                               $_POST['contact_state'], $_POST['contact_zip'], $_POST['contact_notes'], $_POST['contact_phone'], $_POST['contact_fax'], 
                               $_POST['contact_email'], $_POST['contact_facebook_url'], $_POST['contact_twitter_url']
                             );

    if( $newContact->save() )
    {
      header( "Location: company.php?company_id=".$_REQUEST['company_id'] );
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

if( !empty( $_REQUEST['company_id'] ) && empty( $errors ) )
{
  $company = new Company( '', $_REQUEST['company_id'] );
  $company->load();
}
?>
<div class="adminBody">
      <h2><?= !empty( $_REQUEST['company_id'] ) ? 'Edit' : 'Add' ?> Company</h2>
      <form action="companies.php" method="post">
        <input type="hidden" name="company_id" value="<?= !empty( $_REQUEST['company_id'] ) ? $_REQUEST['company_id'] : '' ?>" />
        <fieldset>
          <ul class="adminForm">
<?php
            $html->textInput( 'company_name', 'Company Name', 100, !empty( $_POST['company_name'] ) ? $_POST['company_name'] : '' );
            $html->textInput( 'company_address_1', 'Company Address<br />(Line 1)', 255, !empty( $_POST['company_address_1'] ) ? $_POST['company_address_1'] : '' );
            $html->textInput( 'company_address_2', 'Company Address<br />(Line 2)', 255, !empty( $_POST['company_address_2'] ) ? $_POST['company_address_2'] : '' );
            $html->textInput( 'company_city', 'Company City', 100, !empty( $_POST['company_city'] ) ? $_POST['company_city'] : '' );
            $html->textInput( 'company_state', 'Company State', 2, !empty( $_POST['company_state'] ) ? $_POST['company_state'] : '' );
            $html->textInput( 'company_zip', 'Company ZIP', 10, !empty( $_POST['company_zip'] ) ? $_POST['company_zip'] : '' );
            $html->textInput( 'company_phone', 'Company Phone', 25, !empty( $_POST['company_phone'] ) ? $_POST['company_phone'] : '' );
            $html->textInput( 'company_fax', 'Company Fax', 25, !empty( $_POST['company_fax'] ) ? $_POST['company_fax'] : '' );
            $html->textInput( 'company_facebook_url', 'Company Facebook URL', 255, !empty( $_POST['company_facebook_url'] ) ? $_POST['company_facebook_url'] : '' );
            $html->textInput( 'company_twitter_url', 'Company Twitter URL', 255, !empty( $_POST['company_twitter_url'] ) ? $_POST['company_twitter_url'] : '' );
            $html->textInput( 'company_website', 'Company Website', 255, !empty( $_POST['company_website'] ) ? $_POST['company_website'] : '' );
            $html->textInput( 'company_email', 'Company Email', 100, !empty( $_POST['company_email'] ) ? $_POST['company_email'] : '' );
            $html->textInput( 'annual_case_production', 'Annual Case Production', 10, !empty( $_POST['annual_case_production'] ) ? $_POST['annual_case_production'] : '' );
            $html->textInput( 'current_suppliers', 'Current Suppliers', 255, !empty( $_POST['current_suppliers'] ) ? $_POST['current_suppliers'] : '' );
            $html->textArea( 'company_notes', 'Company Notes', !empty( $_POST['company_notes'] ) ? $_POST['company_notes'] : '' );
?>
            <li><input type="submit" name="action" value="Save" /></li>
          </ul>
        </fieldset>
      </form>
    </div>
<?php
if( !empty( $_REQUEST['company_id'] ) )
{
?>
    <div class="left" style="margin-left: 15px;">
      <h2>Company Contacts</h2>
      <a href="contact.php?company_id=<?= $_REQUEST['company_id'] ?>">Add Contact</a>
<?php
  try
  {
    $contact_list = new ContactList();
    $contacts = $contact_list->loadContacts( $_REQUEST['company_id'] );
    if( !empty( $contacts ) )
    {
?>
      <table class="grid">
        <thead>
          <td>Contact Name</td>
          <td>Title</td>
          <td>Actions</td>
        </thead>
        <tbody>
<?php
      $contactCount = 0;
    
      foreach( $contacts as $contact )
      {
?>
          <tr class="<?= $contactCount++ % 2 == 0 ? 'even' : 'odd' ?>">
            <td><?= $contact->getFirstName().' '.$contact->getLastName() ?></td>
            <td><?= $contact->getTitle() ?></td>
            <td><a href="contact.php?contact_id=<?= $contact->getContactId() ?>">Edit</a></td>
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
}

require_once(PHP_INCLUDES."footer.php");
?>