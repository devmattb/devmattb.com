<!DOCTYPE html>
<html>

<head>
  <!-- Title SEO -->
  <title>devmattb - About</title>
  <meta itemprop="name" content="devmattb - About">
  <meta property="og:title" content="devmattb - About">
  <meta name="twitter:title" content="devmattb - About">

  <!-- Webpage Thumbnail pic SEO TODOOOO-->
  <meta itemprop="image" content="../img/thumbnail_website_about.PNG">
  <meta property="og:image" content="../img/thumbnail_website_about.PNG">
  <meta name="twitter:image" content="../img/thumbnail_website_about.PNG">

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
        $("#aboutNavItem").css("border-bottom", "2px solid #F93822");

        /**
        *   LOAD IN ANIMATION
        **/
        window.setTimeout(function(){$(".fadeInFirst").fadeIn(600);}, 200);

        window.setTimeout(function(){$(".fadeInSecond").fadeIn(600);}, 500);
    });
  </script>

</head>

<body>

  <?php include("../includes/nav.php"); ?>

  <!-- INTRO -->
  <div id="aboutFirstSection" class="fullPage">
    <div class="row" style="margin-bottom: 0px!important;">

        <!-- LARGE/MEDIUM -->
        <div class="fullPage aboutOrangeDiv col l4 m5 webOrange hide-on-small-only">
            <div class="center" style="display: table-cell; vertical-align: middle;">
                <i class="fadeInFirst fas fa-globe white-text"></i>
            </div>
        </div>
        <div id="aboutTextContainer" class="fullPage col l8 s7 white hide-on-small-only">
            <h3 class="fadeInFirst textWebOrange hide-on-med-and-down">
                DIGITALIZING COMPANIES.
                <br/>
                ONE KEYSTROKE AT A TIME.
            </h3>

            <h4 class="fadeInFirst textWebOrange hide-on-large-only">
                DIGITALIZING COMPANIES.
                <br/>
                ONE KEYSTROKE AT A TIME.
            </h4>

            <br/>

             <div class="flow-text fadeInSecond" >

                 <div style="margin-top: 20px;">
                     I believe that every company can improve their digital presence.
                 </div><br/>
                 <div>
                     In today’s era it’s all about getting "sticky", and claiming your digital space on the internet.
                 </div><br/>

                <div>
                    When you do that, you secure traffic to your organization.
                 </div><br/>
                <div>
                    Because I have 7 years of web experience, I know how to get "sticky".
                </div><br/>

                <div>
                    With my website design and development experience, together with SEO, social media and link structure competence, I can help you claim your digital space on the web.
                </div>

            </div>
        </div>


        <!-- SMALL ONLY -->
        <div class="aboutOrangeDiv col s12 webOrange hide-on-med-and-up">
            <div class="center" style="display: table-cell; vertical-align: middle;">
                <i class="fadeInFirst fas fa-globe white-text"></i>
            </div>
        </div>
        <div id="aboutTextContainer" class="col l8 s7 white hide-on-med-and-up">

            <h4 class="fadeInFirst textWebOrange hide-on-large-only">
                DIGITALIZING COMPANIES.
                <br/>
                ONE KEYSTROKE AT A TIME.
            </h4>

            <br/>
             <div  class="flow-text fadeInSecond" style="font-size: 3.5vmin;">

                 <div style="margin-top: 20px;">
                     I believe that every company can improve their digital presence.
                 </div><br/>
                 <div>
                     In today’s era it’s all about getting "sticky", and claiming your digital space on the internet.
                 </div><br/>

                <div>
                    When you do that, you secure traffic to your organization.
                 </div><br/>
                <div>
                    Because I have 7 years of web experience, I know how to get "sticky".
                </div><br/>

                <div>
                    With my website design and development experience, together with SEO, social media and link structure competence, I can help you claim your digital space on the web.
                </div>

            </div>
        </div>

    </div>
  </div>


</body>

</html>
