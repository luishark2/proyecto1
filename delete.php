<?php
	include "config.php";
	$id = $_GET['id'];
	if (isset($id)) {
		$query = $mysqli->query("DELETE FROM perfiles WHERE id='$id'");
		if ($query) {
			echo "<script>alert('Se elimino el registro');location.href='showperfil.php'</script>";
		} else {
			header('location:index.php');
		}
	}
?>