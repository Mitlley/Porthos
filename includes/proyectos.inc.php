<?php
	$view = new View(HOME . DS . 'includes' . DS . 'proyectos.inc.tpl');
	$proyectosModel = new ProyectosModel();

	$proyectos = $proyectosModel->todos();
	$view->set('proyectos', $proyectos);
	return $view->output();
?>