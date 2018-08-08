<?php
  // require("functions.php");
  // // Import PHPMailer classes into the global namespace
  // // These must be at the top of your script, not inside a function
  // use PHPMailer\PHPMailer\PHPMailer;
  // use PHPMailer\PHPMailer\Exception;
  //
  // require '../PHPMailer/src/Exception.php';
  // require '../PHPMailer/src/PHPMailer.php';
  // require '../PHPMailer/src/SMTP.php';
  //
  // if (empty($_POST["nameContact"]) || empty($_POST["subjectContact"]) || empty($_POST["emailContact"]) || empty($_POST["msgContact"])) {
  //   echo 'Det saknades några detaljer. <a href="../"> Tillbaka till hemsidan </a>';
  // } else {
  //   $mail = new PHPMailer;
  //
  //   // Get all data:
  //   $text = getSecureData($_POST["msgContact"]);
  //   $visitor_email = getSecureData($_POST["emailContact"]);
  //   $name = getSecureData($_POST["nameContact"]);
  //   $subject = getSecureData($_POST["subjectContact"]);
  //
  //   /**
  //   *   Set the details of the email:
  //   **/
  //   $mail->isSMTP();
  //   $mail->Host = 'mailcluster.loopia.se';
  //   $mail->SMTPAuth = true;
  //   $mail->Username = 'webb@qrendo.nu'; // SMTP username TODO
  //   $mail->Password = 'Kl1#if&k3oP'; // SMTP password TODO
  //   $mail->SMTPSecure = 'tls';
  //   $mail->Port = 587;
  //   $mail->CharSet = 'UTF-8';
  //
  //   $mail->From = $visitor_email ;
  //   $mail->FromName = $name;
  //   $mail->addAddress('info@qrendo.se'); // Add a recipient
  //   //$mail->addAddress('ellen@example.com'); // Name is optional
  //   //$mail->addReplyTo('info@example.com', 'Information');
  //
  //   $mail->Subject = $subject;
  //   $mail->Body = $text;
  //   $mail->AltBody = $text;
  //
  //   if(!$mail->send()) {
  //    echo 'Mail misslyckades att skickas. <a href="../"> Tillbaka till hemsidan </a>';
  //    echo 'Felmeddelande: ' . $mail->ErrorInfo;
  //   } else {
  //    echo 'Mail skickat! <a href="../"> Tillbaka till hemsidan </a>';
  //   }
  // }
?>
