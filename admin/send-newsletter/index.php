<!-- Authentication -->
<?php require_once("../../php/authenticate.php") ?>

<!-- ADMIN ONLY PAGE! Extra Authentication -->
<?php require_once("../../php/authenticate-admin-only.php") ?>

<!-- PHP Lib -->
<?php require_once("../../php/functions.php"); ?>

<!-- NYTT INLÄGG SIDA-->
<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
  <!-- Title SEO -->
  <title>IT Expert | Devmattb - Admin - Create A New Job Search</title>

  <!-- Establish DB Connection: -->
  <?php
    $db = getDB();
    $query = "SELECT * FROM emailList";
    $data = getContents($db,$query);
    $numSubs = count($data);
  ?>

  <!-- HEADER -->
  <?php require_once("../../includes/header.html") ?>

  <!-- CSS -->
  <link type="text/css" rel="stylesheet" href="../../css/stylesheet.css"/>
  <link type="text/css" rel="stylesheet" href="../../css/slider.css" />

  <!-- JS -->
  <script src="../../js/init.js" type="text/javascript"></script>

  <!-- Error Handling visualization -->
  <?php include("../../php/errors.php"); ?>

</head>

<body>

  <!-- Page Content -->
  <main>
    <div class="row">
      <div class="col s12">
      <br/><br/><br/><br/>
      <form action="../../php/send-newsletter.php" method="post" enctype="multipart/form-data" class="col s10 offset-s1">
        <h4 style="margin-left: 10px;"> Send a Newsletter! </h4>
        <br/>

        <!-- Subject: -->
        <div class="input-field col s12">
          <input name="subject" placeholder="E.g. This Weeks Insights" id="subject" type="text">
          <label for="subject">Subject</label>
        </div>

        <!-- Title: -->
        <div class="input-field col s12">
          <input name="title" placeholder="E.g. This Weeks Insights" id="title" type="text">
          <label for="title">Title</label>
        </div>

        <!-- Inledningstext: -->
        <div class="input-field col s12">
          <textarea name="introText" id="introText" placeholder="Message..." class="materialize-textarea"></textarea>
          <label for="introText">Intro Text</label>
        </div>

        <div class="input-field col s12">
          <textarea name="codingText" id="codingText" placeholder="Message..." class="materialize-textarea"></textarea>
          <label for="codingText">Coding Text</label>
        </div>

        <div class="input-field col s12">
          <textarea name="contentText" id="contentText" placeholder="Message..." class="materialize-textarea"></textarea>
          <label for="contentText">Content Text</label>
        </div>

        <div class="col s12">
          <button type="submit" class="btn green"> SEND! </button>
        </div>

        <div class="col s12 center">
          <p>You currently have <b><?php echo $numSubs; ?></b> newsletter subscribers.</p>
        </div>
      </form>

      <!-- Back to dashboard button -->
      <?php include("../../includes/backToDash.php"); ?>
      </div>
    </div>
  </main>
</body>

</html>
