<!DOCTYPE html>
<html>
<head>
	<title>Nuevo Contacto</title>
</head>
<body>
	<form name="alta" method="post" action="http://localhost/PYCodeIgniter/index.php/MantenimientoControlador/alta">
		<table>
			<tr>
				<td><label>Nombre</label></td>
				<td><input type="text" name="txtnombre"></td>
			</tr>
			<tr>
				<td><label>Teléfono</label></td>
				<td><input type="text" name="txttelefono"></td>
			</tr>
			<tr>
				<td><label>Email</label></td>
				<td><input type="text" name="txtemail"></td>
			</tr>
			<tr>
				<td><label>Dirección</label></td>
				<td><input type="text" name="txtdireccion"></td>
			</tr>
		</table>
		<input type="submit" value="Alta">
	</form>
</body>
</html>