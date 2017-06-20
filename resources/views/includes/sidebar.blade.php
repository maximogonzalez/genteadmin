<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{ url('/') }}" class="site_title"><span><strong>Prueba Artha</strong></span></a>
        </div>
        
        <div class="clearfix"></div>
        
        <!-- menu profile quick info -->
        <div class="profile">
            <div class="profile_pic">
                <img src="{{asset('images/logo_artha.jpg')}}"  alt="Avatar of {{ Auth::user()->name }}" class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Bienvenido,</span>
                <h2>{{ Auth::user()->name }}</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->
        
        <br />
        
        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <div class="clearfix"></div>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-wrench"></i> Sistema <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a> Estructura <span class="fa fa-chevron-down"></span></a>
								<ul class="nav child_menu">
									<li>
										<a href="#"> Módulos </a>
									</li>
									<li>
										<a href="#"> Menús </a>
									</li>
									<li>
										<a href="#"> Transacciones </a>
									</li>
									<li>
										<a href="#">  </a>
									</li>
																		
								</ul>
                            </li>  
							<li><a> Personas <span class="fa fa-chevron-down"></span></a>
								<ul class="nav child_menu">
									<li>
										<a href="#"> Usuarios </a>
									</li>
									<li>
										<a href="#"> Perfiles </a>
									</li>
									<li>
										<a href="#"> Grupos </a>
									</li>
									<li>
										<a href="#">  </a>
									</li>																		
								</ul>
                            </li>                
							<li><a> Acceso <span class="fa fa-chevron-down"></span></a>
								<ul class="nav child_menu">
									<li>
										<a href="#"> Configurar Autenticación y Accesos </a>
									</li>
									<li>
										<a href="#"> Privilegios </a>
									</li>
									<li>
										<a href="#"> Asignación de Privilegios </a>
									</li>							
								</ul>
                            </li>
							<li><a> Auditoría <span class="fa fa-chevron-down"></span></a>
								<ul class="nav child_menu">
									<li>
										<a href="#"> Registro de Auditoría </a>
									</li>
									<li>
										<a href="#"> Consultas </a>
									</li>
									<li>
										<a href="#"> Reportes</a>
									</li>
									<li>
										<a href="#"> Estadísticas</a>
									</li>										
								</ul>
                            </li>
							<li><a> Interfaces <span class="fa fa-chevron-down"></span></a>
								<ul class="nav child_menu">
									<li>
										<a href="#"> Importar datos xxx </a>
									</li>
									<li>
										<a href="#"> Exportar datos xxx... </a>
									</li>														
								</ul>
                            </li>
							<li><a> Documentación <span class="fa fa-chevron-down"></span></a>
								<ul class="nav child_menu">
									<li>
										<a href="#"> Versiones </a>
									</li>
									<li>
										<a href="#"> Manual de Usuario </a>
									</li>
									<li>
										<a href="#"> Manual Técnico </a>
									</li>
									<li>
										<a href="#"> Diccionario de Datos </a>
									</li>									
								</ul>
                            </li>
							<li>
								<a href="#"> Servicio al Usuario </a>
							</li>
							<li>
								<a href="#"> Acerca de </a>
							</li>
							<li>
								<a href="#"> Ayuda </a>
							</li>
							<li>
								<a href="#"> Contáctenos </a>
							</li>
                        </ul>
                    </li>                    
                </ul>
            </div>
            <div class="menu_section">
                <h3>Aplicación</h3>
                <ul class="nav side-menu">
                    <li>
                         <a><i class="fa fa-tasks"></i> Administradores <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li>
                                <a href="#">Level One</a>
                                <li>
                                    <a>Level One<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li class="sub_menu">
                                            <a href="#">Level Two</a>
                                        </li>
                                        <li>
                                            <a href="#">Level Two</a>
                                        </li>
                                        <li>
                                            <a href="#">Level Two</a>
                                        </li>
                                    </ul>
                                </li>
                            <li>
                                <a href="#">Level One</a>
                            </li>							
                        </ul>
                          
					<li>
                        <a><i class="fa fa-sitemap"></i> Operaciones <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li>
                                <a href="#">Level One</a>
                                <li>
                                    <a>Level One<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li class="sub_menu">
                                            <a href="#">Level Two</a>
                                        </li>
                                        <li>
                                            <a href="#">Level Two</a>
                                        </li>
                                        <li>
                                            <a href="#">Level Two</a>
                                        </li>
                                    </ul>
                                </li>
                            <li>
                                <a href="#">Level One</a>
                            </li>							
                        </ul>
                    </li>
                </ul>
            </div>
        
        </div>
        <!-- /sidebar menu -->
        
        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ url('/logout') }}">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>