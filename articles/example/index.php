<!DOCTYPE html>
<html>

<head>

  <!-- PHP Lib -->
  <?php include("../../php/functions.php"); ?>

  <!-- Get info for article -->
  <?php
    $db = getDB();
    $str = explode("/",getcwd());
    $articleTitle = str_replace("-", " ", $str[count($str)-1]);
    $query = "SELECT * FROM article WHERE title='$articleTitle'";
    $data = getContents($db, $query);
    // Get all necessary data...
    foreach($data as $row) {
      $title = $row["title"];
      $subtitle = $row["subtitle"];
      $figureSrc = $row["figureSrc"];
      $figureText = $row["figureText"];
      $breadText = $row["breadText"];
      $vidSrc = $row["vidSrc"];
    }
  ?>

  <!-- Title SEO DYNAMIC -->
  <title><?php echo $title." | ".$subtitle ?></title>
  <meta itemprop="name" content="<?php echo $title." | ".$subtitle ?>">
  <meta property="og:title" content="<?php echo $title." | ".$subtitle ?>">
  <meta name="twitter:title" content="<?php echo $title." | ".$subtitle ?>">

  <!-- Webpage Thumbnail pic SEO -->
  <meta itemprop="image" content="<?php echo $figureSrc ?>">
  <meta property="og:image" content="<?php echo $figureSrc ?>">
  <meta name="twitter:image" content="<?php echo $figureSrc ?>">

  <!-- SEO General -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="description" content="<?php echo $title." | ".$subtitle ?>">
  <meta author="devmattb" content=""/>
  <meta name="robots" content="index">
  <?php
    // Create keywords based of article:
    $titleArr = explode(" ", $title);
    $subtitleArr = explode(" ", $subtitle);
    $keywordCount = 0; // Max 30.
    $keywords = "";
    foreach ($titleArr as $titleKeyword) {
      if($keywordCount == 29) {
        break;
      }
      $keywords += $titleKeyword+", ";
      $keywordCount++;
    }

    foreach ($subtitleArr as $subtitleKeyword) {
      if($keywordCount == 29) {
        break;
      }
      $keywords += $subtitleKeyword+", ";
      $keywordCount++;
    }
    $keywords += "devmattb"; // Last keyword.
  ?>
  <meta name="keywords" content="<?php echo $keywords ?>"/>

  <!-- Google+ / Schema.org -->
  <meta itemprop="description" content="<?php echo $title." | ".$subtitle ?>">
  <link href="https://plus.google.com/u/0/113043733443648554208" rel="publisher">

  <!-- Open Graph Facebook -->
  <meta property="og:description" content="<?php echo $title." | ".$subtitle ?>"/>
  <meta property="og:url" content="http://devmattb.com/">
  <meta property="og:site_name" content="devmattb"/>
  <meta property="og:type" content="website">

  <!-- Twitter -->
  <meta name="twitter:description" content="<?php echo $title." | ".$subtitle ?>">
  <meta name="twitter:url" content="http://devmattb.com/">
  <meta name="twitter:card" content="<?php echo $title." | ".$subtitle ?>">
  <meta name="twitter:site" content="@devmattb">

  <!-- STANDARD HEADER -->
  <?php include("../../includes/header.html") ?>
  <?php include("../../php/errors.php") ?>

  <!-- STANDARD INIT -->
  <script src="../../js/init.js" type="text/javascript"></script>
  <script type="text/javascript">
    $(document).ready(function(){
        $("#articlesNavItem").css("border-bottom", "2px solid #F93822");
    });
  </script>

</head>

<body>

  <?php include("../../includes/nav.php"); ?>

  <!-- Article Title Container -->
  <div id="firstSection" class="fullPage white">
    <div class="row">
      <div class="container">

        <!-- TITLE & HOOK -->
        <div class="col s12 center articleTitles">
          <h3><?php echo $title ?></h3><br>
          <h5>
            <?php echo $subtitle ?>
          </h5>
        </div>

        <!-- FIGURE -->
        <div class="col s12 center mediaContainer">
          <br>
          <!-- 1920x900 pictures preffered -->
          <img style="width:82vmin;" src="<?php echo "../".$figureSrc ?>">
          <p> <?php echo $figureText ?> </p>
        </div>

        <!-- BREAD TEXT 2.2, 2.8, 3.8 [vmin] -->
        <div class="col s12 breadText">
          <p>
            <?php echo html_entity_decode($breadText) ?>
          </p>
        </div>

        <!-- LINKED VIDEO -->
        <div class="col s12 center mediaContainer">
          <br>
          <!-- 1920x900 pictures preffered -->
          <div class="video-container">
            <iframe width="853" height="480" src="<?php echo $vidSrc ?>" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>

        <!-- FOOTER: SOCIAL & BRAND -->
        <div class="col s12 center">
          <br>
          <p style="text-transform:uppercase; font-family: Raleway;"><b>Check out more content on other platforms</b></p>
          <!-- SOCIAL -->
          <div class="col s12 center socialIcons">
            <a style="font-size: 35px;" target="_blank" href="https://www.instagram.com/devmattb/"><i class="fab fa-instagram textWebOrange" aria-hidden="true"></i></a>

            <a style="font-size: 35px;" target="_blank" href="https://www.facebook.com/devmattb/"><i class="fab fa-facebook textWebOrange" aria-hidden="true"></i></a>

            <a style="font-size: 35px;" target="_blank" href="https://twitter.com/devmattb"><i class="fab fa-twitter textWebOrange" aria-hidden="true"></i></a>
          </div>

          <!-- BRAND -->
          <div class="col s12">
            <img style="width:100px; margin-left: -10px;" src="../../img/logo_v1.png">
          </div>

        </div>

      </div>
    </div>
  </div>


</body>

</html>
