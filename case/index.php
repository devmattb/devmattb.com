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

    <?php include("../includes/nav.php"); ?>
    
    <div class="row">
        
        <!-- ROW-TYPE 1 -->
        <div class="row col s12">
            
            <!-- ITEM #1 -->
            <div class="fourtyFivePage col s5 m3 l2">
                <div class="caseDiv fourtyFivePage col-content z-depth-2 hoverable">
                    <!-- Background + Overlay -->
                    <div style="background:url(../img/lookaway.jpg);" class="bkgImg">
                        <div class="webOrangeOverlay"></div>
                    </div>
                </div>
            </div>
            
            <!-- ITEM #2 -->
            <div class="fourtyFivePage col s7 m9 l10 ">
                <div class="caseDiv fourtyFivePage col-content z-depth-2 hoverable">
                    <!-- Background + Overlay -->
                    <div style="background:url(../img/lookaway.jpg);" class="bkgImg">
                        <div class="lightWebOrangeOverlay"></div>
                    </div>
                </div>
            </div>
        
        </div>

        <!-- ROW-TYPE 2 -->
        <div class="row col s12">
            
            <!-- ITEM #1 -->
            <div class="thirtyFivePage col s6">
                <div class="caseDiv thirtyFivePage col-content z-depth-2 hoverable blackOverlay">
                    <!-- Background + Overlay -->
                    <div style="background:url(../img/lookaway.jpg);" class="bkgImg">
                        <div class="blackOverlay"></div>
                    </div>
                    
                </div>
            </div>
            
            <!-- ITEM #2 -->
            <div class="thirtyFivePage col s6">
                <div class="caseDiv thirtyFivePage col-content z-depth-2 hoverable ">
                    <!-- Background + Overlay -->
                    <div style="background:url(../img/lookaway.jpg);" class="bkgImg">
                        <div class="superLightWebOrangeOverlay"></div>
                    </div>
                    
                </div>
            </div>
        
        </div>


        <!-- ROW-TYPE 3 -->
        <div class="row col s12">
            
            <!-- ITEM #1 -->
            <div class="twentyPage col s8 m7 l8">
                <div class="caseDiv twentyPage col-content z-depth-2 hoverable">
                    <!-- Background + Overlay -->
                    <div style="background:url(../img/lookaway.jpg);" class="bkgImg">
                        <div class="whiteOverlay"></div>
                    </div>
                </div>
            </div>
            
            <!-- ITEM #2 -->
            <div class="twentyPage col s4 m5 l4">
                <div class="caseDiv twentyPage col-content z-depth-2 hoverable ">
                    <!-- Background + Overlay -->
                    <div style="background:url(../img/lookaway.jpg);" class="bkgImg">
                        <div class="webOrangeOverlay"></div>
                    </div>
                </div>
            </div>
        
        </div>

    </div>

</body>

</html>
