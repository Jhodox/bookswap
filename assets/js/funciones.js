$("#btn_login").click(inicia_sesion);
$("#btn_registro").click(registro_user);
$("#btn-add_carrito").click(add_carrito);


$(document).ready(function() { 
	valida_sesion();	
	$("#transferencia-container").hide();
	$("#carrito_header").load(location.href + " #carrito_header"); 
	$("#wishlist_header").load(location.href + " #wishlist_header"); 
	$("#div-guardar_domicilio").hide();
	$("#form_info").hide();
	$("#form_password").hide();
	
});


function inicia_sesion(e){
		e.preventDefault();
	var login_email  = $("#login_email").val();
	var login_password  = $("#login_password").val();
	$.post("controller.php",
		{ 	action 					: "inicia_sesion",
			login_email 		: login_email,
			login_password 	: login_password 
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



function registro_user(){
	console.log("Registrando...");
	var registro_nombre  	= $("#registro_nombre").val();
	var registro_apaterno  	= $("#registro_apaterno").val();
	var registro_amaterno  	= $("#registro_amaterno").val();
	var registro_telefono 	= $("#registro_telefono").val();
	var registro_email 		= $("#registro_email").val();
	var registro_password  	= $("#registro_password").val();
	var registro_rep_password = $("#registro_rep_password").val();

	var continua = 1;
	var motivo_error = '';


	$("#form_registro .obligatorio").each(function (index) {
		if($(this).val() == ""){
				$(this).css("border", "2px solid #9B2F2F");
				continua = 0;
				motivo_error = "Llena todos los campos marcados como OBLIGATORIO";
		} else{
			$(this).css("border", "2px solid #ebedec");
		}
	});

	
	if( !validateEmail(registro_email)) {
		$("#registro_email").css("border", "2px solid #9B2F2F");
		motivo_error = "Ingresa un correo electrónico VÁLIDO.";
		continua = 0; 
	}

	if(isNaN($("#registro_telefono").val())){
		motivo_error = "El teléfono únicamente debe contener NÚMEROS.";
		continua = 0;
	}

	if(registro_password != registro_rep_password){
		motivo_error = "Las contraseñas NO COINCIDEN.";
		continua = 0; 
	}


	 if(continua == 1){
		$("#form_registro .obligatorio").each(function (index) {
			$(this).css("border", "2px solid #ebedec");
		});

		$.post("controller.php",
		{ 	action 					: "registro_user",
			registro_nombre			: registro_nombre,
			registro_apaterno		: registro_apaterno,
			registro_amaterno		: registro_amaterno,
			registro_telefono		: registro_telefono,
			registro_email			: registro_email,
			registro_password		: registro_password
		}, end_registro_user);
	 } else{
		// Swal.fire({
		// 	icon: 'error',
		// 	title: 'Error',
		// 	text: motivo_error,
		// 	timer: 1300,
		// 	timerProgressBar: true,
		// })
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
			$("#acciones_usuario").html('<a class="header-user" href="javascript:cerrar_sesion()"><i class="fa-solid fa-right-from-bracket"></i></a>');
			$("#perfil").html('<a class="header-user" href="perfil"><i class="fa-solid fa-user"></i></a>');
			$("#nombre_usuario").html($(this).find("nombre").text());	
			$("#id_usuario").val($(this).find("id_usuario").text());

		}else{
			console.log("Sesion NO Validada");
			$("#acciones_usuario").html('<a class="header-user" href="login"><i class="fa fa-user" aria-hidden="true"></i></a>');
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
			window.location.href  = "index.php";	 
		}else{
		}
	});
}


function llenar_form_info(tipo_info){
	var id_usuario = $("#id_usuario").val();

	if(tipo_info == 1){
		$("#form_info").show('slow');
		$("#form_password").hide('slow');
	} else if(tipo_info == 2){
		$("#form_info").hide('slow');
		$("#form_password").show('slow');
	}

	$.post("controller.php",
		{ 	action 			: "llenar_form_info",
			tipo_info 		: tipo_info,
			id_usuario		: id_usuario
		}, end_llenar_form_info);
}

function end_llenar_form_info(xml){
	$(xml).find("response").each(function(i){		 
		if ($(this).find("result").text()=="ok"){  
			$("#info_nombre").val($(this).find("nombre").text());	 
			$("#info_apaterno").val($(this).find("apaterno").text());	
			$("#info_amaterno").val($(this).find("amaterno").text());	
			$("#info_telefono").val($(this).find("telefono").text());	
			$("#info_email").val($(this).find("email").text());	
		}
	});
}


function guardar_nva_info(){
	var id_usuario = $("#id_usuario").val();
	var nombre = $("#info_nombre").val();
	var apaterno = $("#info_apaterno").val();
	var amaterno = $("#info_amaterno").val();
	var telefono = $("#info_telefono").val();
	var email = $("#info_email").val();

	var continua = 1;


	$("#form_cambiar_info .obligatorio").each(function (index) {
		if($(this).val() == ""){
				$(this).css("border", "2px solid #9B2F2F");
				continua = 0;
				motivo_error = "Llena todos los campos marcados como OBLIGATORIO";
		} else{
			$(this).css("border", "2px solid #ebedec");
		}
	});

	
	if( !validateEmail(email)) {
		$("#info_email").css("border", "2px solid #9B2F2F !important");
		motivo_error = "Ingresa un correo electrónico VÁLIDO.";
		continua = 0; 
	}

	if(isNaN($("#info_telefono").val())){
		$("#info_telefono").css("border", "2px solid #9B2F2F !important");
		motivo_error = "El teléfono únicamente debe contener NÚMEROS.";
		continua = 0;
	}


	if(continua == 1){
		$("#form_cambiar_info .obligatorio").each(function (index) {
			$(this).css("border", "2px solid #ebedec");
		});

		$.post("controller.php",
		{ 	action 			: "guardar_nva_info",
			id_usuario 		: id_usuario,
			nombre			: nombre,
			apaterno		: apaterno,
			amaterno		: amaterno,
			telefono		: telefono,
			email			: email
		}, end_guardar_nva_info);
	 } else{
		// Swal.fire({
		// 	icon: 'error',
		// 	title: 'Error',
		// 	text: motivo_error,
		// 	timer: 1300,
		// 	timerProgressBar: true,
		// })
		swal("Error", motivo_error, "error");
	 }

}

function end_guardar_nva_info(xml){
	$(xml).find("response").each(function(i){		 
		if ($(this).find("result").text()=="ok"){  	
			$("#form_info").hide('slow');
			$("#form_password").hide('slow');
			//$("#info-perfil").load(location.href + "#info-perfil"); 
			 swal("¡Correcto!", $(this).find("result_text").text(), "success");
		}else{		
			 swal("¡Error!", $(this).find("result_text").text(), "error");
		}
	});
}

function guardar_nva_password(){
	var id_usuario = $("#id_usuario").val();
	var password_actual = $("#info_password_actual").val();
	var nueva_password = $("#info_password_nueva").val();
	var confirm_passowrd = $("#info_password_conf").val();

	var continua = 1;


	$("#form_cambiar_password .obligatorio").each(function (index) {
		if($(this).val() == ""){
				$(this).css("border", "2px solid #9B2F2F");
				continua = 0;
				motivo_error = "Llena todos los campos marcados como OBLIGATORIO";
		} else{
			$(this).css("border", "2px solid #ebedec");
		}
	});

	if(nueva_password != confirm_passowrd){
		motivo_error = "Las contraseñas NO COINCIDEN.";
		continua = 0; 
	}



	if(continua == 1){
		$("#form_cambiar_password .obligatorio").each(function (index) {
			$(this).css("border", "2px solid #ebedec");
		});

		$.post("controller.php",
		{ 	action 			: "guardar_nva_password",
			id_usuario 		: id_usuario,
			password_actual 	: password_actual,
			nueva_password		: nueva_password,
			confirm_passowrd	: confirm_passowrd
		}, end_guardar_password);
	 } else{
		// Swal.fire({
		// 	icon: 'error',
		// 	title: 'Error',
		// 	text: motivo_error,
		// 	timer: 1300,
		// 	timerProgressBar: true,
		// })
		swal("Error", motivo_error, "error");
	 }
}

function end_guardar_password(xml){
	$(xml).find("response").each(function(i){		 
		if ($(this).find("result").text()=="ok"){  	
			$("#form_password").hide('slow');
			$("#form_info").hide('slow');
			$("#info-perfil").load(location.href + " #info-perfil"); 
			swal("¡Correcto!", $(this).find("result_text").text(), "success");
		}else{		
			swal("¡Error!", $(this).find("result_text").text(), "error");
		}
	});
}



function recargar_header(){
	console.log("Recargando header...");
	$("#header").load(location.href + " #header"); 
}





/*variables globales*/
var guardar_tipo 	= "";

var idioma_espanol = {
    "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    },
    "buttons": {
        "copy": "Copiar",
        "colvis": "Columnas",
		"print": "Imprimir"
    }
}

function rellena_tablas(xml,$id_tabla_mostrar_datos,$ocultamiento_columnas){
	$(xml).find("response").each(function(i){		 
		if ($(this).find("result").text()=="ok"){
			/*Destruye la tabla y reinicializa valores*/
			$("#"+$id_tabla_mostrar_datos).html(""); 
			table = $('#example').DataTable();
			table.buttons().destroy(); 
			$(".dt-buttons").remove(); 
			table .clear() .draw(); 
			table.destroy(); 

			$("#"+$id_tabla_mostrar_datos).html($(this).find($id_tabla_mostrar_datos).text()); 
			/*inicializa la tabla y Carga los botones de Exportación con los datos extraidos*/	
			$('[data-toggle="tooltip"]').tooltip();
			table = $('#example').DataTable({
				dom: 'Bfrtip',
				pageLength : 10,
				buttons: [
					{  
						extend: 'excel',
						exportOptions: {
							columns: [":visible"]
						}
					},
					{
						extend: 'pdf',
						exportOptions: {
							columns: [":visible"]
						}
					},
					{
						extend: 'print',
						exportOptions: {
							columns: [":visible"]
						}
					},
					{
						extend: 'colvis',
						columns: ':gt(0)'
					}
				],
				columnDefs: [{targets:$ocultamiento_columnas,visible:false}], 
				//Manda a llamar el contenido de la variable global idioma_espanol con el objetivo de definir el lenguage para diferentes labels usados.
				language: idioma_espanol
			});
		}
	});
}


$('#amount-min').on('change', function(){
	cb_categoria();
});

$('#amount-max').on('change', function(){
	cb_categoria();
}); //Si los console se ponen fuera se guarda el penultimo cambio

$("#buscar_producto").on('change', function(){
	cb_categoria();
});

function paginacion_productos(pagina){
	
	pagina_global = pagina;
}


function cb_categoria(pagina){
	console.log('Filtros');
	var id_usuario = $("#id_usuario").val();
	var minimo = $("#amount-min").val();
	var maximo = $("#amount-max").val();
	var producto_buscado = $("#buscar_producto").val();
	var page = pagina;

	var where_categorias= $("#where_categorias").val();
	var where_marcas= $("#where_marcas").val();
	
	if(id_usuario == null){
		id_usuario = 0;
	}

	$([document.documentElement, document.body]).animate({
        scrollTop: $("#s-shop").offset().top
    }, 200);

	if(page == null){
		page = 1;
	} 

	orden = $("#select_orden").val();
	
	
	$.post("controller.php",
		{	action : "checkbox_categoria",
			id_usuario		: id_usuario,
			producto_buscado	: producto_buscado,
			minimo			: minimo,
			maximo			: maximo,
			orden			: orden, 
			page			: page,
			where_categorias	: where_categorias,
			where_marcas		: where_marcas,
		},end_cb_categoria);
}

function end_cb_categoria(xml){
	$(xml).find("response").each(function(i){		 
		if ($(this).find("result").text()=="ok"){  
			//$("#prod_filtros").html($(""));
			$("#prod_filtros").html($(this).find("cont_productos").text());		 
		}
	});
}


function add_wishlist(id_producto, id_estilo){
	var id_usuario = $("#id_usuario").val();

	$.post("controller.php",
	{	action: "add_wishlist",
		id_usuario 	: id_usuario,
		id_producto : id_producto,
		id_estilo 	: id_estilo
	}, end_add_wishlist);
}

function end_add_wishlist(xml){
	$(xml).find("response").each(function(i){		 
		if ($(this).find("result").text()=="ok"){  
			$(".wishlist_" + $(this).find("id_estilo").text()).html('<a onClick="remove_wishlist(' + $(this).find("id_producto").text() + ', ' + $(this).find("id_estilo").text() +')"><i class="fa-solid fa-heart"></i></a>');	
			$("#wishlist_header").load(location.href + " #wishlist_header"); 
			
			swal("Correcto", "Producto agregado a la lista de deseos. ", "success")
		} else{
			swal("Error", "Algo salió mal. Intenta de nuevo. ", "error")
		}
	});
}


function remove_wishlist(id_producto, id_estilo){
	var id_usuario = $("#id_usuario").val();


	$.post("controller.php",
	{	action: "remove_wishlist",
		id_usuario 	: id_usuario,
		id_producto : id_producto,
		id_estilo 	: id_estilo
	}, end_remove_wishlist);
}

function end_remove_wishlist(xml){
	$(xml).find("response").each(function(i){		 
		if ($(this).find("result").text()=="ok"){  
			$(".wishlist_" + $(this).find("id_estilo").text()).html('<a onClick="add_wishlist(' + $(this).find("id_producto").text() + ', ' + $(this).find("id_estilo").text() +')"><i class="fa-regular fa-heart"></i></a>');
			$("#wishlist_header").load(location.href + " #wishlist_header"); 	
			$("#wishlist-content").load(location.href + " #wishlist-content"); 
			
			swal("Correcto", "Producto eliminado de la lista de deseos. ", "success");
		} else{
			
			swal("Error", "Algo salió mal. Intenta de nuevo. ", "error");
		}
	});
}

function select_talla(id_talla, id_estilo){
	var id_talla = id_talla;

	$("#id_talla").val(id_talla);

	$.post("controller.php",
		{	action: "select_talla",
			id_estilo 	: id_estilo,
			id_talla	: id_talla,
		}, end_select_talla);
}

function end_select_talla(xml){
	$(xml).find("response").each(function(i){		 
		if ($(this).find("result").text()=="ok"){  
			$("#codigo").val($(this).find("codigo").text());
			$("#precio_producto").html(''); 
			if($(this).find("flag").text() == 0){
				$("#precio_producto").html('<li class="new-price">$'+$(this).find("precio_base").text()+'</li>'); 
			} else{
				$("#precio_producto").html('<div class="new-price">$'+ $(this).find("precio_descuento").text() +'</div><div class="old-price">$'+ $(this).find("precio_base").text() +'</div>'); 
			}
		} 
	});
}



function add_carrito(){
	var id_usuario = $("#id_usuario").val();
	var id_estilo = $("#id_estilo").val();
	var id_talla = $("#id_talla").val(); 
	var codigo = $("#codigo").val();
	var cantidad = $("#quanity").val();

	//console.log(id_usuario);

	if(id_usuario != 0 && id_estilo != 0 && id_talla != 0 && cantidad > 0 && codigo != 0){

		$.post("controller.php",
		{	action: "add_carrito",
			id_usuario 	: id_usuario,
			id_estilo 	: id_estilo,
			id_talla	: id_talla,
			codigo		: codigo,
			cantidad	: cantidad
		}, end_add_carrito);

	} else{
		if(id_usuario == 0){
			// Swal.fire({
			// 	icon: 'warning',
			// 	title: 'Error',
			// 	text: 'Inicia sesión para poder comprar un producto',
			// 	footer: '<a style= "color: blue" href="login">Iniciar Sesión</a>',
			// 	timer: 2000,
			// 	timerProgressBar: true,
			//   });
			swal("Error", "Inicia sesión para poder comprar un producto", "warning");
		} else if(id_talla == 0){
			
			swal("Error", "Selecciona una talla", "error");
		}  else if(cantidad <= 0){
			
			swal("Error", "Selecciona una cantidad correcta", "error");
		}  else{
			swal("Error", "Algo salió mal. Intenta de nuevo. ", "error");
		}
		console.log("No continua");
	}

}

function end_add_carrito(xml){
	$(xml).find("response").each(function(i){		 
		if ($(this).find("result").text()=="ok"){  
			$("#carrito_header").load(location.href + " #carrito_header"); 
			
			swal("Correcto", "Producto agregado al carrito. ", "success");
		} else{
			swal("Error", $(this).find("result_text").text(), "error");
		}
	});
}


function remove_carrito(id_carrito_detalle, id_carrito){

	$.post("controller.php",
	{	action: "remove_carrito_detalle",
		id_carrito_detalle 		: 	id_carrito_detalle,
		id_carrito 				: 	id_carrito
	}, end_remove_carrito_detalle);
}

function end_remove_carrito_detalle(xml){
	$(xml).find("response").each(function(i){		 
		if ($(this).find("result").text()=="ok"){  
			$("#carrito_content").load(location.href + " #carrito_content"); 
			$("#carrito_header").load(location.href + " #carrito_header"); 
			

			swal("Correcto", "Producto eliminado del carrito. ", "success");
		} else{
			
			swal("Error", "Algo salió mal. Intenta de nuevo. ", "error");
		}
	});
}


function llenar_checkbox_categorias(){
	$.post("controller.php",
	{	action : "llenar_checkbox_categorias",
	},	end_llenar_checkbox_categorias);
}

function end_llenar_checkbox_categorias(xml){
	$(xml).find("response").each(function(i){		 
		if ($(this).find("result").text()=="ok"){       
			$("#checkbox_categorias").html($(this).find("checkbox_categoria").text()); 
		}
	}); 
}


function where_categorias(id_categoria){
	console.log("Cambiando...");
	var where_old = $("#where_categorias").val();
	var seleccionado = 0;

	if($('#buscar_categ_'+id_categoria).prop('checked') ) {
		//console.log(id_marca+' Seleccionado');
		seleccionado = 1;
	} else{
		//console.log(id_marca+' NO Seleccionado');
		seleccionado = 0;
	}
	
	$.post("controller.php",
	{
		action	: "where_categorias",
		where_old 		: where_old,
		id_categoria	: id_categoria, 
		seleccionado	: seleccionado,
	}, end_where_categorias);
}

function end_where_categorias(xml){
	$(xml).find("response").each(function(i){
		if ($(this).find("result").text()=="ok"){  
			$("#where_categorias").val($(this).find("nuevo_where").text());
			cb_categoria()
		}
	});
}



function llenar_checkbox_marcas(){
	$.post("controller.php",
	{	action : "llenar_checkbox_marcas",
	},	end_llenar_checkbox_marcas);
}

function end_llenar_checkbox_marcas(xml){
	$(xml).find("response").each(function(i){		 
		if ($(this).find("result").text()=="ok"){       
			$("#checkbox_marcas").html($(this).find("checkbox_marca").text()); 
		}
	}); 
}



function where_marcas(id_marca){
	console.log("Cambiando...");
	var where_old = $("#where_marcas").val();
	var seleccionado = 0;

	if($('#buscar_marca_'+id_marca).prop('checked') ) {
		//console.log(id_marca+' Seleccionado');
		seleccionado = 1;
	} else{
		//console.log(id_marca+' NO Seleccionado');
		seleccionado = 0;
	}
	
	$.post("controller.php",
	{
		action	: "where_marcas",
		where_old 		: where_old,
		id_marca		: id_marca, 
		seleccionado	: seleccionado,
	}, end_where_marcas);
}

function end_where_marcas(xml){
	$(xml).find("response").each(function(i){
		if ($(this).find("result").text()=="ok"){  
			$("#where_marcas").val($(this).find("nuevo_where").text());
			cb_categoria()
		}
	});
}




function llenar_form_checkout(){

	var id_carrito = $("#checkout_id_carrito").val();
	var id_usuario = $("#checkout_id_usuario").val();

	$.post("controller.php",
	{	action : "llenar_form_checkout",
		id_carrito 		: id_carrito,
		id_usuario 		: id_usuario
	}, end_llenar_form_checkout);

}

function end_llenar_form_checkout(xml){

	$(xml).find("response").each(function(i){		
		if ($(this).find("result").text()=="ok"){
			
			$("#checkout_nombre").val($(this).find("nombre").text());
			$("#checkout_apaterno").val($(this).find("apaterno").text());
			$("#checkout_amaterno").val($(this).find("amaterno").text());
			$("#checkout_telefono").val($(this).find("telefono").text());
			$("#checkout_email").val($(this).find("email").text());
			$("#checkout_pais").val($(this).find("pais").text());
			$("#checkout_estado").val($(this).find("estado").text());
			$("#checkout_cp").val($(this).find("cp").text());
			$("#checkout_municipio").val($(this).find("municipio").text());
			$("#checkout_colonia").val($(this).find("colonia").text());
			$("#checkout_calle").val($(this).find("calle").text());
			$("#checkout_n_exterior").val($(this).find("n_exterior").text());
			$("#checkout_n_interior").val($(this).find("n_interior").text());
			$("#checkout_detalles").val($(this).find("detalles").text());
					
			
		}
	});
}

function cambiar_domicilio(){
	//SWAL PARA CAMBIAR DE DOMICILIO
	clear_token();
	var id_usuario = $("#checkout_id_usuario").val();

	$.post("controller.php",
	{	action : "cambiar_domicilio",
		id_usuario 	: id_usuario
	}, end_cambiar_domicilio);

}

function end_cambiar_domicilio(xml){
	$(xml).find("response").each(function(i){		
		if ($(this).find("result").text()=="ok"){

			Swal.fire({
				color: 'black',
                title: '<p style="color:black; margin-bottom: 20px;">Selecciona una dirección</p>',
                html: $(this).find("swal").text(),
                footer: '<a style="color: blue; cursor: pointer;" onclick="agregar_nuevo_domicilio()">Agregar una nueva</a>',
				showConfirmButton: false,
				showCloseButton: true,
			})
		}
	});
}

function select_otro_domicilio(id_domicilio){
	$("#form_checkout .obligatorio").each(function (index) {
		$("#checkout_n_interior").css("border", "2px solid #ebedec");
		$(this).css("border", "2px solid #ebedec");
	});
	Swal.close();
	
	$("#list_metodos_pago").show('slow');
	$("#div-guardar_domicilio").hide('slow');

	$.post("controller.php",
	{	action : "select_otro_domicilio",
		id_domicilio 	: id_domicilio
	}, end_select_otro_domicilio);
}

function end_select_otro_domicilio(xml){
	
	$(xml).find("response").each(function(i){		
		if ($(this).find("result").text()=="ok"){

			$('#form_checkout').trigger("reset");

			$("#checkout_nombre").val($(this).find("nombre").text());
			$("#checkout_apaterno").val($(this).find("apaterno").text());
			$("#checkout_amaterno").val($(this).find("amaterno").text());
			$("#checkout_telefono").val($(this).find("telefono").text());
			$("#checkout_email").val($(this).find("email").text());
			$("#checkout_pais").val($(this).find("pais").text());
			$("#checkout_estado").val($(this).find("estado").text());
			$("#checkout_cp").val($(this).find("cp").text());
			$("#checkout_municipio").val($(this).find("municipio").text());
			$("#checkout_colonia").val($(this).find("colonia").text());
			$("#checkout_calle").val($(this).find("calle").text());
			$("#checkout_n_exterior").val($(this).find("n_exterior").text());
			$("#checkout_n_interior").val($(this).find("n_interior").text());
			$("#checkout_detalles").val($(this).find("detalles").text());
					
			
		}
	});
}

	
function agregar_nuevo_domicilio(){
	$("#form_checkout .obligatorio").each(function (index) {
		$("#checkout_n_interior").css("border", "2px solid #ebedec");
		$(this).css("border", "2px solid #ebedec");
	});
	
	$("#list_metodos_pago").hide('slow');
	$("#div-guardar_domicilio").show('slow');
	$('#form_checkout').trigger("reset");
	Swal.close();

}


function guardar_domicilio_checkout(){
	var id_usuario = $("#checkout_id_usuario").val();
	var pais = $("#checkout_pais").val();
	var estado = $("#checkout_estado").val();
	var cp = $("#checkout_cp").val();
	var municipio = $("#checkout_municipio").val();
	var colonia = $("#checkout_colonia").val();
	var calle = $("#checkout_calle").val();
	var n_exterior = $("#checkout_n_exterior").val();
	var n_interior = $("#checkout_n_interior").val();
	var detalles = $("#checkout_detalles").val();
	
	var continua = 1;
	var motivo_error = '';

	if($("#checkout_n_exterior").val().length > 5){
		continua = 0;
		$("#checkout_n_exterior").css("border", "2px solid #9B2F2F");
		motivo_error = "Número exterior INVÁLIDO";
	} else{
		$("#checkout_n_exterior").css("border", "2px solid #ebedec");
	}

	if($("#checkout_n_interior").val().length > 5 ){
		continua = 0;
		$("#checkout_n_interior").css("border", "2px solid #9B2F2F");
		motivo_error = "Número interior INVÁLIDO";
	}  else{
		$("#checkout_n_interior").css("border", "2px solid #ebedec");
	}

	if(isNaN($("#checkout_cp").val())){
		continua = 0;
		$("#checkout_cp").css("border", "2px solid #9B2F2F");
		motivo_error = "Ingresa un FORMATO CORRECTO para el código postal";
	} else{
		$("#checkout_cp").css("border", "2px solid #ebedec");
	}

	
	$("#form_checkout .obligatorio").each(function (index) {
		if($(this).val() == ""){
				$(this).css("border", "2px solid #9B2F2F");
				continua = 0;
				motivo_error = "Llena todos los campos marcados como OBLIGATORIO";
		} else{
			$(this).css("border", "2px solid #ebedec");
		}
	});




	if(continua == 1){
		$("#form_checkout .obligatorio").each(function (index) {
			$("#checkout_n_interior").css("border", "2px solid #ebedec");
			$(this).css("border", "2px solid #ebedec");
		});
		
		$.post("controller.php",
		{	action : "guardar_domicilio",
			id_usuario 		: id_usuario,
			pais			: pais,
			estado			: estado,
			cp				: cp,
			municipio		: municipio,
			colonia			: colonia,
			calle			: calle,
			n_exterior		: n_exterior,
			n_interior		: n_interior,
			detalles		: detalles
		}, end_guardar_domicilio_checkout);
		
	} else{
		
		swal("Error", motivo_error, "error");
	}
}


function end_guardar_domicilio_checkout(xml){
	
	$(xml).find("response").each(function(i){		
		if ($(this).find("result").text()=="ok"){
			$("#list_metodos_pago").show('slow');
			$("#div-guardar_domicilio").hide('slow');
			
			swal("Registro exitoso", "La dirección se ha añadido correctamente", "success");
		} else{
			swal("Error", "Ocurrió un error. Intenta de nuevo.", "error");
		}
	});
}

function guarda_datos_carrito(num_tipo){

	
	$("#tokenizer-container").html("");
	$("#botonDePagoPayPal").html(""); 
	
	var continua = 1;
	var motivo_error = '';
	var tipo = '';

	switch(num_tipo){
		case 1:  tipo = 'mercadopago'; break;
		case 2:  tipo = 'paypal'; break;
		case 3:  tipo = 'transferencia'; break;
		default: tipo = ''; break;
	}


	$("#form_checkout .obligatorio").each(function (index) {
		if($(this).val() == ""){
				$(this).css("border", "2px solid #9B2F2F");
				continua = 0;
				motivo_error = "Llena todos los campos marcados como OBLIGATORIO";
		} else{
			$(this).css("border", "2px solid #ebedec");
		}
	});


	if($("#checkout_n_exterior").val().length > 5){
		continua = 0;
		$("#checkout_n_exterior").css("border", "2px solid #9B2F2F");
		motivo_error = "Número exterior INVÁLIDO";
	} else{
		$("#checkout_n_exterior").css("border", "2px solid #ebedec");
	}

	if($("#checkout_n_interior").val().length > 5 ){
		continua = 0;
		$("#checkout_n_interior").css("border", "2px solid #9B2F2F");
		motivo_error = "Número interior INVÁLIDO";
	}  else{
		$("#checkout_n_interior").css("border", "2px solid #ebedec");
	}

	if(isNaN($("#checkout_cp").val())){
		continua = 0;
		$("#checkout_cp").css("border", "2px solid #9B2F2F");
		motivo_error = "Ingresa un FORMATO CORRECTO para el código postal";
	} else{
		$("#checkout_cp").css("border", "2px solid #ebedec");
	}




	if(continua == 1){
		
		var id_carrito 	= $("#checkout_id_carrito").val();
		var id_usuario 	= $("#checkout_id_usuario").val();
		var nombre 		= $("#checkout_nombre").val();
		var apaterno	= $("#checkout_apaterno").val();
		var amaterno 	= $("#checkout_amaterno").val();
		var telefono 	= $("#checkout_telefono").val();
		var email	 	= $("#checkout_email").val();
		var pais 		= $("#checkout_pais").val();
		var estado 		= $("#checkout_estado").val();
		var cp 			= $("#checkout_cp").val();
		var municipio 	= $("#checkout_municipio").val();
		var colonia 	= $("#checkout_colonia").val();
		var calle 		= $("#checkout_calle").val();
		var n_exterior 	= $("#checkout_n_exterior").val();
		var n_interior 	= $("#checkout_n_interior").val();
		var detalles 	= $("#checkout_detalles").val();


		$.post("controller.php",
		{	action : "guarda_datos_carrito",
			id_carrito		: id_carrito,
			id_usuario 		: id_usuario,
			nombre			: nombre,
			apaterno		: apaterno,
			amaterno		: amaterno,
			telefono		: telefono,
			email			: email,
			pais			: pais,
			estado			: estado,
			cp				: cp,
			municipio		: municipio,
			colonia			: colonia,
			calle			: calle,
			n_exterior		: n_exterior,
			n_interior		: n_interior,
			detalles		: detalles, 
			tipo			: tipo
		}, end_guarda_datos_carrito);


	} else{
		$("#tokenizer-container").hide();
		$("#botonDePagoPayPal").hide();
		  swal("Error", motivo_error, "error");
	}
}

function end_guarda_datos_carrito(xml){
	$(xml).find("response").each(function(i){
		if ($(this).find("result").text()=="ok"){  		
			if ($(this).find("tipo").text()=="mercadopago"){
				$("#tokenizer-container").html("");
				$("#botonDePagoPayPal").html(""); 
			
				/* crea el token de MercadoPago */
				tokenizar_mercadopago(); 

				$("#pills-tabContent").show();
				$("#tokenizer-container").show();   
				
				//swal("Ups", "Lo sentimos, pagos no disponibles.", "error");
			} else if($(this).find("tipo").text()=="paypal"){
				$("#tokenizer-container").html("");
				$("#transferencia-container").hide();
				
				/*crea el token de PayPal*/
				tokenizar_paypal();
				$("#botonDePagoPayPal").show(); 

			} else if($(this).find("tipo").text()=="transferencia"){
				$("#tokenizer-container").html("");
				$("#botonDePagoPayPal").html(""); 
				$("#transferencia-container").show();
			}
		 
			
			
			
		}else{		
			swal("Ups", $(this).find("result_text").text(), "error");
		}
	});
}


function tokenizar_mercadopago(){      
		 
	$("#transferencia-container").hide();
	// Agrega credenciales de SDK  
	const mp = new MercadoPago('TEST-7d402b11-aa91-4efe-8b73-05a1aecf5968', {locale: 'es-MX'}); 
	//const mp = new MercadoPago('TEST-9f76c45e-f38c-4176-820f-b1f7b5157ad2', {locale: 'es-MX'});  // pruebas vlove
	//const mp = new MercadoPago('APP_USR-6670aa9e-e4cb-479f-984b-8549e92bbdf5', {locale: 'es-MX'});  // produccion VLOVE 

	// Inicializa el Web Tokenize Checkout 
	// backUrl: '//localhost/valenti/web/procesar_pagos_mp.php'
	//totalAmount: $("#carrito_total_pagar").val(),
	//var clave_carrito = $("#clave_carrito").val();
	var id_carrito = $("#checkout_id_carrito").val(); 
	// var url_back = '//localhost/dsupreme/web/procesar_pagos_mp/';
	var url_back = 'https://www.dsupreme.com.mx/procesar_pagos_mp/';
	
	mp.checkout({
	tokenizer: { 
	totalAmount: $("#checkout_subtotal").val(), 
		backUrl: url_back + id_carrito 
	
	},
	render: {
		container: '#tokenizer-container', // Indica dónde se mostrará el botón
		label: 'Pagar' // Cambia el texto del botón de pago (opcional)
	}
	});
}



function tokenizar_paypal(){    
		 
	var montopp = $("#checkout_subtotal").val();
	var id_carrito = $("#checkout_id_carrito").val();
	// var url_back = 'http://localhost/dsupreme/web/procesar_pagos_pp/';
	var url_back = 'https://www.dsupreme.com.mx/procesar_pagos_pp/';
	//alert(montopp);
	paypal.Buttons({ 
		createOrder: function(data, actions) {
			return actions.order.create({
				purchase_units: [{ 
					amount: {
						currency_code: 'MXN', /*test*/ /*MXN ó USD*/ 
						value: montopp
					}
				}]
			});  
		}, onApprove: function(data, actions){

          return actions.order.capture().then(function(orderData) {

            // Successful capture! For dev/demo purposes:

            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

            const transaction = orderData.purchase_units[0].payments.captures[0];

            //alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);

			actions.redirect(url_back + id_carrito);
			
			
            // When ready to go live, remove the alert and show a success message within this page. For example:

            // const element = document.getElementById('paypal-button-container');

            // element.innerHTML = '<h3>Thank you for your payment!</h3>';

            // Or go to another URL:  actions.redirect('thank_you.html');

          });

        }
	}).render('#botonDePagoPayPal');
}




function generar_orden_pago(){
	var id_carrito = $("#checkout_id_carrito").val(); 
	//window.location.href  = 'orden_de_pago/' + id_carrito;
	// //window.location.href  = 'orden_de_pago';
	// window.location.href  = 'orden_de_pago';
	// //$("#id_carrito").val(id_carrito);

	// $.post("orden_de_pago.php", 
	// {
	// 	id_carrito : id_carrito, 
	// }, end_generar_orden_pago);

	// $("#id_carrito_orden").val(id_carrito);

	// $.post("controller.php",
	// 	{	action : "generar_orden_pago",
	// 		id_carrito		: id_carrito,
	// 	}, end_generar_orden_pago);

	
	window.location.href  = 'orden_de_pago/'+id_carrito;
}

function end_generar_orden_pago(){
	
}

function enviar_orden(){
	var id_carrito = $("#id_carrito").val();

	$("#enviado").show();

	$.post("controller.php",
		{	action : "enviar_orden",
			id_carrito		: id_carrito,
		}, end_enviar_orden);
}

function end_enviar_orden(xml){
	$(xml).find("response").each(function(i){
		if ($(this).find("result").text()=="ok"){  		
			$("#result_orden").html($(this).find("result_text").text());
		}else{		
			$("#result_orden").text($(this).find("result_text").text());
		}
	});
}




function clear_token(){
	$("#tokenizer-container").html('');
	$("#botonDePagoPayPal").html('');
	$("#transferencia-container").hide();
}


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