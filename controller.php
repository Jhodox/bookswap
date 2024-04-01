<?php
	require_once "include/functions.php";
	require_once "include/db_tools.php";


    use PHPMailer\PHPMailer\PHPMailer;
	
	require 'include/PHPMailer2022/src/Exception.php';
	require 'include/PHPMailer2022/src/PHPMailer.php';
	require 'include/PHPMailer2022/src/SMTP.php';		
	require_once "extensiones/vendor/autoload.php";

    
if (Requesting("action")=="valida_sesion"){ 
	session_start();
	$resultStatus 	= "ok"; 
	$resultText 	= "Sesion Válida";
	$id_usuario		= "NULL";
	$email 			= "NULL";
    $nombre         = "NULL";


	if(isset($_SESSION['id_sesion']) AND isset($_SESSION['email'])){
                
		$query = "SELECT COUNT(id_usuario) AS existe_usuario, id_usuario, correo, nombres FROM usuarios WHERE id_usuario = ".$_SESSION['id_sesion'];
		//echo $query;
		$existe_usuario 	= GetValueSQL($query,"existe_usuario");
		if($existe_usuario < 1){
			$resultStatus 	= "error"; 
			$resultText 		= "Sesion NO válida";
		}else{
			
			$id_usuario 	= GetValueSQL($query,"id_usuario");
			$email      	= GetValueSQL($query,"correo");
			$nombres 		= GetValueSQL($query,"nombres");
		
		}		

	}else{
		$resultStatus 	= "error"; 
		$resultText 		= "Sesion NO válida";
	}


	$result = array(
		'id_usuario' 		=> $id_usuario,
		'email' 			=> $email, 
        'nombres'           => $nombres,
		'result' 			=> $resultStatus, 
		'result_text' 		=> $resultText
	);	 	 
	
	XML_Envelope($result);     
	exit;
}



if (Requesting("action")=="inicia_sesion"){ 	
	$login_email		= Requesting("login_email");
	$login_password 	= Requesting("login_password");	

	$resultStatus 	= "ok"; 
	$resultText 		= "Inicio de sesión exitoso.";
	$avance 			= 1;	
    $nombre_usuario = "";
	 
	$query = "SELECT COUNT(id_usuario) AS existe, id_usuario AS id_sesion, correo FROM usuarios WHERE correo = '".$login_email."' AND password = '".md5($login_password)."'";
	$existe = GetValueSQL($query,"existe");
	if($existe == 0){
		$resultStatus 	= "error"; 
		$resultText 		= "Verifique su correo o contraseña.";
	}else{		
		$id_sesion 	= GetValueSQL($query,"id_sesion");
        /*Define la pagina de inicio*/
		/* Si por cualquier motivo existe una sesión, la destruye primero */	
		session_start();
        session_destroy();
        session_start();
		$_SESSION['id_sesion'] 		= $id_sesion; 
		$_SESSION['email'] 			= $login_email;						
	} 
	 	
	$result = array( 
		'result' 			=> $resultStatus, 
		'result_text' 		=> $resultText, 
	);	 

	XML_Envelope($result);     
	exit;
 
}


if(Requesting("action")=="registro_user"){
    $registro_nombre        = Requesting("registro_nombre");
    $registro_apellidos     = Requesting("registro_apellidos");
    $registro_codigo      	= Requesting("registro_codigo");
    $registro_carrera	    = Requesting("registro_carrera");
    $registro_ciclo_ingreso = Requesting("registro_ciclo_ingreso");
    $registro_email         = Requesting("registro_email");
    $registro_password      = Requesting("registro_password");

    $resultStatus = 'ok';
    $resultText = '';

    $query1 = "SELECT COUNT(*) AS existe FROM usuarios WHERE codigo_usuario = '".$registro_codigo."'";
    $existe = GetValueSQL($query1, 'existe');

    if($existe > 0){
        $resultText = 'El código del estudiante ya existe.';
        $resultStatus = 'error';

    } else{

		$query2 = "SELECT COUNT(*) AS existe FROM usuarios WHERE correo = '".$registro_email."'";
		$existe2 = GetValueSQL($query2, 'existe');

		if($existe2 > 0){
			$resultText = 'El correo institucional del estudiante ya existe.';
			$resultStatus = 'error';

		} else{
			$query3 = 'INSERT INTO usuarios (nombres, apellidos, codigo_usuario, carrera, ciclo_ingreso, correo, password, status)
			VALUES ("'.$registro_nombre.'", "'.$registro_apellidos.'", "'.$registro_codigo.'", "'.$registro_carrera.'", "'.$registro_ciclo_ingreso.'", "'.$registro_email.'", "'.md5($registro_password).'", 2)';
			
			if(ExecuteSQL($query3)){
				$resultText = 'Se ha creado la cuenta con éxito. Por favor inicia sesión.';
				
			} else{
				$resultText = 'Ha ocurrido un error. Inténtalo de nuevo.';
				$resultStatus = 'error';

			}
		}
    }


    $result = array( 
		'result' 				=> $resultStatus, 
		'result_text' 			=> $resultText, 
	);	 

	XML_Envelope($result);     
	exit;
}




