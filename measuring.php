<?php
  include 'includes/conexion.php';
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

  <?php
    if(!empty($_GET["id"]) && $_GET["id"] <= 10){
      $query  = "SELECT * FROM municipios WHERE ID_MU=" . $_GET["id"];
      $result = mysqli_query($link, $query);
      $row    = mysqli_fetch_array($result, MYSQLI_ASSOC);?>
      
      <title>Mediciones del Municipio de <?php echo utf8_encode($row["MUNICIPIO_MU"]); ?></title>
    <?php }else{?>
      <title>Mediciones | WThomson</title>
  <?php } ?>
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

    <div id="main" role="main">
      <section id="articles">
        
      <?php

        if((!empty($_GET["id"]) && $_GET["id"] <= 10) && (!empty($_GET["municipio"]))){
          $query  = "SELECT * FROM municipios WHERE ID_MU=" . $_GET["id"];
          $result = mysqli_query($link, $query);
          $row   = mysqli_fetch_array($result, MYSQLI_ASSOC);?>
          
          <h2>Tabla de Mediciones de <?php  echo utf8_encode($row['MUNICIPIO_MU']);?></h2>
          <hr />
          <article>
            <p>
              <?php  print utf8_encode($row["ACERCA_MU"]);?>
            </p>  
            <p>
              <a class="link" href="maps.php" title="Ver sobre el mapa">Ver en el Mapa...</a>
            </p>
            <h2>Historial de monitoreo del municipio de <?php  echo utf8_encode($row['MUNICIPIO_MU']);?></h2>
            <p>

              <?php 
                $id = $_GET["id"];
                $query  = "SELECT FECHA_ME,TEMP_ME,LUM_ME,MUNICIPIO_MU FROM mediciones INNER JOIN municipios ON MUN_ME=ID_MU WHERE MUN_ME=$id ORDER by ID_ME DESC";
                $result = mysqli_query($link, $query);
              ?>
              <table id="tables">
                <thead>
                  <th>Fecha y Hora</th>
                  <th>Temperatura</th>
                  <th>Luminosidad</th>
                  <th>Acciones</th>
                </thead>
                <tbody>
                <?php  
                $i = 0;
                while($rows = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                  
                  if(($i % 2) == 0){?>
                  <tr>
                    <td><?php  echo $rows['FECHA_ME'];?></td>
                    <td><?php  echo $rows['TEMP_ME'];?> &deg;C</td>
                    <td><?php  echo $rows['LUM_ME'];?> &#37;</td>
                    <td><?php  echo utf8_encode($rows['MUNICIPIO_MU']);?></td>
                  </tr>
                  <?php } else {?>
                  <tr class="blue">
                    <td><?php  echo $rows['FECHA_ME'];?></td>
                    <td><?php  echo $rows['TEMP_ME'];?> &deg;C</td>
                    <td><?php  echo $rows['LUM_ME'];?> &#37;</td>
                    <td><?php  echo utf8_encode($rows['MUNICIPIO_MU']);?></td>
                  </tr>
                  <?php }
                  $i++;
                }
                  mysqli_free_result($result);
                  mysqli_close($link);
                ?>
                </tbody>
              </table>
            </p>
          </article>
        
        <?php }else{?>

          <h2>Tabla de Registros</h2>
          <hr />
          <article>
            <p>
              Hola usuario DEMO, la captura de las temperaturas es procesada y presentada de manera
              legible en tablas. Si deseas cerrar sesión de clic aquí. <a href="index.php" title="Logout"> Salir
            </a>
            </p>
            <p>
              <a class="link" href="maps.php" title="Ver sobre el mapa">Ver en el Mapa...</a>
            </p>
            <h2>Historial de Monitoreo</h2>
            <p>
              <?php 
                $query = "SELECT FECHA_ME,TEMP_ME,LUM_ME,MUNICIPIO_MU FROM mediciones INNER JOIN municipios ON MUN_ME=ID_MU ORDER by ID_ME DESC";
                $result = mysqli_query($link, $query);
              ?>

              <table id="tables">
                <thead>
                  <th>Fecha y Hora</th>
                  <th>Temperatura</th>
                  <th>Luminosidad</th>
                  <th>Acciones</th>
                </thead>
                <tbody>
                <?php  
                $i = 0;
                while($rows = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                  if(($i % 2) == 0){?>
                  <tr>
                    <td><?php  echo $rows['FECHA_ME'];?></td>
                    <td><?php  echo $rows['TEMP_ME'];?> &deg;C</td>
                    <td><?php  echo $rows['LUM_ME'];?> &#37;</td>
                    <td><?php  echo utf8_encode($rows['MUNICIPIO_MU']);?></td>
                  </tr>
                  <?php } else {?>
                  <tr class="blue">
                    <td><?php  echo $rows['FECHA_ME'];?></td>
                    <td><?php  echo $rows['TEMP_ME'];?> &deg;C</td>
                    <td><?php  echo $rows['LUM_ME'];?> &#37;</td>
                    <td><?php  echo utf8_encode($rows['MUNICIPIO_MU']);?></td>
                  </tr>
                  <?php }
                  $i++;
                }
                  mysqli_free_result($result);
                  mysqli_close($link);
                ?>
                </tbody>
              </table>
            </p>
          </article>           
        <?php }?>

      </section>
    </div>
    
    <?php include 'includes/footer.php'; ?>

  </div> <!--! end of #container -->
  
  <?php include 'includes/callsfooter.php'; ?>
  
</body>
</html>