<?php
 
require 'view.php';
 
$view = new View('simpletemplate.tpl');
$view->set('title', 'This is a simple template file!');
$view->set('greeting', 'David');
echo $view->output();
?>