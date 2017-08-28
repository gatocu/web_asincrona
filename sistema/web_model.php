<?php 

//****************** Utilizar libreria de Abstraccion Mysql************************* 
//****************** https://github.com/raicerk/abstraccionMysql *******************
	
class Programas  {
	
	$funciones = new Funciones();
	
	public function get_value($parametro){
		$data = array('i',$parametro);
		$sql = "CALL procedure_values(?)";
		$resultado = $funciones->query($sql, $data, false);
		// retorno resultado de la consulta convertido en un JSON
		return json_encode($resultado);
	}
	
}
?>
