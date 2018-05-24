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
  <link rel="stylesheet" type="text/css" href="_css/styles.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
  <link rel="shortcut icon" type="image/x-icon" href="_images/favicon.ico">
  <style>
    .shopify-buy-frame--toggle.is-sticky {
      right:5px !important;
      top:78px !important;
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
      <?php include_once("header.php");?>
    </section>  
  <!--Section 2-->
    <section>
      <div class="container secondary">
        <!--Start Content-->
        <h1 class="pg-title">Our story</h1>
        <!--Group 1-->
          <div class="row">
            <div class="col-md-offset-2 col-md-4 col-sm-6 col-xs-12">
              <img class="about-img" src="_images/1.jpg" width="500">
              <small class="caption">
                Photo by Christine Chang of <a href="https://www.shopboyandgirl.com/" target="_blank">boy+girl</a>
              </small>
            </div>      
            <div class="col-md-4 col-sm-6 col-xs-12 ">      
              <img class="about-img" src="_images/2.jpg" width="500">
            </div>
          </div>
        <!--Group 2-->  
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 about">
             <h3>The Lev is a community bookstore focused on women and children with books for all. Created to build community and awareness of women and people of color writers. </h3>
           </div>
          </div>
        <!--Group 3-->  
          <div style="display:none; margin-bottom:27px; " class="wps-buy-button" id='product-component-fb7378d110f' data-id='1322567794773'>
          </div>
        <!--End Content-->
      </div>
    </section>
  <?php include_once("footer.php");?>
<script type="text/javascript"> 
    $(document).ready(function() {
      console.log('ready');
      ShopifyBuyInit();
    });
    </script>
</body>
</html>