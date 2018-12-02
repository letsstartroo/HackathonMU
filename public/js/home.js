var map;
var directionsService;
var directionsDisplay;


  function getLocation()
  {
  if (navigator.geolocation)
    {
    navigator.geolocation.getCurrentPosition(showPosition,showError);
    }
  else{console.log('erro')}
  }
 
function showPosition(position)
  {
  lat=position.coords.latitude;
  lon=position.coords.longitude;
  latlon=new google.maps.LatLng(lat, lon)
  mapholder=document.getElementById('map')
  mapholder.style.height='calc(100% - 56px)';
  mapholder.style.width='100%';
 
  var myOptions={
  center:latlon,zoom:18,
  mapTypeId:google.maps.MapTypeId.ROADMAP,
  mapTypeControl:false,
  navigationControlOptions:{style:google.maps.NavigationControlStyle.SMALL}
  };
  directionsService = new google.maps.DirectionsService;
  directionsDisplay = new google.maps.DirectionsRenderer;
  map=new google.maps.Map(document.getElementById("map"),myOptions);
  var marker=new google.maps.Marker({position:latlon,map:map,title:"Você está Aqui!",
            icon: {
                path: google.maps.SymbolPath.FORWARD_CLOSED_ARROW,
                strokeColor: "blue",
                scale: 4
            },});
directionsDisplay.setMap(map);
    
  }
 
function showError(error)
  {
  console.log('teste');
  }

function calculateAndDisplayRoute(directionsService, directionsDisplay) {
        directionsService.route({
          origin: '-16.4696225, -54.6351436',
          destination: '-16.4571839, -54.6160559',
          travelMode: 'DRIVING'
        }, function(response, status) {
          if (status === 'OK') {
            directionsDisplay.setDirections(response);
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
      }

      function f(link){
        $("#iframe").attr("src",link);
        $("#iframe").show();
        $("#map").hide();
        $('.modal').modal('close');
      }

      function teste (id){
          $.ajax({
          type: "GET",
          url: "/ws/rota/" + id,
          success: function(data){
            console.log(data);
            $('#cl_md').empty();
            for (let d of data){

              console.log(d.link);
              $('#cl_md').append(`<a onclick="f('${d.link}')" class="collection-item">${d.nome}</a>`);

               }
               $('#modal1').modal('open');
              },
              error: function(err){
                M.toast({html: 'Falha na Requisição!', classes: 'red darken-1'});
                console.log(err);
              }
            });
        }

$(document).ready(function(){
      $('#iframe').hide();

    $('.modal').modal();


    $('#btn_close_modal').click(function(){
        $('#modal_search').modal('close');
    });

    getLocation();

    let mapholder=document.getElementById('map');

    
      $.ajax({
        type: "GET",
        url: "/ws/ponto",
        success: function(data){
          console.log(data);
          console.log(map);
          for (let x of data){
            let marker=new google.maps.Marker({
                position:new google.maps.LatLng(x.latitude, x.longitude),
                map:map,

            });
            marker.addListener('click', function() {
              teste(x.id);
            });
            marker.setMap(map);
            

          }
            },
            error: function(err){
              M.toast({html: 'Falha na Requisição!', classes: 'red darken-1'});
              console.log(err);
            }
          });


});

//AIzaSyDNSviNz-IMVTYpP_cHflROZ1eqnKXUFxw