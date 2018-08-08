<?php

  require("functions.php");
  $db = getDB();
  // Start the session if it doesn't exist.
  if(session_id() == '' || !isset($_SESSION)) {
      // session isn't started
      session_start();
  }

  // Check Fields
  if ( empty($_POST["email"]) ) {
      $_SESSION["error"] = 18;
      // Send home
      header("Location: ../");
      return;
  }

  $email = getSecureData($_POST["email"]);

  $query = 'SELECT * FROM emailList WHERE email="'.$email.'"';
  $data  = getContents($db, $query);

  $verified = false;
  foreach($data as $row) {
    // Check if the inputted email matches our DB email-hash:
    $dbHash = $row["hash"];
    $verified = password_verify($email, $row["hash"]);
  }

  // If user already exists in newsletter table, don't add them again!
  if( $verified ) {
    $_SESSION["error"] = 19;
    // Send home
    header("Location: ../");
    return;
  } else {
    $hash = password_hash($email, PASSWORD_BCRYPT); // Create new email hash.
    $sql = "INSERT INTO emailList (email, hash) VALUES (:email, :hash)";

    // Execute command:
    $query = $db->prepare($sql);
    $query->execute(array(':email'=>$email,':hash'=>$hash));

    // Success
    $_SESSION["error"] = 17;
    header("Location: ../");
  }

?>
