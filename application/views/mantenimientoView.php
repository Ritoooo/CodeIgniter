<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form>
		<table>
			<thead>
				<tr>
					<td>Nombre</td>
					<td>Teléfono</td>
					<td>Email</td>
					<td>Direccion</td>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($usuarios as $index): ?>
					<tr>
						<td><input type="radio" name="editar" value="<? $index->idContacto  ?>"></td>
						<td><? $index ?></td>
						<td><? $index ?></td>
						<td><? $index ?></td>
						<td><? $index ?></td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</form>
</body>
</html>