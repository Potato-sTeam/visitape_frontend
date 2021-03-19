function get(url) {
  // Return a new promise.
  return new Promise(function(resolve, reject) {
    // Do the usual XHR stuff
    var req = new XMLHttpRequest();
    req.open('GET', url);

    req.onload = function() {
      // This is called even on 404 etc
      // so check the status
      if (req.status == 200) {
        // Resolve the promise with the response text
        resolve(req.response);
      }
      else {
        // Otherwise reject with the status text
        // which will hopefully be a meaningful error
        reject(Error(req.statusText));
      }
    };

    // Handle network errors
    req.onerror = function() {
      reject(Error("Network Error"));
    };

    // Make the request
    req.send();
  });
}
var padreslider = $("#slider");
  
  function addChildslider(image, titulo, description, activo) {
    var child = 
      "<div class='carousel-item "+ activo+"'>\
          <img src='" + image + "' class='d-block w-100' alt='" + titulo +"'>\
          <div class='Description'>\
              <a href='#'>\
                " + titulo + "\
              </a>\
              <p>\
                " + description + "\
              </p>\
          </div>\
      </div>";
	padreslider.append(child);
  }
  
  get("http://api-visita.xpertik.com/slider.php")
    .then(function(response){
      var data = JSON.parse(response);
      var activo = "";
      for(var i = 0; data["objects"].length > i; i++) {
        if(i==0){
          activo="active";
        }
        else{
          activo="vacio";
        }
        addChildslider(data["objects"][i]["img"], 
            data["objects"][i]["titulo"],
            data["objects"][i]["description"],
            activo);
      }
    }, function(error){
      alert("Lo sentimos la consulta de datos no se completo.");
    });

    var padrereco = $("#recomendaciones");
  
    function addChildreco(image, titulo, description) {
      var child = 
      "<div class='media imgreco'>\
        <img width='200px' src='" + image + "' class='mr-3' alt='" + titulo + "'>\
        <div class='media-body'>\
            <h5 class='mt-0'>" + titulo +"</h5>\
            <p> " + description + "</p>\
        </div>\
      </div>";
      padrereco.append(child);
    }
    
    get("http://api-visita.xpertik.com/recomendaciones.php")
      .then(function(response){
        var data = JSON.parse(response);
        for(var i = 0; data["objects"].length > i; i++) {
          addChildreco(data["objects"][i]["img"], 
              data["objects"][i]["titulo"],
              data["objects"][i]["description"],);
        }
      }, function(error){
        alert("Lo sentimos la consulta de datos no se completo.");
      });

      var padrecomen = $("#comentario");
      
      function generaestrella(estrellas){
        var cadena = "";
        for(var x=1; x<=5;x++){
          if(estrellas>=x){
            cadena += "<span class='fas fa-star star_checked'></span>";
          }
          else{
            cadena += "<span class='fas fa-star'></span>";
          }
        }
        return cadena;
      }

      function addChildcomen(imagen, nombre, lugar, descripcion,valoracion,fecha) {
        var txtestrella = generaestrella(valoracion);
        var child = 
        "<li class='js01-a'>\
            <div class='js01-a-1'>\
                <img class='rounded-circle' width='70px' height='70px' src='" + imagen + "' alt='" + nombre + "'>\
            </div>\
            <div class='js01-a-2'>\
                <div class='js01-a-2A name'>\
                    <div class='js01-a-2Aa'>\
                    " + nombre + ' - ' + lugar + "\
                    </div>\
                    <div class='Star-rating'>\
                        " + txtestrella + "\
                    </div>\
                </div>\
                <div class='js01-a-2B text'>\
                    <p>\
                    " + descripcion + "\
                    </p>\
                </div>\
                <h6 class='js01-a-2C  text-bottom'><small>" + fecha + "</small></h6>\
            </div>\
        </li>";
        padrecomen.append(child);
      }
      
      get("http://api-visita.xpertik.com/comentarios.php")
        .then(function(response){
          var data = JSON.parse(response);
          for(var i = 0; data["objects"].length > i; i++) {
            addChildcomen(data["objects"][i]["img"],
                data["objects"][i]["name"], 
                data["objects"][i]["lugar"],
                data["objects"][i]["description"],
                data["objects"][i]["valoracion"],
                data["objects"][i]["fecha"]);
          }
        }, function(error){
          alert("Lo sentimos la consulta de datos no se completo.");
        });