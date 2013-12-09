<?php 
  session_start();
  if(isset($_SESSION['user']) != 'demo'){
    header("Location: login.php");
  }
?>
<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/b/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  
  <title>Mapa con Google Maps | WThomson</title>
  <meta name="description" content="" />
  <meta name="author" content="" />

  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width,initial-scale=1" />

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <!-- CSS: implied media=all -->
  <!-- CSS concatenated and minified via ant build script-->
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" type="text/css" href="js/mylibs/default/default.css">
  <link rel="stylesheet" type="text/css" href="js/mylibs/nivo-slider.css">
  <!-- end CSS-->
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,100' rel='stylesheet' type='text/css'>
  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except for Modernizr / Respond.
       Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries
       For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
  <script src="js/libs/modernizr-2.6.2.min.js"></script>

  <!--[if lt IE 9]>
      <script src="http://HTML5shim.googlecode.com/svn/trunk/HTML5.js">
      </script>
    <![endif]-->

    <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true&region=GB"></script>
    
    </script>    
</head>

<body onLoad="startTimer(); initialize()">

  <div id="container">

    <?php include 'includes/header.php'; ?>

    <?php include 'includes/menu.php'; ?>

    <span id="api"></span>
    
    <div id="map" role="main">
      <div id="map_canvas" style="width:100%; height:100%"></div>
    </div>
    
    <footer id="footer">
      <section>
        <article>
          <h3>About Us</h3>
          <p>
            We are an enterprise of weather monitoring, we have created a system to show you the  weather through radio-frequency, this system 
            works automatic way to offer a good service in real time, we are happy that you are using this system, if you want know more about 
            this idea, call us...
          </p>
        </article>
        <article>
            <h3>University of Colima</h3>
            <p>
              The University of Colima as a social organism, and autonomous public's mission:
            <p/>
            <p> 
              To contribute to the transformation of society 
              through comprehensive training of graduates, professionals, scientists and artists of excellence, and strong boost for the creation, 
              implementation, the preservation and dissemination of scientific knowledge, technological development and demonstrations of 
              art and culture, within an institutional framework of transparency and timely accountability.
            </p>
        </article>
        <article>
            <h3>Follow Us</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </article>
        <article>
            <h3>What's the project?</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor.
            </p>
        </article>
        <p id="copyright">
          Website developed by WThomson &copy; 2012. All rights reserved. University of Colima.
        </p>
      </section>
    </footer>
  </div> <!--! end of #container -->
  <?php 
    include 'includes/API.php';
    include 'includes/callsfooter.php'; 
  ?>
  
</body>
</html>