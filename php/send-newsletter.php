<?php
  require("functions.php");
  // Import PHPMailer classes into the global namespace
  // These must be at the top of your script, not inside a function
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require '../PHPMailer/src/Exception.php';
  require '../PHPMailer/src/PHPMailer.php';
  require '../PHPMailer/src/SMTP.php';

  if (empty($_POST["subject"]) || empty($_POST["title"]) || empty($_POST["introText"]) || empty($_POST["contentText"]) || empty($_POST["codingText"]) ) {
    echo 'Some details were missing. <a href="../admin/send-newsletter/"> Go Back. </a>';
  } else {

  // Get all data from form:
  $subject = getSecureData($_POST["subject"]);
  $title = getSecureData($_POST["title"]);
  $introText = getSecureData($_POST["introText"]);
  $contentText = getSecureData($_POST["contentText"]);
  $codingText = getSecureData($_POST["codingText"]);

  /**
  *   Set the admin-details of the email:
  **/
  $mail = new PHPMailer;
  $mail->isSMTP();
  $mail->isHTML(true);
  $mail->Host = 'n3plcpnl0116.prod.ams3.secureserver.net';
  $mail->SMTPAuth = true;
  $mail->SMTPSecure = 'ssl';
  $mail->Port = 465;
  $mail->Username = 'matt@devmattb.com'; // SMTP username
  $mail->Password = 'C0lin4664'; // SMTP password
  $mail->CharSet = 'UTF-8';

  $db = getDB();
  $query = "SELECT * FROM emailList";
  $data = getContents($db, $query);

  $numErrors = 0;
  $numSuccess = 0;
  foreach($data as $row) {

      // Get DB Data:
      $id = $row["id"];
      $email = $row["email"];

      /**
      *   Set the details of the email:
      **/
      $mail->From = 'matt@devmattb.com' ;
      $mail->FromName = 'Devmattb';
      $mail->addAddress($email); // Add a recipient
      //$mail->addAddress('ellen@example.com'); // Name is optional
      //$mail->addReplyTo('info@example.com', 'Information');

      $mail->Subject = $subject;
      $mail->Body =
      `<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
      <html xmlns="http://www.w3.org/1999/xhtml">
       <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Demystifying Email Design</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald" rel="stylesheet" />
        <style type="text/css">
          .header {
            font-family: "Oswald", sans-serif;
            font-size: 25px;
            position:relative;
            top: -40px;
            color: #fff;
            text-transform: uppercase;
          }

          .subheader {
            font-family: "Oswald", sans-serif;
            font-size: 22px;
            color: #000;
            text-transform: uppercase;
          }

          body {
            font-family: "Open Sans", sans-serif;
          }
        </style>
      </head>

      <body style="margin: 0; padding: 0;">
        <table align="center" border="1" cellpadding="0" cellspacing="0" width="600">
          <tr>
            <td align="center" bgcolor="#161616" style="padding: 10px 0px -20px 0px;">
             <img src="img/logo_white_transparent.png" alt="DEVMATTB" width="350" height="205" style="display: block;" />
             <span class="header" style="">WEEKLY NEWSLETTER</span>
            </td>
          </tr>
         <tr>
           <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
             <table border="0" cellpadding="0" cellspacing="0" width="100%">
              <tr>
               <td class="subheader" style="padding: 10px;">
                `.$title.`
               </td>
              </tr>
              <tr>
               <td style="padding: 20px 10px 30px 10px;">
                 `.$introText.`
               </td>
             </tr>
              <tr>
               <td>
                 <table border="0" cellpadding="0" cellspacing="0" width="100%">
                  <tr>
                   <td width="260" valign="top">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                     <tr>
                      <td>
                       <img src="img/computer.jpg" alt="" width="100%" height="190" style="display: block;" />
                      </td>
                     </tr>
                     <tr>
                      <td style="padding: 0px 10px 25px 10px;">
                      <h4 style="margin:12px 12px 12px 0px;" class="subheader">CODING</h4>
                      `.$codingText.`
                      </td>
                     </tr>
                    </table>
                   </td>
                   <td style="font-size: 0; line-height: 0;" width="20">
                    &nbsp;
                   </td>
                   <td width="260" valign="top">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" >
                     <tr>
                      <td>
                       <img src="img/camera.png" alt="" width="100%" height="190" style="display: block;" />
                      </td>
                     </tr>
                     <tr>
                       <td style="padding: 0px 10px 25px 10px;">
                       <h4 style="margin:12px 12px 12px 0px;" class="subheader">CONTENT</h4>
                       `.$contentText.`
                      </td>
                     </tr>
                    </table>
                   </td>
                  </tr>
                 </table>
               </td>
              </tr>
             </table>

           </td>
         </tr>
         <tr>
           <td bgcolor="#161616" style="padding: 30px 30px 30px 30px;">
             <table border="0" cellpadding="0" cellspacing="0" width="100%">
              <tr>
                <td width="75%" style="color: #fff;">
                 &copy; DEVMATTB 2018<br/>
                 <a href="http://devmattb.com/php/unsubscribe-newsletter.php?id=`.$id.`&email=`.$email.`">Unsubscribe</a> to this newsletter instantly
                </td>
               <td align="right">
                <table border="0" cellpadding="0" cellspacing="0">
                 <tr>
                  <td>
                   <a href="https://www.instagram.com/devmattb/">
                    <img src="img/instagram_icon.png" alt="Twitter" width="38" height="38" style="display: block;" border="0" />
                   </a>
                  </td>
                  <td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
                  <td>
                   <a href="https://www.youtube.com/channel/UCNmXzVXkobH69xQPgTX-qGA">
                    <img src="img/youtube_icon.png" alt="youtube" width="38" height="38" style="display: block;" border="0" />
                   </a>
                  </td>
                 </tr>
                </table>
               </td>
              </tr>
             </table>
           </td>
         </tr>
        </table>
      </body>
      </html>`;
      $mail->AltBody = $title."\n \n".$introText."\n \n"."CODING: \n \n".$codingText."\n \n"."CONTENT \n \n".$contentText."\n \n Don't want these emails? Unsubscribe using the following link: \n \n ".
      'http://devmattb.com/php/unsubscribe-newsletter.php?id='.$id.'&email='.$email;

      if(!$mail->send()) {
        $numErrors++;
       echo 'Error Message: ' . $mail->ErrorInfo;
      } else {
       $numSuccess++;
      }

      // Prepare for next email:
      $mail->ClearAllRecipients();
      $mail->ClearAttachments();

    }

    if ($numErrors != 0) {
      echo $numErrors. ' Mail(s) failed to get sent. <br/><br/>';
    }
    echo $numSuccess. ' Mail(s) successfully sent! <br/><br/> <a href="../admin/send-newsletter/"> Go back </a>';

  }
?>
