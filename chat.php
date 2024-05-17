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

	<title>BookSwap | Inicio</title>
	<?php include ("include/headertagbase.php"); ?>

	<link rel="icon" href="imagenes/bookswap/logo.png">

	<!--=====================================
	#region CSS
	======================================-->

	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700&display=swap" rel="stylesheet">

	<!-- font awesome -->
	<link rel="stylesheet" href="css/plugins/fontawesome.min.css">

	<!-- linear icons -->
	<link rel="stylesheet" href="css/plugins/linearIcons.css">

	<!-- Bootstrap 4 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

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
        header("Location: index");
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

	<div class="ps-breadcrumb">

		<div class="container">

			<ul class="breadcrumb">

				<li><a href="index">Inicio</a></li>
				
				<li><a href="perfil">Perfil</a></li>


				<li>Chat</li>

			</ul>

		</div>

	</div>

	<!-- Aqui se puede empezar a trabajar lo nuevo  -->




	<div class="ps-section--gray">

		<div class="container">
			<div class="row clearfix">
				<div class="col-lg-12">
					<div class="card chat-app">
						<div id="plist" class="people-list">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa fa-search"></i></span>
								</div>
								<input type="text" class="form-control" placeholder="Search...">
							</div>
							<ul class="list-unstyled chat-list mt-2 mb-0">
								<li class="clearfix">
									<img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar">
									<div class="about">
										<div class="name">Vincent Porter</div>
										<div class="status"> <i class="fa fa-circle offline"></i> left 7 mins ago </div>
									</div>
								</li>
								<li class="clearfix active">
									<img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">
									<div class="about">
										<div class="name">Aiden Chavez</div>
										<div class="status"> <i class="fa fa-circle online"></i> online </div>
									</div>
								</li>
								<li class="clearfix">
									<img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="avatar">
									<div class="about">
										<div class="name">Mike Thomas</div>
										<div class="status"> <i class="fa fa-circle online"></i> online </div>
									</div>
								</li>
								<li class="clearfix">
									<img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar">
									<div class="about">
										<div class="name">Christian Kelly</div>
										<div class="status"> <i class="fa fa-circle offline"></i> left 10 hours ago </div>
									</div>
								</li>
								<li class="clearfix">
									<img src="https://bootdey.com/img/Content/avatar/avatar8.png" alt="avatar">
									<div class="about">
										<div class="name">Monica Ward</div>
										<div class="status"> <i class="fa fa-circle online"></i> online </div>
									</div>
								</li>
								<li class="clearfix">
									<img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="avatar">
									<div class="about">
										<div class="name">Dean Henry</div>
										<div class="status"> <i class="fa fa-circle offline"></i> offline since Oct 28 </div>
									</div>
								</li>
							</ul>
						</div>
						<div class="chat">
							<div class="chat-header clearfix">
								<div class="row">
									<div class="col-lg-6">
										<a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
											<img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">
										</a>
										<div class="chat-about">
											<h6 class="m-b-0">Aiden Chavez</h6>
											<small>Last seen: 2 hours ago</small>
										</div>
									</div>
									<div class="col-lg-6 hidden-sm text-right">
										<a href="javascript:void(0);" class="btn btn-outline-secondary"><i class="fa fa-camera"></i></a>
										<a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-image"></i></a>
										<a href="javascript:void(0);" class="btn btn-outline-info"><i class="fa fa-cogs"></i></a>
										<a href="javascript:void(0);" class="btn btn-outline-warning"><i class="fa fa-question"></i></a>
									</div>
								</div>
							</div>
							<div class="chat-history">
								<ul class="m-b-0">
									<li class="clearfix">
										<div class="message-data text-right">
											<span class="message-data-time">10:10 AM, Today</span>
											<img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar">
										</div>
										<div class="message other-message float-right"> Hi Aiden, how are you? How is the project coming along? </div>
									</li>
									<li class="clearfix">
										<div class="message-data">
											<span class="message-data-time">10:12 AM, Today</span>
										</div>
										<div class="message my-message">Are we meeting today?</div>
									</li>
								</ul>
							</div>
							<div class="chat-message clearfix">
								<div class="input-group mb-0">
									<div class="input-group-prepend">
										<span class="input-group-text"><button id="submit"><i class="fa fa-send"></i></button></span>
									</div>
									<textarea name="message" id="message" type="text" class="form-control" placeholder="Enter text here..."></textarea>
								</div>
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

	<script src="assets/plugins/sweetalert/sweetalert.min.js"></script>
	<script src="assets/plugins/sweetalert/jquery.sweet-alert.custom.js"></script>

    <!-- Chat -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>

	<script type="module">
        // Import the functions you need from the SDKs you need
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

        // Initialize Firebase
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

        document.getElementById('submit').addEventListener('click', (e) => {
            e.preventDefault();
            var message = $("#message").val();

			var maxLength = 1000; //Define el máximo número de caracteres permitidos

			if(message.length > maxLength){
				Swal.fire({
					icon: 'error',
					title: '¡Error!',
					text: "El mensaje no debe sobrepasar los "+maxLength+" caracteres",
					timer: 1000,
					timerProgressBar: true,
				})
				return;
			}


            if (message.trim() === ""){
                Swal.fire({
					icon: 'error',
					title: '¡Error!',
					text: "El mensaje está vacío",
					timer: 1000,
					timerProgressBar: true,
				})
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
                alert('El mensaje se ha enviado');
            }).catch((error) => {
                alert('Error al enviar el mensaje: ' + error.message);
            });
        });

        const newMsgRef = ref(database, 'messages/' + id_chat);
        onChildAdded(newMsgRef, (data) => {
            var messageData = data.val();
            var messageElement = document.createElement('div');
            messageElement.classList.add('message');

            if (messageData.sender === nombre_prestador) {
                messageElement.classList.add('my-message');
                messageElement.textContent = messageData.message;
            } else {
                messageElement.classList.add('other-message');
                messageElement.textContent = `${messageData.sender}: ${messageData.message}`;
            }

            document.querySelector('.chat-history ul').appendChild(messageElement);
        });
    </script>



	<!-- 
		#region PARA CARGAR




		
		#region LOS MENSAJES EXISTENTES
	-->
	<script>
		$(document).ready(function() {
			// Obtener referencia al elemento donde se mostrarán los mensajes
			const chatHistory = document.querySelector('.chat-history ul');

			// Función para imprimir un mensaje en la interfaz de chat
			function printMessage(messageData) {
				const messageElement = document.createElement('li');
				messageElement.classList.add('clearfix');

				// Construir el contenido del mensaje
				const messageContent = `
					<div class="message-data ${messageData.sender === nombre_prestador ? 'text-right' : ''}">
						<span class="message-data-time">${new Date(messageData.timestamp).toLocaleTimeString()}, Today</span>
						<img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar">
					</div>
					<div class="message ${messageData.sender === nombre_prestador ? 'my-message' : 'other-message'} ${messageData.sender === nombre_prestador ? 'float-right' : ''}">
						${messageData.message}
					</div>
				`;

				// Agregar el contenido del mensaje al elemento HTML
				messageElement.innerHTML = messageContent;

				// Agregar el mensaje al historial de chat
				chatHistory.appendChild(messageElement);

				// Desplazar automáticamente hacia abajo para mostrar los nuevos mensajes
				chatHistory.scrollTop = chatHistory.scrollHeight;
			}

			// Obtener los mensajes existentes y mostrarlos en la interfaz de chat
			const messagesRef = ref(database, 'messages/' + id_chat);
			onChildAdded(messagesRef, (snapshot) => {
				const messageData = snapshot.val();
				printMessage(messageData);
			});

			// Escuchar el evento de clic en el botón de enviar mensaje
			document.getElementById('submit').addEventListener('click', (e) => {
				e.preventDefault();
				const message = document.getElementById('message').value.trim();

				// Validar que el mensaje no esté vacío
				if (message === "") {
					Swal.fire({
						icon: 'error',
						title: '¡Error!',
						text: "El mensaje está vacío",
						timer: 1000,
						timerProgressBar: true,
					});
					return;
				}

				// Guardar el mensaje en la base de datos Firebase
				const newMessageRef = push(messagesRef);
				set(newMessageRef, {
					sender: nombre_prestador,
					message: message,
					timestamp: Date.now()
				}).then(() => {
					// Limpiar el campo de texto después de enviar el mensaje
					document.getElementById('message').value = "";
					alert('El mensaje se ha enviado');
				}).catch((error) => {
					alert('Error al enviar el mensaje: ' + error.message);
				});
			});
		});
	</script>
    
    </body>
</body>

</html>