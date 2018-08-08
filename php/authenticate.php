<?php

  require("functions.php");
  $db = getDB();
  session_start();

  // Session variable not set. Throw them out.
  if(empty($_SESSION["authenticated"])) {
      // Redirect any file in a subfolder in /admin to the homepage, unless they are autheticated.
      header('Location: ../../');
  }

  $query = 'SELECT * FROM adminAccounts WHERE id="'.$_SESSION["authenticated"].'"';
  $data = getContents($db, $query);

  if (empty($data)) {
    // Throw them out.
    header('Location: ../../');
  }

  foreach($data as $row) {
    if ($_SESSION["authenticated"] !== $row["id"]) {
      // Throw them out.
      header('Location: ../../');
    }
  }

?>
