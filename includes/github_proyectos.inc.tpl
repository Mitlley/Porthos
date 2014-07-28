<h2>Proyectos en GitHub</h2>
<?php 
	foreach ($repositories as $repo) {
  		echo "<p><a href='https://github.com/Mitlley/" . $repo['name'] . "'>" . $repo['name'] . "</a> (" . $repo['open_issues'] . ")</p>
  			<p>" . $repo['description'] . "</p>";
	}
?>