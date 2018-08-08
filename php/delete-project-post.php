<?php
  require("functions.php");
  $db = getDB();
  // Start the session if it doesn't exist.
  if(session_id() == '' || !isset($_SESSION)) {
      // session isn't started
      session_start();
  }

  if(empty($_GET["id"]) || empty($_GET["imgSrc"])) {
    // Missing ID or imgSrc param
    $_SESSION["error"] = 4;
    header("Location: ../admin/delete-project-post");
    return;
  }

  $id = getSecureData($_GET["id"]);
  $imgSrc = getSecureData($_GET["imgSrc"]);

  $sql = "DELETE FROM projectPosts WHERE id=$id";

  // Execute command:
  $query = $db->prepare($sql);
  $query->execute();

  unlink($imgSrc);

  // Success!
  $_SESSION["error"] = 5;
  header("Location: ../admin/delete-project-post");
?>
