<!DOCTYPE html>
<html>

<head>

  <!-- PHP Lib -->
  <?php include("../php/functions.php"); ?>

  <!-- Title SEO -->
  <title>devmattb - Articles</title>
  <meta itemprop="name" content="devmattb - Articles">
  <meta property="og:title" content="devmattb - Articles">
  <meta name="twitter:title" content="devmattb - Articles">

  <!-- Webpage Thumbnail pic SEO -->
  <meta itemprop="image" content="../img/thumbnail_website_articles.PNG">
  <meta property="og:image" content="../img/thumbnail_website_articles.PNG">
  <meta name="twitter:image" content="../img/thumbnail_website_articles.PNG">

  <!-- SEO General -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="description" content="Need tech consulting? Or help with a website or webapp? Devmattb is a Software Engineer with expertise within Computer Science.">
  <meta author="devmattb" content=""/>
  <meta name="robots" content="index">
  <meta name="keywords" content="devmattb,matt,bergstrom,mattias,bergström,developer,programmer,software engineer"/>

  <!-- Google+ / Schema.org -->
  <meta itemprop="description" content="Need tech consulting? Or help with a website or webapp? Devmattb is a Software Engineer with expertise within Computer Science.">
  <link href="https://plus.google.com/u/0/113043733443648554208" rel="publisher">

  <!-- Open Graph Facebook -->
  <meta property="og:description" content="Need tech consulting? Or help with a website or webapp? Devmattb is a Software Engineer with expertise within Computer Science."/>
  <meta property="og:url" content="http://devmattb.com/">
  <meta property="og:site_name" content="devmattb"/>
  <meta property="og:type" content="website">

  <!-- Twitter -->
  <meta name="twitter:description" content="Need tech consulting? Or help with a website or webapp? Devmattb is a Software Engineer with expertise within Computer Science.">
  <meta name="twitter:url" content="http://devmattb.com/">
  <meta name="twitter:card" content="Need tech consulting? Or help with a website or webapp? Devmattb is a Software Engineer with expertise within Computer Science.">
  <meta name="twitter:site" content="@devmattb">

  <!-- STANDARD HEADER -->
  <?php include("../includes/header.html") ?>
  <?php include("../php/errors.php") ?>

  <!-- STANDARD INIT -->
  <script src="../js/init.js" type="text/javascript"></script>
  <script type="text/javascript">
    $(document).ready(function(){
        $("#articlesNavItem").css("border-bottom", "2px solid #F93822");

        // runs after the entire page has loaded
        $(window).bind("load", function() {
          // store the image link inside a variable from 'src' attribute
          var getImageSrc = $('#hero-wrap img').attr('src');
          // style background image
          $('#hero-wrap').css({
             'background-size' : 'cover',
             'background-image' : 'url(' + getImageSrc + ')'
          });
        });
    });
  </script>

</head>

<body>

    <?php include("../includes/nav.php"); ?>

    <div class="row">

      <!-- Get info from all articles -->
      <?php
        $db = getDB();
        $query = "SELECT * FROM article";
        $data = getContents($db, $query);
        $itemNo = 1;
        $numIt = 1;
        // Get all necessary data...
        foreach($data as $row) {
          // $title = $row["title"]; TODO: Not used so far!
          $figureSrc = $row["figureSrc"];

          if ( $itemNo == 1) {
      ?>
        <!-- ROW-TYPE 1 -->
        <div class="row col s12">

            <!-- ITEM #1 -->
            <div class="fourtyFivePage col s5 m3 l2">
                <div class="caseDiv fourtyFivePage col-content z-depth-2 hoverable">
                    <!-- Background + Overlay TODO!!!-->
                    <div id="hero-wrap">
                        <div class="webOrangeOverlay"></div>
                        <img src="<?php echo $figureSrc?>">
                    </div>
                </div>
            </div>
      <?php

          } else if ( $itemNo == 2 ) {
      ?>
            <!-- ITEM #2 -->
            <div class="fourtyFivePage col s7 m9 l10 ">
                <div class="caseDiv fourtyFivePage col-content z-depth-2 hoverable">
                    <!-- Background + Overlay -->
                    <div id="hero-wrap">
                        <div class="webOrangeOverlay"></div>
                        <img src="<?php echo $figureSrc?>">
                    </div>
                </div>
            </div>

        </div>
      <?php
          } else if ( $itemNo == 3 ) {
      ?>
        <!-- ROW-TYPE 2 -->
        <div class="row col s12">

            <!-- ITEM #1 -->
            <div class="thirtyFivePage col s6">
                <div class="caseDiv thirtyFivePage col-content z-depth-2 hoverable blackOverlay">
                    <!-- Background + Overlay -->
                    <div style="<?php echo 'background:url('.$figureSrc.');'?>" class="bkgImg">
                        <div class="blackOverlay"></div>
                    </div>

                </div>
            </div>
      <?php
          } else if ( $itemNo == 4 ) {
      ?>
            <!-- ITEM #2 -->
            <div class="thirtyFivePage col s6">
                <div class="caseDiv thirtyFivePage col-content z-depth-2 hoverable ">
                    <!-- Background + Overlay -->
                    <div style="<?php echo 'background:url('.$figureSrc.');'?>" class="bkgImg">
                        <div class="superLightWebOrangeOverlay"></div>
                    </div>

                </div>
            </div>

        </div>
      <?php
          } else if ( $itemNo == 5 ) {
      ?>
        <!-- ROW-TYPE 3 -->
        <div class="row col s12">

            <!-- ITEM #1 -->
            <div class="twentyPage col s8 m7 l8">
                <div class="caseDiv twentyPage col-content z-depth-2 hoverable">
                    <!-- Background + Overlay -->
                    <div style="<?php echo 'background:url('.$figureSrc.');'?>" class="bkgImg">
                        <div class="whiteOverlay"></div>
                    </div>
                </div>
            </div>
      <?php
          } else if ( $itemNo == 6 ) {
      ?>
            <!-- ITEM #2 -->
            <div class="twentyPage col s4 m5 l4">
                <div class="caseDiv twentyPage col-content z-depth-2 hoverable ">
                    <!-- Background + Overlay -->
                    <div style="<?php echo 'background:url('.$figureSrc.');'?>" class="bkgImg">
                        <div class="webOrangeOverlay"></div>
                    </div>
                </div>
            </div>

        </div>
      <?php
            $itemNo = 0; // Reset count. We have arrived at itemNo 6.
          }

          if ( count($data) == $numIt && $itemNo % 2 != 0 ) {
            // Echo one last row-closing div, since we didn't finish the row.
            echo "</div>";
          }

          $itemNo++;
          $numIt++;
        }
      ?>

    </div>

</body>

</html>
