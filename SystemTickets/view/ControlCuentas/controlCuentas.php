
<!DOCTYPE html>
<html>
    <?php require_once '../MainHead/head.php'; ?>
    <title>NuevoTicket</title>
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        
        <?php require_once '../MainHeader/header.php'; ?>

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php require_once '../MainNav/nav.php'; ?>
            <!-- Navbar End -->


            <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4">
                <form method="post" id="empleado_form">              
                    <div class="row g-4">
                            <div class="bg-secondary rounded h-20 p-1">
                                <div class="row vh-20 bg-secondary rounded align-items-center justify-content-center mx-0">
                                    <div class="col-md-5 text-center">
                                        <h5 class="mb-3">Home / Control de cuentas empleados</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-secondary rounded h-20 p-1">
                                <div class="bg-secondary rounded h-100 p-4">                            
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Crear</button>
                                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Eliminar</button>
                                            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Editar</button>
                                        </div>
                                    </nav>
                                    <div class="tab-content pt-3" id="nav-tabContent">                                    
                                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                                <div class="row vh-20 bg-secondary rounded align-items-center justify-content-center mx-0">
                                                    <div class="col-md-8 text-center">
                                                        <h4 class="mb-3">CREAR CUENTA PARA UN EMPLEADO</h4>
                                                    </div>
                                                </div>                                                
                                                <div class="col-sm-11 col-xl-8 mx-auto">                                    
                                                    <div class="bg-secondary rounded h-100 p-4">                                            
                                                        <div class="row">
                                                            
                                                            <div class="col-md-5">
                                                                <div class="form-floating mb-3">
                                                                    <input id="nombre_emp" name="nombre_emp" type="text" class="form-control form-control-sm" placeholder="Nombre Cliente" >
                                                                    <label for="nombre_emp">Nombre Cliente</label>
                                                                </div>
                                                                <div class="form-floating mb-3">
                                                                    <input id="apellido_emp" name="apellido_emp" type="text" class="form-control form-control-sml"  placeholder="Apellido Cliente">
                                                                    <label for="apellido_emp">Apellido Cliente</label>
                                                                </div>
                                                                <div class="form-floating mb-3">
                                                                    <input id="DNI_emp" name="DNI_emp" type="text" class="form-control" placeholder="DNI Empleado">
                                                                    <label for="DNI_emp">DNI Empleado</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-floating mb-3">
                                                                    <input id="phone_emp" name="phone_emp" type="text" class="form-control" placeholder="Telefono">
                                                                    <label for="phone_emp">Teléfono</label>
                                                                </div>
                                                                <div class="form-floating mb-3">
                                                                    <input id="email_emp" name="email_emp" type="text" class="form-control" placeholder="Correo Electrónico">
                                                                    <label for="email_emp">Correo Electrónico</label>
                                                                </div>
                                                                <div class="form-floating mb-3">
                                                                    <input id="password_emp" name="password_emp" type="password" class="form-control" placeholder="Contraseña">
                                                                    <label for="password_emp">Contraseña</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="text-center">
                                                            <input type="hidden" name="enviar" class="form-control" value="si">
                                                            <button type="submit" name="action" value="add" class="btn btn-success m-1">Crear Cuenta</button>
                                                        </div>
                                                    </div>                   
                                                </div>
                                        </div>                                                       
                                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                <div class="row vh-20 bg-secondary rounded align-items-center justify-content-center mx-0">
                                                    <div class="col-md-8 text-center">
                                                    <h4 class="mb-3">ElIMINAR CUENTA DE UN EMPLEADO</h4>
                                                    </div>
                                                </div>
                                                <label for="exampleInputEmail1" class="form-label">Ingrese el correo del empleado a eliminar</label>
                                                <div class="form-floating mb-3">
                                                    <input id="elim_correo" name="elim_correo" type="text" class="form-control" placeholder="Correo Electrónico">
                                                    <label for="elim_correo">Correo Electrónico</label>
                                                </div>
                                                <div class="text-center">
                                                    <input type="hidden" name="enviar" class="form-control" value="si">
                                                    <button id="btn_eliminar" name="action" value="add" class="btn btn-primary m-2">Eliminar Cuenta</button>
                                                </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                            <div class="row vh-20 bg-secondary rounded align-items-center justify-content-center mx-0">
                                                    <div class="col-md-8 text-center">
                                                    <h4 class="mb-3">EDITAR DATOS DE UN EMPLEADO</h4>
                                                    </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-md-8">
                                                    <label class="form-label">Ingrese el correo del empleado a buscar</label>
                                                    <div class="input-group mb-3">
                                                        <input id="buscar_emp" name="buscar_emp" class="form-control bg-dark border-0" type="text" placeholder="Buscar">                                        
                                                        <button type="button" class="btn btn-info rounded-pill">Buscar</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-11 col-xl-8 mx-auto">                                    
                                                <div class="bg-secondary rounded h-100 p-4">                                            
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <div class="form-floating mb-3">
                                                                <input type="text" class="form-control form-control-sm" id="floatingeditNombreCliente" placeholder="Nombre Cliente" >
                                                                <label for="floatingeditNombreCliente">Nombre Cliente</label>
                                                            </div>
                                                            <div class="form-floating mb-3">
                                                                <input type="text" class="form-control form-control-sml" id="floatingeditApellidoCliente" placeholder="Apellido Cliente">
                                                                <label for="floatingeditApellidoCliente">Apellido Cliente</label>
                                                            </div>
                                                            <div class="form-floating mb-3">
                                                                <input type="text" class="form-control" id="floatingeditDNIEmpleado" placeholder="DNI Empleado">
                                                                <label for="floatingeditDNIEmpleado">DNI Empleado</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-floating mb-3">
                                                                <input type="text" class="form-control" id="floatingeditTelefono" placeholder="Telefono">
                                                                <label for="floatingeditTelefono">Teléfono</label>
                                                            </div>
                                                            <div class="form-floating mb-3">
                                                                <input type="text" class="form-control" id="floatingeditCorreo" placeholder="Correo Electrónico">
                                                                <label for="floatingeditCorreo">Correo Electrónico</label>
                                                            </div>
                                                            <div class="form-floating mb-3">
                                                                <input type="password" class="form-control" id="floatingeditContrasena" placeholder="Contraseña">
                                                                <label for="floatingeditContrasena">Contraseña</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-center">
                                                        <button type="button" class="btn btn-warning m-2">Editar Cuenta</button>
                                                    </div>
                                                </div>        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </form>               
            </div>
            <!-- Blank End -->


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                            <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <?php require_once '../MainJs/js.php'; ?>
    <script type="text/JavaScript" src="nuevoEmpleado.js"></script>
    <script type="text/JavaScript" src="eliminarEmpleado.js"></script>
</body>
</html>
