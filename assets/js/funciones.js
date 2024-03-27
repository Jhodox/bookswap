

$(document).ready(function() { 
	// valida_sesion();	
	
	
});

 
// function valida_sesion(){
// 	console.log("Validando sesion...");
// 	$.post("controller.php", 
// 		{ 	action : "valida_sesion"
// 		}, end_valida_sesion);  
	
// }
// function end_valida_sesion(xml){
// 	$(xml).find("response").each(function(i){		  
// 		if ($(this).find("result").text()=="ok"){ 
// 			console.log("Sesion Validada");
// 			$("#acciones_usuario").html('<a class="header-user" href="javascript:cerrar_sesion()"><i class="fa-solid fa-right-from-bracket"></i></a>');
// 			$("#perfil").html('<a class="header-user" href="perfil"><i class="fa-solid fa-user"></i></a>');
// 			$("#nombre_usuario").html($(this).find("nombre").text());	
// 			$("#id_usuario").val($(this).find("id_usuario").text());

// 		}else{
// 			console.log("Sesion NO Validada");
// 			$("#acciones_usuario").html('<a class="header-user" href="login"><i class="fa fa-user" aria-hidden="true"></i></a>');
// 		}
// 	});
// }



// function inicia_sesion(e){
// 		e.preventDefault();
// 	var login_email  = $("#login_email").val();
// 	var login_password  = $("#login_password").val();
// 	$.post("controller.php",
// 		{ 	action 					: "inicia_sesion",
// 			login_email 		: login_email,
// 			login_password 	: login_password 
// 		}, end_inicia_sesion);
// }
// function end_inicia_sesion(xml){	   
// 	$(xml).find("response").each(function(i){		 
// 		if ($(this).find("result").text()=="ok"){ 
// 			console.log("Logeado"); 
// 			window.location.href  = 'index';
// 			//valida_sesion();			 
// 		}else{
// 			swal("Error", $(this).find("result_text").text(), "error");
// 		}
// 	});
// }



// function registro_user(){
// 	console.log("Registrando...");
// 	var registro_nombre  	= $("#registro_nombre").val();
// 	var registro_apaterno  	= $("#registro_apaterno").val();
// 	var registro_amaterno  	= $("#registro_amaterno").val();
// 	var registro_telefono 	= $("#registro_telefono").val();
// 	var registro_email 		= $("#registro_email").val();
// 	var registro_password  	= $("#registro_password").val();
// 	var registro_rep_password = $("#registro_rep_password").val();

// 	var continua = 1;
// 	var motivo_error = '';


// 	$("#form_registro .obligatorio").each(function (index) {
// 		if($(this).val() == ""){
// 				$(this).css("border", "2px solid #9B2F2F");
// 				continua = 0;
// 				motivo_error = "Llena todos los campos marcados como OBLIGATORIO";
// 		} else{
// 			$(this).css("border", "2px solid #ebedec");
// 		}
// 	});

	
// 	if( !validateEmail(registro_email)) {
// 		$("#registro_email").css("border", "2px solid #9B2F2F");
// 		motivo_error = "Ingresa un correo electrónico VÁLIDO.";
// 		continua = 0; 
// 	}

// 	if(isNaN($("#registro_telefono").val())){
// 		motivo_error = "El teléfono únicamente debe contener NÚMEROS.";
// 		continua = 0;
// 	}

// 	if(registro_password != registro_rep_password){
// 		motivo_error = "Las contraseñas NO COINCIDEN.";
// 		continua = 0; 
// 	}


// 	 if(continua == 1){
// 		$("#form_registro .obligatorio").each(function (index) {
// 			$(this).css("border", "2px solid #ebedec");
// 		});

// 		$.post("controller.php",
// 		{ 	action 					: "registro_user",
// 			registro_nombre			: registro_nombre,
// 			registro_apaterno		: registro_apaterno,
// 			registro_amaterno		: registro_amaterno,
// 			registro_telefono		: registro_telefono,
// 			registro_email			: registro_email,
// 			registro_password		: registro_password
// 		}, end_registro_user);
// 	 } else{
// 		// Swal.fire({
// 		// 	icon: 'error',
// 		// 	title: 'Error',
// 		// 	text: motivo_error,
// 		// 	timer: 1300,
// 		// 	timerProgressBar: true,
// 		// })
// 		swal("Error", motivo_error, "error");
// 	 }
	
// }

// function end_registro_user(xml){	   
// 	$(xml).find("response").each(function(i){		 
// 		if ($(this).find("result").text()=="ok"){  	
// 			$("#form_registro")[0].reset();
// 			 swal("¡Correcto!", $(this).find("result_text").text(), "success");
// 		}else{		
// 			 swal("¡Error!", $(this).find("result_text").text(), "error");
// 		}
// 	});
// }




// function cerrar_sesion(){	
// 	console.log("Cerrando sesion");
// 	$.post("controller.php",
// 		{ 	action 					: "cerrar_sesion"
// 		}, end_cerrar_sesion);
// }
// function end_cerrar_sesion(xml){	  
// 	console.log("Sesion cerrada"); 
// 	$(xml).find("response").each(function(i){		 
// 		if ($(this).find("result").text()=="ok"){  
// 			window.location.href  = "index.php";	 
// 		}else{
// 		}
// 	});
// }



















function validateEmail($email) {
	var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	return emailReg.test( $email );
  }


  function fecha_formato_sql(fecha){  
	var res = fecha.split("-");
	var dia = res[0];
	var mes = res[1];
	var ano = res[2];
	var mes_num = "0";
	switch (mes){
		case "Ene": mes_num = "01"; break;
		case "Feb": mes_num = "02"; break;
		case "Mar": mes_num = "03"; break;
		case "Abr": mes_num = "04"; break;
		case "May": mes_num = "05"; break;
		case "Jun": mes_num = "06"; break;
		case "Jul": mes_num = "07"; break;
		case "Ago": mes_num = "08"; break;
		case "Sep": mes_num = "09"; break;
		case "Oct": mes_num = "10"; break;
		case "Nov": mes_num = "11"; break;
		case "Dic": mes_num = "12"; break;
	}	
	var nueva_fecha = ano + "-" + mes_num + "-" + dia;
	return nueva_fecha;
}