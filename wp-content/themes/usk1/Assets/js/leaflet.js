//LEAFLET api mapa clima

	//GOOGLE MAPS
	var marker = null;
	var mymap = null;

	//DARKSKY SETTINGS
	var proxy    = 'https://cors-anywhere.herokuapp.com/';
	var site		 = "https://api.darksky.net/forecast/";
	var url_base = proxy + site;
	var key      = "e6af5b5feb891b272e18f5e2fc0370a6/";
	var queryParams = ['exclude=[minutely,hourly,daily,alerts,flags]','lang=es','units=auto']
	var coords = {
		re: '-32.9694345,-71.54037',
		vlp: '-33.0458456,-71.6196749',
		sa : '-33.5988405,-71.6079873'
	}

console.log(template_url);

	var icons = {
		'clear-night' : template_url + '/Assets/vendor/leaflet/img/clear-night.png',
		'partly-cloudy-night' : template_url + '/Assets/vendor/leaflet/img/cloudy-night.png',
		'clear-day' : template_url + '/Assets/vendor/leaflet/img/clear-day.png',
		'rain' : template_url + '/Assets/vendor/leaflet/img/rain.png',
		'snow' : template_url + '/Assets/vendor/leaflet/img/snowflake.png',
		'sleet' : template_url + '/Assets/vendor/leaflet/img/sleet.png',
		'wind' : template_url + '/Assets/vendor/leaflet/img/wind.png',
		'fog' : template_url + '/Assets/vendor/leaflet/img/fog.png',
		'cloudy' : template_url + '/Assets/vendor/leaflet/img/cloudy.png',
		'partly-cloudy-day' : template_url + '/Assets/vendor/leaflet/img/cloudy-day.png'
	}

	$(document).ready(function(){

    generarMapa();
		//Llamada ajax para cargar datos de ciudad de reñaca en primera carga de página
		ajaxCall(coords['re']);

		$(document).on('change','#select',function(){

			var selected = $(this).val();

			if(selected != ""){

				ajaxCall(coords[selected]);

			}

		});

	});

	//Función que realiza llamada a servidor de clima
	function ajaxCall(coords){

		$.ajax({
			url: url_base + key + coords + '?' + queryParams[0] + "&" + queryParams[1] + '&' + queryParams[2] ,
			method: 'GET',
			success:function(data){

				$('#resumen').text(parseInt(data.currently.temperature) + "º " + data.currently.summary).fadeIn('slow');
				$('#image').attr('src',icons[data.currently.icon]).fadeIn('slow');
				//Cambiamos marcador del mapa y lo centramos (Mandamos texto del select para asignarselo al marcador)
				changeMarkerPosition(coords);

			}

		});


	}

	//Función que inicializa mapa con marcador en Reñaca
	function generarMapa() {

      /*  mymap = L.map('map').setView([-32.9694345,-71.54037], 13);
		        var roadMutant = L.gridLayer.googleMutant({
					maxZoom: 24,
					type: 'roadmap'
				}).addTo(mymap);
				var satMutant = L.gridLayer.googleMutant({
					maxZoom: 24,
					type: 'satellite'
				});
				var terrainMutant = L.gridLayer.googleMutant({
					maxZoom: 24,
					type: 'terrain'
				});*/

				mymap = L.map('map').setView([-32.9694345,-71.54037], 13);

        L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox.streets',
        accessToken: 'pk.eyJ1IjoiZXVycXVldGEiLCJhIjoiY2pveWs1YTh2Mms0bzNrcGl1OWdremtpdiJ9.fxU81NktFjsaHLFxgN5WHA'
        }).addTo(mymap);

    //  var roadMutant = L.gridLayer.googleMutant({
		//	maxZoom: 24,
		//	type: 'roadmap',
		//	styles: [
		//		{ elementType: 'labels', stylers: [{ visibility: 'off' }] },
		//		{ featureType: 'road.highway', stylers: [{ color: 'black' }] }
		//	]
		// }).addTo(mymap);


				//Creamos nuevo marcador de mapa
				var marker = L.marker([-32.9694345,-71.54037]).addTo(mymap);

		    }

			//Función para generar un nuevo marcador
		    function changeMarkerPosition(coords) {

				//Separamos el string de coordenadas
		    var latitud = coords.split(",")[0];
				var longitud = coords.split(",")[1];

		        mymap.panTo(new L.LatLng(latitud, longitud));

				L.marker([latitud,longitud]).addTo(mymap);

    }
