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

  <title>Inicio | WThomson</title>
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
</head>

<body onLoad="startTimer();">

  <div id="container">
    <?php include 'includes/header.php'; ?>
    
    <?php include 'includes/menu.php'; ?>

    <!--<div id="gallery">
      <div class="slider-wrapper theme-default">
        <div id="slider" class="nivoSlider">
            <a href="index.php"><img src="gallery/1.jpg" data-thumb="gallery/imagine.jpg" data-transition="slideInLeft" alt="Imagine" title="To create something great, you need imagine..." /></a>
            <img src="gallery/2.jpg" data-thumb="gallery/logo.jpg" data-transition="slideInRight" alt="" title="W Thomson is a good idea..." />
            <img src="gallery/3.jpg" data-thumb="gallery/st.jpg" data-transition="slideInLeft" alt="Std" title="Statics on real time..." />
         </div>
      </div>
    </div>-->
    <div id="main" role="main">
      <section id="articles">
        <h2>Bienvenido a WThomson &reg;</h2>
        <hr />
        <article>

          <h4>¿Qué es WThomson&reg;?</h4>
          <p>
            WThomson&reg; está desarrollado para monitorear 
            temperaturas y luminosidad, esto mediante dos sensores que se encuentran 
            interconectados a un microcontrolador que se encarga de transformar la 
            información análoga a pulsos digitales para ser enviados mediante pulsos 
            digitales hacia un decodificador y después hacia una base de datos en 
            <a class="link" href="index.php" title="WThomosn ®">nuestro sitio oficial</a>. WThomson nace como 
            una idea creativa para tener a nuestros clientes 
            informados respecto las condiciones climáticas para el uso adecuado de 
            técnicas que permitan evitar pérdidas en su productividad. No debemos dejar 
            de lado la parte amigable de este sitio web, donde ponemos a su disposición 
            las <a class="link" href="graphs.php" title="Graphs">gráficas</a> y 
            <a class="link" href="measuring.php" title="Measuring">tablas</a> 
            correspondientes que necesitas conocer respecto a 
            las condiciones climáticas del municipio.
          </p>
          <h3>¿Cómo funciona WThomson&reg;?</h3>
          <p>
            La medición  y la ubicación de donde se encuentra el dispositivo es visualizada 
            a través de un display y es transmitida en código morse  por frecuencia modulada 
            (FM) para registrar las mediciones y mostrarlas en tiempo real, y generar un historial
             con gráficas en la página web oficial.
          </p>
        </article>
        <!--<article>   
            <?php //include 'includes/lecturas.php'; ?>
        </article>--> 
      </section>
    </div>
    
    <?php include 'includes/footer.php'; ?>

  </div> <!--! end of #container -->

  <?php include 'includes/callsfooter.php'; ?>


  
</body>
</html>