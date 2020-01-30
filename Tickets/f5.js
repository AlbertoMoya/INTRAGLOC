function Verificar()
{
var tecla=window.event.keyCode;
if (tecla==116) {
 confirm('Si recarga la página perdera todos los datos ingresados,<br> ¿Deseas recargar la página?"', function (result) {
     if (result) {
           location.reload();
      } else {
           event.keyCode=0;
event.returnValue=false;
      }
}); 

}
}