<?php
  require_once("functions.php");
  $db = getDB();
  // Start the session if it doesn't exist.
  if(session_id() == '' || !isset($_SESSION)) {
      // session isn't started
      session_start();
  }

  if(empty($_GET["email"]) || empty($_GET["id"])) {
    // Missing ID or Email param. Exit.
    $_SESSION["error"] = 20;
    header("Location: ../");
    return;
  }

  $id = getSecureData($_GET["id"]);
  $email = getSecureData($_GET["email"]);

  $query = 'SELECT * FROM emailList WHERE email="'.$email.'"';
  $data  = getContents($db, $query);

  $verified = false;
  foreach($data as $row) {
    // Check if the inputted email matches our DB email-hash:
    $dbHash = $row["hash"];
    $verified = password_verify($email, $row["hash"]);

    if ($verified && $id == $row["id"]) {
      break; // We've found a account match.
    } else if ($verified && $id != $row["id"]) {
      $verified = false;
      continue;
    }
  }

  // If user exists in newsletter table, we can now remove them!
  if( $verified ) {
    $sql = "DELETE FROM emailList WHERE id=$id";
    $query = $db->prepare($sql);
    $query->execute();
    // Successfully removed them from the newsletter.
    $_SESSION["error"] = 21;
  } else {
    // We failed to remove them from the newsletter.
    $_SESSION["error"] = 22;
  }
  // Nevertheless, Send the user home.
  header("Location: ../");
?>
