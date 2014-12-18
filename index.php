<!DOCTYPE html>
<html>
<head>
	<title>fullprogramación</title>
  <?php include('head.php'); ?>
</head>
<body>
<div class="container-fluid" id="contenedor">
<div class="row" id="menu"> <?php include('nav.php'); ?></div>
   <div class="row" id="cont">
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
                            <form method="post" id="log_usu" name="log_usu" onsubmit="return valLogin()" action="js/index/login.php">
                                <div style="text-align:center;color:#fff;" id="erroreslogin" ></div>
                                <input type="text" autofocus placeholder="Correo Electrónico" id="corr" name="corr" maxlength="40"><br>
                                <input type="password"  placeholder="Contraseña"  id="pass" name="pass" maxlength="40"><br>
                                <input class="btn btn-success btn-lg" id="btnLogin"  type="submit"  value="Login">
                            </form>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="Registro">
                      
                       <h3>Registro</h3>
                       <form method="post" id="reg_usu" name="reg_usu" onsubmit="return valRegistro()" action="js/index/registro.php">
                          <div style="text-align:center;color:#fff;" id="errores" ></div>
                          <input type="text" autofocus placeholder="Nombre Completo" id="nombre" name="nombre" maxlength="40"><br>
                          <input type="text" autofocus placeholder="Correo Electrónico" id="correo" name="correo" maxlength="40"><br>
                          <input type="password"  placeholder="Contraseña"  id="password" name="password" maxlength="40"><br>
                          
                          <input class="btn btn-success btn-lg" id="btnRegistro"  type="submit" value="Regístrarse">
                      </form>
                    </div>
                  </div>
                 </div>	
              </div> <!-- fin col-md-5 -->
     </div><!-- row -->
   
</div><!-- contenedor -->


<?php include('footer.php'); ?>
</body>
</html>