<?php
require_once("../config.php");

require_once(PHP_CLASSES."contact.php");
require_once(PHP_CLASSES."html_writer.php");

require_once(PHP_INCLUDES."header.php");

$html = new HTMLWriter();

$errors = array();

if( !empty( $_REQUEST['contact_id'] ) && empty( $errors ) )
{
  $contact = new Contact( '', '', '', $_REQUEST['contact_id'] );
  $contact->load();
  
  if( empty( $_REQUEST['company_id'] ) )
    $_REQUEST['company_id'] = $contact->getCompanyId();
}

require_once(PHP_INCLUDES."admin_menu.php");
?>
<div class="adminBody">
      <h2><?= !empty( $_REQUEST['contact_id'] ) ? 'Edit' : 'Add' ?> Contact</h2>
      <form action="company.php" method="post">
        <input type="hidden" name="company_id" value="<?= $_REQUEST['company_id'] ?>" />
        <input type="hidden" name="contact_id" value="<?= !empty( $_REQUEST['contact_id'] ) ? $_REQUEST['contact_id'] : '' ?>" />
        <fieldset>
          <ul class="adminForm">
<?php
            $html->textInput( 'contact_first_name', 'Contact First Name', 50, !empty( $_POST['contact_first_name'] ) ? $_POST['contact_first_name'] : '' );
            $html->textInput( 'contact_last_name', 'Contact Last Name', 50, !empty( $_POST['contact_last_name'] ) ? $_POST['contact_last_name'] : '' );
            $html->textInput( 'contact_suffix', 'Contact Suffix', 10, !empty( $_POST['contact_suffix'] ) ? $_POST['contact_suffix'] : '' );
            $html->textInput( 'contact_title', 'Contact Title', 50, !empty( $_POST['contact_title'] ) ? $_POST['contact_title'] : '' );
            $html->textInput( 'contact_address_1', 'Contact Address (Line 1)', 255, !empty( $_POST['contact_address_1'] ) ? $_POST['contact_address_1'] : '' );
            $html->textInput( 'contact_address_2', 'Contact Address (Line 2)', 255, !empty( $_POST['contact_address_2'] ) ? $_POST['contact_address_2'] : '' );
            $html->textInput( 'contact_city', 'Contact City', 100, !empty( $_POST['contact_city'] ) ? $_POST['contact_city'] : '' );
            $html->textInput( 'contact_state', 'Contact State', 2, !empty( $_POST['contact_state'] ) ? $_POST['contact_state'] : '' );
            $html->textInput( 'contact_zip', 'Contact ZIP', 10, !empty( $_POST['contact_zip'] ) ? $_POST['contact_zip'] : '' );
            $html->textInput( 'contact_phone', 'Contact Phone', 25, !empty( $_POST['contact_phone'] ) ? $_POST['contact_phone'] : '' );
            $html->textInput( 'contact_fax', 'Contact Fax', 25, !empty( $_POST['contact_fax'] ) ? $_POST['contact_fax'] : '' );
            $html->textInput( 'contact_email', 'Contact Email', 100, !empty( $_POST['contact_email'] ) ? $_POST['contact_email'] : '' );
            $html->textArea( 'contact_notes', 'Contact Notes', !empty( $_POST['contact_notes'] ) ? $_POST['contact_notes'] : '' );
?>
            <li><input type="submit" name="action" value="Save" /></li>
          </ul>
        </fieldset>
      </form>
</div>
<?php
require_once(PHP_INCLUDES."footer.php");
?>