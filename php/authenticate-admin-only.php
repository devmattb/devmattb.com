<?php
  // This file is included on all pages that are strictly admin-access only.
  $db = getDB();
  $query = 'SELECT * FROM adminAccounts WHERE id="'.$_SESSION["authenticated"].'"';
  $data = getContents($db, $query);
  foreach ($data as $row) {
    $permissionTitle = $row["permissionTitle"];
  }

  // Throw all non-admin users out of the page.
  if ( $permissionTitle != "admin" ) {
    header('Location: ../../');
  }
?>
