<?php
//------------------------- variables globales --------------------
$DB_Host = "";
$DB_User = "";
$DB_Password = "";
$DB_Database ="";
$DB_Init_Params = false;

//*********************** INICIALIZA LOS PARAMETROS DE CONEXION CON LA BASE DE DATOS  ********************
function Init_DBParams(){
	global $DB_Host, $DB_User, $DB_Password, $DB_Database, $DB_Init_Params, $DB_Host;
	

	$DB_Host ="localhost";
	$DB_User = "root";
	$DB_Password = "";
	$DB_Database ="bookswap";
	$DB_Init_Params = true; 
/*
	$DB_Host ="localhost";
	$DB_User = "dsupreme_dsupreme";
	$DB_Password = "dsupr3m32022."; 
	$DB_Database ="dsupreme_dsupreme";
	$DB_Init_Params = true;
*/
}

?>
