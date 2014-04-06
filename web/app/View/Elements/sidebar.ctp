
    <div class="sidebar">
        <div class="sidebar-dropdown"><a href="#">Navigation</a></div>
        <!-- Search form -->
        <form class="navbar-form" role="search">
    			<div class="form-group">
    				<input type="text" class="form-control" placeholder="Search">
            <button class="btn search-button" type="submit"><i class="fa fa-search"></i></button>
    			</div>
    		</form>
        <!--- Sidebar navigation -->
        <!-- If the main navigation has sub navigation, then add the class "has_sub" to "li" of main navigation. -->
        <ul id="nav">
          <!-- Main menu with font awesome icon -->
          <li>
              <a href="<?php echo Router::url('/'); ?>" class="open">
                <i class="fa fa-home"></i>
                <span>Inicio</span></a>
          </li>
          <li class="has_sub">
              <a href="#"><i class="fa fa-edit"></i>
              <span>Reportes</span>
              <span class="pull-right">
                <i class="fa fa-chevron-left"></i></span>
              </a>
            <ul>
              <li><a href="#">Extraviados</a></li>
              <li><a href="#">Encontados</a></li>
              <li><a href="#">Atropellados</a></li>
            </ul>
          </li>

          <li class="has_sub">
              <a href="#">
              <i class="fa fa-heart"></i>
              <span>Adopciones</span>
              <span class="pull-right">
                <i class="fa fa-chevron-left"></i></span>
              </a>
            <ul>
              <li><a href="<?php echo Router::url('/adopciones/agregar/'); ?>">Dar en Adopción</a></li>
              <li><a href="#">Adopta un Perro</a></li>
            </ul>
          </li>

          <li class="has_sub">
              <a href="#">
              <i class="fa fa-bar-chart-o"></i>
              <span>Información</span>
              <span class="pull-right">
                <i class="fa fa-chevron-left"></i></span>
              </a>
            <ul>
              <li><a href="<?php echo Router::url('/adopciones/agregar/'); ?>">Extraviados</a></li>
              <li><a href="<?php echo Router::url('/adopciones/agregar/'); ?>">Encontrados</a></li>
              <li><a href="<?php echo Router::url('/adopciones/agregar/'); ?>">Atropellados</a></li>
            </ul>
          </li>

          <li class="has_sub">
              <a href="#">
              <i class="fa fa-mobile-phone"></i>
              <span>App</span>
              <span class="pull-right">
                <i class="fa fa-chevron-left"></i></span>
              </a>
            <ul>
              <li>
                  <a href="#">
                    <i class='fa fa-android'></i>
                    Android
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class='fa fa-apple'></i>
                    IOS
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class='fa fa-windows'></i>
                    Windows
                  </a>
                </li>
            </ul>
          </li>
        </ul>
    </div>

