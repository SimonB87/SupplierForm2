<?php
header('Content-Type: text/html; charset=utf-8');
if (($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST['action']))):

	if (isset($_POST['myemail'])) { $myemail = $_POST['myemail']; }
	if (isset($_POST['mycompany'])) { $mycompany = filter_var($_POST['mycompany'], FILTER_SANITIZE_STRING); }
	if (isset($_POST['myadres'])) { $myadres = filter_var($_POST['myadres'], FILTER_SANITIZE_STRING); }
	if (isset($_POST['myid'])) { $myid = $_POST['myid']; }
  if (isset($_POST['corname'])) { $corname = filter_var($_POST['corname'], FILTER_SANITIZE_STRING); }
  if (isset($_POST['cormail'])) { $cormail = $_POST['cormail']; }
  if (isset($_POST['corfone'])) { $corfone = $_POST['corfone']; }
  if (isset($_POST['corcena'])) { $corcena = filter_var($_POST['corcena'], FILTER_SANITIZE_STRING); }
	if (isset($_POST['mycomments'])) {
			$mycomments = filter_var($_POST['mycomments'], FILTER_SANITIZE_STRING );
	}

	$formerrors = false;

	if ($myemail === '') :
		$err_myemail = '<div class="error">Omlouváme se, ale Váš email je povinné pole.</div>';
		$formerrors = true;
	endif; // input field empty

	if (!($formerrors)) :
		$to				= 	"testcontact@seznam.cz";
		$subject	=		"Požadavek od $myemail --- Přidání nového dodavatele";
		$message	=		"Máte novou žádost od uživatele '$myemail'.

Je požadováno přidání nového dodavatele do seznamu kontaktů.

Název firmy je '$mycompany'.

Firma má IČO: '$myid', adresu: '$myadres'.

Kontakt do firmy je osoba: '$corname' s emailem: '$cormail' a číslem: '$corfone'.

Cenová nabídka je: '$corcena'.
Dále v poznámce je uvedeno: '$mycomments'.";


		$replyto	=		"From: fromprocessor@iviewsource.com \r\n".
									"Reply-To: donotreply@iviewsource.com \r\n";

		if (mail($to, $subject, $message)):
			$msg = "Žádost byla odeslána. Děkujeme za využití našich služeb.";
		else:
			$msg = "Objevila se chyba. Informujte webmastera.";
		endif; // mail form data

	endif; // check for form errors

endif; //form submitted
?>
