function validar_mesa(){
  var expediente = document.forms["mesa_form"]["expediente"].value;
  var causante = document.forms["mesa_form"]["causante"].value;
  var extracto = document.forms["mesa_form"]["extracto"].value;
  var persona = document.forms["mesa_form"]["persona"].value;
  var keyword = document.forms["mesa_form"]["keyword"].value;
  var result = false;

  if ((expediente!=null && expediente!="") ||
      (causante!=null && causante!="") ||
      (extracto!=null && extracto!="") ||
       (persona!=null && persona!="") ||
       (keyword!=null && keyword!="")) {
            return true;
             }
  alert("Algun campo debe estar completo");
  return false;    
}

function validar_visitante(){
  var keyword = document.forms["visitante_form"]["keyword"].value;
  var result = false;

  if (keyword!=null && keyword!="") {
      return true;
             }
  alert("El campo debe estar completo");
  document.getElementById('keyword').focus();
  return false;    
}