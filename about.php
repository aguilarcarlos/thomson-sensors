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

  <title>Acerca de | WThomson</title>
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
        <h2>Acerca de nuestra empresa &reg;</h2>
        <hr />
        <article>
          <p>
            En WThomson® nos encargamos de estar siempre a la vanguardia, y por tal 
            motivo actualizamos nuestros productos a las tecnologías más recientes, 
            además de que estamos en condición de dar soporte personalizado las 24 horas. 
            Para nosotros es indispensable que nuestro clientes esté satisfecho con nuestros 
            sistemas por lo cual tenemos a un equipo de ingenieros especializados para resolver 
            cualquier situación.
          </p>
          <h3>Visión</h3>
          <p>
            Grupo de vanguardia, de excelencia profesional y alta vocación de servicio con 
            modernos sistemas de medición, análisis y telemática que proporciona información 
            eficiente, oportuna y confiable a  nuestros clientes, buscamos impulsar el talento 
            de nuestros profesionistas para la innovación de proyectos, estamos comprometidos 
            a satisfacer las necesidades de nuestros clientes.  
          </p>
          <h3>Misión</h3>
          <p>
            Ser la empresa más exitosa implementando la tecnología  con el objetivo de incrementar 
            la competitividad y productividad en el mercado resolviendo problemas y ofreciendo a 
            nuestros clientes calidad y soporte técnico. Observar, registrar, interpretar y difundir 
            información del clima, de interés privado y estratégico para nuestros clientes.
          </p>
          <h3>Valores</h3>
          <p>
            <strong>Honestidad:</strong><br /> Actuamos con rectitud e integridad, manteniendo un trato equitativo con todos nuestros semejantes.<br />
            <strong>Lealtad:</strong><br /> Formamos parte de la "Familia WTHOMSON", conduciéndonos de acuerdo a los valores y objetivo empresarial de la Organización.<br />
            <strong>Respeto:</strong><br /> Guardamos en todo momento la debida consideración a la dignidad humana y a su entorno.<br />
            <strong>Responsabilidad:</strong><br /> Cumplimos nuestro deber, haciendo nuestras las políticas y disposiciones de la Empresa.<br />
            <strong>Confianza:</strong><br /> Nos desempeñamos con exactitud, puntualidad, y fidelidad para fortalecer nuestro ambiente laboral.<br />
            <strong>Justicia:</strong><br /> Hacia nuestro personal en tanto en el trato como en la asignación de actividades a realizar, dependiendo éstas de la capacidad de cada uno de ellos.<br />
            <strong>Liderazgo:</strong><br /> Desarrollar la capacidad y habilidad para llevar a cabo las estrategias organizacionales.<br />
            <strong>Integridad:</strong><br /> Hacer lo que es correcto.<br />
            <strong>Innovación:</strong><br /> Generar ideas creativas y reales que contribuya a las mejoras de la empresa.<br />
            <strong>Eficiencia:</strong><br /> Hacer las cosas bien siempre, eliminando la burocracia.<br />
            <strong>Trabajo en equipo:</strong><br /> Cooperación eficiente del factor humano para el logro de los objetivos comunes.<br />
            <strong>Calidad:</strong><br /> Mantener los estándares de calidad de clase mundial requeridos en la industria.<br />
            <strong>Servicio al cliente con valor agregado:</strong><br /> Exceder en todo momento las expectativas de nuestros clientes, logrando su lealtad.<br />
            <strong>Rentabilidad:</strong><br /> Obtener el valor económico agregado y los ahorros necesarios para lograr la permanencia exitosa en el mercado.<br />
          </p>
        </article>
        <!-- <article>   
            <?phpphp //include 'includes/lecturas.php'; ?>
        </article> -->
      </section>
    </div>
    
    <?php include 'includes/footer.php'; ?>

  </div> <!--! end of #container -->

  <?php include 'includes/callsfooter.php'; ?>
  
</body>
</html>