<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>fullprogramación</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="wrapper">
<div class="row">
 etiqueta
</div>
<div class="container-fluid" id="contenedor">
   <div class="row">
     	<div class="col-md-7" >





     	</div>
              <div class="col-md-5">

                    <div role="tabpanel" id="panel">

                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#Login" aria-controls="Login" role="tab" data-toggle="tab">Login</a></li>
                        <li role="presentation"><a href="#Registro" aria-controls="Registro" role="tab" data-toggle="tab">Registro</a></li>
                      </ul>        
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="Login">
                             <h3>Login</h3>
                            <input type="text" autofocus placeholder="Correo Electrónico" id="correo" name="correo" maxlength="40"><br>
                            <input type="text" autofocus placeholder="Contraseña"  id="password" name="password" maxlength="40"><br>
                            <button class="btn btn-success btn-lg" id="btnLogin" type="button">Login</button>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="Registro">
                      <form method="post" id="reg_usu" name="reg_usu" onsubmit="return valRegistro()" action="js/index/registro.php">
                       <h3>Registro</h3>
                          <div style="text-align:center;color:#fff;" id="errores" ></div>
                          <input type="text" autofocus placeholder="Nombre Completo" id="nombre" name="nombre" maxlength="40"><br>
                          <input type="text" autofocus placeholder="Correo Electrónico" id="correo" name="correo" maxlength="40"><br>
                          <input type="text" autofocus placeholder="Contraseña"  id="password" name="password" maxlength="40"><br>
                          
                          <input class="btn btn-success btn-lg" id="btnRegistro" type="submit" value="Regístrarse">
                      </form>
                    </div>
                  </div>
                 </div>	
              </div> <!-- fin col-md-5 -->
     </div><!-- row -->
   
</div><!-- contenedor -->


</div><!-- wrapper -->


<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/funciones.js"></script>
</body>
</html>