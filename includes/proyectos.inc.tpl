<h2>Proyectos</h2>
<?php 
	foreach ($proyectos as $proyecto) {
		echo "<p><a href='javascript:void(0);'>" . ucfirst($proyecto['nombre']) . "</a></p>";
	}
?>