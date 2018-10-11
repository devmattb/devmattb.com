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
  <title>IT Expert | Devmattb - Admin - Delete Case Post</title>

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
      <div class="col s10 offset-s1">
        <h4> Delete Case Posts </h4>
        <ul class="collapsible">
          <?php
            $query = 'SELECT * FROM casePosts ORDER BY createdAt DESC';
            $data = getContents($db, $query);
            foreach($data as $row) {
              $id = $row["id"];
              $title = $row["caseTitle"];
              $text = $row["caseText"];
              $imgSrc = $row["imgSrc"];
              $demoLink = $row["demoLink"];
              $timestamp = $row["createdAt"];
          ?>
            <li class="hoverable tooltipped" data-position="bottom" data-tooltip="Click for detailed info!">
              <div class="collapsible-header">
                <?php echo $title ?>
                <form class="col s12" action="<?php echo '../../php/delete-case-post.php?id='.$id.'&imgSrc='.$imgSrc?>" method="post" enctype="multipart/form-data" >
                  <button type="submit" style="margin-top: 0px;" class="right btn waves-effect waves-light red hoverable">DELETE</button>
                </form>
              </div>
              <div class="collapsible-body">
                <span>
                  <span>
                    <b>Text: </b>
                    <?php echo $text ?>
                    <br/><br/>
                    <b>Demo Link:</b> <?php echo $demoLink ?>
                  </span>
                  <br/><br/>
                </span>
                <span><b>Picture: </b> </span><br/>
                <img style="max-width: 100%" src="<?php echo '../'.$imgSrc?>" />
                <br/><br/>
                <span class="iconPair"> <i class="far fa-calendar-alt"></i>&nbsp;&nbsp; <?php echo $timestamp?> </span>
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
