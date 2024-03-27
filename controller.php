<?php
	require_once "include/functions.php";
	require_once "include/db_tools.php";


    use PHPMailer\PHPMailer\PHPMailer;
	
	require 'include/PHPMailer2022/src/Exception.php';
	require 'include/PHPMailer2022/src/PHPMailer.php';
	require 'include/PHPMailer2022/src/SMTP.php';		
	require_once "extensiones/vendor/autoload.php";

    
// if (Requesting("action")=="valida_sesion"){ 
// 	session_start();
// 	$resultStatus 	= "ok"; 
// 	$resultText 	= "Sesion Válida";
// 	$id_usuario		= "NULL";
// 	$email 			= "NULL";
//     $nombre         = "NULL";


    


// 	if(isset($_SESSION['id_sesion']) AND isset($_SESSION['email'])){
                
// 		$query = "SELECT COUNT(id_usuario) AS existe_usuario, id_usuario, email, nombre FROM usuarios WHERE id_usuario = ".$_SESSION['id_sesion'];
// 		$existe_usuario 	= GetValueSQL($query,"existe_usuario");
// 		if($existe_usuario < 1){
// 			$resultStatus 	= "error"; 
// 			$resultText 		= "Sesion NO válida";
// 		}else{
			
// 			$id_usuario 	= GetValueSQL($query,"id_usuario");
// 			$email      	= GetValueSQL($query,"email");
// 			$nombre 		= GetValueSQL($query,"nombre");
		
// 		}		

// 	}else{
// 		$resultStatus 	= "error"; 
// 		$resultText 		= "Sesion NO válida";
// 	}


// 	$result = array(
// 		'id_usuario' 		=> $id_usuario,
// 		'email' 			=> $email, 
//         'nombre'            => $nombre,
// 		'result' 			=> $resultStatus, 
// 		'result_text' 		=> $resultText
// 	);	 	 
	
// 	XML_Envelope($result);     
// 	exit;
// }



// if (Requesting("action")=="inicia_sesion"){ 	
// 	$login_email			= Requesting("login_email");
// 	$login_password 	= Requesting("login_password");	
// 	$resultStatus 	= "ok"; 
// 	$resultText 		= "Inicio de sesión exitoso.";
// 	$aidi		 			= "";  
// 	$avance 			= 1;	
// 	$id_tipo_usuario 	= "";
// 	$pagina_inicio 		= "";
//     $nombre_usuario = "";
	 
// 	$query = "SELECT COUNT(id_usuario) AS existe, id_usuario AS id_sesion, email, nombre FROM usuarios WHERE email = '".$login_email."' AND password = '".md5($login_password)."'";
// 	$existe = GetValueSQL($query,"existe");
// 	if($existe == 0){
// 		$resultStatus 	= "error"; 
// 		$resultText 		= "Los datos ingresados son incorrectos.";
// 	}else{		
// 		$id_sesion 	= GetValueSQL($query,"id_sesion");
//         $nombre_usuario = GetValueSQL($query, 'nombre');
//         /*Define la pagina de inicio*/
// 		/* Si por cualquier motivo existe una sesión, la destruye primero */	
// 		session_start();
//         session_destroy();
//         session_start();
// 		$_SESSION['id_sesion'] 		= $id_sesion; 
// 		$_SESSION['email'] 			= $login_email;						
// 	} 
	 	
// 	$result = array( 
// 		'pagina_inicio' 	=> $pagina_inicio, 
// 		'result' 					=> $resultStatus, 
// 		'result_text' 			=> $resultText, 
// 		'nombre_usuario' 	=> $nombre_usuario 
// 	);	 

// 	XML_Envelope($result);     
// 	exit;
 
// }


// if(Requesting("action")=="registro_user"){
//     $registro_nombre        = Requesting("registro_nombre");
//     $registro_apaterno      = Requesting("registro_apaterno");
//     $registro_amaterno      = Requesting("registro_amaterno");
//     $registro_telefono      = Requesting("registro_telefono");
//     $registro_email         = Requesting("registro_email");
//     $registro_password      = Requesting("registro_password");

//     $resultStatus = 'ok';
//     $resultText = '';

//     $query1 = "SELECT COUNT(*) AS existe FROM usuarios WHERE email = '".$registro_email."'";
//     $existe = GetValueSQL($query1, 'existe');
//     if($existe > 0){
//         $resultText = 'El correo electrónico ya existe. Ingresa uno nuevo.';
//         $resultStatus = 'error';
//     } else{
//         $query2 = 'INSERT INTO usuarios (nombre, apaterno, amaterno, email, password, telefono) VALUES ("'.$registro_nombre.'", "'.$registro_apaterno.'", "'.$registro_amaterno.'", "'.$registro_email.'", "'.md5($registro_password).'", "'.$registro_telefono.'")';
//         if(ExecuteSQL($query2)){
//             $resultText = 'Se ha creado la cuenta con éxito. Por favor inicia sesión.';
//         }
//     }


//     $result = array( 
// 		'result' 					=> $resultStatus, 
// 		'result_text' 			=> $resultText, 
// 	);	 

// 	XML_Envelope($result);     
// 	exit;
// }




// if (Requesting("action")=="cerrar_sesion"){
// 	$resultStatus 	= "ok"; 
// 	$resultText 		= "Sesion Cerrada";	
	
//     session_start();
// 	session_destroy();
	
// 	$result = array(
// 		'result' 						=> $resultStatus, 
// 		'result_text' 				=> $resultText
// 	);	 
// 	XML_Envelope($result);     
// 	exit;
// }




?>