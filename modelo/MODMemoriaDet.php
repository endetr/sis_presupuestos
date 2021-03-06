<?php
/**
*@package pXP
*@file gen-MODMemoriaDet.php
*@author  (admin)
*@date 01-03-2016 14:23:08
*@description Clase que envia los parametros requeridos a la Base de datos para la ejecucion de las funciones, y que recibe la respuesta del resultado de la ejecucion de las mismas
*/

class MODMemoriaDet extends MODbase{
	
	function __construct(CTParametro $pParam){
		parent::__construct($pParam);
	}
			
	function listarMemoriaDet(){
		//Definicion de variables para ejecucion del procedimientp
		$this->procedimiento='pre.ft_memoria_det_sel';
		$this->transaccion='PRE_MDT_SEL';
		$this->tipo_procedimiento='SEL';//tipo de transaccion
		
		$this->capturaCount('total_importe','numeric');
				
		//Definicion de la lista del resultado del query
		$this->captura('id_memoria_det','int4');
		$this->captura('importe','numeric');
		$this->captura('estado_reg','varchar');
		$this->captura('id_periodo','int4');
		$this->captura('id_memoria_calculo','int4');
		$this->captura('usuario_ai','varchar');
		$this->captura('fecha_reg','timestamp');
		$this->captura('id_usuario_reg','int4');
		$this->captura('id_usuario_ai','int4');
		$this->captura('fecha_mod','timestamp');
		$this->captura('id_usuario_mod','int4');
		$this->captura('usr_reg','varchar');
		$this->captura('usr_mod','varchar');
		$this->captura('desc_periodo','integer');
		
		$this->captura('cantidad_mem','numeric');
		$this->captura('unidad_medida','varchar');
		$this->captura('importe_unitario','numeric');
		
		
		
		//Ejecuta la instruccion
		$this->armarConsulta();
		$this->ejecutarConsulta();
		
		//Devuelve la respuesta
		return $this->respuesta;
	}
			
	function insertarMemoriaDet(){
		//Definicion de variables para ejecucion del procedimiento
		$this->procedimiento='pre.ft_memoria_det_ime';
		$this->transaccion='PRE_MDT_INS';
		$this->tipo_procedimiento='IME';
				
		//Define los parametros para la funcion
		$this->setParametro('importe','importe','numeric');
		$this->setParametro('estado_reg','estado_reg','varchar');
		$this->setParametro('id_periodo','id_periodo','int4');
		$this->setParametro('id_memoria_calculo','id_memoria_calculo','int4');
		
		$this->setParametro('cantidad_mem','cantidad_mem','numeric');
		$this->setParametro('unidad_medida','unidad_medida','varchar');
		$this->setParametro('importe_unitario','importe_unitario','numeric');

		//Ejecuta la instruccion
		$this->armarConsulta();
		$this->ejecutarConsulta();

		//Devuelve la respuesta
		return $this->respuesta;
	}
			
	function modificarMemoriaDet(){
		//Definicion de variables para ejecucion del procedimiento
		$this->procedimiento='pre.ft_memoria_det_ime';
		$this->transaccion='PRE_MDT_MOD';
		$this->tipo_procedimiento='IME';
				
		//Define los parametros para la funcion
		$this->setParametro('id_memoria_det','id_memoria_det','int4');
		$this->setParametro('importe','importe','numeric');
		$this->setParametro('estado_reg','estado_reg','varchar');
		$this->setParametro('id_periodo','id_periodo','int4');
		$this->setParametro('id_memoria_calculo','id_memoria_calculo','int4');		
		$this->setParametro('cantidad_mem','cantidad_mem','numeric');
		$this->setParametro('unidad_medida','unidad_medida','varchar');
		$this->setParametro('importe_unitario','importe_unitario','numeric');

		//Ejecuta la instruccion
		$this->armarConsulta();
		$this->ejecutarConsulta();

		//Devuelve la respuesta
		return $this->respuesta;
	}
			
	function eliminarMemoriaDet(){
		//Definicion de variables para ejecucion del procedimiento
		$this->procedimiento='pre.ft_memoria_det_ime';
		$this->transaccion='PRE_MDT_ELI';
		$this->tipo_procedimiento='IME';
				
		//Define los parametros para la funcion
		$this->setParametro('id_memoria_det','id_memoria_det','int4');

		//Ejecuta la instruccion
		$this->armarConsulta();
		$this->ejecutarConsulta();

		//Devuelve la respuesta
		return $this->respuesta;
	}
			
}
?>