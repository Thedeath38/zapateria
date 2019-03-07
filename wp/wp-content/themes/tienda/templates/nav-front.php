<nav class="navbar navbar-default">
      <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                        aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                  </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav newnav">
                        <li class="active">
                              <a href="<?php echo get_page_link(get_page_by_title('Inicio')) ?>">Inicio</a>
                        </li>
                        <li>
                              <a href="<?php echo get_page_link(get_page_by_title('About')) ?>">About</a>
                        </li>
                        
                        <li>
                              <a href="<?php echo get_page_link(get_page_by_title('Blog')) ?>">Blog</a>
                        </li>
                        <li>
                             <a href="<?php echo get_page_link(get_page_by_title('Archives')) ?>">Archives</a>
                        </li>
                        <li>
                              <a href="<?php echo get_page_link(get_page_by_title('Contacto')) ?>">Contacto</a>
                        </li>
                        <li>
                              <a href="#">Tienda</a>
                        </li>
                       
                  </ul>
                  <!--<div class="mobile-nav-button">-->
                         
                  <!--</div>-->
            </div>
            <button class='usuario' data-toggle="modal" data-target="#miModal" href="#">
                               <i class="fa fa-user-o" aria-hidden="true"></i>
                        </button>
            <!-- /.navbar-collapse -->
      </div>
      <div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Ingresar</h4>
			</div>
			<div class="modal-body">
			    <div class="form-group">
                    
                
			    <?php
				
                    $args = array(
                    'redirect' => admin_url(), 
                    'form_id' => 'loginform-custom',
                    'label_username' => __( 'Usuario' ),
                    'label_password' => __( 'Contraseña' ),
                    'label_remember' => __( 'Recordar' ),
                    'label_log_in' => __( 'Acceder' ),
                    'remember' => true
                );
                    wp_login_form($args);
                    ?>
                    </div>
                    <?php
                    wp_register('<span>','</span>',true);
                    
                     
                ?>
                     <br><a href="<?php echo wp_logout_url(get_permalink());?>">Cerrar Sesion</a>
                     
                
                
                
			</div>
		</div>
	</div>
</div>
      <!-- /.container-fluid -->
</nav>