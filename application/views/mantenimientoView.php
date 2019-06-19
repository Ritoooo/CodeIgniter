<!DOCTYPE html>
<html>
<head>
	<title><?=$page_title?></title>
</head>
<body>
	<form name="tabla" method="post" action="http://localhost/PYCodeIgniter/index.php/MantenimientoControlador/accion">
		<table border="solid">
			<thead>
				<tr>
					<th></th>
					<th>Nombre</th>
					<th>Teléfono</th>
					<th>Email</th>
					<th>Direccion</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($usuarios as $u): ?>
					<tr>
						<td><input type="radio" name="editar" value="<?=$u->idContacto;  ?>"></td>
						<td><?=$u->nombre;?></td>
						<td><?=$u->telefono;?></td>
						<td><?=$u->email?></td>
						<td><?=$u->direccion?></td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
		<input type="submit" value="Editar">
		<a href="http://localhost/PYCodeIgniter/index.php/MantenimientoControlador/create">Nuevo</a>
		<a href="http://localhost/PYCodeIgniter/index.php/MantenimientoControlador/delete">Eliminar</a>
	</form>
</body>
</html>