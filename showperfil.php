<?php
	include "header.php";
?>
		<div class="row">
			<div class="col-md-10">
				<h1>Listado de Perfiles</h1>
			</div>
			<div class="col-md-2">
				<h1><a href="add.php" class="btn btn-primary"><span><i class="far fa-file"></i></span> Nuevo</a></h1>
			</div>
		</div>
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th width="20">No</th>
					<th>Nombre</th>
					<th>Email</th>
					<th>Telefono</th>
					<th>Dirección</th>
					<th width="100">Opciones</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$query = $mysqli->query("SELECT * FROM perfiles");
					$no = 1;
					while($row = $query->fetch_assoc()){				
				?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $row['nombre'] ?></td>
					<td><?php echo $row['email'] ?></td>
					<td><?php echo $row['telefono'] ?></td>
					<td><?php echo $row['direccion'] ?></td>
					<td>
						<a href="update.php?id=<?php echo $row['id'] ?>" class="btn btn-warning"><span><i class="fa fa-pencil" aria-hidden="true"></i></span></a>

						<a onclick="return confirm('Estas seguro de eliminarlo?')" href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger"><span><i class="fa fa-trash" aria-hidden="true"></i></span></a>
					</td>
				</tr>
				<?php 
					}
				?>
			</tbody>
		</table>
		
<?php
	include "footer.php";
?>
	