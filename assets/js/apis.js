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
var padre = $("#slider");
  
  function addChild(image, titulo, description, activo) {
    var child = 
      "<div class='carousel-item "+ activo+"'>\
          <img src='" + image + "' class='d-block w-100' alt='" + titulo +"'>\
          <div class='Description'>\
              <a href='#'>\
                  <strong>1</strong> " + titulo +"\
              </a>\
              <p>\
                " + description + "\
              </p>\
          </div>\
      </div>";
	padre.append(child);
  }
  
  get("http://api-visita.xpertik.com/slider.php")
    .then(function(response){
      var data = JSON.parse(response);
      var activo = "";
      for(var i = 0; data["objects"].length > i; i++) {
        if(i==0){
          activo="active";
        }
        addChild(data["objects"][i]["img"], 
            data["objects"][i]["titulo"],
            data["objects"][i]["description"],
            activo);
      }
      // console.log();
      //Salimos a pasear
    }, function(error){
      alert("Lo sentimos la consulta de datos no se completo.");
      //Me voy jugar Freefyer
    });