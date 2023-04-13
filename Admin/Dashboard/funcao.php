<?php 
	date_default_timezone_set('America/Guatemala'); 
	
	function dataA(){
		$mes = array("","Janeiro", 
					  "Fevereiro", 
					  "Março", 
					  "Abril", 
					  "Maio", 
					  "Junho", 
					  "Julho", 
					  "Agosto", 
					  "Setembro", 
					  "Outubro", 
					  "Novembro", 
					  "Dizembro");
		return date('d')." de ". $mes[date('n')] . " de " . date('Y');
	}
 ?>