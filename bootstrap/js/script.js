
    var options = {
  enableHighAccuracy: true,
  timeout: 6000,
  maximumAge: 0
};

navigator.geolocation.getCurrentPosition( success, error, options );
datos=[]  ;
function success(position) {

	var currentTime = new Date()
					var month = currentTime.getMonth() + 1
					var day = currentTime.getDate()
					var year = currentTime.getFullYear()
					var hours = currentTime.getHours()
					var minutes = currentTime.getMinutes()
					var tiempo;
					 if (minutes < 10){
					minutes = "0" + minutes
					}
					tiempo = "";
					if(hours > 11){
					tiempo = "PM";
					} else {
					tiempo = "AM";
					}
					var fecha = (month + "/" + day + "/" + year + " "+ hours + ":" + minutes + " " + tiempo)
					
					


  var coordenadas = position.coords;
var r = [];
  //alert('Latitud : ' + coordenadas.latitude);
  //alert('Longitud: ' + coordenadas.longitude);
  //alert('Más o menos ' + coordenadas.accuracy + ' metros.');
  latitud  = position.coords.latitude;
  longitud  = position.coords.longitude;
  metros = position.coords.accuracy;
 la= document.getElementById('latitud');
 la.value= latitud; 
 lo= document.getElementById('longitud');
 lo.value= longitud; 
 

};





function error(error) {
  console.warn('ERROR(' + error.code + '): ' + error.message);
};
