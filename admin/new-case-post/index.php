<!-- Authentication -->
<?php require_once("../../php/authenticate.php") ?>

<!-- PHP Lib -->
<?php require_once("../../php/functions.php"); ?>

<!-- NYTT INLÄGG SIDA-->
<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
  <!-- Title SEO -->
  <title>IT Expert | Devmattb - Admin - Create A New Project Post</title>

  <!-- Establish DB Connection: -->
  <?php $db = getDB(); ?>

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
        <form action="../../php/new-case-post.php" method="post" enctype="multipart/form-data" class="col s10 offset-s1">
          <h4 style="margin-left: 10px;"> Create a New Case Post! </h4>
          <br/>

          <!-- Post Titel: -->
          <div class="input-field col s12">
            <input name="caseTitle" placeholder="Card Title..." id="caseTitle" type="text">
            <label for="caseTitle">Card Title</label>
          </div>

          <!-- Case text: -->
          <div class="input-field col s12">
            <textarea name="caseText" id="caseText" class="materialize-textarea"></textarea>
            <label for="caseText">Card Text</label>
          </div>

          <!-- Upload Project Cover Img -->
          <div class="col s12 file-field input-field">
            <div class="btn webOrange">
              <i class="fas fa-upload"></i> &nbsp;
              <span>UPLOAD CARD IMAGE</span>
              <input type="file" name="fileToUpload" id="fileToUpload">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>

          <!-- Demo Link: -->
          <div class="input-field col s12">
            <input name="demoLink" placeholder="E.g. http://devmattb.com/" id="demoLink" type="text">
            <label for="demoLink">Demo Link</label>
          </div>


          <div class="col s12">
            <button type="submit" class="btn green"> CREATE POST! </button>
          </div>
        </form>

        <!-- Back to dashboard button -->
        <?php include("../../includes/backToDash.php"); ?>
      </div>
    </div>
  </main>
</body>

</html>
