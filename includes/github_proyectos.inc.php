<?php
	require_once 'vendor/autoload.php';
	$view = new View(HOME . DS . 'includes' . DS . 'github_proyectos.inc.tpl');
	$client = new \Github\Client();
	$repositories = $client->api('user')->repositories('mitlley');
	
	$view->set('repositories', $repositories);
	return $view->output();
?>