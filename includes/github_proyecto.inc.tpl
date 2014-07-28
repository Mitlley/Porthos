<h2>GitHub</h2>
<?php 
	foreach ($repositories as $repo) {

  		if(strtolower($repo['name']) == strtolower($proyecto['nombre'])){
  			echo "<p><a href='https://github.com/Mitlley/" . $repo['name'] . "'>" . $repo['name'] . "</a> (" . $repo['open_issues'] . ")</p>
  			<p>" . $repo['description'] . "</p>";
  		}
	}
?>