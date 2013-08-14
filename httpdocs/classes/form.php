<?php
function contactForm()
{
?>
      <form method="post" action="/contact_form_post.php">
        <fieldset>
          <ul class="infoList">
            <li><label for="emailFromName">Your Name:</label><input type="text" name="emailFromName" value="<?= fieldValue('emailFromName') ?>" maxlength="255" /></li>
            <li><label for="emailFromEmail">Your Email:</label><input type="text" value="<?= fieldValue('emailFromEmail') ?>" name="emailFromEmail" maxlength="255" /></li>
            <li><label for="emailSubject">Subject:</label><input type="text" value="<?= fieldValue('emailSubject') ?>" name="emailSubject" maxlength="255" /></li>
            <li><label for="emailMessage">Message:</label><textarea name="emailMessage"><?= fieldValue('emailMessage') ?></textarea></li>
            <li><input type="submit" name="action" value="Send Message" /></li>
          </ul>
        </fieldset>
      </form>
<?php
}

function fieldValue( $field, $data=false )
{
	if (!empty($data[$field]))
		return $data[$field];
	else if (isset($_POST[$field]))
		return $_POST[$field];
	else if (isset($_GET[$field]))
		return $_GET[$field];
}
?>