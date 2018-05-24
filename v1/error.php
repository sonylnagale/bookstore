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
  <link rel="preload" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" as="style">
  <link rel="preload" href="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" as="script">
  <link rel="preload" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" as="script">
  <link rel="stylesheet" type="text/css" href="_css/styles.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="_scripts/script.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="_images/favicon.ico">
</head

<body>
<button onclick="topFunction()" id="scrollTop" title="Go to top">&nbsp;^&nbsp;</button>
<section class="navbar navbar-default navbar-fixed-top">
<?php include_once("header.php");?>

</section>  
<section>
  <div class="container secondary" style="min-height: 400px;">
<!--Start Content-->
 <!--?php header( "Refresh:5; url=index.php", true, 303); ?>-->
 <p>It seems there was an error. You will be redirected in <span id="counter">5</span> second(s).</p>
<script type="text/javascript">
function countdown() {
    var i = document.getElementById('counter');
    if (parseInt(i.innerHTML)<=0) {
        location.href = 'index.php';
    }
    i.innerHTML = parseInt(i.innerHTML)-1;
    if (i.innerHTML <0) {
      i.innerHTML = 0;
    }
}
setInterval(function(){ countdown(); },1000);
</script>
<!--End Content-->
</div>
</section>
<?php include_once("footer.php");?>
</body>
</html>