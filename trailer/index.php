<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Torrey Pines: A stop-motion feature film by Clyde Petersen | CONTACT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/media-queries.css">
    <link rel="stylesheet" type="text/css" href="/css/tp.css">
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <meta property="og:image" content="/img/touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/img/touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/img/touch-icon-114x114.png">
    <style>
      #video-container {
        /*width: 50vw;
        height: 40vh;*/
        margin: 0px auto;
      }
    </style>
</head>
<body>
<?php include_once("../_includes/analyticstracking.php") ?>
<!-- Static top navbar -->

<? include('../_includes/navbar-top.php'); ?>

<div class="container">

  <div class="row">
    <div class="col-12 text-center" style="position: relative; z-index: 1000;">
      <div id="video-container">
        <iframe src="https://player.vimeo.com/video/177164898" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
      </div>
    </div>
  </div>

</div> <!-- /container -->

<!-- Static bottom navbar -->
<? include('../_includes/navbar-bottom.php'); ?>
<!-- PAGE BACKGROUND -->

<div id="bg" class="lazy">
  <img data-original="/img/bg-screenings.jpg" class="lazy">
</div>


<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="/js/jquery.lazyload.min.js"></script>
<script>
$(function() {
  $("img.lazy").lazyload({
    effect : "fadeIn"
  });
});
</script>
</body>
</html>
