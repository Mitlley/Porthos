<h2>Proyectos</h2>
<?php 
	foreach ($proyectos as $proyecto) {
		echo "<p><a href='/proyectos/ver/" . $proyecto['nombre'] . "'>" . ucfirst($proyecto['nombre']) . "</a></p>";
	}
?>