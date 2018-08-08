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
  // if (empty($_POST["appName"]) || empty($_POST["appEmail"]) || empty($_POST["appMsg"]) || empty($_POST["appLinkedin"])) {
  //   echo 'Det saknades några detaljer. <a href="../sok-jobb/?id='.$_GET["id"].'"> Gå Tillbaka </a>';
  // } else {
  //   $mail = new PHPMailer;
  //
  //   //Get the uploaded file information
  //   $name_of_uploaded_file = basename($_FILES['fileToUpload']['name']);
  //
  //   //get the file extension of the file
  //   $type_of_uploaded_file =
  //       substr($name_of_uploaded_file,
  //       strrpos($name_of_uploaded_file, '.') + 1);
  //
  //   // Get the size of this file in KB:
  //   $size_of_uploaded_file = $_FILES["fileToUpload"]["size"]/1024;
  //
  //   /**
  //   *   Validate uploaded file:
  //   **/
  //   // Settings
  //   $max_allowed_file_size = 10000; // size in KB
  //   $allowed_extensions = array("pdf");
  //
  //   // Check file size
  //   if ( $size_of_uploaded_file > $max_allowed_file_size ) {
  //     $errors .= "\n Size of file should be less than $max_allowed_file_size";
  //   }
  //
  //   // Check file extension
  //   $allowed_ext = false;
  //   for ( $i=0; $i<sizeof($allowed_extensions); $i++ ) {
  //     if (strcasecmp($allowed_extensions[$i],$type_of_uploaded_file) == 0) {
  //       $allowed_ext = true;
  //     }
  //   }
  //
  //   // Send wrong file extension error, if not PDF.
  //   if(!$allowed_ext) {
  //     $errors .= "\n The uploaded file is not supported file type. ".
  //     " Only the following file types are supported: ".implode(',',$allowed_extensions);
  //   }
  //
  //   /**
  //   *   Copy the uploaded file...
  //   **/
  //   $upload_folder = "../sok-jobb/cvs/"; // TODO: Not tested...
  //   $path_of_uploaded_file = $upload_folder . $name_of_uploaded_file;
  //   $tmp_path = $_FILES["fileToUpload"]["tmp_name"];
  //
  //   if(is_uploaded_file($tmp_path))
  //   {
  //     if(!copy($tmp_path,$path_of_uploaded_file))
  //     {
  //       $errors .= '\n error while copying the uploaded file';
  //     }
  //   }
  //
  //   // Get all data:
  //   $text = getSecureData($_POST["appMsg"])." <br><br> " . "Linkedin Länk: ". getSecureData($_POST["appLinkedin"]);
  //   $visitor_email = getSecureData($_POST["appEmail"]);
  //
  //   // Get the job name they're applying for:
  //   $subject = "Jobbansökan till Qrendo";
  //   if ( $_GET["id"] != 0 ) {
  //     $db = getDB();
  //     $query = "SELECT * FROM job WHERE id=".$_GET["id"];
  //     $data = getContents($db, $query);
  //     $jobTitle = "";
  //     foreach($data as $row) {
  //       $jobTitle = $row["jobTitle"];
  //     }
  //     $subject = getSecureData($_POST["appName"]). "'s Jobbansökan till rollen som ".$jobTitle;
  //   } else {
  //     $subject = getSecureData($_POST["appName"]). "'s Spontanansökan till Qrendo";
  //   }
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
  //   $mail->From = 'webb@qrendo.nu';
  //   $mail->FromName = 'Qrendo';
  //   $mail->addAddress('rekrytering@qrendo.se'); // Add a recipient
  //   //$mail->addAddress('ellen@example.com'); // Name is optional
  //   //$mail->addReplyTo('info@example.com', 'Information');
  //
  //   $mail->Subject = $subject;
  //   $mail->Body = $text;
  //   $mail->AltBody = $text;
  //   $mail->addAttachment($path_of_uploaded_file); // NOTE: Not tested...
  //
  //   if(!$mail->send()) {
  //    echo 'Ansökan misslyckades att skickas. <a href="../sok-jobb/?id='.$_GET["id"].'"> Gå Tillbaka </a>';
  //    echo 'Felmeddelande: ' . $mail->ErrorInfo;
  //   } else {
  //    echo 'Ansökan skickad! <a href="../"> Tillbaka till hemsidan </a>';
  //   }
  // }
?>
