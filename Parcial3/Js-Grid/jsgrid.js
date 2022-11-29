$(document).ready(function() {
  const settings = {
  "async": true,
  "crossDomain": true,
  "url": "http://localhost/Navarrete/Parcial3/Js-Grid/Registro.php",
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
          { name: "IdEmpleado", type: "number", textField:"IdEmpleado"},
          { name: "NombreEmpleado", type: "text", textField:"NombreEmpleado"},
          { name: "Direccion", type: "text",textField:"Direccion"},
          { name: "Seguro", type: "text", textField:"Seguro"}
      ]
    });
  });
});