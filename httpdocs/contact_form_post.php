<?php
function checkEmail($index, $label, $data)
{
	if( !empty( $data[$index] ) )
	{
		if(!mb_eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $data[$index]))
			return $label.' has invalid characters or format.';
		if (!mb_ereg("^[^@]{1,64}@[^@]{1,255}$", $data[$index]))
			return $label." has the wrong number of characters or more than one @.";
		// Split it into sections to make life easier 
		$email1_array = explode("@", $data[$index]); 
		$local_array = explode(".", $email1_array[0]); 
		for ($i = 0; $i < sizeof($local_array); $i++) 
		{ 
			if (!mb_ereg("^(([A-Za-z0-9!#$%&#038;'*+/=?^_`{|}~-][A-Za-z0-9!#$%&#038;'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$", $local_array[$i]))
				return $label." has invalid characters.";
		}
		// Check if domain is IP. If not, it should be valid domain name 
		if (!mb_ereg("^\[?[0-9\.]+\]?$", $email1_array[1]))
		{
			$domain_array = explode(".", $email1_array[1]); 
			if (sizeof($domain_array) < 2)
			  return $label." has wrong number of domain parts.";

			for ($i = 0; $i < sizeof($domain_array); $i++) 
			{ 
				if (!mb_ereg("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$", $domain_array[$i]))
					return $label." has invalid characters or form.";
			} 
		}
	}

	return true;
}

$requiredFields = array('emailSubject' => 'Subject', 'emailFromName' => 'Your Name', 'emailFromEmail' => 'Your Email', 'emailMessage' => 'Message');
$errors = array();

foreach( $requiredFields as $index => $label )
{
  if( empty( $_POST[$index] ) )
    $errors[] = "The ".$label." field is required.";
}

$emailValid = checkEmail('emailFromEmail', 'Your Email', $_POST);
$getString = '';

if( $emailValid !== true )
  $errors[] = $emailValid;

if( count( $errors ) != 0 )
{
  $resultString = 'There were one or more errors with your form submission:<br />';
  $resultString .= implode("<br />", $errors);
  
  foreach( $requiredFields as $index => $label )
    $getString .= '&'.$index.'='.$_POST[$index];
}
else
{
  $subject = $_POST['emailSubject'];
  $from = $_POST['emailFromName'].' <'.$_POST['emailFromEmail'].'>';
  $to = 'darren@spiritedpackaging.com, dale@spiritedpackaging.com, ian@spiritedpackaging.com';
  $message = '';
  if( !empty( $_SESSION['campaign_id'] ) )
    $message .= 'Campaign ID: '.$_SESSION['campaign_id']."\n\n";
  $message .= $_POST['emailMessage'];
  $header = 'From: '.$from."\r\n"; 
  $header .= 'Reply-To: '.$from."\r\n";
  $header .= 'Return-Path: '.$from."\r\n";
  
  if( mail( $to, $subject, $message, $header ) )
    $resultString = "Your message was sent successfully. Thanks for contacting Spirited Packaging; we will respond shortly.";
  else
    $resultString = "There was an unspecified error sending your message. Please try again, or give us a call if you continue to experience this error.";
}

header("Location: ".$_SERVER['HTTP_REFERER']."?resultString=".$resultString.$getString);
exit;
?>