<header class="main-header">
    <div class="container container--flex">

        <div class="logo-container column column--50">
            <a href="<?php echo base_url(); ?>/index.php/Noticias/index"><img src="<?php echo base_url(); ?>/assets/img/logo.png" alt="" width="25%" height="18%" class="logo"></a>
        </div>
        <div class="main-header__contactInfo column column--50">				
            <p class="main-header__contactInfo__user">
                <a href="<?php echo base_url(); ?>/index.php/Noticias/login"><span class="icon-user"> 
                <?php 
                    //Comprobacion de datos
                    try {
                        echo $usuario;
                    } catch (\Throwable $th) {
                        echo 'Perfil';
                    }
                ?>
                </span></a>
            </p>
        </div>
    </div>
</header>

<header class="header-menu">
    <input type="checkbox" id="btn-menu" name="">
    <label for="btn-menu"><span class="icon-menu"></span></label>
    <nav class="menu">
        <ul>
            <li><a href="<?php echo base_url(); ?>/index.php/Noticias/noticia">Todos el mundo</a></li>
            <li><a href="<?php echo base_url(); ?>/index.php/Noticias/noticia">Política</a></li>
            <li><a href="<?php echo base_url(); ?>/index.php/Noticias/noticia">Deportes</a></li>
            <li><a href="<?php echo base_url(); ?>/index.php/Noticias/noticia">Entretenimiento</a></li>
            <li><a href="<?php echo base_url(); ?>/index.php/Noticias/noticia">Salud</a></li>
            <li><a href="<?php echo base_url(); ?>/index.php/Noticias/noticia">Tecnología</a></li>
        </ul>
    </nav>
</header>