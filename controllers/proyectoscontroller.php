<?php

class ProyectosController extends Controller
{
    public function __construct($model, $action)
    {
        parent::__construct($model, $action);
        $this->_setModel($model);
    }

    public function ver($proyectoNombre){
        try {
             
            $proyecto = $this->_model->getProyecto($proyectoNombre);

            $this->_view->set('title', 'Pagina Principal');
            $this->_view->set('proyecto', $proyecto);
             
            return $this->_view->output();
             
        } catch (Exception $e) {
            echo "Application error:" . $e->getMessage();
        }
    }
}
?>