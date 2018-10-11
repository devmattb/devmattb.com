<!-- Authentication -->
<?php require_once("../../php/authenticate.php") ?>

<!-- PHP Lib -->
<?php require_once("../../php/functions.php"); ?>

<?php

  $db = getDB();
  $query = 'SELECT * FROM adminAccounts WHERE id="'.$_SESSION["authenticated"].'"';
  $data = getContents($db, $query);
  foreach ($data as $row) {
    $permissionTitle = $row["permissionTitle"];
  }

?>

<!DOCTYPE html>
<html>
<head>
  <!-- Title SEO -->
  <title>IT Expert | Devmattb - Admin Dashboard</title>

  <!-- HEADER -->
  <?php require_once("../../includes/header.html") ?>

  <!-- CSS -->
  <link type="text/css" rel="stylesheet" href="../../css/stylesheet.css"/>
  <link type="text/css" rel="stylesheet" href="../../css/slider.css" />

  <!-- JS -->
  <script src="../../js/init.js" type="text/javascript"></script>

  <script>
    $(document).ready(function(){
      window.setTimeout(function(){ $(".card").removeClass("scale-out")}, 150);
    });
  </script>

  <!-- Error Handling visualization -->
  <?php include("../../php/errors.php"); ?>
</head>
<body>

<!-- LOGIN FORM -->
<div style="margin-top: 30px;" id="page" class="row col s12 container">
    <header id="banner" class="center">
      <h4>Devmattb <?php echo $permissionTitle?> Dashboard</h4> <br/>
    </header>

    <div class="card blue-grey darken-1 z-depth-2 scale-transition scale-out">
      <div class="card-content white-text">
        <span class="card-title">Manage Articles:</span>
        <p> Create and Delete Articles for the "Articles" page. Some updates can also be made to the articles. </p>
      </div>
      <div class="card-action">
        <a href="../new-article/"><button style="margin: 10px;" class="btn green waves-effect waves-light hoverable"> CREATE </button></a>
        <a href="../edit-article/"><button style="margin: 10px;" class="btn blue waves-effect waves-light hoverable"> EDIT </button></a>
        <a href="../delete-article/"><button style="margin: 10px;" class="btn red waves-effect waves-light hoverable"> DELETE </button></a>
      </div>
    </div>

    <!-- <div class="card blue-grey darken-1 z-depth-2 scale-transition scale-out">
      <div class="card-content white-text">
        <span class="card-title">Manage Case:</span>
        <p> Create and Delete Case posts for the "Case" page. </p>
      </div>
      <div class="card-action">
        <a href="../new-case-post/"><button style="margin: 10px;" class="btn green waves-effect waves-light hoverable"> CREATE </button></a>
        <a href="../delete-case-post/"><button style="margin: 10px;" class="btn red waves-effect waves-light hoverable"> DELETE </button></a>
      </div>
    </div> -->

    <div class="card blue-grey darken-1 z-depth-2 scale-transition scale-out">
      <div class="card-content white-text">
        <span class="card-title">Send a Newsletter</span>
        <p> Write a newsletter and send in to all users on the email list! </p>
      </div>
      <div class="card-action">
        <a href="../send-newsletter/"><button style="margin: 10px;" class="btn green waves-effect waves-light hoverable"> WRITE NEWSLETTER </button></a>
      </div>
    </div>

    <!-- <div class="card blue-grey darken-1 z-depth-2 scale-transition scale-out">
      <div class="card-content white-text">
        <span class="card-title">Manage Job Search:</span>
        <p>
          Add or Delete a job search for the webpage.
        </p>
      </div>
      <div class="card-action">
        <a href="../new-job-search/"><button style="margin: 10px;" class="btn green waves-effect waves-light hoverable"> CREATE </button></a>
        <a href="../delete-job-search/"><button style="margin: 10px;" class="btn red waves-effect waves-light hoverable"> DELETE </button></a>
      </div>
    </div> -->


    <?php
      if ($permissionTitle == "admin") { echo '
        <div class="card blue-grey darken-1 z-depth-2 scale-transition scale-out">
          <div class="card-content white-text">
            <span class="card-title">Manage Accounts:</span>
            <p>
               Create and Delete accounts for the administration system.
            </p>
          </div>
          <div class="card-action">
            <a href="../new-account/"><button style="margin: 10px;" class="btn green waves-effect waves-light hoverable"> CREATE </button></a>
            <a href="../delete-account/"><button style="margin: 10px;" class="btn red waves-effect waves-light hoverable"> DELETE </button></a>
          </div>
        </div>

    '; } ?>
        <div class="col s12 center">
          <a href="../../">
            <button class="btn green waves-effect waves-light hoverable">
              <i class="fas fa-home"></i> &nbsp;
              <span style="position:relative; top: -1px">BACK TO WEBPAGE</span>
            </button>
          </a>
          <br/><br/>
          <form method="POST" action="../../php/logout.php">
            <button type="submit" class="btn red waves-effect waves-light hoverable">
              <span style="position:relative; top: -2px">LOGOUT</span>
              &nbsp;<i class="fas fa-sign-out-alt"></i>
            </button>
          </form>
        </div>
</div>

</body>
</html>
