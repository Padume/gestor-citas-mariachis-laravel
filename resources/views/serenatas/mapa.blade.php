@extends('layouts.admin') 
@section('content')
   
   <script src="http://maps.google.com/maps/api/js?sensor=false"> </script>

    <div class="row" style="padding:10px" > 
      <div class="col-lg-12">

         <div class="panel panel-default">

            <div class="panel-heading">
                 Mapa de Serenatas
            </div>

            <div class="panel-body">
                <div class="row">

                    <div id="mapa" style="width=500px; height:500px"></div>

                </div>
            </div>

        </div>
      </div>
    </div>

    <script type="text/javascript">

    var mapaMostrar = document.getElementById('mapa');
    var ciudadTulua = new google.maps.LatLng(4.0832463,-76.1950596);
    var geocoder = new google.maps.Geocoder();

    function init()
    {

      // Opciones del Mapa
      var opcionesMapa =
      {
        center: ciudadTulua,
        zoom: 14,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      };

      mapaMostrar = new google.maps.Map(document.getElementById("mapa"),opcionesMapa);

      // Crear For
      obtenerCoordenadas("CRA 25 #38-25 12, Tuluá, Valle del Cauca, 763022");
      obtenerCoordenadas("CLLE 32B #18 a 51, Tuluá, Valle del Cauca, 763022");
      obtenerCoordenadas("CLLE 33A Num. 18A-15 PROGRESAR, Valle del Cauca, 763022");
      obtenerCoordenadas("CRA 25 #38-25 12 DE OCTUBRE, Tuluá, Valle del Cauca, 763022");

    }

    // Mapa ubicacion de ciudad
    function obtenerCoordenadas(ciudad)
    {
      geocoder.geocode({ 'address': ciudad}, geocodeResult);

      function geocodeResult(resultado, estado) 
      {
          // Marcador 
          marker = new google.maps.Marker
          ({
                position:resultado[0].geometry.location,
                animation: google.maps.Animation.DROP,
          });

           marker.setMap(mapaMostrar);
      }
    }

    </script>
@stop