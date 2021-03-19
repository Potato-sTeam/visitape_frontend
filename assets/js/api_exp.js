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

      function addChildcomen(nombre, lugar, descripcion,valoracion,fecha) {
        var txtestrella = generaestrella(valoracion);
        var child = 
        "<li class='js01-a'>\
            <div class='js01-a-1'>\
                <i class='fas fa-user'></i>\
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
            addChildcomen(data["objects"][i]["name"], 
                data["objects"][i]["lugar"],
                data["objects"][i]["description"],
                data["objects"][i]["valoracion"],
                data["objects"][i]["fecha"]);
          }
        }, function(error){
          alert("Lo sentimos la consulta de datos no se completo.");
        });