<?php include 'includes/conexion.php'; ?>
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

  <title>Gráficas | WThomson</title>
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
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,800' rel='stylesheet' type='text/css' />
  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
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

    <div class="lineRed"></div>
    
    <?php include 'includes/menu.php'; ?>

    <div id="main" role="main">
      <section id="articles graph">
        <h2>Historial en Gráficas de Colima</h2>
        <hr />
        <article>
          <div id="chart_div" style="width: 100%; height: 500px;"></div>
        </article>
      </section>
    </div>
    
    <?php 
      include 'includes/footer.php'; 
    ?>

  </div> <!--! end of #container -->

  <?php
    include 'includes/class/class_String.php';
    $st = new StringsChars();
    $municpio;
    $temperatura;
    $k = 1;
    $h = 0;

    for($i = 1; $i <= 10; $i++){
      $query = "SELECT ID_ME,TEMP_ME,FECHA_ME,MUNICIPIO_MU FROM mediciones INNER JOIN municipios ON MUN_ME=ID_MU WHERE MUN_ME=$i";
      $result = mysqli_query($link,$query);
      
      for($j = 0; $j < ($rows = mysqli_fetch_array($result, MYSQLI_ASSOC)); $j++){
        $trama = $st->setStringToSplit('-',$rows['FECHA_ME']); 
        $dia = $st->setStringToSplit(' ',$trama[2]);
        
        $municpio[$i][$j] = utf8_encode($rows['MUNICIPIO_MU']);
        $temperatura[$i][$j] = $rows['TEMP_ME'];

        //echo utf8_encode($rows['MUNICIPIO_MU']) . "<br />";
        //echo "[" . $dia[0] . "/" . $trama[1] . "]" . " " . "[" . $rows['TEMP_ME'] . "]";
      }
    }

    mysqli_free_result($result); 
    mysqli_close($link);
  ?>

  <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Month' <? for ($i=1; $i <= 10 ; $i++) { echo ", '" . $municpio[$i][0] . "'";}?>], 
    
    <?for ($i=1; $i <= 4 ; $i++) {?>
          ['<? echo $i?>/Dic/12'  <?    
          for ($j = 0; $j < 10 ; $j++) { 
            echo ", " . $temperatura[$k][$i-1]; 
            $k++;
          }?>],

    <? $k = 1; 
      }?>
          ['5/Dic/12' , 35.55, 37.55, 32.52, 31.42, 20.51, 34.15, 34.25, 28.14, 29.15, 31.45]
        ]);

        var options = {
          title: 'Temperatura (Celsius)'
        };

        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  <?php include 'includes/callsfooter.php'; ?>
  
</body>
</html>