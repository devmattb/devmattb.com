<?php
  require("functions.php");
  $db = getDB();
  // Start the session if it doesn't exist.
  if(session_id() == '' || !isset($_SESSION)) {
      // session isn't started
      session_start();
  }

  if(empty($_GET["id"]) || empty($_GET["figureSrc"])) {
    // Missing ID or imgSrc param
    $_SESSION["error"] = 4;
    header("Location: ../admin/delete-article");
    return;
  }

  $id = getSecureData($_GET["id"]);
  $figureSrc = getSecureData($_GET["figureSrc"]);

  $q = "SELECT * FROM article WHERE id=".$id;

  $data = getContents($db, $q);
  $dirname = "";
  foreach($data as $row) {
      $dirname = str_replace(" ", "-", $row["title"]);
  }

  $sql = "DELETE FROM article WHERE id=$id";

  // Execute command:
  $query = $db->prepare($sql);
  $query->execute();

  unlink($figureSrc); // Delete article img

  // Delete article folder. TODO: Not working!!
  array_map('unlink', glob("../$dirname/*.*"));
  rmdir($dirname);

  // Success!
  $_SESSION["error"] = 5;
  header("Location: ../admin/delete-article");
?>
