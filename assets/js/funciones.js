$("#btn_login").click(inicia_sesion);
$("#btn_registro").click(registro_user);



$(document).ready(function() { 
	valida_sesion();	
	
	
});

 
function valida_sesion(){
	console.log("Validando sesion...");
	$.post("controller.php", 
		{ 	action : "valida_sesion"
		}, end_valida_sesion);  
	
}
function end_valida_sesion(xml){
	$(xml).find("response").each(function(i){		  
		if ($(this).find("result").text()=="ok"){ 
			console.log("Sesion Validada");
			// $("#acciones_usuario").html('<a href="javascript:cerrar_sesion()" title="Cerrar sesión"><i class="icon-exit" style="font-size: 30px"></i></a>');
			// $("#perfil").html('<a class="" href="perfil"><i class="icon-user"></i><p></p></p></a> <a href="perfil"><i class="icon-user"></i><p></p></p></a>');

			// $("#acciones_usuario_mobile").html('<a href="javascript:cerrar_sesion()"  title="Cerrar sesión"><i class="icon-exit" style="font-size: 30px"></i></a>');
			// $("#perfil_mobile").html('<a class="" href="perfil"><i class="icon-user"></i></a>');
			// $("#nombre_usuario").html($(this).find("nombre").text());	
			// $("#id_usuario").val($(this).find("id_usuario").text());

		}else{
			console.log("Sesion NO Validada");
			$("#acciones_usuario").html('<a href="login">Ingresar</a>');
			$("#acciones_usuario_mobile").html('<a href="login">Ingresar</a>');
		}
	});
}



function inicia_sesion(e){
	e.preventDefault();
	var login_email  = $("#login_email").val();
	var login_password  = $("#login_password").val();
	$.post("controller.php",
		{ 	action 					: "inicia_sesion",
				login_email 		: login_email,
				login_password 		: login_password 
		}, end_inicia_sesion);
}
function end_inicia_sesion(xml){	   
	$(xml).find("response").each(function(i){		 
		if ($(this).find("result").text()=="ok"){ 
			console.log("Logeado"); 
			window.location.href  = 'index';
			//valida_sesion();			 
		}else{
			swal("Error", $(this).find("result_text").text(), "error");
		}
	});
}



function registro_user(e){
	e.preventDefault();
	// console.log("Registrando...");

	var registro_nombre  	= $("#registro_nombre").val();
	var registro_apellidos 	= $("#registro_apellidos").val();
	var registro_codigo 	= $("#registro_codigo").val();
	var registro_carrera 	= $("#registro_carrera").val();
	var registro_ciclo_ingreso 	= $("#registro_ciclo_ingreso").val();
	var registro_email 		= $("#registro_email").val();
	var registro_password  	= $("#registro_password").val();
	var registro_confirm_password = $("#registro_confirm_password").val();

	var continua = 1;
	var motivo_error = '';


	$("#form_registro .obligatorio").each(function (index) {
		// if($(this).val() == ""){
		// 		$(this).css("border", "2px solid #CB2413");
		// 		continua = 0;
		// 		motivo_error = "Llena todos los campos.";
		// } else{
		// 	$(this).css("border", "2px solid #dddddd");
		// }


		if ($(this).is('select')) { 
			if ($(this).val() == 0) { 
				$(this).css("border", "2px solid #CB2413");
				continua = 0;
				motivo_error = "Selecciona una opción en todos los campos.";
			} else {
				$(this).css("border", "2px solid #dddddd");
			}
		} else {
			if ($(this).val() == "") {
				$(this).css("border", "2px solid #CB2413");
				continua = 0;
				motivo_error = "Llena todos los campos.";
			} else {
				$(this).css("border", "2px solid #dddddd");
			}
		}
	});


	if(!validateCodigoUDG(registro_codigo)){
		$("#registro_codigo").css("border", "2px solid #CB2413");
		motivo_error = "Ingresa un código de estudiante válido.";
		continua = 0; 
	}

	
	if( !validateEmail(registro_email)) {
		$("#registro_email").css("border", "2px solid #CB2413");
		motivo_error = "Ingresa un correo institucional válido.";
		continua = 0; 
	}


	if(registro_password != registro_confirm_password){
		motivo_error = "Las contraseñas no coinciden.";
		continua = 0; 
	}


	 if(continua == 1){
		$("#form_registro .obligatorio").each(function (index) {
			$(this).css("border", "2px solid #dddddd");
		});

		$.post("controller.php",
		{ 	action 					: "registro_user",
				registro_nombre			: registro_nombre,
				registro_apellidos		: registro_apellidos,
				registro_codigo			: registro_codigo,
				registro_carrera		: registro_carrera,
				registro_ciclo_ingreso	: registro_ciclo_ingreso,
				registro_email			: registro_email,
				registro_password		: registro_password
		}, end_registro_user);
	 } else{
		swal("Error", motivo_error, "error");
	 }
	
}

function end_registro_user(xml){	   
	$(xml).find("response").each(function(i){		 
		if ($(this).find("result").text()=="ok"){  	
			$("#form_registro")[0].reset();
			 swal("¡Correcto!", $(this).find("result_text").text(), "success");
		}else{		
			 swal("¡Error!", $(this).find("result_text").text(), "error");
		}
	});
}




function cerrar_sesion(){	
	console.log("Cerrando sesion");
	$.post("controller.php",
		{ 	action 					: "cerrar_sesion"
		}, end_cerrar_sesion);
}
function end_cerrar_sesion(xml){	  
	console.log("Sesion cerrada"); 
	$(xml).find("response").each(function(i){		 
		if ($(this).find("result").text()=="ok"){  
			window.location.href  = "index";	 
		}else{
		}
	});
}










