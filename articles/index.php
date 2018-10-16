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

        // Scale in articles in random order.
        var randomMillisec;
        var max = 600;
        var min = 200;
        // $("").each(function(i, obj) {
        //     randomMillisec = Math.floor(Math.random() * (max - min + 1)) + min;
        //     // window.setTimeout(function(){
        //       $(this).removeClass("scale-out");
        //     // }, randomMillisec);
        // });

        $(this).find('.scale-transition').each( function(k, v) {
            randomMillisec = Math.floor(Math.random() * (max - min + 1)) + min;
            var el = this;
                setTimeout(function () {
                $(el).removeClass("scale-out");
            }, randomMillisec);
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
          $title = $row["title"];
          $capTitle = ucwords($title);
          $titleLink = str_replace(" ", "-", $title);
          $figureSrc = $row["figureSrc"];

      ?>
        <style>
            <?php echo
                "#article".$numIt." {
                    background-image: url('".$figureSrc."');
                    background-size: cover;
                    background-position: center;
                    background-repeat: no-repeat;
                }"
            ?>
        </style>

      <?php

          if ( $itemNo == 1) {
      ?>
        <!-- ROW-TYPE 1 -->
        <div class="row col s12">

            <!-- ITEM #1 -->
            <a href="<?php echo $titleLink?>">
                <div class="fourtyFivePage col s5 m3 l2 scale-transition scale-out tooltipped" data-tooltip="<?php echo $capTitle ?>">
                    <div id="<?php echo 'article'.$numIt?>" class="fourtyFivePage col-content z-depth-2 hoverable">
                        <!-- Overlay -->
                        <div class="webOrangeOverlay"></div>
                    </div>
                </div>
            </a>
      <?php

          } else if ( $itemNo == 2 ) {
      ?>
            <!-- ITEM #2 -->
            <a href="<?php echo $titleLink?>">
                <div class="fourtyFivePage col s7 m9 l10 scale-transition scale-out tooltipped" data-tooltip="<?php echo $capTitle ?>">
                    <div id="<?php echo 'article'.$numIt?>" class="fourtyFivePage col-content z-depth-2 hoverable">
                        <!-- Overlay -->
                        <div class="lightWebOrangeOverlay"></div>
                    </div>
                </div>
            </a>

        </div>
      <?php
          } else if ( $itemNo == 3 ) {
      ?>
        <!-- ROW-TYPE 2 -->
        <div class="row col s12">

            <!-- ITEM #1 -->
            <a href="<?php echo $titleLink?>">
                <div class="thirtyFivePage col s6 scale-transition scale-out tooltipped" data-tooltip="<?php echo $capTitle ?>">
                    <div id="<?php echo 'article'.$numIt?>" class="thirtyFivePage col-content z-depth-2 hoverable blackOverlay">
                        <!-- Overlay -->
                        <div class="blackOverlay"></div>
                    </div>
                </div>
            </a>
      <?php
          } else if ( $itemNo == 4 ) {
      ?>
            <!-- ITEM #2 -->
            <a href="<?php echo $titleLink?>">
                <div class="thirtyFivePage col s6 scale-transition scale-out tooltipped" data-tooltip="<?php echo $capTitle ?>">
                    <div id="<?php echo 'article'.$numIt?>" class="thirtyFivePage col-content z-depth-2 hoverable ">
                        <!-- Overlay -->
                        <div class="superLightWebOrangeOverlay"></div>
                    </div>
                </div>
            </a>

        </div>
      <?php
          } else if ( $itemNo == 5 ) {
      ?>
        <!-- ROW-TYPE 3 -->
        <div class="row col s12">

            <!-- ITEM #1 -->
            <a href="<?php echo $titleLink?>">
                <div class="twentyPage col s8 m7 l8 scale-transition scale-out tooltipped" data-tooltip="<?php echo $capTitle ?>">
                    <div id="<?php echo 'article'.$numIt?>" class="twentyPage col-content z-depth-2 hoverable">
                        <!-- Background + Overlay -->
                        <div class="whiteOverlay"></div>
                    </div>
                </div>
            </a>
      <?php
          } else if ( $itemNo == 6 ) {
      ?>
            <!-- ITEM #2 -->
            <a href="<?php echo $titleLink?>">
                <div class="twentyPage col s4 m5 l4 scale-transition scale-out tooltipped" data-tooltip="<?php echo $capTitle ?>">
                    <div id="<?php echo 'article'.$numIt?>" class="twentyPage col-content z-depth-2 hoverable ">
                        <!-- Overlay -->
                        <div class="webOrangeOverlay"></div>
                    </div>
                </div>
            </a>

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
