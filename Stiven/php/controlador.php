<?php


class controlador {


	function controlador(){
		session_start();
		
		
	}
	
	
	public function inicializar(){

		
	}
	
	
	public function actualizar(){
				
		return 2;
	}
	
	
	public function borrar(){
		return controlador::actualizar()+6;
		
		

	}
	
	
}



$controlador = new controlador();

echo $controlador->borrar();