if (Requesting("action")=="cerrar_sesion"){
	$resultStatus 	= "ok"; 
	$resultText 		= "Sesion Cerrada";	
	
    session_start();
	session_destroy();
	
	$result = array(
		'result' 						=> $resultStatus, 
		'result_text' 				=> $resultText
	);	 
	XML_Envelope($result);     
	exit;
}




if(Requesting("action")=="llenar_select_carreras"){
	$resultStatus 	= "ok";
	$resultText 		= "Correcto.";	 
	$xmlRow = "<option value='0'>Selecciona carrera...</option>";

	$query = "SELECT * FROM carreras ORDER BY id_carrera ASC";
	$carreras = DatasetSQL($query);
	while($row1 = mysqli_fetch_array($carreras)){
		$xmlRow .= "<option value='".$row1['id_carrera']."'>".$row1['carrera']."</option>";
	}
	
	$result = array( 
		'select_carrera' 	=> $xmlRow,   
		'result' 			=> $resultStatus, 
		'result_text' 		=> $resultText
	);		 
	XML_Envelope($result);  
	exit;		
}


if(Requesting("action")=="llenar_select_ciclos"){
	$resultStatus 	= "ok";
	$resultText 		= "Correcto.";	 
	$xmlRow = "<option value='0'>Selecciona ciclo de ingreso...</option>";

	$query = "SELECT * FROM ciclos ORDER BY id_ciclo ASC";
	$ciclos = DatasetSQL($query);
	while($row1 = mysqli_fetch_array($ciclos)){
		$xmlRow .= "<option value='".$row1['id_ciclo']."'>".$row1['ciclo']."</option>";
	}
	
	$result = array( 
		'select_ciclo' 	=> $xmlRow,   
		'result' 			=> $resultStatus, 
		'result_text' 		=> $resultText
	);		 
	XML_Envelope($result);  
	exit;		
}


if(Requesting("action")=="sumar_visitas"){
	$id_libro = Requesting("id_libro");
	$resultText = "Correcto.";
	$resultStatus = "ok";

	$query1 = "SELECT COUNT(*) AS cuantos FROM libros WHERE id_libro = $id_libro";
	$cuantos = GetValueSQL($query1, 'cuantos');

	if($cuantos > 0){
		$query2 = "UPDATE libros SET num_visitas = num_visitas + 1 WHERE id_libro = $id_libro";
        ExecuteSQL($query2);
	}

	$result = array(    
		'result' 			=> $resultStatus, 
		'result_text' 		=> $resultText
	);		 
	XML_Envelope($result);  
	exit;	
}



if(Requesting("action")=="wishlist_remove"){
	$id_usuario = Requesting("id_usuario");
	$id_libro = Requesting("id_libro");

	$resultText = "Correcto.";
	$resultStatus = "ok";

	
	$query1 = "DELETE FROM wishlist WHERE id_usuario = $id_usuario AND id_libro = $id_libro";
	if(ExecuteSQL($query1)){
		$result = "Correcto.";
		$resultStatus = "ok";
	} else {
		$result = "Ocurrió un error.";
		$resultStatus = "error";
	}


	$result = array(    
		'id_usuario' 		=> $id_usuario,
		'id_libro' 			=> $id_libro, 
		'result' 			=> $resultStatus, 
		'result_text' 		=> $resultText
	);		 
	XML_Envelope($result);  
	exit;	
    

}




if(Requesting("action")=="wishlist_add"){
	$id_usuario = Requesting("id_usuario");
	$id_libro = Requesting("id_libro");

	$resultText = "Correcto.";
	$resultStatus = "ok";

	
	$query1 = "SELECT COUNT(*) AS existe FROM wishlist WHERE id_usuario = $id_usuario AND id_libro = $id_libro";
	$existe = GetValueSQL($query1, 'existe');

	if($existe > 0){
		$result = "El libro ya se encuentra en la wishlist.";
		$resultStatus = "error";
	} else{
		$query2 = "INSERT INTO wishlist (id_usuario, id_libro) VALUES ($id_usuario, $id_libro)";
        if(ExecuteSQL($query2)){
            $result = "Correcto.";
            $resultStatus = "ok";
        } else {
            $result = "Ocurrió un error.";
            $resultStatus = "error";
        }
	}


	$result = array(   
		'id_usuario' 		=> $id_usuario,
		'id_libro' 			=> $id_libro, 
		'result' 			=> $resultStatus, 
		'result_text' 		=> $resultText
	);		 
	XML_Envelope($result);  
	exit;	
    

}

?>