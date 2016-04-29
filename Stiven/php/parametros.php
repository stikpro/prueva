<?php


require_once("funciones.php");




$funcion=$_REQUEST["funcion"];


switch($funcion){
	case "inicializar":	
	
	
		$tamaño=$_REQUEST["matriz"];
		$solicitud=$_REQUEST["operaciones"];
	
		$unidad=new bd();
		$valor=$unidad->inicializar($tamaño);
		
		 $resultado=array ("resultado"=>"ok", "arreglo"=>$valor);
		
		
	break;	
	case "actualizar":	
		$x=$_REQUEST["x"];
		$y=$_REQUEST["y"];
		$z=$_REQUEST["z"];
	    $w=$_REQUEST["w"];

		$unidad=new bd();
		$valor=$unidad->actualizar($x,$y,$z,$w);
		
		 $resultado=array ("resultado"=>"ok", "arreglo"=>$valor, "solicitud"=> "UPDATE X:".$x." Y:".$y." Z:".$z);
		
	break;
	
	case "sumar":	
		$x=$_REQUEST["x"];
		$y=$_REQUEST["y"];
		$z=$_REQUEST["z"];
		
		$x2=$_REQUEST["x2"];
		$y2=$_REQUEST["y2"];
		$z2=$_REQUEST["z2"];
	

		$unidad=new bd();
		$valor=$unidad->sumatoria($x,$y,$z,$x2,$y2,$z2);
		
		
		$resultado=array ("resultado"=>"ok", "arreglo"=>$valor, "solicitud"=> "QUERY X:".$x." Y:".$y." Z:".$z." X2:".$x2." Y2:".$y2." Z2:".$z2);
		
	break;	
	
	
	
}









 header('Content-type: application/json; charset=utf-8');	
 echo json_encode($resultado, JSON_FORCE_OBJECT);



?>