$(document).ready(function() {
  const settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/lagoshilario/Parcial3/Grid/conexion.php",
    "method": "GET",
    "headers": {
      "Accept": "*/*",
      
    }
  };
  
 
  

  
  $.ajax(settings).done(function (response) {
   let tabla=JSON.parse(response)
  
    $("#jsGrid").jsGrid({
      width: "100%",
      height: "400px",

      inserting: true,
      editing: true,
      sorting: true,
      paging: true,

      data: tabla,

      fields: [
        { name: "id", type: "number", textField:"id"},
          { name: "nombre", type: "text", textField:"nombre"},
          { name: "Direccion", type: "text",textField:"Direccion"},
          { name: "Curp", type: "text", textField:"Curp",width: 200},
          { name: "Nacionalidad", type: "text",  textField: "Nacionalidad" },
          { name: "Numero", type: "number", textField:"Numero"},
          { name: "Ciudad", type: "text", textField:"Ciudad"},
          { name: "Estado", type: "text", textField:"Estado"},
          { name: "Codigo", type:"number",textField:"Codigo"}
       ]
      
  });
  });

});
