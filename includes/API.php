<? include 'includes/temperaturas.php'; ?>
<!-- JavaScript at the bottom for fast page loading -->
  <script type="text/javascript">
      //Script para Ubicación de Google Maps
      //Para inicializar las ubicaciones y así mostrar 
      //la temperatura acuerdo al lugar...

      // *Nota: Aun me hace falta implementar un AJAX
      //para obtener los datos de la base de datos.

      function initialize(){
        /*********************************** 
        * Cargamos las latitudes
        ************************************/
        //Obtención de las latitudes de cada ubicación
        var TecomanLat        = new google.maps.LatLng(18.914132,-103.876421);
        var ColimaLat         = new google.maps.LatLng(19.245195, -103.707161);
        var ManzanilloLat     = new google.maps.LatLng(19.118895,-104.338875);
        var CoquimatlanLat    = new google.maps.LatLng(19.203457,-103.808012);
        var VillaDeAlvarezLat = new google.maps.LatLng(19.27161,-103.748703);
        var IxtlahuacanLat    = new google.maps.LatLng(19.001061,-103.736325);
        var CuahutemocLat     = new google.maps.LatLng(19.329611,-103.603529);
        var MinatitlanLat     = new google.maps.LatLng(19.388562,-104.050535);
        var ArmeriaLat        = new google.maps.LatLng(18.937708,-103.964996);     
        var ComalaLat         = new google.maps.LatLng(19.325399,-103.760427);       

        /*********************************** 
        * Cargador de Funcionalidades
        ************************************/
        //Cargamos la opciones de control en el google maps
        var myOptions = {
          zoom: 10,
          center: ColimaLat,
          mapTypeId: google.maps.MapTypeId.ROADMAP
          };
        //Cargamos el mapa en el id llamado map_canvas
        var map = new google.maps.Map(document.getElementById("map_canvas"),
          myOptions);

        /*********************************** 
        * Ubicaciones
        ************************************/
        //Tecomán
        var tecoman = new google.maps.Marker({
          position: TecomanLat,
          map: map,
          title: "Tecomán, Colima"
        });
        //Colima
        var colima = new google.maps.Marker({
          position: ColimaLat,
          map: map,
          title:"Colima, Colima"
        });
        //Manzanillo
        var manzanillo = new google.maps.Marker({
          position: ManzanilloLat,
          map: map,
          title: "Manzanillo, Colima"
        });
        //Coquimatlán
        var coquimatlan = new google.maps.Marker({
          position: CoquimatlanLat,
          map: map,
          title: "Coquimatlán, Colima"
        });
        //Villa de Alvarez
        var VilladeAlvarez = new google.maps.Marker({
          position: VillaDeAlvarezLat,
          map: map,
          title: "Villa de Alvarez, Colima"
        });
        //Ixtlahuacán
        var ixtlahuacan = new google.maps.Marker({
          position: IxtlahuacanLat,
          map: map,
          title: "Ixtlahuacán, Colima"
        });
        //Cuahutémoc
        var cuahutemoc = new google.maps.Marker({
          position: CuahutemocLat,
          map: map,
          title: "Cuahutémoc, Colima"
        });
        //Minatitlán
        var minatitlan = new google.maps.Marker({
          position: MinatitlanLat,
          map: map,
          title: "Minatitlán, Colima"
        });
        //Armería
        var armeria = new google.maps.Marker({
          position: ArmeriaLat,
          map: map,
          title: "Armería, Colima"
        });
        //Comala
        var comala = new google.maps.Marker({
          position: ComalaLat,
          map: map,
          title: "Comala, Colima"
        });
         
        /*********************************** 
        * Contenido para cada ubicación
        ************************************/
        //Ubicación para Armería
        var armeriaCont = '<strong>Historial Armer&iacute;a</strong>' +
          '<p><strong>Temperatura Actual:</strong> ' + '<span class="temp">' + <?php print_r($num[1]); ?> + ' &deg;C</p>' + '</span>';
        var infoArmeria = new google.maps.InfoWindow({
          content: armeriaCont
        });
        //Ubicación para Colima
        var colimaCont = '<strong>Historial Colima</strong>' +
          '<p><strong>Temperatura Actual:</strong> ' + '<span class="temp">' + <?php print_r($num[2]); ?> + ' &deg;C</p>' + '</span>';
        var infoColima = new google.maps.InfoWindow({
          content: colimaCont
        });
        //Ubicación para Armería
        var comalaCont = '<strong>Historial Comala</strong>' +
          '<p><strong>Temperatura Actual:</strong> ' + '<span class="temp">' + <?php print_r($num[3]); ?> + ' &deg;C</p>' + '</span>';
        var infoComala = new google.maps.InfoWindow({
          content: comalaCont
        });
        //Ubicación para Coquimatlán
        var coquiCont = '<strong>Historial Coquimatl&aacute;n</strong>' + 
          '<p><strong>Temperatura Actual:</strong> ' + '<span class="temp">' + <?php print_r($num[4]); ?> + ' &deg;C</p>' + '</span>';
        var infoCoquimatlan = new google.maps.InfoWindow({
          content: coquiCont
        });
        //Ubicación para Cuahutémoc
        var cuahutemocCont = '<strong>Historial Cuahut&eacute;moc</strong>' +
          '<p><strong>Temperatura Actual:</strong> ' + '<span class="temp">' + <?php print_r($num[5]); ?> + ' &deg;C</p>' + '</span>';
        var infoCuahutemoc = new google.maps.InfoWindow({
          content: cuahutemocCont
        });
        //Ubicación para Ixtlahuacán
        var ixtlaCont = '<strong>Historial Ixtlahuac&aacute;n</strong>' +
          '<p><strong>Temperatura Actual:</strong> ' + '<span class="temp">' + <?php print_r($num[6]); ?> + ' &deg;C</p>' + '</span>';
        var infoIxtlahuacan = new google.maps.InfoWindow({
          content: ixtlaCont
        });
        //Ubicación para Manzanillo
        var manzaCont = '<strong>Historial Manzanillo</strong>' + 
          '<p><strong>Temperatura Actual:</strong> ' + '<span class="temp">' + <?php print_r($num[7]); ?> + ' &deg;C</p>' + '</span>';
        var infoManzanillo = new google.maps.InfoWindow({
          content: manzaCont
        });
        //Ubicación para Minatitlán
        var minatitlanCont = '<strong>Historial Minatitl&aacute;n</strong>' +
          '<p><strong>Temperatura Actual:</strong> ' + '<span class="temp">' + <?php print_r($num[8]); ?> + ' &deg;C</p>' + '</span>';
        var infoMinatitlan = new google.maps.InfoWindow({
          content: minatitlanCont
        });
        //Ubicación para Tecomán
        var tecomanCont = '<strong>Historial Tecomán</strong>' +
          '<p><strong>Temperatura Actual:</strong> ' + '<span class="temp">' + <?php print_r($num[9]); ?> + ' &deg;C</p>' + '</span>';
        var infoTecoman = new google.maps.InfoWindow({
          content: tecomanCont
        });
        //Ubicación para Villa de Alvarez
        var villaCont = '<strong>Historial Villa de &Aacute;lvarez</strong>' +
          '<p><strong>Temperatura Actual:</strong> ' + '<span class="temp">' + <?php print_r($num[10]); ?> + ' &deg;C</p>' + '</span>';
        var infoVilla = new google.maps.InfoWindow({
          content: villaCont
        });

        /*********************************** 
        * Funciones para desplegar la info
        ************************************/
        //Mostrar infoTecomán
        google.maps.event.addListener(tecoman,'click',function(){
          infoTecoman.open(map,tecoman);
        });
        //Mostrar infoColima
        google.maps.event.addListener(colima,'click',function(){
          infoColima.open(map,colima);
        });
        //Mostrar infoManzanillo
        google.maps.event.addListener(manzanillo,'click',function(){
          infoManzanillo.open(map,manzanillo);
        });
        //Mostrar infoCoquimatlan
        google.maps.event.addListener(coquimatlan,'click',function(){
          infoCoquimatlan.open(map,coquimatlan);
        });
        //Mostrar infoVilladeAlvarez
        google.maps.event.addListener(VilladeAlvarez,'click',function(){
          infoVilla.open(map,VilladeAlvarez);
        });
        //Mostrar infoIxtlahuacan
        google.maps.event.addListener(ixtlahuacan,'click',function(){
          infoIxtlahuacan.open(map,ixtlahuacan);
        });
        //Mostrar infoCuahutemoc
        google.maps.event.addListener(cuahutemoc,'click',function(){
          infoCuahutemoc.open(map,cuahutemoc);
        });
        //Mostrar infoMinatitlan
        google.maps.event.addListener(minatitlan,'click',function(){
          infoMinatitlan.open(map,minatitlan);
        });
        //Mostrar infoArmeria
        google.maps.event.addListener(armeria,'click',function(){
          infoArmeria.open(map,armeria);
        });
        //Mostrar infoComala
        google.maps.event.addListener(comala,'click',function(){
          infoComala.open(map,comala);
        });
      } 
  </script>