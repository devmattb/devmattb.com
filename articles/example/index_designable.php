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

          <p>
              <a target="_blank" href="../../about/">
                  <img style="width: 55px; height:55px; border: 1px solid #000;" src="../../img/profilepic.jpg" class="circle hoverable"/>
              </a>

              <span style="position:relative; top:-20px; left: 5px;">
                  by
                  <b><a target="_blank" href="../../about/">
                    Matt Bergstrom
                  </a></b>
                  &nbsp;
                  <span style="font-size: 50px; position:relative; top:11px;">
                      &middot;
                  </span>
                  TIME-SINCE-PUBLISHED ago
                  &nbsp;
                  <span style="font-size: 50px; position:relative; top:11px;">
                      &middot;
                  </span>
                  X minute read
              </span>

          </p>

        </div>

        <!-- FIGURE -->
        <div class="col s12 center mediaContainer">
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

        <div class="col s12 center">
          <br><br>
          <h5 style="font-size: 20px;"> SHARE THIS ARTICLE: </h5>
          <!-- I got these buttons from simplesharebuttons.com -->
          <div id="share-buttons">

              <!-- Buffer -->
              <a href="https://bufferapp.com/add?url=http://devmattb.com&amp;text=A%20Must%20Read!&amp;" target="_blank">
                  <img src="https://simplesharebuttons.com/images/somacro/buffer.png" alt="Buffer" />
              </a>

              <!-- Digg -->
              <a href="http://www.digg.com/submit?url=http://devmattb.com" target="_blank">
                  <img src="https://simplesharebuttons.com/images/somacro/diggit.png" alt="Digg" />
              </a>

              <!-- Email -->
              <a href="mailto:?Subject=A%20Must%20Read!&amp;Body=I%20saw%20this%20and%20thought%20of%20you!%20 http://devmattb.com">
                  <img src="https://simplesharebuttons.com/images/somacro/email.png" alt="Email" />
              </a>

              <!-- Facebook -->
              <a href="http://www.facebook.com/sharer.php?u=http://devmattb.com" target="_blank">
                  <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
              </a>

              <!-- Google+ -->
              <a href="https://plus.google.com/share?url=http://devmattb.com" target="_blank">
                  <img src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" />
              </a>

              <!-- LinkedIn -->
              <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http://devmattb.com" target="_blank">
                  <img src="https://simplesharebuttons.com/images/somacro/linkedin.png" alt="LinkedIn" />
              </a>

              <!-- Pinterest -->
              <a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());">
                  <img src="https://simplesharebuttons.com/images/somacro/pinterest.png" alt="Pinterest" />
              </a>

              <!-- Reddit -->
              <a href="http://reddit.com/submit?url=http://devmattb.com&amp;title=A%20Must%20Read!&amp;" target="_blank">
                  <img src="https://simplesharebuttons.com/images/somacro/reddit.png" alt="Reddit" />
              </a>

              <!-- StumbleUpon-->
              <a href="http://www.stumbleupon.com/submit?url=http://devmattb.com&amp;title=A%20Must%20Read!&amp;" target="_blank">
                  <img src="https://simplesharebuttons.com/images/somacro/stumbleupon.png" alt="StumbleUpon" />
              </a>

              <!-- Tumblr-->
              <a href="http://www.tumblr.com/share/link?url=http://devmattb.com&amp;title=A%20Must%20Read!&amp;" target="_blank">
                  <img src="https://simplesharebuttons.com/images/somacro/tumblr.png" alt="Tumblr" />
              </a>

              <!-- Twitter -->
              <a href="https://twitter.com/share?url=http://devmattb.com&amp;text=A%20Must%20Read!&amp;hashtags=devmattb" target="_blank">
                  <img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
              </a>

              <!-- VK -->
              <a href="http://vkontakte.ru/share.php?url=http://devmattb.com" target="_blank">
                  <img src="https://simplesharebuttons.com/images/somacro/vk.png" alt="VK" />
              </a>

              <!-- Yummly -->
              <a href="http://www.yummly.com/urb/verify?url=http://devmattb.com&amp;title=A%20Must%20Read!&amp;" target="_blank">
                  <img src="https://simplesharebuttons.com/images/somacro/yummly.png" alt="Yummly" />
              </a>

          </div>
        </div>

        <div style="height: 275px;" class="col s12 center">
            <br><br>
            <h5>MUST READS:</h5>
            <br>
            <div class="col s11 m4 l4 center">
                <div class="col-content mustReads"></div>
            </div>
            <div class="col s11 m4 l4 center">
                <div class="col-content mustReads"></div>
            </div>
            <div class="col s11 m4 l4 center">
                <div class="col-content mustReads"></div>
            </div>
        </div>


        <!-- FOOTER (LARGE/MED): SOCIAL & BRAND -->
        <div class="col s12 center hide-on-small-only">
          <br><br><br><br>
          <p style="text-transform:uppercase; font-family: Raleway;"><b>Check out more content on other platforms</b></p>
          <!-- SOCIAL -->
          <div class="col s12 center socialIcons">
            <a style="font-size: 35px;" target="_blank" href="https://www.instagram.com/devmattb/"><i class="fab fa-instagram textWebOrange" aria-hidden="true"></i></a>

            <a style="font-size: 35px;" target="_blank" href="https://www.facebook.com/devmattb/"><i class="fab fa-facebook textWebOrange" aria-hidden="true"></i></a>

            <a style="font-size: 35px;" target="_blank" href="https://twitter.com/devmattb"><i class="fab fa-twitter textWebOrange" aria-hidden="true"></i></a>
          </div>

          <!-- BRAND -->
          <div class="col s12">
            <img style="width:70px; margin-left: -10px;" src="../../img/logo_v1.png">
          </div>
        </div>

        <!-- FOOTER (SMALL): SOCIAL & BRAND -->
        <div style="margin-top: 540px;" class="col s12 center hide-on-med-and-up">
          <br><br><br>
          <p style="text-transform:uppercase; font-family: Raleway;"><b>Check out more content on other platforms</b></p>
          <!-- SOCIAL -->
          <div class="col s12 center socialIcons">
            <a style="font-size: 35px;" target="_blank" href="https://www.instagram.com/devmattb/"><i class="fab fa-instagram textWebOrange" aria-hidden="true"></i></a>

            <a style="font-size: 35px;" target="_blank" href="https://www.facebook.com/devmattb/"><i class="fab fa-facebook textWebOrange" aria-hidden="true"></i></a>

            <a style="font-size: 35px;" target="_blank" href="https://twitter.com/devmattb"><i class="fab fa-twitter textWebOrange" aria-hidden="true"></i></a>
          </div>

          <!-- BRAND -->
          <div class="col s12">
            <img style="width:70px; margin-left: -10px;" src="../../img/logo_v1.png">
          </div>
        </div>

      </div>
    </div>
  </div>


</body>

</html>
