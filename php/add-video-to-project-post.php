<?php
  require("functions.php");
  $db = getDB();

  if(session_id() == '' || !isset($_SESSION)) {
      // session isn't started
      session_start();
  }

  $id = getSecureData($_GET["id"]);
  $numVids = getSecureData($_GET["numVids"]);
  $headerEnd = "?id=".$id."&numVids=".$numVids;

  // Image upload variables:
  $target_dir = "../img/uploads/video-thumbnails/";
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
      header("Location: ../admin/add-video-to-project-post".$headerEnd);
      return;
  // if everything is ok, try to upload file
  } else {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        // Success!
        $_SESSION["error"] = 3;
      } else {
        echo "Sorry, there was an error uploading your file.";
        $_SESSION["error"] = 2;
        header("Location: ../admin/add-video-to-project-post".$headerEnd);
        return;
      }
  }

  // IMPORTANT!!!
  $pathToFileFromBlog = "../img/uploads/video-thumbnails/";
  $imgSrc = $pathToFileFromBlog.basename( $_FILES["fileToUpload"]["name"]);

  if (empty($_POST["videoTitle"]) || empty($_POST["videoLink"]) ) {
    // Mandatory fields missing...
    $_SESSION["error"] = 10;
    header("Location: ../admin/add-video-to-project-post".$headerEnd);
    return;
  }

  $videoTitle = strtoupper(getSecureData($_POST["videoTitle"]));
  $videoLink = getSecureData($_POST["videoLink"]);

  $sql = "";

  if ($numVids == 0) {
    $sql = 'UPDATE projectPosts SET videoTitle1="'.$videoTitle.'", videoLink1="'.$videoLink.'", videoCoverImg1="'.$imgSrc.'" WHERE id='.$id;
  } else if ($numVids == 1) {
    $sql = 'UPDATE projectPosts SET videoTitle2="'.$videoTitle.'", videoLink2="'.$videoLink.'", videoCoverImg2="'.$imgSrc.'" WHERE id='.$id;
  } else if ($numVids == 2) {
    $sql = 'UPDATE projectPosts SET videoTitle3="'.$videoTitle.'", videoLink3="'.$videoLink.'", videoCoverImg3="'.$imgSrc.'" WHERE id='.$id;
  } else {
    // Mandatory fields missing...
    $_SESSION["error"] = 10;
    header("Location: ../admin/add-video-to-project-post".$headerEnd);
    return;
  }

  // Execute command:
  $query = $db->prepare($sql);
  $query->execute();

  $_SESSION["error"] = 15; // Success

  // Redirect
  header("Location: ../admin/add-video-to-project-post".$headerEnd);

?>
