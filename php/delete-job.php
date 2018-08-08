<?php
  require("functions.php");
  $db = getDB();
  // Start the session if it doesn't exist.
  if(session_id() == '' || !isset($_SESSION)) {
      // session isn't started
      session_start();
  }

  if(empty($_GET["id"])) {
    // Missing ID param. Exit.
    $_SESSION["error"] = 13;
    header("Location: ../admin/delete-job-search");
    return;
  }

  $id = getSecureData($_GET["id"]);

  $sql = "DELETE FROM job WHERE id=$id";

  // Execute command:
  $query = $db->prepare($sql);
  $query->execute();

  // Success!
  $_SESSION["error"] = 14;
  header("Location: ../admin/delete-job-search");
?>
