<body>

			<?php
				/*try {
					$message = 'none';
					if ($action = 'save') {
						$message = 'Datos guardados!';
					}
					if ($action != 'none') {
						echo '<div class="alert alert-success alert-dismissible fade show" role="alert">' 
						. $message . '</div>';
					}
				} catch (\Throwable $th) { }*/
			?>
			<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/login.css">
			<div class="mx-auto" id="form-login">
				<form method="POST" action="<?php echo base_url(); ?>/index.php/Noticias/crear_noticia" role="form">
					<div class="form-group">
						<label><span class="icon-search"> </span>ID Noticia (Busquedas/Eliminaciones)</label>
						<input name="news_id" type="number" class="form-control"
							<?php
								try {
									echo 'value="' . $search['idNoticia'] . '"';
								} catch (\Throwable $th) { }
							?>
						>
					</div>
					<div class="form-group">
						<label><span class="icon-user"> </span>Titulo</label>
						<input name="news_title" type="text" class="form-control"
							<?php
								try {
									echo 'value="' . $search['titulo'] . '"';
								} catch (\Throwable $th) { }
							?>
						>
					</div>
					<div class="form-group">
						<label><span class="icon-menu"> </span>Contenido</label>
						<textarea name="news_content" class="form-control" rows="3"><?php
								try {
									echo $search['contenido'];
								} catch (\Throwable $th) { }
							?></textarea>
					</div>
					<div class="form-group">
						<label><span class="icon-mail"> </span>ID del escritor</label>
						<input name="news_writter" type="number" class="form-control"
							<?php
								try {
									echo 'value="' . $search['idAdmin'] . '"';
								} catch (\Throwable $th) { }
							?>
						>
					</div>
					<div class="form-group">
						<label><span class="icon-instagram"> </span>Fotos</label>
						<input type="file" name="news_image" class="form-control-file"
							<?php
								try {
									echo 'value="' . $search['imagen'] . '"';
								} catch (\Throwable $th) { }
							?>
						>
					</div>
					<button name="news_action_save" value="save" type="submit" class="btn btn-entrar btn-lg">Guardar</button>
					<button name="news_action_search" value="search" type="submit" class="btn btn-entrar btn-lg">Buscar</button>
					<button name="news_action_edit" value="edit" type="submit" class="btn btn-entrar btn-lg">Editar</button>
					<button name="news_action_delete" value="delete" type="submit" class="btn btn-entrar btn-lg">Eliminar</button>
					<button onclick="window.location.href='<?php echo base_url(); ?>/index.php/Noticias/perfil'" type="button" class="btn btn-regresar btn-lg">Regresar</button>
				</form>
			</div>

</body>