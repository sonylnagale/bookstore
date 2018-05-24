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
        <h1 class="pg-title">Brands</h1> 
        <!--Group 1--> 
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 brands">
              <img src="_images/brands/cover.jpg" width="500" class="brand-img">
              <small>
                Retablo Apothecary candles<br/>
                7115 by Szeki project books<br/>
                Yield 850 mL French Press
              </small>
            </div>
          </div>   
        <!--Group 2-->  
          <div class="row"> 
            <div class="col-md-12 col-sm-12 col-xs-12 brands">
              <h3>Beyond books, we also carry items from our favorite brands.</h3>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <ul class="brands">
                <li><a href="https://7115newyork.com/pages/7115-paper-goods" target="_blank">7115 by Szeki</a></li>
                <li><a href="https://allswellcreative.com/" target="_blank">Allswell Creative</a></li>
                <li><a href="http://www.baserange.net/" target="_blank">Baserange</a></li>
                <li><a href="https://www.bossladies.us/" target="_blank">Bossladies Magazine</a></li>
                <li><a href="https://flores-lane.myshopify.com/" target="_blank">Flores Lane</a></li>
                <li><a href="https://thefullest.com/" target="_blank">The Fullest Magazine</a></li>
                <li><a href="http://www.glumagazine.com/" target="_blank">Girls Like Us Magazine</a></li>
                <li><a href="https://www.ironcurtainpress.com/" target="_blank">Iron Curtain Press</a></li>
                <li><a href="http://www.mrmerz.com/" target="_blank">Mr. Merz</a></li>
                <li><a href="https://www.retabloapothecary.com/" target="_blank">Retablo Apothecary</a></li>
                <li><a href="https://www.shreebscoffee.com/" target="_blank">Shreebs Coffee</a></li>
                <li><a href="https://www.smalladventureshop.com/" target="_blank">Small Adventure</a></li>
                <li><a href="https://thegreatlakesgoods.com/" target="_blank">The Great Lakes Goods</a></li>
                <li><a href="https://yielddesign.co/" target="_blank">Yield</a></li>
              </ul>
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