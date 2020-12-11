<body>
			<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/login.css">
			<div class="mx-auto" id="form-login">
				<div class="row">
					<section class="container-fluid col-lg-6 col-md-12 col-sm-12 col-xs-12">
						<div class="card" style="width: 18rem;">
							<div class="card-header">
							  <h4>Noticias publicadas</h4>
							</div>
							<ul class="list-group list-group-flush">
							<?php
								foreach ($news as $key) {
									echo '<li class="list-group-item">';
									echo $key['contenido'];
									$finalKey = $key;
								}
							?>
							</ul>
						</div>	
					</section>
					<section class="container-fluid p-3 col-lg-6 col-md-12 col-sm-12 col-xs-12">
						<div class="card text-center">
							<div class="card-header">
							  <h4>En edición</h4>
							</div>
							<div class="card-body">
							  <h5 class="card-title"><?php echo $finalKey['titulo']; ?></h5>
							  <p class="card-text"><?php echo $finalKey['contenido']; ?>...</p>
							  <a href="<?php echo base_url(); ?>/index.php/Noticias/crear_noticia" class="btn btn-primary">Seguir editando</a>
							</div>
							<div class="card-footer text-muted">
							  Hace 2 horas
							</div>
						  </div>
					</section>
					<br>
					<button onclick="window.location.href='<?php echo base_url(); ?>/index.php/Noticias/crear_noticia'" type="button" class="btn btn-entrar btn-lg">Crear noticia</button>
					<button onclick="window.location.href='<?php echo base_url(); ?>/index.php/Noticias/index'" type="button" class="btn btn-regresar btn-lg">Salir</button>
				</div>
			</div>
</body>