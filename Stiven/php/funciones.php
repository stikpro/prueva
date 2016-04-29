<?php


class bd {


	private $arreglo;
	private $sumar=0;

	function bd(){
		session_start();
		

		
	}
	
	
	public function inicializar($tamaño){
			for($z=1; $z<=$tamaño; $z++){
				for($y=1; $y<=$tamaño; $y++){
					for($x=1; $x<=$tamaño; $x++){
						$this->arreglo[$x][$y][$z]=0;
				
				
					}				
			     }				
			}
			
		$_SESSION["arreglo"]=$this->arreglo;
		return $_SESSION["arreglo"];
		
	}
	
	
	public function actualizar($x, $y, $z, $w){
				
				$this->arreglo[$x][$y][$z]=$w;
				$_SESSION["arreglo"][$x][$y][$z]=$w;
				
		return $_SESSION["arreglo"];
	}
	
	
	public function sumatoria($x1, $y1, $z1, $x2,$y2,$z2){
		
		$this->arreglo=$_SESSION["arreglo"];
		
			for($z=$z1; $z<=$z2; $z++){
				for($y=$y1; $y<=$y2; $y++){
					for($x=$x1; $x<=$x2; $x++){
						$this->sumar+=$this->arreglo[$x][$y][$z];
				
				
					}				
			     }				
			}
			
		return $this->sumar;
	}
	
	
	
	
	
	
	
	
	
}





?>