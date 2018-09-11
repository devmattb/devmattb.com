<!DOCTYPE html>
<html>

<head>
  <!-- PHP LIB -->
  <?php
    include("../php/functions.php");
    $db = getDB();

    function addClosingTagIfUneven($c, $cData) {
      if($c+1 > $cData) {
        echo '</div>'; // Always get a closing tag, even if # elements not even.
      }
    }
  ?>

  <!-- Title SEO -->
  <title>devmattb - Case</title>
  <meta itemprop="name" content="devmattb - Case">
  <meta property="og:title" content="devmattb - Case">
  <meta name="twitter:title" content="devmattb - Case">

  <!-- Webpage Thumbnail pic SEO TODOOOO -->
  <meta itemprop="image" content="../img/thumbnail_website_about.PNG">
  <meta property="og:image" content="../img/thumbnail_website_about.PNG">
  <meta name="twitter:image" content="../img/thumbnail_website_about.PNG">

  <!-- STANDARD HEADER -->
  <?php include("../includes/header.html") ?>
  <?php include("../php/errors.php") ?>

  <!-- STANDARD INIT -->
  <script src="../js/init.js" type="text/javascript"></script>
  <script type="text/javascript">
    $(document).ready(function(){
        $("#caseNavItem").css("border-bottom", "2px solid #F93822");
    });
  </script>

</head>

<body>

    <?php include("../includes/modals.php"); ?>
    <?php include("../includes/nav.php"); ?>

    <div class="row">
        <?php
          $query = "SELECT * FROM case";
          $data = getContents($db, $query);

          $count = 1;
          $numElements = count($data);

          foreach($data as $row) {
            $id = $row["id"];
            $title = $row["introTitle"]; // NOTE: Not used so far.
            // Replace all spaces with dashes in the title, to create a good link.
            // IMPORTANT: This matches how we add articles to the website in the backend system.
            $titleLink = str_replace("-", " ", $title);
            $bkgImgSrc = $row["bkgImgSrc"]; // E.g: "background:url(../img/lookaway.jpg);"
          // display HTML:
        ?>

        <?php
            if($count == 1) {
        ?>

        <!-- ROW-TYPE 1 -->
        <div class="row col s12">

            <!-- ITEM #1 -->
            <a <?php echo 'href="/'.$titleLink.'"' ?> >
              <div class="fourtyFivePage col s5 m3 l2">
                <div class="caseDiv fourtyFivePage col-content z-depth-2 hoverable">
                    <!-- Background + Overlay -->
                    <div <?php echo 'style="'.$bkgImgSrc.'"';?>  class="bkgImg">
                        <div class="webOrangeOverlay"></div>
                    </div>
                </div>
              </div>
            </a>

        <?php
              } // End of IF-1
              else if($count == 2) {
        ?>

            <!-- ITEM #2 -->
            <a <?php echo 'href="/'.$titleLink.'"' ?> >
              <div class="fourtyFivePage col s7 m9 l10 ">
                <div class="caseDiv fourtyFivePage col-content z-depth-2 hoverable">
                    <!-- Background + Overlay -->
                    <div <?php echo 'style="'.$bkgImgSrc.'"';?> class="bkgImg">
                        <div class="lightWebOrangeOverlay"></div>
                    </div>
                </div>
              </div>
            </a>

        </div>

        <?php
              } // End of IF-2
              addClosingTagIfUneven($count, $numElements);
              else if($count == 3) {
        ?>

        <!-- ROW-TYPE 2 -->
        <div class="row col s12">

            <!-- ITEM #1 -->
            <a <?php echo 'href="/'.$titleLink.'"' ?> >
              <div class="thirtyFivePage col s6">
                <div class="caseDiv thirtyFivePage col-content z-depth-2 hoverable blackOverlay">
                    <!-- Background + Overlay -->
                    <div s<?php echo 'style="'.$bkgImgSrc.'"';?> class="bkgImg">
                        <div class="blackOverlay"></div>
                    </div>

                </div>
              </div>
            </a>
        <?php
              } // End of IF-3
              else if($count == 4) {
        ?>
            <!-- ITEM #2 -->
            <a <?php echo 'href="/'.$titleLink.'"' ?> >
              <div class="thirtyFivePage col s6">
                <div class="caseDiv thirtyFivePage col-content z-depth-2 hoverable ">
                    <!-- Background + Overlay -->
                    <div <?php echo 'style="'.$bkgImgSrc.'"';?> class="bkgImg">
                        <div class="superLightWebOrangeOverlay"></div>
                    </div>

                </div>
              </div>
            </a>

        </div>
        <?php
              } // End of IF-4
              addClosingTagIfUneven($count, $numElements);
              else if($count == 5) {
        ?>

        <!-- ROW-TYPE 3 -->
        <div class="row col s12">

            <!-- ITEM #1 -->
            <a <?php echo 'href="/'.$titleLink.'"' ?> >
              <div class="twentyPage col s8 m7 l8">
                <div class="caseDiv twentyPage col-content z-depth-2 hoverable">
                    <!-- Background + Overlay -->
                    <div <?php echo 'style="'.$bkgImgSrc.'"';?> class="bkgImg">
                        <div class="whiteOverlay"></div>
                    </div>
                </div>
              </div>
            </a>
      <?php
            } // End of IF-5
            else if($count == 6) {
      ?>
            <!-- ITEM #2 -->
            <a <?php echo 'href="/'.$titleLink.'"' ?> >
              <div class="twentyPage col s4 m5 l4">
                <div class="caseDiv twentyPage col-content z-depth-2 hoverable ">
                    <!-- Background + Overlay -->
                    <div <?php echo 'style="'.$bkgImgSrc.'"';?> class="bkgImg">
                        <div class="webOrangeOverlay"></div>
                    </div>
                </div>
              </div>
            </a>

        </div>

        <?php
            } // End of IF-6
            addClosingTagIfUneven($count, );

            $count++;
            // Reset count if we're past our sixth element.
            if ($count > 6) { $count = 1;}

          } // End of foreach and display of HTML.
        ?>
    </div>

</body>

</html>
