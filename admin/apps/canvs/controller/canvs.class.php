<?php

include('../model/canvs.class.php');
include('../view/canvs.class.php');

/**
* Sistema de Controle dos Dados
*
* Usado para Identificar os dados de requisição e solicitar modelos e interfaces
*
* @author Milton Bolonha <miltonbneto@hotmail.com>
* @link http://facebook.com/milton.bolonha
*
* @version 1.0
* @package Canvs
*/
 


class CanvsCONTROLLER
{

/*
	//  $DB_CCV_00 - Classe_AttributeApp_Number // 
	// ==============================
	private $CL_ACV_00; //Classe_AttributeApp_Number
	private $CL_ACV_00; //Classe_AttributeApp_Number


	//  $DB_CCV_00 - DataBase_ColumnApp_Number // 
	// ==============================
	private $DB_CCV_00; //DataBase_ColumnApp_Number
	private $DB_CCV_00; //Attributes
	private $DB_CCV_00; //Attributes
	private $DB_CCV_00; //Attributes
	private $DB_CCV_00; //Attributes
	private $DB_CCV_00; //Attributes
	
	function __construct($)
	{
		# code...
	}
	
	//  $DB_CCV_00 - Classe_MethodApp_Number // 
	// ==============================
	private function CL_MCV_00(){ //METHOD

	}
*/

	//  $DB_CCX_00 - Conection Var's // 
	// ==============================
	private $CL_ACX_001; //|--> Server
	private $CL_ACX_002; //|--> User
	private $CL_ACX_003; //|--> Password
	private $CL_ACX_004; //|--> Password
	private $CL_ACX_005; //|--> Password
	
	function __construct($CL_ACX_001,$CL_ACX_002,$CL_ACX_003)
	{
		/*eval('$this->FUNCTION($CL_ACX_001,$CL_ACX_002,$CL_ACX_003)');*/
		$this->CL_MCX_001($CL_ACX_001,$CL_ACX_002,$CL_ACX_003);
	}
	
	private function CL_MCX_001($CL_ACX_001,$CL_ACX_002,$CL_ACX_003){ //DB Conection
		$con = mysql_connect($CL_ACX_001,$CL_ACX_002,$CL_ACX_003);
		if (!$con)
		{
		die('Could not connect: ' . mysql_error());
		}
		//mysql_close($con);
	}

	private function CL_MCX_002($CL_ACX_004){ //Echo de Variables
			if (is_array($CL_ACX_004)){
				foreach ($CL_ACX_004 as $key => $value) {
					if (is_array($value)){
						$this->CL_MCX_002($value);
					}else{
						echo '<br />$value = '.$value.'<br />';
					}
				}
			}else{
						echo '<br />$CL_ACX_004 = '.$CL_ACX_004.'<br />';
			}
		}

	public function CL_MCX_003($CL_ACX_005){ //Control the GET's n POST's
		if (is_array($CL_ACX_005)){
				foreach ($CL_ACX_005 as $key => $value) {
					if (is_array($value)){
						$this->CL_MCX_003($value);
					}else{
						echo $value;
					}
				}
			}else{
						echo $CL_ACX_005;
			}
	}

/*
	$CL_ACX_008=array('CanvsCONTROLLER'=>'CL_MCX_002');
	$CL_ACX_009=array('CanvsCONTROLLER'=>array('localhost','root','root'));
	*/

	public function CL_MCX_04($CL_ACX_008){ //Use function
			
		if (is_array($CL_ACX_008)) {

			foreach ($CL_ACX_008 as $key => $value) {
				foreach ($value as $key2 => $value2) {
					
						/*echo '<br />';
						echo '$key = '.$key.'<br />';
						echo '$value = '; print_r($value); echo '<br />';
						echo '$key2 = '.$key2.'<br />';
						echo '$value2 = '; print_r($value2);
						echo '<br />';*/
						eval('$this->$key2($value2);');
					
				}
			}
		}
	}

}


?>