<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  
    Document Title
    =============================================
    -->
    <title>Branding Assets 1</title>
    <!--  
    Stylesheets
    =============================================
    
    -->
    <!-- Default stylesheets-->
    <link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="assets/lib/animate.css/animate.css" rel="stylesheet">
    <link href="assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/lib/et-line-font/et-line-font.css" rel="stylesheet">
    <link href="assets/lib/flexslider/flexslider.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="assets/lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
    <link href="assets/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet">
    <!-- Main stylesheet and color file-->
    <link href="assets/css/style.css" rel="stylesheet">
    <link id="color-scheme" href="assets/css/colors/default.css" rel="stylesheet">
    <style>
      input[type=radio] {
    width: 30px;
    height: 30px;
}
</style>
  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <section class="home-section home-full-height bg-dark bg-gradient" id="home" data-background="assets/images/home/egld1.jpg">
        <div class="titan-caption">
          <div class="caption-content">
            <div class="font-alt mb-30 titan-title-size-3">Hello &amp; welcome</div>
             <div class="font-alt mb-40 titan-title-size-2">Pick the right types of branding Color and Logo for your Company</div>
             <div class="font-alt mb-30 titan-title-size-2">ኢግልድ ኢንዱስትሪ ግብዓቶች ልማት ድርጅት <br> EGELD INDUSTRY INPUTS DEVELOPMENT ENTERPRISE</div>
           <a href="first.php"> <button class="btn btn-g btn-round" id="subscription-form-submit">ምርጫ 1</button></a>
           <a href="second.php"> <button class="btn btn-g btn-round" id="subscription-form-submit">ምርጫ 2</button></a>
          </div>
        </div>
      </section>
      <form method="POST" action="Admin/vote.php">
          <section>
              <center>
            <div class="row">
            <br/><br/>
            <h2 class="module-title font-alt">Color Choice</h2>
                <div class="col-sm-6">
                <div><img src="assets/images/2/purple.PNG" alt="Portfolio Item"/></div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="color" id="flexRadioDefault1" value="1"
                    required>
                    <label class="form-check-label" for="flexRadioDefault1">
                    <h4><b>&nbsp;&nbsp;&nbsp; Purple | Color of Wealth</b></h4>
                    </label>
                </div>

                </div>
                
                <div class="col-sm-6">
                <div><img src="assets/images/2/blue.PNG" alt="Portfolio Item"/></div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="color" id="flexRadioDefault2" value="2" required>
                <label class="form-check-label" for="flexRadioDefault2">
                <h4><b>&nbsp;&nbsp;&nbsp; Blue | Responsibility and trust</b></h4>
                </label>
                </div>
                </div>
            </div>
              </center>
            </section>
            <section>
              <center>
            <div class="row">
            <br/><br/>
            <h2 class="module-title font-alt">Logo Choice</h2>
                <div class="col-sm-4">
                <div><img src="assets/images/2/logoChoice.PNG" alt="Portfolio Item"/></div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="logo" id="flexRadioDefault1" value="3" required>
                    <label class="form-check-label" for="flexRadioDefault1">
                    <h4><b>&nbsp;&nbsp;&nbsp; Outer motion Export | Import</b></h4>
                    </label>
                </div>

                </div>
                
                <div class="col-sm-4">
                <div><img src="assets/images/2/logoChoice2.PNG" alt="Portfolio Item"/></div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="logo" id="flexRadioDefault2" value="4" required>
                <label class="form-check-label" for="flexRadioDefault2">
                <h4><b>&nbsp;&nbsp;&nbsp; Rise of the industry</b></h4>
                </label>
                </div>
                </div>

                <div class="col-sm-4">
                <div><img src="assets/images/2/logoChoice3.PNG" alt="Portfolio Item"/></div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="logo" id="flexRadioDefault2" value="5" required>
                <label class="form-check-label" for="flexRadioDefault2">
                <h4><b>&nbsp;&nbsp;&nbsp; Multi color:- many industries</b></h4>
                </label>
                </div>
                </div>
            </div>
              </center>
              
              <button class="btn btn-block btn-round btn-d" id="cfsubmit" type="submit" name="submit">Submit</button>
        </form>
          <br/><br/><br/>
        </section>
    <!--  
    JavaScripts
    =============================================
    -->
    <script src="assets/lib/jquery/dist/jquery.js"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/lib/wow/dist/wow.js"></script>
    <script src="assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
    <script src="assets/lib/isotope/dist/isotope.pkgd.js"></script>
    <script src="assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
    <script src="assets/lib/flexslider/jquery.flexslider.js"></script>
    <script src="assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="assets/lib/smoothscroll.js"></script>
    <script src="assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script src="assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
<?php
if(ISSET($_POST['submit']))
{
    ?><script>alert('Your Choice is Successfully Submitted.');</script><?php
}
?>