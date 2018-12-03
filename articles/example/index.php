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
      $thisArticleId = $row["id"];
      $title = $row["title"];
      $subtitle = $row["subtitle"];
      $figureSrc = $row["figureSrc"];
      $figureText = $row["figureText"];
      $breadText = $row["breadText"];
      $vidSrc = $row["vidSrc"];
      $createdAt = $row["createdAt"];
      $numWords = str_word_count(strip_tags($breadText));
      $minuteRead = ceil($numWords/200);
      $titleDirLink = str_replace(" ", "-", $title);
    }

    // Get 3 latest articles:
    $articleQuery = "SELECT * FROM article WHERE id <> ".$thisArticleId." ORDER BY createdAt DESC LIMIT 3";
    $moreArticles = getContents($db, $articleQuery);
  ?>

  <?php
  function time_elapsed_string($datetime, $full = false) {
      $now = new DateTime;
      $ago = new DateTime($datetime);
      $diff = $now->diff($ago);

      $diff->w = floor($diff->d / 7);
      $diff->d -= $diff->w * 7;

      $string = array(
          'y' => 'year',
          'm' => 'month',
          'w' => 'week',
          'd' => 'day',
          'h' => 'hour',
          'i' => 'minute',
          's' => 'second',
      );
      foreach ($string as $k => &$v) {
          if ($diff->$k) {
              $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
          } else {
              unset($string[$k]);
          }
      }

      if (!$full) $string = array_slice($string, 0, 1);
      return $string ? implode(', ', $string) . ' ago' : 'just now';
  }

  // Create an easier-to-read date string:
  $humanTime = time_elapsed_string($createdAt);
  ?>

  <?php $title = ucwords($title); $subtitle = ucwords($subtitle); ?>

  <!-- Title SEO DYNAMIC -->
  <title><?php echo $title." | ".$subtitle ?></title>
  <meta itemprop="name" content="<?php echo $title." | ".$subtitle ?>">
  <meta property="og:title" content="<?php echo $title." | ".$subtitle ?>">
  <meta name="twitter:title" content="<?php echo $title." | ".$subtitle ?>">

  <!-- Webpage Thumbnail pic SEO -->
  <meta itemprop="image" content="<?php echo 'http://devmattb.com/'.substr($figureSrc, 3) ?>">
  <meta property="og:image" content="<?php echo 'http://devmattb.com/'.substr($figureSrc, 3) ?>">
  <meta name="twitter:image" content="<?php echo 'http://devmattb.com/'.substr($figureSrc, 3) ?>">

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
    $keywords = ucwords( $keywords );
  ?>
  <meta name="keywords" content="<?php echo $keywords ?>"/>

  <!-- Google+ / Schema.org -->
  <meta itemprop="description" content="<?php echo $title." | ".$subtitle ?>">
  <link href="https://plus.google.com/u/0/113043733443648554208" rel="publisher">

  <!-- Open Graph Facebook -->
  <meta property="og:description" content="<?php echo $title." | ".$subtitle ?>"/>
  <meta property="og:url" content="<?php echo 'http://devmattb.com/articles/'.$titleDirLink.'/'?>">
  <meta property="og:site_name" content="devmattb"/>
  <meta property="og:type" content="website">

  <!-- Twitter -->
  <meta name="twitter:description" content="<?php echo $title." | ".$subtitle ?>">
  <meta name="twitter:url" content="<?php echo 'http://devmattb.com/articles/'.$titleDirLink.'/'?>">
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
                  <br class="hide-on-med-and-up">
                  <span class="hide-on-med-and-up" style="font-size: 50px; position:relative; top:10px;">
                      &middot;
                  </span>
                  <?php echo $humanTime ?>
                  &nbsp;
                  <span class="hide-on-med-and-up" style="font-size: 50px; position:relative; top:10px;">
                      &middot;
                  </span>
                  <?php echo $minuteRead ?> minute read
              </span>

          </p>

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

        <div class="col s12 center">
          <br><br>
          <h5 style="font-size: 20px;"> SHARE THIS ARTICLE: </h5>
          <!-- I got these buttons from simplesharebuttons.com -->
          <div id="share-buttons">

              <!-- Buffer -->
              <a href="<?php echo 'https://bufferapp.com/add?url=http://devmattb.com/articles/'.$titleDirLink.'/&amp;text=A%20Must%20Read!&amp;'?>" target="_blank">
                  <img src="https://simplesharebuttons.com/images/somacro/buffer.png" alt="Buffer" />
              </a>

              <!-- Digg -->
              <a href="<?php echo 'http://www.digg.com/submit?url=http://devmattb.com/articles/'.$titleDirLink.'/'?>" target="_blank">
                  <img src="https://simplesharebuttons.com/images/somacro/diggit.png" alt="Digg" />
              </a>

              <!-- Email -->
              <a href="<?php echo 'mailto:?Subject=A%20Must%20Read!&amp;Body=I%20saw%20this%20and%20thought%20of%20you!%20 http://devmattb.com/articles/'.$titleDirLink.'/'?>">
                  <img src="https://simplesharebuttons.com/images/somacro/email.png" alt="Email" />
              </a>

              <!-- Facebook -->
              <a href="<?php echo 'http://www.facebook.com/sharer.php?u=http://devmattb.com/articles/'.$titleDirLink.'/'?>" target="_blank">
                  <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
              </a>

              <!-- Google+ -->
              <a href="<?php echo 'https://plus.google.com/share?url=http://devmattb.com/articles/'.$titleDirLink.'/'?>" target="_blank">
                  <img src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" />
              </a>

              <!-- LinkedIn -->
              <a href="<?php echo 'http://www.linkedin.com/shareArticle?mini=true&amp;url=http://devmattb.com/articles/'.$titleDirLink.'/'?>" target="_blank">
                  <img src="https://simplesharebuttons.com/images/somacro/linkedin.png" alt="LinkedIn" />
              </a>

              <!-- Pinterest -->
              <a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());">
                  <img src="https://simplesharebuttons.com/images/somacro/pinterest.png" alt="Pinterest" />
              </a>

              <!-- Reddit -->
              <a href="<?php echo 'http://reddit.com/submit?url=http://devmattb.com/articles/'.$titleDirLink.'/&amp;title=A%20Must%20Read!&amp;'?>" target="_blank">
                  <img src="https://simplesharebuttons.com/images/somacro/reddit.png" alt="Reddit" />
              </a>

              <!-- StumbleUpon-->
              <a href="<?php echo 'http://www.stumbleupon.com/submit?url=http://devmattb.com/articles/'.$titleDirLink.'/&amp;title=A%20Must%20Read!&amp;'?>" target="_blank">
                  <img src="https://simplesharebuttons.com/images/somacro/stumbleupon.png" alt="StumbleUpon" />
              </a>

              <!-- Tumblr-->
              <a href="<?php echo 'http://www.tumblr.com/share/link?url=http://devmattb.com/articles/'.$titleDirLink.'/&amp;title=A%20Must%20Read!&amp;'?>" target="_blank">
                  <img src="https://simplesharebuttons.com/images/somacro/tumblr.png" alt="Tumblr" />
              </a>

              <!-- Twitter -->
              <a href="<?php echo 'https://twitter.com/share?url=http://devmattb.com/articles/'.$titleDirLink.'/&amp;text=A%20Must%20Read!&amp;hashtags=devmattb'?>" target="_blank">
                  <img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
              </a>

              <!-- VK -->
              <a href="<?php echo 'http://vkontakte.ru/share.php?url=http://devmattb.com/articles/'.$titleDirLink.'/'?>" target="_blank">
                  <img src="https://simplesharebuttons.com/images/somacro/vk.png" alt="VK" />
              </a>

              <!-- Yummly -->
              <a href="<?php echo 'http://www.yummly.com/urb/verify?url=http://devmattb.com/articles/'.$titleDirLink.'/&amp;title=A%20Must%20Read!&amp;'?>" target="_blank">
                  <img src="https://simplesharebuttons.com/images/somacro/yummly.png" alt="Yummly" />
              </a>

          </div>
        </div>

        <div style="height: 275px;" class="col s12 center">
            <br><br>
            <h5>MUST READS:</h5>
            <br>

            <?php



              $articleCount = 1;
              foreach($moreArticles as $article) {
                $titleArticle = $article["title"];
                $titleLinkArticle = str_replace(" ", "-", $titleArticle);

                echo '
                <style>

                  #article'.$articleCount.' {
                      background-image: url("../'.$article["figureSrc"].'");
                      background-size: cover;
                      background-position: center;
                      background-repeat: no-repeat;
                  }

                </style>

                  <div class="col s11 m4 l4 center">
                      <a target="_blank" href="../'.$titleLinkArticle.'">
                        <div id="article'.$articleCount.'" class="col-content mustReads tooltipped" data-tooltip="'.ucwords($titleArticle).'"></div>
                      </a>
                  </div>
                ';

                // Only display three latest articles. (Safeguard)
                $articleCount++;
                if($articleCount >= 4) {
                  break;
                }
              }
            ?>
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
