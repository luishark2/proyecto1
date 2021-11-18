<?php
	include "header.php";
?>
<div class="row">
	<div class="col-md-10">
		<h1>Proyecto con PHP y MySQL</h1>
	</div>
	<div class="col-md-2">
		<h1><a href="showperfil.php" class="btn btn-info"><span><i class="fa fa-chevron-left"></i></span> Regresar</a></h1>
	</div>
</div>
<?php 
	if (isset($_POST['submit'])) {
		$nm = $_POST['nombre'];
		$em = $_POST['email'];
		$tl = $_POST['telefono'];
		$dr = $_POST['direccion'];
		$query = $mysqli->query("INSERT INTO perfiles values('','$nm','$em','$tl','$dr')");
		if ($query) {
			?>
			<div class="alert alert-success alert-dismissible fade show" role="alert">
			  <strong>Se creó el perfil!</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
			<?php
		} else {
			?>
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
  				<strong>Error no se creó!</strong>
  				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
			<?php
		}

	}
?>
<form method="POST">
	<div class="mb-3">
		<label for="nombre" class="form-label">Nombre</label>
		<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Teclea el nombre">
	</div>
	<div class="mb-3">
		<label for="email" class="form-label">Email</label>
		<input type="email" class="form-control" id="email" name="email">
	</div>
	<div class="mb-3">
		<label for="telefono" class="form-label">Teléfono</label>
		<input type="text" class="form-control" id="telefono" name="telefono" placeholder="###-###-####">
	</div>
	<div class="mb-3">
		<label for="direccion" class="form-label">Dirección</label>
		<textarea class="form-control" id="direccion" name="direccion" cols="30" rows="3"></textarea>
	</div>
	<button type="submit" name="submit" class="btn btn-primary"><span><i class="fa fa-floppy-o"></i></span> Guardar</button>
</form>
<?php
	include "footer.php";
?>
