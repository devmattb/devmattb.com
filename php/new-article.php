<?php

  require("functions.php");
  $db = getDB();
  // Start the session if it doesn't exist.
  if(session_id() == '' || !isset($_SESSION)) {
      // session isn't started
      session_start();
  }

  // Image upload variables:
  $target_dir = "../img/article-uploads/";
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
  // if ( empty($_POST["title"]) || empty($_POST["subtitle"]) ) {
  //     $_SESSION["error"] = 2;
  //     echo "bad txt/title";
  //     header("Location: ../admin/new-article");
  //     return;
  // }

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
      header("Location: ../admin/new-article");
      return;
  // if everything is ok, try to upload file
  } else {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        // Success!
        $_SESSION["error"] = 3;
      } else {
        echo "Sorry, there was an error uploading your file.";
        $_SESSION["error"] = 2;
        header("Location: ../admin/new-article");
        return;
      }
  }

  // IMPORTANT!!!
  $pathToFileFromArticlePage = "../img/article-uploads/";
  $imgSrc = $pathToFileFromArticlePage.basename( $_FILES["fileToUpload"]["name"]);

  $title = strtolower(getSecureData($_POST["title"]));
  $subtitle = getSecureData($_POST["subtitle"]);
  $figureSrc = $imgSrc;
  $figureText = getSecureData($_POST["figureText"]);
  $breadText = getSecureData($_POST["breadText"]);
  $vidSrc = getSecureData($_POST["vidSrc"]);

  $sql = "INSERT INTO article (title, subtitle, figureSrc, figureText, breadText, vidSrc) VALUES (:title, :subtitle, :figureSrc, :figureText, :breadText, :vidSrc)";

  // Create dir for article.
  $linkTitle = str_replace(" ", "-", $title);
  $newDir = strtolower("../articles/".$linkTitle);
  if (!mkdir($newDir)) {
    echo "Error creating article ".$linkTitle;
    return;
  } else {
    // Success creating folder. Copy a index.php in to the article.
    touch($newDir."/index.php");
    $sourceFile = "../articles/example/index.php"; // Generic index file.
    if (!copy($sourceFile, $newDir."/index.php")) {
      echo "Error copying index.php to ".$newDir;
      return;
    }
  }

  // Execute command:
  $query = $db->prepare($sql);
  $query->execute(array(':title'=>$title, ':subtitle'=>$subtitle, ':figureSrc'=>$figureSrc, ':figureText'=>$figureText, ':breadText'=>$breadText, ':vidSrc'=>$vidSrc));

  // Redirect
  echo 'Lyckades! <br> <a href="../admin/new-article">Gå Tillbaks</a>';
  header("Location: ../admin/new-article");
?>