function llenar_select_carreras(){
	// console.log("llega aqui");
	$.post("controller.php",
	{	action : "llenar_select_carreras",
	}, end_llenar_select_carreras);
}

function end_llenar_select_carreras(xml){
	$(xml).find("response").each(function(i){		 
		if ($(this).find("result").text()=="ok"){       
			$("#registro_carrera").html($(this).find("select_carrera").text()); 
		}
		
	// console.log("pasa aqui");
	}); 
}


function llenar_select_ciclos(){
	$.post("controller.php",
	{	action : "llenar_select_ciclos",
	}, end_llenar_select_ciclos);
}

function end_llenar_select_ciclos(xml){
	$(xml).find("response").each(function(i){		 
		if ($(this).find("result").text()=="ok"){       
			$("#registro_ciclo_ingreso").html($(this).find("select_ciclo").text()); 
		}
	}); 
}


function sumar_visitas(id_libro){
	$.post("controller.php",
    {    action : "sumar_visitas",
        id_libro : id_libro
    }, end_sumar_visitas);
}

function end_sumar_visitas(xml){
	$(xml).find("response").each(function(i){		 
		if ($(this).find("result").text()=="ok"){       
			
		}
	}); 
}

function wishlist_remove(id_usuario, id_libro, event){
	event.preventDefault();

	$.post("controller.php",
    {    action : "wishlist_remove",
		id_usuario	: id_usuario,
        id_libro : id_libro
    }, end_wishlist_remove);
}

function end_wishlist_remove(xml){
	$(xml).find("response").each(function(i){         
        if ($(this).find("result").text()=="ok"){   
			// swal("¡Correcto!", "¡Libro eliminado de tu wishlist!", "success");

			Swal.fire({
				icon: 'success',
				title: '¡Correcto!',
				text: '¡Libro eliminado de tu wishlist!',
				timer: 1000,
				timerProgressBar: false,
			})

            var id_usuario = $(this).find("id_usuario").text();
            var id_libro = $(this).find("id_libro").text();      
            $("#wishlist_spot").html('<a onclick="wishlist_add('+id_usuario+', '+id_libro+', event)" href=""><i class="fa-regular fa-heart fa-xl"></i></a>');
			// $("#wishlist_spot").load(location.href + " #wishlist_spot"); 

			$("#header_icons").load(location.href + " #header_icons"); 
			$("#header_icons_mobile").load(location.href + " #header_icons_mobile"); 

        } else{
			// swal("¡Error!", $(this).find("result_text").text(), "error");

			Swal.fire({
				icon: 'error',
				title: '¡Error!',
				text: $(this).find("result_text").text(),
				timer: 1000,
				timerProgressBar: false,
			})
		}
    });
}


function wishlist_add(id_usuario, id_libro, event){
	event.preventDefault();

	$.post("controller.php",
    {    action : "wishlist_add",
		id_usuario	: id_usuario,
        id_libro : id_libro
    }, end_wishlist_add);
}

function end_wishlist_add(xml){
	$(xml).find("response").each(function(i){         
        if ($(this).find("result").text()=="ok"){     
			// swal("Correcto", "¡Libro agregado a tu wishlist!", "success");
			Swal.fire({
				icon: 'success',
				title: '¡Correcto!',
				text: '¡Libro agregado a tu wishlist!',
				timer: 1000,
				timerProgressBar: false,
			})

            var id_usuario = $(this).find("id_usuario").text();
            var id_libro = $(this).find("id_libro").text();  
            $("#wishlist_spot").html('<a onclick="wishlist_remove('+id_usuario+', '+id_libro+', event)" href=""><i class="fas fa-heart fa-xl"></i></a>');
			// $("#wishlist_spot").load(location.href + " #wishlist_spot"); 

			$("#header_icons").load(location.href + " #header_icons"); 	
			$("#header_icons_mobile").load(location.href + " #header_icons_mobile"); 

        } else{
			// swal("¡Error!", $(this).find("result_text").text(), "error");
			
			Swal.fire({
				icon: 'error',
				title: '¡Error!',
				text: $(this).find("result_text").text(),
				timer: 1000,
				timerProgressBar: false,
			})
		}
    });
}


function solicitar_libro(id_usuario, id_libro, event) { 
	event.preventDefault();

	$.post("controller.php",
    {    action 	: "solicitar_libro",
       	 	id_usuario  : id_usuario,
        	id_libro 	: id_libro
    }, end_solicitar_libro);
}

function end_solicitar_libro(xml){
	$(xml).find("response").each(function(i){         
        if ($(this).find("result").text()=="ok"){     
			// swal("Correcto", $(this).find("result_text").text(), "success");

			Swal.fire({
				icon: 'success',
				title: '¡Correcto!',
				text: $(this).find("result_text").text(),
				timer: 1500,
				timerProgressBar: true,
			})
        } else{

			Swal.fire({
				icon: $(this).find("result").text(),
				title: '¡Error!',
				text: $(this).find("result_text").text(),
				timer: 1500,
				timerProgressBar: true,
			})
		}
    });
}







function validateCodigoUDG(codigo) {
    var regex = /^[0-9]{9}$/;
    
    if (regex.test(codigo)) {
        return true; 
    } else {
        return false; 
    }
}


function validateEmail(email) {
	var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	var dominioUdgReg = /\.udg\.mx$/;


	if(emailReg.test(email) && dominioUdgReg.test(email)){
        return true; //El email es válido y termina con ".udg.mx"
    } else {
        return false; //El email no es válido o no termina con ".udg.mx"
    }
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