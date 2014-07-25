<?php

class IndexController extends Controller
{
    public function __construct($model, $action)
    {
        parent::__construct($model, $action);
        $this->_setModel($model);
    }

    public function index($error){
        try {
             
            if(isset($error) && !empty($error)){
                $this->_view->set('error', $error);
            }
            $this->_view->set('title', 'Pagina Principal');
             
            return $this->_view->output();
             
        } catch (Exception $e) {
            echo "Application error:" . $e->getMessage();
        }
    }

    public function registrarme($error){
        try {
             
            if(isset($error) && !empty($error)){
                $this->_view->set('error', $error);
            }
            $this->_view->set('title', 'Pagina Principal');
             
            return $this->_view->output();
             
        } catch (Exception $e) {
            echo "Application error:" . $e->getMessage();
        }
    }
}
?>