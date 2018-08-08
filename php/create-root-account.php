<?php
  // PHP LIB ALREADY INCLUDED WHERE THIS FILE IS INCLUDED!
  $db = getDB();
  $query = 'SELECT * FROM adminAccounts WHERE username="devmattb"';
  $data = getContents($db, $query);

  if (count($data) <= 0) {
    // No root adminAccounts exists. Create the root admin adminAccounts.
    $username = "devmattb";
    // TODO: Change pass!
    $password = password_hash("C0lin4664", PASSWORD_BCRYPT);
    $fullName = "Matt Bergstrom";
    $email = "matt@devmattb.com";
    $permissionTitle = "admin";
    $sql = "INSERT INTO adminAccounts (username, password, fullName, email, permissionTitle) VALUES (:username, :password, :fullName, :email, :permissionTitle)";

    // Execute command:
    $query = $db->prepare($sql);
    $query->execute(array(':username'=>$username,':password'=>$password, ':fullName'=>$fullName, ':email'=>$email, ':permissionTitle'=>$permissionTitle));
  }

?>
