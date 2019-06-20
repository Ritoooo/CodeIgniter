<!DOCTYPE html>
<html>
<head>
	<title>Nuevo Contacto</title>
</head>
<body>
	<form name="alta" method="post" action="http://localhost/PYCodeIgniter/index.php/MantenimientoControlador/editar">
		<table>
			<tr>
				<td><label>Nombre</label></td>
				<td><input type="text" name="txtnombre" value="<?=$usuario[0]->nombre;?>"></td>
			</tr>
			<tr>
				<td><label>Teléfono</label></td>
				<td><input type="text" name="txttelefono" value="<?=$usuario[0]->telefono;?>"></td>
			</tr>
			<tr>
				<td><label>Email</label></td>
				<td><input type="text" name="txtemail" value="<?=$usuario[0]->email;  ?>"></td>
			</tr>
			<tr>
				<td><label>Dirección</label></td>
				<td><input type="text" name="txtdireccion" value="<?=$usuario[0]->direccion;  ?>"></td>
			</tr>
		</table>
		<input type="hidden" name="id" value="<?=$usuario[0]->idContacto;  ?>">
		<input type="submit" value="Editar">
	</form>
</body>
</html>