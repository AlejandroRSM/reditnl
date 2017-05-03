<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<title>Red ITNL</title>
</head>
<body data-offset="40" background="images/fondotot.jpg" style="background-attachment: fixed">
	<header class="logo-head">
		<div class="header-title">
			<p><strong>Red Inalambrica Instituto Tecnlogico de Nuevo Leon</strong></p>
		</div>
	<center>

		<div class="login-form">
			<h1 class= "iniciotxt">Inicio de sesión</h1>
		<center>

			<div class="form-group">

				<table border="0" align="center" valign="middle">
					<tr>
						<td rowspan=2>
							<form action="validar.php" method="post">

<table border="0">

		<tr>
			<td>
				<label style="font-size: 14pt"><b>Correo: </b></label>
			</td>

			<td width=80>
				 <input class="form-group has-success" style="border-radius:15px;" type="text" name="mail">
			</td>
		</tr>

		<tr>
			<td>
				<label style="font-size: 14pt"><b>Contraseña: </b></label>
			</td>

			<td witdh=80>
				<input style="border-radius:15px;" type="password" name="pass">
			</td>

		</tr>
	<tr>
			<td>
			</td>
			<td width=80 align=center>
				<input class="btn btn-primary" type="submit" value="Aceptar">
			</td>
			</tr>
		</tr>
	</table>
	</form>
<br>
</div>
<!-- formulario registro -->


<form method="post" action="" >
  <fieldset>
    <legend  class = " registrotxt" style="font-size: 18pt"><b>Registro</b></legend>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Ingresa tu nombre</b></label>
      <input type="text" name="realname" class="form-control" placeholder="Ingresa tu nombre" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: #FFFFFF;"><b>Ingresa tu email</b></label>
      <input type="text" name="nick" class="form-control"  required placeholder="Ingresa mail"/>
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: #FFFFFF;"><b>Ingresa tu Password</b></label>
      <input type="password" name="pass" class="form-control"  placeholder="Ingresa contraseña" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Repite tu contraseña</b></label>
      <input type="password" name="rpass" class="form-control" required placeholder="repite contraseña" />
    </div>


    </div>

    <input  class="btn btn-danger" type="submit" name="submit" value="Registrarse"/>

  </fieldset>
</form>
<?php
		if(isset($_POST['submit'])){
			require("registro.php");
		}
	?>
<!--Fin formulario registro -->

		</td>
		</tr>
		</table>
		</div></center></div></center>


</body>
</html>
