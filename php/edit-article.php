<?php
  require("functions.php");
  $db = getDB();
  // Start the session if it doesn't exist.
  if(session_id() == '' || !isset($_SESSION)) {
      // session isn't started
      session_start();
  }

  $id = $_GET["id"];

  $subtitle = getSecureData($_POST["subtitle"]);
  $breadText = getSecureData($_POST["breadText"]);

  $sql = "";

  $sql = 'UPDATE article SET subtitle="'.$subtitle.'", breadText="'.$breadText.'" WHERE id='.$id;

  // Execute command:
  $query = $db->prepare($sql);
  $query->execute();

  $_SESSION["error"] = 3; // Success

  // Redirect
  header("Location: ../../admin/edit-article-gui/");

?>
