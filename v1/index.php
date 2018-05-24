<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="The Lev | a community bookstore focused on women and children">
  <meta name="keywords" content="The Lev community bookstore focused on women and children Venice California">
  <meta name="author" content="Miriam Chan">
  <title>The Lev | a community bookstore focused on women and children</title>
  <link rel="preload" href="_css/styles.css" as="style">
  <!-- <link rel="preload" href="_css/shopify.css" as="style"> -->
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Lora" as="style">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Muli" as="style">
  <link rel="preload" href="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" as="script">
  <link rel="preload" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" as="style">
  <link rel="preload" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" as="script">
  <link rel="preload" href="https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js" as="script">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="_scripts/script.js"></script>  
  <script src="https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js"></script>
  <script src="_scripts/shopifybtn.js"></script>
  <script src="https://www.eventbrite.com/static/widgets/eb_widgets.js"></script>
  <script src="_scripts/eventbrite.js"></script>
  <link rel="stylesheet" type="text/css" href="_css/styles.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
  <link rel="shortcut icon" type="image/x-icon" href="_images/favicon.ico">
  <style> 
    button.shopify-buy__btn {
      width:80px;
    }
    button.shopify-buy__btn:hover, .join-eb-button:hover {
      background-color:#56622b !important; 
      color:#fff3e7 !important; 
      border: 1px solid #fff3e7 !important; 
  }
  .btn.btn-join {
    font-family: 'castledown-bold', 'Muli', sans-serif !important; 
    border: 1px solid #56622b !important; 
    font-weight: bold !important; 
    background-color: #fff3e7 !important; 
    color: #56622b !important; 
    padding:7px 12px;
    margin-right:10px;   
    margin-bottom: 3px;
    display: inline-block !important;
    float:none !important;
  }
  .btn.btn-join:hover {
    background-color:#56622b !important; 
    color:#fff3e7 !important; 
    border: 1px solid #fff3e7 !important; 
  }
    button.shopify-buy__btn, .join-eb-button { 
      font-family: 'castledown-bold', 'Muli', sans-serif !important; 
      border: 1px solid #56622b !important; 
      font-weight: bold !important; 
      background-color: #fff3e7 !important; 
      color: #56622b !important; 
      font-size: 14px !important; 
      border-radius: 0px!important; 
      display: inline-block;
      float: none;
      margin:20px 8px 10px 0px;
      padding: 7px 12px;
      }
    .shopify-buy-frame--product,
    .btn-group {
      display: inline-block !important;
      text-align: center;
    }
    .shopify-buy-frame--toggle.is-sticky {
      right:5px !important;
      top:88px !important;
    }
  </style>
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-111119780-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-111119780-1');
  </script>
  </head>
