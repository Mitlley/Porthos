<h2>Proyectos en GitHub</h2>
<?php 
	foreach ($repositories as $repo) {
  		# code...
  		echo "<p>" . $repo['name'] . " " . $repo['description'] . "</p>";
	}
?>