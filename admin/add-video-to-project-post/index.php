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
  <title>IT Expert | Devmattb - Admin - Add A Video To A Project Post</title>

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
  <?php $formLink = "../../php/add-video-to-project-post.php?id=".$_GET["id"]."&numVids=".$_GET["numVids"]; ?>

</head>

<body>

  <!-- Page Content -->
  <main>
    <div class="row">
      <div class="col s12">
        <br/><br/><br/><br/>
        <form action="<?php echo $formLink?>" method="post" enctype="multipart/form-data" class="col s10 offset-s1">
          <h4 style="margin-left: 10px;"> Add A Video To A Project Post </h4>
          <br/>

          <!-- Video Title: -->
          <div class="input-field col s12">
            <input name="videoTitle" placeholder="Video Title..." id="videoTitle" type="text">
            <label for="videoTitle">Video Title</label>
          </div>

          <!-- Video Link: -->
          <div class="input-field col s12">
            <input name="videoLink" placeholder="E.g. http://devmattb.com/" id="videoLink" type="text">
            <label for="videoLink">Video Link</label>
          </div>

          <!-- Upload VIDEO THUMBNAIL-->
          <div class="col s12 file-field input-field">
            <div class="btn webOrange">
              <i class="fas fa-upload"></i> &nbsp;
              <span>UPLOAD VIDEO THUMBNAIL</span>
              <input type="file" name="fileToUpload" id="fileToUpload">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>

          <div class="col s12">
            <button type="submit" class="btn green"> ADD VIDEO TO POST! </button>
          </div>
        </form>

        <!-- Back to dashboard button -->
        <?php include("../../includes/backToDash.php"); ?>
      </div>
    </div>
  </main>
</body>

</html>
