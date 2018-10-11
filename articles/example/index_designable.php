<!DOCTYPE html>
<html>

<head>

  <!-- PHP Lib -->
  <?php include("../../php/functions.php"); ?>

  <!-- Title SEO TODO DYNAMIC -->
  <title>devmattb - Home</title>
  <meta itemprop="name" content="devmattb - Home">
  <meta property="og:title" content="devmattb - Home">
  <meta name="twitter:title" content="devmattb - Home">

  <!-- Webpage Thumbnail pic SEO -->
  <meta itemprop="image" content="img/thumbnail_website.PNG">
  <meta property="og:image" content="img/thumbnail_website.PNG">
  <meta name="twitter:image" content="img/thumbnail_website.PNG">

  <!-- STANDARD HEADER -->
  <?php include("../../includes/header.html") ?>
  <?php include("../../php/errors.php") ?>

  <!-- STANDARD INIT -->
  <script src="../../js/init.js" type="text/javascript"></script>
  <script type="text/javascript">
    $(document).ready(function(){
        $("#caseNavItem").css("border-bottom", "2px solid #F93822");
    });
  </script>

  <?php
    /*
    $db = getDB();
    $query = "SELECT * FROM case WHERE id=".getSecureData($_GET["id"]);
    $data = getContents($db, $query);
    // Get all necessary data...
    foreach($data as $row) {
        $pageTitle = $row["pageTitle"];
        $introTxt = $row["introTxt"];
        $midTitle = $row["midTitle"];
        $midTxt = $row["midTxt"];
        $outroTitle = $row["outroTitle"];
        $outroTxt = $row["outroTxt"];
        $summaryTxt = $row["summaryTxt"];
    }
    */
  ?>

</head>

<body>

  <?php include("../../includes/nav.php"); ?>

  <!-- Article Title Container -->
  <div id="firstSection" class="fullPage white">
    <div class="row">
      <div class="container">

        <!-- TITLE & HOOK -->
        <div class="col s12 center articleTitles">
          <h3>TITLE</h3><br>
          <h5>
            Building on the legacy of the assassinated Rio councilwoman Marielle Franco, a new wave of local candidates is fighting to transform the country’s democracy.
          </h5>
        </div>

        <!-- FIGURE -->
        <div class="col s12 center mediaContainer">
          <br>
          <!-- 1920x900 pictures preffered -->
          <img style="width:82vmin;" src="https://fjmtstudio.com/wp-content/uploads/2018/08/TIME9726_85-Harrington_E03_Precinct-1920x900.jpg">
          <p> Small figure text saying something powerful about the picture</p>
        </div>

        <!-- BREAD TEXT 2.2, 2.8, 3.8 [vmin] -->
        <div class="col s12 breadText">
          <p>
            HTML TEXT!
            Lorem ipsum dolor sit amet3 consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            <br><br>
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            <br><br>
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>

        <!-- LINKED VIDEO -->
        <div class="col s12 center mediaContainer">
          <br>
          <!-- 1920x900 pictures preffered -->
          <div class="video-container">
            <iframe width="853" height="480" src="https://www.youtube.com/embed/2uOOiHUvoQw" frameborder="0" allowfullscreen></iframe>
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
