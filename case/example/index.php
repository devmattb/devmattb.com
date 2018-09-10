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

  ?>

</head>

<body>

  <?php include("../../includes/nav.php"); ?>
    
  <!-- Case Title Container -->
  <div id="firstSection" class="fullPage white">
    <div class="row">
        
        <!-- Background + Overlay -->
        <div style="background:url(../../img/lookaway.jpg);" class="fullPage col s12 m12 l6 bkgImg">
        </div>
        
        <div class="fullPage col s12 m12 l6 white">
            <div class="row">
                <div class="col s12 center caseTitle">
                    <br/>
                    <h1>
                        <?php echo $pageTitle ?> <br/>
                        <hr>
                    </h1>
                </div>

                <!-- Breadtext -->
                <div class="col s10 offset-s1 flow-text caseBreadText">
                    <p> <?php echo $introTxt ?> </p>
                </div>
            </div>
        </div>
        
    </div>
  </div>
    
  <!-- Fun fact/ Quick Quote -->
  <div class="fourtyFivePage black white-text">
    <div class="row">
        <div class="col s12 center caseTitle">
            <br/>
            <h1>
                <?php echo $midTitle ?> <br/>
                <hr>
            </h1>
        </div>
        
        <!-- Fact -->
        <div class="col s8 offset-s2 flow-text caseBreadText">
            <p> <?php echo $midTxt ?> </p>
        </div>
    </div>
  </div>
    
    
  <!-- Case Breadtext Container -->
  <div class="fullPage black">
    <div class="row">
        

        <div class="fullPage col 12 m12 l6 white">
            <div class="row">
                <div class="col s12 center caseTitle">
                    <br/>
                    <h1>
                        <?php echo $outroTitle ?> <br/>
                        <hr>
                    </h1>
                </div>

                <!-- Breadtext -->
                <div class="col s10 offset-s1 flow-text caseBreadText">
                    <p> <?php echo $outroTxt ?> </p>
                </div>
            </div>
        </div>
        
        <!-- Background + Overlay -->
        <div style="background:url(../../img/lookaway.jpg);" class="fullPage col 12 m12 l6 bkgImg">
            
        </div>
        

    </div>
  </div>
    
  <!-- Case Conclusion Container -->
  <div class="sixtyFivePage webOrange white-text">
    <div class="row">
        <div class="col s12 center caseTitle">
            <br/>
            <h1>
                Summary <br/>
                <hr>
            </h1>
        </div>
        
        <!-- Conclusion -->
        <div class="col s8 offset-s2 flow-text caseBreadText">
            <p> <?php echo $summaryTxt ?> </p>
        </div>
    </div>
  </div>



</body>

</html>
