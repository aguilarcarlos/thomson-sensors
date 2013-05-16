//Script para Ubicación de Google Maps
//Para inicializar las ubicaciones y así mostrar 
//la temperatura acuerdo al lugar...

// *Nota: Aun me hace falta implementar un AJAX
//para obtener los datos de la base de datos.

function initialize(){
	/*********************************** 
	*	Cargamos las latitudes 
	************************************/
	//Obtención de las latitudes de cada ubicación
	var ColimaLat = new google.maps.LatLng(19.245195, -103.707161);
	var ManzanilloLat = new google.maps.LatLng(19.118895,-104.338875);
	var CoquimatlanLat = new google.maps.LatLng(19.203457,-103.808012);
	var VillaDeAlvarezLat = new google.maps.LatLng(19.27161,-103.748703);

	/*********************************** 
	*	Cargador de Funcionalidades
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
	*	Ubicaciones
	************************************/
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
	})
	var VilladeAlvarez = new google.maps.Marker({
		position: VillaDeAlvarezLat,
		map: map,
		title: "Villa de Alvarez, Colima"
	});
	
	/*********************************** 
	*	Contenido para cada ubicación
	************************************/
	//Ubicación para Colima
	var colimaCont = '<strong>Historial Colima</strong>' +
		'<p><strong>Temperatura Actual:</strong>35.8 &deg;C</p>';
	var infoColima = new google.maps.InfoWindow({
		content: colimaCont
	});
	//Ubicación para Manzanillo
	var manzaCont = '<strong>Historial Manzanillo</strong>' + 
		'<p><strong>Temperatura Actual:</strong> 35.8 &deg;C</p>';
	var infoManzanillo = new google.maps.InfoWindow({
		content: manzaCont
	})
	//Ubicación para Coquimatlán
	var coquiCont = '<strong>Historial Coquimatl&aacute;n</strong>' + 
		'<p><strong>Temperatura Actual:</strong> 35.8 &deg;C</p>';
	var infoCoquimatlan = new google.maps.InfoWindow({
		content: coquiCont
	})
	var villaCont = '<strong>Historial Villa de &Aacute;lvarez</strong>' +
		'<p><strong>Temperatura Actual:</strong> 51.5 &deg;C</p>';
	var infoVilla = new google.maps.InfoWindow({
		content: villaCont
	})

	/*********************************** 
	*	Funciones para desplegar la info
	************************************/
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
	})
	google.maps.event.addListener(VilladeAlvarez,'click',function(){
		infoVilla.open(map,VilladeAlvarez);
	});
} 