<body>
  <button onclick="topFunction()" id="scrollTop" title="Go to top">&nbsp;^&nbsp;</button>
  <!--Section 1-->
    <section class="navbar navbar-default navbar-fixed-top">
      <?php include_once("banner.php");?>
      <?php include_once("header.php");?>
    </section>  
  <!--Section 2-->
    <section>
      <!--Cover-->
        <div class="container-fluid" style="position:relative; top:85px; margin: 35px 0px 100px; min-height:455px;">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-sm-12 col-xs-12 override-col">
                <div class="cover">
                  <img class="logo-cover" src="_images/logo.png" width="60">
                  <h1>a community bookstore</h1><h2>focused on women &amp; children with books for all</h2>
                  <address><h2><a href="https://www.google.com/maps/place/The+Lev/@34.0017342,-118.4703231,17z/data=!3m1!4b1!4m5!3m4!1s0x80c2badcb276dcab:0xcc8985cec1d83535!8m2!3d34.0017342!4d-118.4681291?shorturl=1" target="_blank">214 Lincoln Blvd Venice, CA 90291</a></h2></address><p class="last"><em>Street parking available in front and parking spaces in rear. </em></p>
                </div>
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div id="container">
                  <img id="currentImage" src="_images/shop-1.jpg" width="500" >
                  <div id="buttons-wrapper">
                    <form>
                      <button style="display:inline;" type="button" id="prev" class="btn-small" disabled="true">&nbsp;<&nbsp;</button>
                      <button style="display:inline;" type="button" id="next" class="btn-small">&nbsp;>&nbsp;</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>   
        <div class="clearfix"></div>
      <!--Group 1-->  
        <div class="container-fluid" style="position:relative; background-color: #56622b;color: #fff3e7;">
          <div class="container">
            <div class="row"> 
              <div class="col-md-12 col-sm-12 col-xs-12 vert">
                <div style="text-align: center;">
                  <h1 style="color: #fff3e7; padding-bottom:10px;">About The Lev</h1>
                  <h3 style="color: #fff3e7; max-width: 880px; display: inline-block;">The Lev is a community bookstore founded to build a community around women and books, and to promote women and people of color writers. We do this through community events that include author talks, workshops, storytime & art hours, and bookclubs. Ultimately, our hope is that through human connection and reading empathy is born.
                  </h3>
                  <p style="margin-top:15px;"><a class="btn btn-primary" href="subscribe.php">Get connected</a><small><span style="border-right:1px solid #fff3e7; margin:25px 10px; "></span></small><a class="btn btn-primary" href="https://www.instagram.com/the.lev/" target="_blank">Follow us</a></p>
                  <div class="col-md-4 col-sm-4 col-xs-12" style="display: none;">                  
                      <div class="wps-buy-button" id='product-component-fb7378d110f' data-id='1322567794773'>
                        </div>  
                      </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <!--Group 2-->  
        <div class="container-fluid" style="position:relative;">
          <div class="container" style="padding: 50px 0px;">
            <div class="row"> 
              <div class="col-md-6 col-sm-12 col-xs-12 vert">
                <div class="outline">
                <img src="_images/events/180524-event.jpg" width="600" class="cover-img" style="width:100%;">
              </div>
              </div> 
              <div class="col-md-6 col-sm-12 col-xs-12 vert">
                <div class="outline-green">
                  <h1><a href="http://bravebirdpaperart.com/about/" target="_blank">Maude White: Brave Birds</a></h1>
                  <h3 style="margin-top:10px;">Meet the talented cut paper artist <span style="border-bottom: 2px solid #56622b; margin-bottom:2px;"><a href="http://bravebirdpaperart.com/about/" targe="_blank">Maude White</a></span><br/> and view her incredible work up close!</h3>
                  <h3 style="margin-top:10px;">Thursday, May 24<br/>7:30 - 9:00 PM</h3>
                  <!--Btn Group-->
                    <div class="btn-group" style="width:100%;"> 
                      <button class="join-eb-button" id="eventbrite-widget-modal-trigger-46097512902" data-id="46097512902" type="button">Join event</button>
                      <div class="wps-buy-button" id='product-component-90bccd9a13d' data-id='1335079338069'></div>  
                    </div>
                  <!--Btn Group End-->
                </div>
              </div>
            </div>
          </div>
        </div>
      <!--Group 3-->  
        <div class="container-fluid" style="position:relative; background-color: #56622b;color: #fff3e7;" >
          <div class="container" style="margin-top:30px; padding-top: 50px;">
            <div class="row"> 
              <div class="col-md-12 col-sm-12 col-xs-12" >
                <img src="_images/events/180531-aapi.jpg" class="cover-img" style="max-width:760px; display: block; margin-left:auto; margin-right: auto; padding:0px;">
                <small class="caption" style="max-width:760px; display: block; margin-left:auto; margin-right: auto; padding: 0px;">
                From the left: Photo by Ye Rin Mok, Fiona J. Taylor</a>
              </small>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12 vert">
                <div style="text-align: center;" >
                  <h1 style="color: #fff3e7; margin-bottom: 10px;">Celebrate Asian American & Pacific Islander Heritage Month with Cartoonists</h1><h1 style="color: #fff3e7; margin-bottom: 10px; text-transform: uppercase; font-size: 1.6em;">Thursday, May 31 | 7:30 PM - 9:00 PM</h1>
                  <h3 style="color: #fff3e7; max-width: 880px; display: inline-block;">Join The Lev in a conversation with cartoonists Jen Wang, MariNaomi, and Yumi Sakugawa!</h3>
                  <!--Btn Group-->
                  <div class="clearfix"></div>
                  <div class="btn-group">
              <button class="join-eb-button" id="eventbrite-widget-modal-trigger-46261067097" data-id="46261067097" type="button">Join event</button>
             <a class="btn btn-join" href="aapievent.php" target="_blank" >More info</a>
                      </div>
                  <!--Btn Group End-->
                </div>
              </div>
            </div>
          </div>
        </div><!--close container-fluid-->
      <!--Group 4-->
      <div class="container-fluid" style="position:relative;" >
  <div class="container" style="padding: 50px 0px; ">
  <div class="row"> 
    <div class="col-md-4 col-sm-12 col-xs-12">
      <div class="outline-green" style="margin:10px 0px; height:550px;">
        <img src="_images/events/180602-book-club-2.jpg" class="cover-img" style="padding:20px;">
        <h3 class="promo">THE LEV BOOK CLUB</h3>
        <h3>Clarice Lispector's <em>The Chandelier</em><br/>Saturday, June 2 at 11 am</h3>
        <p>Meet other women book lovers each month.</p>
        <div class="btn-group" style="width:100%;">
          <a class="btn btn-join" href="https://thelevsbookclubmay.splashthat.com/" target="_blank" >Join event</a>
          <div class="wps-buy-button" id='product-component-80b0ba79f45' data-id='1332098531413'></div>
          </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-12 col-xs-12">
      <div class="outline-green" style="margin:10px 0px; height:550px;">
        <img src="_images/art-story-time.jpg" width="600" class="cover-img" style="padding:20px;">
        <h3 class="promo">STORYTIME & ART HOUR</h3>
        <h3 style="line-height: 2.72em;">Sunday, June 3</h3>
        <p class="ev-btn">
          <button class="join-eb-button btn btn-primary" style="margin:0px !important; " id="eventbrite-widget-modal-trigger-46125517665" data-id="46125517665" type="button">Join event</button>
        </p>
      </div>
    </div>
    <div class="col-md-4 col-sm-12 col-xs-12">
      <div class="outline-green" style="margin:10px 0px; height:550px;">
        <img src="_images/short-story.jpg" width="600" class="cover-img" style="padding:20px;">
        <h3 class="promo">SHORT STORY MONTH PICKS</h3>
        <p>May is for short stories. <br/>Stay tuned for our favs!</p>
        <p style="margin-top:25px;"><a class="btn btn-primary" href="subscribe.php">Get connected</a></p>
      </div>
    </div>
  </div>
  </div>
  </div>
      <!--Group 5-->
        <!-- <div class="container-fluid" style="position:relative;">
          <p style="height:20px;"></p>
        </div> -->
      <!--End Content-->
    </section>
  <?php include_once("footer.php");?>
<script type="text/javascript"> 
  // Simple image gallery
  var images = ['_images/shop-1.jpg', '_images/shop-2.jpg', '_images/shop-3.jpg', '_images/shop-4.jpg','_images/cover.jpg'];
  var currentPosition = 0;
  $('#next').on('click', function() {
    currentPosition += 1;
    changeImage();
  $('#prev').prop('disabled', false);
    if (currentPosition === images.length - 1) {
      $('#next').prop('disabled', true);
    }
  });
  $('#prev').on('click', function() {
    currentPosition -= 1;
    changeImage();
  $('#next').prop('disabled', false);
    if (currentPosition === 0) {
      $('#prev').prop('disabled', true);
    }
  });
  function changeImage() {
   $('#currentImage').attr('src', images[currentPosition]);
  }
  $(document).ready(function() {
    console.log('ready');
    $('#bannerBtn').on('click', function(e) {
      $("#banner").toggle();
      $('#bannerBtn').css('display','none');
    });
    ShopifyBuyInit();
    eventbriteInit();
  });
  </script> 
</body>
</html>