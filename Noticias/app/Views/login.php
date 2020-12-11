<body>
	
			<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/login.css">
			<div class="mx-auto" id="form-login">
				<form method="POST" action="<?php echo base_url(); ?>/index.php/Noticias/perfil" role="form">
					<div class="form-group">
					  <label for="exampleFormControlInput1"><span class="icon-user"> </span>Usuario</label>
					  <input required name="login_user" type="email" class="form-control" id="exampleFormControlInput1" placeholder="correo@gmail.com">
					</div>
					<div class="form-group">
					  <label for="exampleFormControlInput1"><span class="icon-menu"> </span>Clave</label>
					  <input required name="login_password" type="password" class="form-control" id="exampleFormControlInput1" placeholder="Clave secreta">
					</div>
					<button type="submit" class="btn btn-entrar btn-lg">Entrar</button>
					<button onclick="window.location.href='<?php echo base_url(); ?>/index.php/Noticias/index'" type="button" class="btn btn-regresar btn-lg">Regresar</button>
				</form>
			</div>
</body>
</html>