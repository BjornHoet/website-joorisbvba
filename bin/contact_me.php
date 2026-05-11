<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['street'])     ||
   empty($_POST['houseno'])     ||
   empty($_POST['postalcode'])     ||
   empty($_POST['city'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$topic = strip_tags(htmlspecialchars($_POST['topic']));
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$street = strip_tags(htmlspecialchars($_POST['street']));
$houseno = strip_tags(htmlspecialchars($_POST['houseno']));
$postalcode = strip_tags(htmlspecialchars($_POST['postalcode']));
$city = strip_tags(htmlspecialchars($_POST['city']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));

if ($email_address == '') {
	$replymail = 'noreply@joorisbvba.be';
}
else {
	$replymail = $email_address;
}

// Create the email and send the message
$to = 'joorisbvba@gmail.com';
$email_subject = "Website Contactformulier:  $name";
$email_body = '<html><body>';
$email_body .= '<p>Je hebt een nieuw bericht van het contactformulier van <strong>Joorisbvba.be</strong></p>';
$email_body .= '<table style="border: 1px solid black;" cellpadding="10">';
$email_body .= "<tr style='background: #eee;'><td><strong>Naam:</strong> </td><td>$name</td></tr>";
$email_body .= "<tr><td><strong>Straat:</strong> </td><td>$street</td></tr>";
$email_body .= "<tr style='background: #eee;'><td><strong>Huisnummer:</strong> </td><td>$houseno</td></tr>";
$email_body .= "<tr><td><strong>Postcode:</strong> </td><td>$postalcode</td></tr>";
$email_body .= "<tr style='background: #eee;'><td><strong>Gemeente:</strong> </td><td>$city</td></tr>";
$email_body .= "<tr><td><strong>E-mail:</strong> </td><td>$email_address</td></tr>";
$email_body .= "<tr style='background: #eee;'><td><strong>Telefoon:</strong> </td><td>$phone</td></tr>";
$email_body .= "<tr><td><strong>Omschrijving:</strong> </td><td>$message</td></tr>";
$email_body .= "</table>";
$email_body .= "</body></html>";

$headers = "From: noreply@joorisbvba.be\n";
$headers .= "Reply-To: $replymail\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
mail($to,$email_subject,$email_body,$headers);
$to = 'bjorn.hoeterickx@gmail.com';
mail($to,$email_subject,$email_body,$headers);
return true;         
?>
