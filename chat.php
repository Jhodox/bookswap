<?php
ob_start();
session_start();
?>


<!DOCTYPE html>
<html lang="es">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="author" content="">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<title>BookSwap | Chat</title>
	<?php include ("include/headertagbase.php"); ?>

	<link rel="icon" href="imagenes/bookswap/logoBookswap.png">

	<!--=====================================
	#region CSS
	======================================-->

	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700&display=swap" rel="stylesheet">

	<!-- font awesome -->
	<link rel="stylesheet" href="css/plugins/fontawesome.min.css">

	<!-- linear icons -->
	<link rel="stylesheet" href="css/plugins/linearIcons.css">

	<!-- Estilo Admin -->
    <link rel="stylesheet" href="assets/css/admin-style.css">

	<!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/plugins/owl.carousel.css">

	<!-- Slick -->
	<link rel="stylesheet" href="css/plugins/slick.css">

	<!-- Light Gallery -->
	<link rel="stylesheet" href="css/plugins/lightgallery.min.css">

	<!-- Font Awesome Start -->
	<link rel="stylesheet" href="css/plugins/fontawesome-stars.css">

	<!-- jquery Ui -->
	<link rel="stylesheet" href="css/plugins/jquery-ui.min.css">

	<!-- Select 2 -->
	<link rel="stylesheet" href="css/plugins/select2.min.css">

	<!-- Scroll Up -->
	<link rel="stylesheet" href="css/plugins/scrollUp.css">

	<!-- DataTable -->
	<link rel="stylesheet" href="css/plugins/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="css/plugins/responsive.bootstrap.datatable.min.css">

	<!-- estilo principal -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Market Place 4 -->
	<link rel="stylesheet" href="css/market-place-4.css">

	<!--=====================================
	#region PLUGINS JS
	======================================-->

	<!-- jQuery library -->
	<script src="js/plugins/jquery-1.12.4.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<!-- Owl Carousel -->
	<script src="js/plugins/owl.carousel.min.js"></script>

	<!-- Images Loaded -->
	<script src="js/plugins/imagesloaded.pkgd.min.js"></script>

	<!-- Masonry -->
	<script src="js/plugins/masonry.pkgd.min.js"></script>

	<!-- Isotope -->
	<script src="js/plugins/isotope.pkgd.min.js"></script>

	<!-- jQuery Match Height -->
	<script src="js/plugins/jquery.matchHeight-min.js"></script>

	<!-- Slick -->
	<script src="js/plugins/slick.min.js"></script>

	<!-- jQuery Barrating -->
	<script src="js/plugins/jquery.barrating.min.js"></script>

	<!-- Slick Animation -->
	<script src="js/plugins/slick-animation.min.js"></script>

	<!-- Light Gallery -->
	<script src="js/plugins/lightgallery-all.min.js"></script>
	<script src="js/plugins/lg-thumbnail.min.js"></script>
	<script src="js/plugins/lg-fullscreen.min.js"></script>
	<script src="js/plugins/lg-pager.min.js"></script>

	<!-- jQuery UI -->
	<script src="js/plugins/jquery-ui.min.js"></script>

	<!-- Sticky Sidebar -->
	<script src="js/plugins/sticky-sidebar.min.js"></script>

	<!-- Slim Scroll -->
	<script src="js/plugins/jquery.slimscroll.min.js"></script>

	<!-- Select 2 -->
	<script src="js/plugins/select2.full.min.js"></script>

	<!-- Scroll Up -->
	<script src="js/plugins/scrollUP.js"></script>

	<!-- DataTable -->
	<script src="js/plugins/jquery.dataTables.min.js"></script>
	<script src="js/plugins/dataTables.bootstrap4.min.js"></script>
	<script src="js/plugins/dataTables.responsive.min.js"></script>

	<!-- Chart -->
	<script src="js/plugins/Chart.min.js"></script>


	<script src="https://kit.fontawesome.com/471d91ac13.js" crossorigin="anonymous"></script>
	<!--alerts CSS -->
	<link href="assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
		integrity="sha512-7U0k3Xu0BUw7+oTgnOUMW4JCxW3IaOwFNMDkPTi2B5cg7x17OOJUtGkObUcZDQw2FXmO1w+23r00Yod/7uCC3w=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />


	<!-- Estilos Chat -->
	<link rel="stylesheet" href="style_chat.css">

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">

		
</head>

