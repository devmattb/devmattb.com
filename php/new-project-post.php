<?php

  require("functions.php");
  $db = getDB();
  // Start the session if it doesn't exist.
  if(session_id() == '' || !isset($_SESSION)) {
      // session isn't started
      session_start();
  }

  // Image upload variables:
  $target_dir = "../img/uploads/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Check if image file is a actual image or fake image
  if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
      if($check !== false) {
          echo "File is an image - " . $check["mime"] . ".";
          $uploadOk = 1;
      } else {
          echo "File is not an image.";
          $uploadOk = 0;
      }
  }

  // Check PostText and PostTitle
  if ( empty($_POST["title"]) || empty($_POST["subtitle"]) || empty($_POST["whatText"]) || empty($_POST["whyText"]) || empty($_POST["howText"]) || empty($_POST["ongoingProject"]) ) {
      $_SESSION["error"] = 2;
      echo "bad txt/title";
      header("Location: ../admin/new-project-post");
      return;
  }

  // Check file size
  if ($_FILES["fileToUpload"]["size"] > 5000000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
  }

  // Allow certain file formats (PNG JPG GIF)
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
  }

  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
      $_SESSION["error"] = 2;
      header("Location: ../admin/new-project-post");
      return;
  // if everything is ok, try to upload file
  } else {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        // Success!
        $_SESSION["error"] = 3;
      } else {
        echo "Sorry, there was an error uploading your file.";
        $_SESSION["error"] = 2;
        header("Location: ../admin/new-project-post");
        return;
      }
  }

  // IMPORTANT!!!
  $pathToFileFromBlog = "../img/uploads/";
  $projectCoverImgSrc = $pathToFileFromBlog.basename( $_FILES["fileToUpload"]["name"]);

  // Get the author name, through the authenticated session variable, that stores
  // the adminAccounts ID of the current user:
  $q = 'SELECT * FROM adminAccounts WHERE id="'.$_SESSION["authenticated"].'"';
  $userData = getContents($db, $q);
  $fullName = "Anonymous";
  foreach($userData as $row) {
    $fullName = $row["fullName"];
  }

  $createdBy = $fullName;
  $title = getSecureData($_POST["title"]);
  $subtitle = getSecureData($_POST["subtitle"]);
  $whatText = getSecureData($_POST["whatText"]);
  $whyText = getSecureData($_POST["whyText"]);
  $howText = getSecureData($_POST["howText"]);
  $demoLink = getSecureData($_POST["demoLink"]);
  $ongoingProject = getSecureData($_POST["ongoingProject"]);
  if (isset($demoLink)) {
    $sql = "INSERT INTO projectPosts (title, subtitle, whatText, whyText, howText, projectCoverImgSrc, demoLink, ongoingProject, createdBy) VALUES (:title, :subtitle, :whatText, :whyText, :howText, :projectCoverImgSrc, :demoLink, :ongoingProject, :createdBy)";

    // Execute command:
    $query = $db->prepare($sql);
    $query->execute(array(':title'=>$title, ':subtitle'=>$subtitle, ':whatText'=>$whatText, ':whyText'=>$whyText, ':howText'=>$howText, ':projectCoverImgSrc'=>$projectCoverImgSrc, ':demoLink'=>$demoLink, ':ongoingProject'=>$ongoingProject, ':createdBy'=>$createdBy));
  } else {
    $sql = "INSERT INTO projectPosts (title, subtitle, whatText, whyText, howText, projectCoverImgSrc, ongoingProject, createdBy) VALUES (:title, :subtitle, :whatText, :whyText, :howText, :projectCoverImgSrc, :ongoingProject, :createdBy)";

    // Execute command:
    $query = $db->prepare($sql);
    $query->execute(array(':title'=>$title, ':subtitle'=>$subtitle, ':whatText'=>$whatText, ':whyText'=>$whyText, ':howText'=>$howText, ':projectCoverImgSrc'=>$projectCoverImgSrc, ':ongoingProject'=>$ongoingProject, ':createdBy'=>$createdBy));

  }

  // Redirect
  header("Location: ../admin/new-project-post");
?>
