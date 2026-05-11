<?php
$naam = strip_tags(htmlspecialchars($_POST['Naam']));
$btw = strip_tags(htmlspecialchars($_POST['BTW']));
$straat = strip_tags(htmlspecialchars($_POST['Straat']));
$huisnr = strip_tags(htmlspecialchars($_POST['Huisnummer']));
$postcode = strip_tags(htmlspecialchars($_POST['Postcode']));
$gemeente = strip_tags(htmlspecialchars($_POST['Gemeente']));
$telefoon = strip_tags(htmlspecialchars($_POST['Telefoon']));
$email = strip_tags(htmlspecialchars($_POST['Email']));
$informatie = strip_tags(htmlspecialchars($_POST['Informatie']));
$afleveradres = strip_tags(htmlspecialchars($_POST['Afleveradres']));
$onderwerp = strip_tags(htmlspecialchars($_POST['Onderwerp']));
$bestaandeKlant = strip_tags(htmlspecialchars($_POST['BestaandeKlant']));

if ($email == '') {
	$replymail = 'noreply@joorisbvba.be';
}
else {
	$replymail = $email;
}

if ($naam == '') {
	return false;
}
else {
	// Create the email and send the message
	$to = 'joorisbvba@gmail.com';
	$email_subject = "Website Jooris bvba: $onderwerp";

	$email_body = '<html><body>';
	$email_body .= '<p>Je hebt een nieuw bericht via de website over: <strong>'.strip_tags(htmlspecialchars($onderwerp)).'</strong>.</p><br>';

	$email_body .= '<ul>';
	foreach ($_POST as $key => $value) {
		if( strip_tags(htmlspecialchars($value)) != '' && $key != 'Onderwerp' && strpos( $key, 'LB-' ) !== false ) {
			$email_body .= "<li><strong>".strip_tags(htmlspecialchars($value))."</strong>: ";
			$label = 'X';
		}
		if( strip_tags(htmlspecialchars($value)) != '' && $key != 'Onderwerp' && strpos( $key, 'CB-' ) !== false ) {
			if ( strpos( $key, '-andere-' ) !== false ){
				$email_body .= "<li><strong>Andere</strong>: ".strip_tags(htmlspecialchars($value))."</li>";
			}
			else {
				if( $label != '' ) {
					$email_body .= "".strip_tags(htmlspecialchars($value))."</li>";
					$label = '';
				}
				else {
					$email_body .= "<li>".strip_tags(htmlspecialchars($value))."</li>";
				}
			}
		}
	}
	if($bestaandeKlant) {
		$email_body .= "<li><strong>Bestaande klant</strong>: JA</li>";
		} else {
		$email_body .= "<li><strong>Bestaande klant</strong>: NEE</li>";
		}
	$email_body .= "<li><strong>Extra informatie</strong>: $informatie</li>";
	$email_body .= '</ul>';
	$email_body .= '</table>';

	
	$email_body .= "<br><br><b>Contactgegevens</b>:<br>";

	$email_body .= '<br><table style="border: 1px solid black;" cellpadding="10">';
	$email_body .= "<tr style='background: #eee;'><td><strong>Naam</strong>:</td><td>$naam</td></tr>";
	$email_body .= "<tr><td><strong>Straat</strong>:</td><td>$straat</td></tr>";
	$email_body .= "<tr style='background: #eee;'><td><strong>Huisnummer</strong>:</td><td>$huisnr</td></tr>";
	$email_body .= "<tr><td><strong>Postcode</strong>:</td><td>$postcode</td></tr>";
	$email_body .= "<tr style='background: #eee;'><td><strong>Gemeente</strong>:</td><td>$gemeente</td></tr>";
	$email_body .= "<tr><td><strong>Telefoon/GSM</strong>:</td><td>$telefoon</td></tr>";
	$email_body .= "<tr style='background: #eee;'><td><strong>Email</strong>:</td><td>$email</td></tr>";
	$email_body .= "<tr><td><strong>Afleveradres</strong>:</td><td>$afleveradres</td></tr>";
	$email_body .= "<tr style='background: #eee;'><td><strong>BTW</strong>:</td><td>$btw</td></tr>";
	$email_body .= '</table>';

	$email_body .= "</body></html>";

	$headers = "From: noreply@joorisbvba.be\r\n"; 
	$headers .= "Reply-To: $replymail\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	mail($to,$email_subject,$email_body,$headers);
	$to = 'bjorn.hoeterickx@gmail.com';
	mail($to,$email_subject,$email_body,$headers);
	return true;
	}
?>
