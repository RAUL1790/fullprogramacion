$(document).ready(function(){
	
$('#reg_usu')[0].reset();


});

    function valCorreo( c ){
     var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
    if (regex.test(c)) { return true; } else { return false; }
    }
	function valRegistro(){
		var n = $('#reg_usu #nombre').val();
		var c = $('#reg_usu #correo').val();
		var p = $('#reg_usu #password').val();
		if(n.length < 4){
          $("#errores").html("Usuario minimo : 4 caracteres");
          return false;
		}else{  $("#errores").html('');}
            

        if(valCorreo(c)==false){
             $("#errores").html("Formato de correo no valida");
             return false;
        }else{ $("#errores").html('');}
 
        if(p.length < 4){
          $("#errores").html("Contraseña minima : 4 caracteres");
          return false;
		}else{  $("#errores").html('');}


     return true;
	}