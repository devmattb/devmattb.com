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
  <title>IT Expert | Devmattb - Admin - Choose Article </title>

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
</head>

<body>

  <!-- Page Content -->
  <main>
    <div class="row">
      <div class="col s12">
      <br/><br/><br/><br/>
      <div class="col s10 offset-s1">
        <h4>Choose article to edit: </h4>
        <ul class="collapsible">
          <?php
            $query = 'SELECT * FROM article ORDER BY id DESC';
            $data = getContents($db, $query);
            foreach($data as $row) {
              $id = $row["id"];
              $title = $row["title"];
              $subtitle = $row["subtitle"];
              $breadText = $row["breadText"];
              $figureSrc = $row["figureSrc"];
              $timestamp = $row["createdAt"];
          ?>
            <li class="hoverable tooltipped" data-position="bottom" data-tooltip="Click for more info!">
              <div class="collapsible-header">
                <?php echo $title ?>
                <div class="col s12">
                  <a href="<?php echo '../edit-article/?id='.$id ?>">
                    <button style="margin-top: 0px;" class="right btn green waves-effect waves-light hoverable">EDIT</button>
                  </a>
                </div>
              </div>
              <div class="collapsible-body">
                <span>
                  <span style="margin-left: 20px;">
                    <b>Text: </b>
                    <?php echo $breadText ?>
                    <br>
                    (Created at <?php echo $timestamp ?>)
                  </span>
                </span> <br/><br/>
                <span><b>Bild: </b> </span><br/>
                <img style="max-width: 100%" src="<?php echo '../'.$figureSrc?>" />
              </div>
            </li>
            <?php
              // End foreach:
              }
            ?>
        </ul>

      </div>

      <!-- Back to dashboard button -->
      <?php include("../../includes/backToDash.php"); ?>

    </div>
    </div>
  </main>
</body>

</html>