<body>


	<!--=====================================
	#region HEADER
	======================================-->

	<?php
	// Estos tres siempre se ponen despues del body, del archivo que estemos creando
	require_once "include/functions.php";
	require_once "include/db_tools.php";
	include ('main-header.php');

	if($sesion == 0){
        header("Location: 404");
    }

	if(isset($_GET['codigo_usuario_prestamo'])){
		$codigo_usuario_receptor = $_GET['codigo_usuario_prestamo'];

		if(!is_numeric($codigo_usuario_receptor)){
            header('Location: ../perfil');
            exit;
        }

		//Cuando yo soy el que presta el libro
		$query2 = "SELECT COUNT(*) AS existe FROM prestamos
		INNER JOIN usuarios ON prestamos.id_usuario_destino = usuarios.id_usuario
		WHERE codigo_usuario = '$codigo_usuario_receptor' AND id_usuario_owner = $id_usuario_global";

		// echo $query2;
		$existe1 = GetValueSQL($query2, 'existe'); 


		//Cuando a mi me prestan el libro
		$query3 = "SELECT COUNT(*) AS existe FROM prestamos
		INNER JOIN usuarios ON prestamos.id_usuario_owner = usuarios.id_usuario
		WHERE codigo_usuario = '$codigo_usuario_receptor' AND id_usuario_destino = $id_usuario_global";
        $existe2 = GetValueSQL($query3, 'existe');

		
		// echo $query3;

        if($existe1 == 0 && $existe2 == 0){
            header("Location: ../perfil");
            exit;
        }

	} else{
		header("Location: perfil");
		exit;
	}



	if($sesion != 0){
		$query1 = "SELECT * FROM usuarios WHERE id_usuario = $id_usuario_global";
		$nombres = GetValueSQL($query1, 'nombres');
		$apellidos = GetValueSQL($query1, 'apellidos');
		$codigo_usuario_prestador = GetValueSQL($query1, 'codigo_usuario');
	}

	

	?>

	<input type="hidden" id="id_usuario_global" value="<?php echo $id_usuario_global; ?>">
	<input type="hidden" id="codigo_usuario_receptor" value="<?php echo $codigo_usuario_receptor; ?>">

	<!--=====================================
	#region Breadcrumb
	======================================-->

	<div class="ps-breadcrumb" >

		<div class="container">

			<ul class="breadcrumb">

				<li><a href="index">Inicio</a></li>
				
				<li><a href="perfil">Perfil</a></li>


				<li>Chat</li>

			</ul>

		</div>

	</div>


	<div class="ps-section--gray" style="margin-top: -60px;">
		<div class="container">
			<div class="row clearfix">
				<div class="col-lg-12">
					<div class="card chat-app">
						<?php 
						$query5 = "
						SELECT DISTINCT usuarios.codigo_usuario, usuarios.id_usuario, usuarios.nombres, usuarios.apellidos, usuarios.ruta_foto_perfil
						FROM usuarios
						JOIN prestamos ON (prestamos.id_usuario_owner = usuarios.id_usuario OR prestamos.id_usuario_destino = usuarios.id_usuario)
						WHERE (prestamos.id_usuario_owner = $id_usuario_global OR prestamos.id_usuario_destino = $id_usuario_global)
						AND usuarios.id_usuario != $id_usuario_global AND usuarios.id_usuario != 0
						ORDER BY prestamos.id_prestamo DESC";
						// echo $query5;
						$usuarios_relacionados = DatasetSQL($query5);
						?>
						<div id="plist" class="people-list">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa fa-search"></i></span>
								</div>
								<input id="searchInput" type="text" class="form-control" placeholder="Buscar...">
							</div>
							<ul class="list-unstyled chat-list mt-2 mb-0" id="userList">
								<?php while($row = mysqli_fetch_array($usuarios_relacionados)){ 
									$ruta_foto_perfil_list = $row['ruta_foto_perfil'] ;
									if($ruta_foto_perfil_list == NULL){
										$ruta_foto_perfil_list = $ruta_foto_no_usuario;
									}
									?>
									
									<a class="text-secondary" href="chat/<?php echo $row['codigo_usuario']; ?>">
									<li class="clearfix">
										<img class="profile-avatar" src="<?php echo $ruta_foto_perfil_list ?>" alt="avatar">
										<div class="about">
											<div class="name"><?php echo $row['nombres']." ".$row['apellidos']; ?></div>
											<div class="status"> </div>
										</div>
									</li></a>
								<?php } ?>
							</ul>
						</div>

						<?php
						$query4 = "SELECT * FROM usuarios WHERE codigo_usuario = '".$codigo_usuario_receptor."'";
						// echo $query4;
						$nombres_rec = GetValueSQL($query4, 'nombres');
						$apellidos_rec = GetValueSQL($query4, 'apellidos');
						$ruta_foto_perfil_rec = GetValueSQL($query4, 'ruta_foto_perfil');

						if($ruta_foto_perfil_rec == NULL){
							$ruta_foto_perfil_rec = $ruta_foto_no_usuario;
						}
						?>
						<div class="chat">
							<div class="chat-header clearfix">
								<div class="row">
									<div class="col-lg-6">
										<a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
											<img class="profile-avatar" src="<?php echo $ruta_foto_perfil_rec ?>" alt="avatar">
										</a>
										<div class="chat-about ">
											<h6 class="m-b-0 h1"><?php echo $nombres_rec." ".$apellidos_rec; ?> </h6>
											<!-- <small>Last seen: 2 hours ago</small> -->
										</div>
									</div>
								</div>
							</div>
							<div class="chat-history" id="chat-history">
								<ul class="m-b-0" id="chat-list">
									<!-- Aquí se mostrarán los mensajes -->
								</ul>
							</div>
							<div class="chat-message clearfix">
								<div class="input-group mb-0">
									<div class="input-group-prepend">
										<span class="input-group-text"><button id="submit"><i class="fa fa-send"></i></button></span>
									</div>
									<textarea name="message" id="message" type="text" class="form-control" placeholder="Escribe aquí..."></textarea>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> 















	<!--=====================================
	#region Footer
	======================================-->
	<!-- Este es el pie de pagina, el cual va antes de que se acabe el body -->
	<?php include ('main-footer.php'); ?>


	<!--=====================================
	#region JS PERSONALIZADO
	======================================-->

	<script src="js/main.js"></script>

	<script src="assets/js/jquery-2.2.4.min.js"></script>
	<script src="assets/js/slick.min.js"></script>
	<script src="assets/js/jquery-ui.js"></script>
	<script src="assets/js/jquery.nice-select.js"></script>
	<script src="assets/js/scripts.js"></script>
	<script src="assets/js/funciones.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<script src="assets/plugins/sweetalert/sweetalert.min.js"></script>
	<script src="assets/plugins/sweetalert/jquery.sweet-alert.custom.js"></script>

    <!-- Chat -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>

	<script type="module">
        // Tu script JavaScript
        import { initializeApp } from "https://www.gstatic.com/firebasejs/10.11.1/firebase-app.js";
        import { getDatabase, set, ref, push, onChildAdded } from "https://www.gstatic.com/firebasejs/10.11.1/firebase-database.js";

        // Your web app's Firebase configuration
        const firebaseConfig = {
            apiKey: "AIzaSyCHNB64eKw2nyZFEXE0O482UqZQfx6I3Cw",
            authDomain: "bookswap-33e37.firebaseapp.com",
            projectId: "bookswap-33e37",
            storageBucket: "bookswap-33e37.appspot.com",
            messagingSenderId: "930267590",
            appId: "1:930267590:web:cfc931bf6d38799a4df2c7"
        };

        // Inicializar Firebase
        const app = initializeApp(firebaseConfig);
        const database = getDatabase(app);

        var codigo_usuario_prestador = "<?php echo $codigo_usuario_prestador ?>";
        var codigo_usuario_receptor = "<?php echo $codigo_usuario_receptor; ?>";

        var id_chat;
        if (codigo_usuario_prestador < codigo_usuario_receptor) {
            id_chat = codigo_usuario_prestador + "_" + codigo_usuario_receptor;
        } else {
            id_chat = codigo_usuario_receptor + "_" + codigo_usuario_prestador;
        }

        var nombres = "<?php echo $nombres; ?>";
        var apellidos = "<?php echo $apellidos; ?>";
        var nombre_prestador = nombres + ' ' + apellidos;
        var perfil_receptor = "<?php echo $ruta_foto_perfil_rec; ?>"; // Ruta de la imagen de perfil del receptor

        // Función para cargar los mensajes existentes desde Firebase
        function cargarMensajes() {
            const messagesRef = ref(database, 'messages/' + id_chat);
            onChildAdded(messagesRef, (snapshot) => {
                const message = snapshot.val();
                renderizarMensaje(message);
            });
        }



		/*
		#region Función para renderizar un mensaje en el chat
		*/

        function renderizarMensaje(message) {
            const chatList = document.getElementById('chat-list');
            const formattedDateTime = new Date(message.timestamp).toLocaleString();
            const isOwnMessage = message.sender === nombre_prestador;

            const li = document.createElement('li');
            li.className = 'clearfix';

            if (!isOwnMessage) {
                const messageData = document.createElement('div');
                messageData.className = 'message-data text-right';

                const messageDataTime = document.createElement('span');
                messageDataTime.className = 'message-data-time';
                messageDataTime.textContent = formattedDateTime;

                const messageAvatar = document.createElement('img');
                messageAvatar.src = perfil_receptor; // Usa la ruta de la imagen de perfil del receptor
                messageAvatar.alt = 'avatar';
                messageAvatar.className = 'profile-avatar'; // Agrega esta línea para asignar la clase CSS

                const messageContent = document.createElement('div');
                messageContent.className = 'message other-message float-right';
                messageContent.textContent = message.message;

                messageData.appendChild(messageDataTime);
                messageData.appendChild(messageAvatar);
                li.appendChild(messageData);
                li.appendChild(messageContent);
            } else {
                const messageData = document.createElement('div');
                messageData.className = 'message-data';

                const messageDataTime = document.createElement('span');
                messageDataTime.className = 'message-data-time';
                messageDataTime.textContent = formattedDateTime;

                const messageContent = document.createElement('div');
                messageContent.className = 'message my-message';
                messageContent.textContent = message.message;

                messageData.appendChild(messageDataTime);
                li.appendChild(messageData);
                li.appendChild(messageContent);
            }

            chatList.appendChild(li);

            // Scroll to bottom after adding a new message
            const chatHistory = document.getElementById('chat-history');
            chatHistory.scrollTop = chatHistory.scrollHeight;
        }

        document.getElementById('submit').addEventListener('click', (e) => {
            e.preventDefault();
            var message = document.getElementById('message').value;

            var maxLength = 1000; // Define el máximo número de caracteres permitidos

            if (message.length > maxLength) {
                Swal.fire({
                    icon: 'error',
                    title: '¡Error!',
                    text: "El mensaje no debe sobrepasar los " + maxLength + " caracteres",
                    timer: 1000,
                    timerProgressBar: true,
                });
                return;
            }

            if (message.trim() === "") {
                return;
            }

            const messagesRef = ref(database, 'messages/' + id_chat);
            const newMessageRef = push(messagesRef);

            set(newMessageRef, {
                sender: nombre_prestador,
                message: message,
                timestamp: Date.now()
            }).then(() => {
                document.getElementById('message').value = "";
                // alert('El mensaje se ha enviado');
            }).catch((error) => {
				Swal.fire({
                    icon: 'error',
                    title: '¡Error!',
                    text: 'Error al enviar el mensaje: ' + error.message,
                    timer: 1000,
                    timerProgressBar: true,
                });
                return;
            });
        });

		/*  
		#region Llama a la función para cargar mensajes al cargar la página
		*/
        window.addEventListener('load', () => {
            cargarMensajes();

            // Scroll to bottom after loading all messages
            const chatHistory = document.getElementById('chat-history');
            setTimeout(() => {
                chatHistory.scrollTop = chatHistory.scrollHeight;
            }, 1000); // Ajusta el tiempo de espera si es necesario
        });


		document.getElementById('searchInput').addEventListener('input', function() {
			var searchTerm = this.value.toLowerCase();
			var userList = document.getElementById('userList');
			var users = userList.getElementsByTagName('li');
			
			for (var i = 0; i < users.length; i++) {
				var userName = users[i].getElementsByClassName('name')[0].textContent.toLowerCase();
				if (userName.indexOf(searchTerm) === -1) {
					users[i].style.display = 'none';
				} else {
					users[i].style.display = 'block';
				}
			}
		});


		



		/*  
		#region Enviar mensajes con Enter
		*/
		document.getElementById('message').addEventListener('keypress', function(event) {
			if (event.key === 'Enter') {
				event.preventDefault(); // Evita que se añada un salto de línea al presionar Enter
				enviarMensaje(); // Llama a la función que envía el mensaje
			}
		});

		document.getElementById('submit').addEventListener('click', function() {
			enviarMensaje(); // Llama a la función que envía el mensaje
		});

		function enviarMensaje() {
			var message = document.getElementById('message').value.trim();

			if (message !== '') {
				var message = $("#message").val();

				var maxLength = 1000; // Define el máximo número de caracteres permitidos

				if (message.length > maxLength) {
					Swal.fire({
						icon: 'error',
						title: '¡Error!',
						text: "El mensaje no debe sobrepasar los " + maxLength + " caracteres",
						timer: 1000,
						timerProgressBar: true,
					});
					return;
				}

				if (message.trim() === "") {
					Swal.fire({
						icon: 'error',
						title: '¡Error!',
						text: "El mensaje está vacío",
						timer: 1000,
						timerProgressBar: true,
					});
					return;
				}

				const messagesRef = ref(database, 'messages/' + id_chat);
				const newMessageRef = push(messagesRef);

				set(newMessageRef, {
					sender: nombre_prestador,
					message: message,
					timestamp: Date.now()
				}).then(() => {
					$("#message").val('');
					// alert('El mensaje se ha enviado');
				}).catch((error) => {
					Swal.fire({
						icon: 'error',
						title: '¡Error!',
						text: 'Error al enviar el mensaje: ' + error.message,
						timer: 1000,
						timerProgressBar: true,
					});
					return;
				});

				// Limpia el área de texto después de enviar el mensaje
				$("#message").val('');
			}
		}

		$("#message").focus();
    </script>





</body>
</html>