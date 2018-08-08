<?php

  require("functions.php");
  $db = getDB();
  // Start the session if it doesn't exist.
  if(session_id() == '' || !isset($_SESSION)) {
      // session isn't started
      session_start();
  }
  $submitOk = true;

  // Check Fields
  if ( empty($_POST["jobTitle"]) || empty($_POST["jobText"]) || empty($_POST["jobQualifications"])) {
      $_SESSION["error"] = 10;
      echo "Some mandatory fields were left empty. <br/>";
      header("Location: ../admin/new-job-search");
      return;
  }

  $jobTitle = getSecureData($_POST["jobTitle"]);
  $jobText = getSecureData($_POST["jobText"]);
  $jobQualifications = getSecureData($_POST["jobQualifications"]);
  $jobLongText = getSecureData($_POST["jobLongText"]);
  $sql = "INSERT INTO job (jobTitle, jobText, jobQualifications, jobLongText) VALUES (:jobTitle, :jobText, :jobQualifications, :jobLongText)";

  // Execute command:
  $query = $db->prepare($sql);
  $query->execute(array(':jobTitle'=>$jobTitle,':jobText'=>$jobText, ':jobQualifications'=>$jobQualifications, ':jobLongText'=>$jobLongText,));

  // Redirect when finished. Note that this URL is right now static.
  $_SESSION["error"] = 12;
  header("Location: ../admin/new-job-search");

?>
