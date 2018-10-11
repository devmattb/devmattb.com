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
  <title>IT Expert | Devmattb - Admin - Edit Article</title>

  <!-- Establish DB Connection: -->
  <?php $db = getDB(); ?>
  <!-- HEADER -->
  <?php require_once("../../includes/header.html") ?>

  <!-- CSS -->
  <link type="text/css" rel="stylesheet" href="../../css/stylesheet.css"/>

  <!-- JS -->
  <script src="../../js/init.js" type="text/javascript"></script>

  <!-- Error Handling visualization -->
  <?php include("../../php/errors.php"); ?>

  <?php
    $query = 'SELECT * FROM article WHERE id='.getSecureData($_GET["id"]);
    $data = getContents($db, $query);
    $title = "";
    $text = "";
    foreach($data as $row) {
      $id = $row["id"];
      $title = $row["title"];
      $subtitle = $row["subtitle"];
      $breadText = $row["breadText"];
    }
  ?>
</head>

<body>

  <!-- Page Content -->
  <main>
    <div class="row">
      <div class="col s12">
        <br/><br/><br/><br/>
        <form action="<?php echo '../../php/edit-article.php/?id='.$id ?>" method="post" class="col s10 offset-s1">
          <h4 style="margin-left: 10px;">
            Edit this article:
          </h4>
          <br/>

          <!-- title : -->
          <div class="input-field col s12">
            <input name="title" value="<?php echo $title?>" id="title" type="text">
            <label for="title">Title</label>
          </div>

          <!-- subtitle: -->
          <div class="input-field col s12">
            <input name="subtitle" value="<?php echo $subtitle?>" id="subtitle" type="text">
            <label for="subtitle">Subtitle</label>
          </div>

          <!--text: -->
          <div class="input-field col s12">
            <textarea name="breadText" id="breadText" class="materialize-textarea"><?php echo $breadText?></textarea>
            <label for="breadText">Bread Text</label>
          </div>

          <div class="col s12">
            <button type="submit" class="btn blue"> Publish Changes! </button>
          </div>

        </form>

        <!-- Back to dashboard button -->
        <?php include("../../includes/backToDash.php"); ?>
      </div>
    </div>
  </main>
</body>

</html>
