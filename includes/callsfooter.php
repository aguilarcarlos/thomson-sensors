

  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.8.3.min.js"><\/script>')</script>

  <?php 
    $URL = explode('/', $_SERVER["REQUEST_URI"]); 
    
    if($URL[2] == "maps.php"){?>
  <script type="text/javascript">
    var refresh = setInterval(function (){
        $('.temp').fadeOut('fast').load('API.php').fadeIn("fast");
      }, 2000);
  </script>

    <?}else{?>
  <script type="text/javascript">
    var refresh = setInterval(function (){
        $('#temp').fadeOut('fast').load('includes/side.php').fadeIn("fast");
      }, 2000);
  </script>
  <?php }?>

  <script type="text/javascript">
  var timerID = null;          //Identidad del temporizador
  var timerRunning = true;    //Flag para saber si el reloj esta activo

  function stopTimer()
  {        //Para el reloj       
    if(timerRunning) 
      {                
        clearTimeout(timerID);
        timerRunning = false;
      }
  } 

  function startTimer()
    {     // Para el reloj, si esta activo y lo arranca.    
      //stopTimer();
      runClock();
    }

  function runClock()
    {        
      var Hora=timeNow();   // Solo para evitar hacer varias llamadas
      var Dia=fechahoy();
      // Mostrar la hora en los elementos que se desee
      window.document.getElementById("reloj").innerHTML= Hora;
      window.document.getElementById("fecha").innerHTML= Dia;
      window.status=Dia + " " + Hora;
      //window.document.title=Dia + " " + Hora; //Si no hay frames
      //top.document.title=Dia + " " + Hora;      //Por si hay frames
      timerID = setTimeout("runClock()",1000);  //setTimeout() se llama a si mismo.
      timerRunning = true;
    }

  function timeNow() 
    {        //Toma la hora y la formatea        
      now = new Date();
      hours = now.getHours();
      minutes = now.getMinutes();
      seconds = now.getSeconds();
      timeStr = ((hours > 12) ? "0" : "") + (hours - 12);
      timeStr = ((hours < 10) ? "0" : "") + hours;
      timeStr += ((minutes < 10) ? ":0" : ":") + minutes;
      timeStr += ((seconds < 10) ? ":0" : ":") + seconds;
      if(hours > 12){
        timeStr += " p.m.";
      }else{
        timeStr += " a.m.";
      }
      return timeStr;
    }

  function fechahoy()
    {
      var diasemana = new Array ('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
      var nombremes = new Array ('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 
                    'October', 'November', 'December');
      var ahora;
      var fecha = new Date();
      var mes = fecha.getMonth(); 
      var dia = fecha.getDay();
      var num = fecha.getDate();
      var ano=fecha.getFullYear();
      ahora = diasemana[dia] + ", " + nombremes[mes] + " " + num + ", " + ano;
      return ahora;
    }
  </script>
  <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider({
          controlNav: false
        });
    });
  </script>

  <!-- scripts concatenated and minified via ant build script-->
  <script defer src="js/plugins.js"></script>
  <script defer src="js/script.js"></script>
  <script defer src="js/mylibs/jquery.nivo.slider.js"></script>
  <!-- end scripts-->

	
  <!-- Change UA-XXXXX-X to be your site's ID -->
  <script>
    window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
  </script>


  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->