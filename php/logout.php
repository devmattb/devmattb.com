<?php

  session_start();
  unset($_SESSION["autheticated"]);
  session_destroy();

  header("Location: ../admin/");

?>
