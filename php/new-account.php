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
  if ( empty($_POST["username"]) || empty($_POST["pass1"]) || empty($_POST["pass2"]) || empty($_POST["fullName"]) || empty($_POST["email"])) {
      $_SESSION["error"] = 10;
      $submitOk = false;
      header("Location: ../admin/new-account");
      return;
  }

  // Check Passwords
  if ( $_POST["pass1"] != $_POST["pass2"]) {
      $_SESSION["error"] = 11;
      $submitOk = false;
      header("Location: ../admin/new-account");
      return;
  }

  $username = $_POST["username"];
  $password = password_hash($_POST["pass1"], PASSWORD_BCRYPT);
  $fullName = $_POST["fullName"];
  $email = $_POST["email"];
  $permissionTitle = $_POST["permissionTitle"];
  $sql = "INSERT INTO adminAccounts (username, password, fullName, email, permissionTitle) VALUES (:username, :password, :fullName, :email, :permissionTitle)";

  // Execute command:
  $query = $db->prepare($sql);
  $query->execute(array(':username'=>$username,':password'=>$password,':fullName'=>$fullName,':email'=>$email,':permissionTitle'=>$permissionTitle));

  if ($submitOk) {
    // Redirect when finished. Note that this URL is right now static.
    $_SESSION["error"] = 7;
    header("Location: ../admin/new-account");
  }

?>
