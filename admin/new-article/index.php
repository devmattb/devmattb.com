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
  <title>IT Expert | Devmattb - Admin - Publish An Article</title>

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
        <form action="../../php/new-article.php" method="post" enctype="multipart/form-data" class="col s10 offset-s1">
          <h4 style="margin-left: 10px;"> Publish an Article! </h4>
          <br/>

          <!-- title : -->
          <div class="input-field col s12">
            <input name="title" id="title" type="text">
            <label for="title">Title</label>
          </div>

          <!-- subtitle: -->
          <div class="input-field col s12">
            <input name="subtitle" id="subtitle" type="text">
            <label for="subtitle">Subtitle</label>
          </div>

          <!--text: -->
          <div class="input-field col s12">
            <textarea name="breadText" id="breadText" class="materialize-textarea"></textarea>
            <label for="breadText">Bread Text</label>
          </div>

          <!-- Upload Project Cover Img -->
          <div class="col s12 file-field input-field">
            <div class="btn webOrange">
              <i class="fas fa-upload"></i> &nbsp;
              <span>UPLOAD FIGURE</span>
              <input type="file" name="fileToUpload" id="fileToUpload">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>

          <!-- Fig txt -->
          <div class="input-field col s12">
            <input name="figureText" id="figureText" type="text">
            <label for="figureText">Figure Text</label>
          </div>

          <!-- Video Link: -->
          <div class="input-field col s12">
            <input name="vidSrc" placeholder="E.g. http://devmattb.com/" id="vidSrc" type="text">
            <label for="vidSrc">Linked Video to Article</label>
          </div>

          <div class="col s12">
            <button type="submit" class="btn green"> CREATE ARTICLE! </button>
          </div>
        </form>

        <!-- Back to dashboard button -->
        <?php include("../../includes/backToDash.php"); ?>
      </div>
    </div>
  </main>
</body>

</html>
