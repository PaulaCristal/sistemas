<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Register - SB Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body>
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3 text-center" href="index.php">Sistema de Agenda</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fa-solid fa-calendar-days"></i></button>

  </nav>
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header  text-bg-primary">
                                    <h3 class="text-center font-weight-info my-1">Crear usuario</h3>
                                </div>
                                <div class="card-body">
                                    <form action="usuario/insert_user.php" method="POST">
                                        <div class="row mb-3">
                                            <div class="col-md-4">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputFirstName" type="text" name="nombre" placeholder="Nombre" />
                                                    <label for="inputFirstName">Nombre</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-floating">
                                                    <input class="form-control" id="appat" type="text" name="appat" placeholder="Apellido paterno " />
                                                    <label for="inputLastName">Apellido paterno</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-floating">
                                                    <input class="form-control" id="apmat" type="text" name="apmat" placeholder="Apellido materno" />
                                                    <label for="inputLastName">Apellido materno</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-4">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="domicilio" type="text" name="domicilio" placeholder="Nombre" />
                                                    <label for="inputFirstName">Domicilio</label>

                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-floating">
                                                    <input class="form-control" id="calle" type="text" name="calle" placeholder="Nombre" />
                                                    <label for="inputLastName">Calle</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-floating">
                                                    <input class="form-control" id="apmat" type="text" name="colonia" placeholder="Nombre" />
                                                    <label for="inputLastName">Colonia</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-4">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="municipio" type="text" name="municipio" placeholder="Nombre" />
                                                    <label for="inputFirstName">Municipio</label>

                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-floating">
                                                    <input class="form-control" id="estado" type="text" name="estado" placeholder="Nombre" />
                                                    <label for="inputLastName">Estado</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-floating">
                                                    <input class="form-control" id="cp" type="text" name="cp" placeholder="Nombre" />
                                                    <label for="inputLastName">Codigo postal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">

                                            <div class="input-group input-group-lg">
                                                <span class="input-group-text" id="inputGroup-sizing-lg">imagen</span>
                                                <input type="file" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" name="poster" accept="image/jpeg">
                                            </div>
                                        </div>

                                        <div class="row mb-4">
                                            <div class="col-md-3">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputFirstName" type="date" name="fecha_nac" placeholder="Fecha de nacimiento" />
                                                    <label for="inputFirstName">Fecha de nacimiento</label>

                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <select class="form-select" name="genero" id="genero">
                                                        <option selected>Seleccionar...</option>
                                                        <option value="Femenino">Femenino</option>
                                                        <option value="Masculino">Masculino</option>
                                                    </select>
                                                    <!--<input class="form-control" id="genero" type="text" name="genero" placeholder="Nombre" />-->
                                                    <label for="inputLastName">Genero</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <input class="form-control" id="apmat" type="text" name="celular" placeholder="Nombre" />
                                                    <label for="inputLastName">Número de celular</label>
                                                </div>

                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <select class="form-select" name="tipo_usuario" id="tipo_usuario">
                                                        <option selected>Seleccionar...</option>
                                                        <option value="1">Administrador</option>
                                                        <option value="2">Usuario estandar</option>
                                                    </select>
                                                    <!--<input class="form-control" id="genero" type="text" name="genero" placeholder="Nombre" />-->
                                                    <label for="inputLastName">Tipo usuario</label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-floating mb-2">
                                            <input class="form-control" id="inputEmail" type="email" name="nom_correo" placeholder="Nombre" />
                                            <label for="inputEmail">Correo electronico</label>
                                        </div>
                                        <div class="card-header">
                                            <h6 class="text-center font-weight-light my-2 ">Crear contraseña</h6>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-4">
                                                <div class="form-floating mb-3 my-2 mb-md-0">
                                                    <input class="form-control" id="inputPassword" type="password" name="clave" placeholder="Nombre" />
                                                    <label for="inputPassword">Contraseña</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-floating my-2 mb-3 mb-md-0">
                                                    <input class="form-control" id="inputPasswordConfirm" type="password" placeholder="Confirm password" />
                                                    <label for="inputPasswordConfirm">Confirmar contraseña</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <select class="form-select" name="tipo_usuario" id="tipo_usuario">
                                                        <option selected>Seleccionar...</option>
                                                        <option value="1">Activo</option>
                                                        <option value="0">Inactivo</option>
                                                    </select>
                                                    <!--<input class="form-control" id="genero" type="text" name="genero" placeholder="Nombre" />-->
                                                    <label for="inputLastName">Estatud</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-6 mb-3">
                                            <!--<div class="d-grid"><a class="btn btn-primary btn-block" href="usuario/insert_user.php">Registrar usuario</a></div>-->
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <input type="submit" value="Crear usuario" class="btn btn-primary ">
                                                <a href="login.php" class="btn btn-danger">Cancelar</a>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="login.php">Ya tienes una cuenta? Iniciar sesión</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <br>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-dark mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-white">Copyright &copy; Sitio Web 2023</div>
                        <div >
                            <a href="#" class="text-white">Privacy Policy</a>
                            &middot;
                            <a href="#" class="text-white">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>