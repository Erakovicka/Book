<?php
$requestPayload = file_get_contents("php://input");
$object = json_decode($requestPayload);

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	require ("PHPMailer/Exception.php");
	require ("PHPMailer/PHPMailer.php");
	require ("PHPMailer/SMTP.php");

    // inputs from POST contacts form
    $fullName = $object->fullName;
    $phone = $object->phone;
    $email = $object->email;
    $message = $object->message;

	if(isset($_GET["srb"])){
		$mail = new PHPMailer;
		$mail->isSMTP();
		$mail->SMTPDebug = 0;
		$mail->SMTPSecure = "ssl";
		$mail->Host = "s4.webhostingsrbija.net";
		$mail->Port = 465;
		$mail->SMTPAuth = true;
		$mail->Username = "info@book-online.buzz";
		$mail->Password = "CMN1-gOzujRj"; // Ako menjas lozinku maila, menjaj je i ovde
		$mail->setFrom("info@book-online.buzz", "Book Online"); // Ono vidis u detaljima ko salje
		$mail->addReplyTo($email, $fullName); // Posiljalac
		$mail->addAddress("ljiljana.jelovic@gmail.com"); // kom mailu se prosledjuje kontakt forma (tvoj mail gde stize ovo)
		$mail->Subject = $fullName . " te kontaktira putem sajta";

		$mail->AltBody = $message; // Izvorni kod maila kao server source details. Terminal View
		$mail->Body = "<p>Mail od: " . $fullName . "</p>
		<p>Email: " . $email . "</p>
		<p>Poruka: " . $message; // Paragraf formatiranje u body email-a
		$mail->IsHTML(true); // Salje se kao HTML oblik, prima HTML instrukcije u formatoranju izgleda body-a
		if (!$mail->send()) {
			echo 'Mailer Error: ' . $mail->ErrorInfo; // Greska ako dodje do belaja. Moze redirect do poruke sa greskom
		} else {
			$data = array(
        "messageSent" => $mail->ErrorInfo ? false : true,
        // "sendStatusID" -> success.messageId ? success.messageId.split("@")[0] : "Sending failed!",
        "sendMessage" => $mail->ErrorInfo ? "Message not sent! Check serverside authentication and parameters!" : "Poruka poslata..."
      );
      $json = json_encode($data);
      header("Access-Control-Allow-Origin: *"); // staviti ovde svoje ime sajta da backend ne bi primao requeste sa ostalih domena
      header("Content-type: application/json; charset=utf-8");
      header("Server-Administrator: Ljiljana Erakovic :)");
      echo $json;
		}
	}
?>
