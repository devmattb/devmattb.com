<!DOCTYPE html>
<html>

<head>
  <!-- Title SEO -->
  <title>devmattb - Home</title>
  <meta itemprop="name" content="devmattb - Home">
  <meta property="og:title" content="devmattb - Home">
  <meta name="twitter:title" content="devmattb - Home">

  <!-- Webpage Thumbnail pic SEO -->
  <meta itemprop="image" content="img/thumbnail_website.PNG">
  <meta property="og:image" content="img/thumbnail_website.PNG">
  <meta name="twitter:image" content="img/thumbnail_website.PNG">

  <!-- STANDARD HEADER -->
  <?php include("includes/header.html") ?>
  <?php include("php/errors.php") ?>

  <!-- STANDARD INIT -->
  <script src="js/init.js" type="text/javascript"></script>

  <!-- HOME SCRIPT -->
  <script src="js/home-scripts.js" type="text/javascript"></script>

</head>

<body>

  <?php include("includes/modals.php"); ?>
  <?php include("includes/nav-home.php"); ?>

  <!-- INTRO -->
  <div id="firstSection" class="fullPage">
    <div class="row">
        <div class="fullPage col s4 black">
            <!--div class="captionIcon center">
                <i class="textWebOrange hugeIcon fas fa-certificate"></i>
                <i id="checkVerified" class="white-text fas fa-check"></i>
            </div-->
        </div>
        <div id="frontPageBkgImg" class="fullPage col s8">
            <div class="caption textWebOrange">
                <h3 id="webExpert" class="white">Web Expert & </h3><br/>
                <h3 id="computerScientist" style="margin-top:-10px;" class="white"> Computer Scientist </h3>
            </div>
        </div>
    </div>
  </div>

  <!-- MY MISSION  -->
  <div>
    <div class="row">
        <div class="topHeader col s12 webOrange white-text fadeInOnView">

            <!-- LARGE/MED -->
            <div class="col m3 l4 hide-on-small-only">
                <img class="hideme laptop" src="img/laptop.png"/>
            </div>

            <!-- SMALL -->
            <div class="col s12 hide-on-med-and-up center">
                <img class="hideme laptop" src="img/laptop.png"/>
            </div>

            <div class="col s12 m9 l8 center">
                <h1 class="hide-on-med-and-down dragLeft">MY MISSION</h1>
                <h2 class="hide-on-large-only hide-on-small-only dragLeft">MY MISSION</h2>
                <h3 class="hide-on-med-and-up dragLeft">MY MISSION</h3>
            </div>
        </div>
        <div class="bottomHeader col s12 white">
            <div class="col s1 m1 l3">
            </div>
            <div class="hideme col s11 m11 l9 left">
                <h4 class="black-text">Create. Inspire. Document.</h4> <br/>
                <h1 style="margin-top: -5px; margin-left: -15px;" class="hugeIcon textWebOrange hide-on-med-and-down">Repeat.</h1>
                <h1 style="margin-top: -5px; margin-left: -5px;" class="bigIcon textWebOrange hide-on-large-only hide-on-small-only">Repeat.</h1>
                <h1 style="margin-top: -5px; margin-left: -2px;" class="mediumIcon textWebOrange  hide-on-med-and-up">Repeat.</h1>
            </div>
        </div>

        <!-- CTA BUTTON -->
        <div class="col s12 left webOrange headerFooter center white-text ">
            <h5 class="hideme">What can I do for you?</h5><br/><br/>
            <a href="/about">
              <button class="btn-large white textWebOrange waves-effect waves-light hideme">READ MORE</button>
            </a>
        </div>
    </div>
  </div>

  <!-- WHY I DO WHAT I DO -->
  <div class="row col s12 pageBreak left">

      <div class="container">
        <h3 class="hide-on-small-only dragLeft">MY JOURNEY</h3>
        <h4 class="hide-on-med-and-up dragLeft">MY JOURNEY</h4>
        <p style="margin-top: 5px;" class="flow-text hideme">
            I've always had this creative itch that needed scratching.<br/>
            I love to build things, and always have.
            <br/><br/>
            Whether it's an organization like mine,<br/>
            A website for a client,<br/>
            Or an app for public convenience,
            <br/><br/>
            I'm up for the challenge.
        </p>
      </div>
      <br/>
      <div class="col s12 center">
        <button class="disabled btn-large white-text webOrange waves-effect waves-light hideme">VIEW MY CASE</button>
      </div>
  </div>

  <!-- FOLLOW ME  -->
  <div class="fullPage">
    <div class="row">
        <div id="frontPageBkgImg2" class="eightyPage col s6"></div>
        <div class="eightyPage col s6 black center">

        <!-- LARGE -->
        <span style="font-size:12em!important; margin-top: 18vmin;" class="fa-stack fa-3x white-text hide-on-med-and-down hideme">
            <i class="fas fa-comment-alt fa-stack-2x"></i>
              <span class="fa fa-stack-1x textWebOrange">
                  <h1 style="margin-top:60px; display:block;">
                      <span style="font-size: 30px;">FOLLOW ME ON MY</span> <br/>
                      <span  style="font-size:60px; margin-left: -15px;" >JOURNEY</span>
                  </h1>
            </span>
        </span>

        <!-- MED -->
        <span style="font-size:8em!important; margin-top: 200px;" class="fa-stack fa-3x white-text hide-on-large-only hide-on-small-only hideme">
            <i class="fas fa-comment-alt fa-stack-2x"></i>
              <span class="fa fa-stack-1x textWebOrange">
                  <h1 style="margin-top:20px; display:block;">
                      <span style="font-size: 16px;">FOLLOW ME ON MY</span>
                      <span  style="font-size:40px; margin-left: -5px; position:relative; top: -35px;" >JOURNEY</span>
                  </h1>
            </span>
        </span>

        <!-- SMALL -->
        <span style="font-size:5em!important; margin-top: 170px;" class="fa-stack fa-3x white-text hide-on-med-and-up hideme">
            <i class="fas fa-comment-alt fa-stack-2x"></i>
              <span class="fa fa-stack-1x textWebOrange">
                  <h1 style="margin-top:-5px; display:block;">
                      <span style="font-size: 12px;">FOLLOW ME ON MY</span>
                      <span  style="font-size:25px; margin-left: -5px; position:relative; top: -50px;" >JOURNEY</span>
                  </h1>
            </span>
        </span>


        </div>

        <div id="followMeFooter" class="col s12 webOrange white-text center">
            <div class="hide-on-small-only dragLeft">
                <a href="http://bit.ly/2sEWznz" target="_blank" rel="nofollow">
                    <i class="white-text fab fa-instagram mediumIcon"></i>
                </a>
                <a href="http://bit.ly/2M8Cqyj" target="_blank" rel="nofollow">
                    <i class="white-text fab fa-facebook mediumIcon"></i>
                </a>
                <a href="http://bit.ly/2LPpoct" target="_blank" rel="nofollow">
                    <i class="white-text fab fa-youtube mediumIcon"></i>
                </a>
                <a href="http://bit.ly/2sKW8HD" target="_blank" rel="nofollow">
                    <i class="white-text fab fa-twitter mediumIcon"></i>
                </a>
            </div>
            <div class="hide-on-med-and-up dragLeft">
                <a href="http://bit.ly/2sEWznz" target="_blank" rel="nofollow">
                    <i class="white-text fab fa-instagram smallIcon"></i>
                </a>
                <a href="http://bit.ly/2M8Cqyj" target="_blank" rel="nofollow">
                    <i class="white-text fab fa-facebook smallIcon"></i>
                </a>
                <a href="http://bit.ly/2LPpoct" target="_blank" rel="nofollow">
                    <i class="white-text fab fa-youtube smallIcon"></i>
                </a>
                <a href="http://bit.ly/2sKW8HD" target="_blank" rel="nofollow">
                    <i class="white-text fab fa-twitter smallIcon"></i>
                </a>
            </div>
        </div>

    </div>
  </div>

  <!-- CONTACT -->
  <div class="fullPage">
    <div class="row">
        <div id="contactPage" class="col s12 left hideme">
            <h1 class="hide-on-med-and-down">
                Got Questions? <br/>
                <small style="position:relative; top: -10px;" class="grey-text text-darken-3 smallIcon">Feel free to fill in the contact form below.</small>
            </h1>

            <h3 class="hide-on-large-only hide-on-small-only">
                Got Questions? <br/>
                <small style="position:relative; top: -10px; font-size: 20px;" class="grey-text text-darken-3">Feel free to fill in the contact form below.</small>
            </h3>

            <h4 class="hide-on-med-and-up">
                Got Questions? <br/>
                <small style="position:relative; top: -10px; font-size: 16px;" class="grey-text text-darken-3">Feel free to fill in the contact form below.</small>
            </h4>

             <div class="row col s10 l8">
                <form class="col s12">

                  <div class="row">
                    <div class="input-field col s12 m10 l8">
                      <input placeholder="Eg. Mark Zuckerberg" id="fullName" type="text" class="validate">
                      <label for="fullName">Full Name</label>
                    </div>
                  </div>

                  <div class="row">
                    <div class="input-field col s12 m10 l8">
                      <input placeholder="Eg. zucks@facebook.com"  id="Email" type="email" class="validate">
                      <label for="Email">Email</label>
                    </div>
                  </div>

                  <div class="row">
                    <div class="input-field col s12 m10 l8">
                      <textarea id="msg" class="materialize-textarea"></textarea>
                      <label for="msg">Message</label>
                    </div>
                  </div>

                  <div class="row">
                    <div class="input-field col s12 l6">
                      <button class="btn-large webOrange">SEND!</button>
                    </div>
                  </div>


                </form>
              </div>

        </div>
    </div>
  </div>


</body>

</html>
