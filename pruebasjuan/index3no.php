<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
</head>
<!--*********
//<?
//Creamos la conexión a nuestra base de datos
//Hay que sustituir el usuario contraseña
//$conexion = mysql_connect("localhost", "(usuario)", "(password)");
//Aquí hay que sustituir la el nombre de la base de datos
//mysql_select_db("(base de datos)", $conexion);
//?>
// ********* -->

<body>
<p>Formulario para insertar datos en SQL</p>
<!-- Ahora creamos el formulario que enviará los datos -->
<!-- En el apartado 'action' hay que poner a que página
enviaremos los datos, en este caso y como ejemplo lo enviaremos
a index.php, es decir, a esta misma web -->
<form id="form1" name="form1" method="post" action="index3no.php">
  <table width="200" border="0">
  <tr>
    <td width="61">Nombre:</td>
    <td width="123">
      <label for="nombre"></label>
      <input type="text" name="nombre" id="nombre" />
    </td>
  </tr>
  <tr>
    <td>Nick:</td>
    <td><label for="nick"></label>
    <input type="text" name="nick" id="nick" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right">
    <input type="submit" name="enviar" id="enviar" value="Enviar" />
    </td>
  </tr>
</table>
</form>


</body>
</html>
