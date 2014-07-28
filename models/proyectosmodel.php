<?php

class ProyectosModel extends Model
{
	public function guardar($titulo, $comentario){
		$sql = "INSERT INTO 
					reportes(titulo, comentario)
				VALUES (?, ?);";

		$this->_setSql($sql);
		return $this->execute(array($titulo, $comentario));
	}

	public function todos(){
		$sql = "SELECT * FROM proyectos";
		$this->_setSql($sql);
		$proyectos = $this->getAll();

		if(empty($proyectos)){
			return FALSE;
		}

		return $proyectos;
	}

	public function getProyecto($nombre){
		$sql = "SELECT * FROM proyectos WHERE nombre = ?";
		$this->_setSql($sql);
		$proyecto = $this->getRow(array($nombre));

		if(empty($proyecto)){
			return FALSE;
		}

		return $proyecto;
	}
    
}
?>