<?php
//inicio de sesión
include "baseDatos/conexion.php";

session_start();
if (empty($_SESSION["id"])) {
    header("location: login.php");
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Sistema Web Admin</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <?php
    //include "vistas/parte_superior.php";

    ?>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="principal.php">Sistema de Agenda</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>

        <!-- Navbar-->
        <ul class="navbar-nav ms-auto mr-0 mr-md-3 my-2 my-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user fa-fw"></i> <?php echo $_SESSION["nom"] . " " . $_SESSION["appat"]; ?></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Configuaración</a></li>
                    <!--<li><a class="dropdown-item" href="#!">Acrividad del usuario</aa></li>-->
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="baseDatos/sesion.php"><i class="fa-solid fa-right-to-bracket"></i> Cerrar sesión</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <center><img src="img/A__2_-removebg-preview.png" width="120" height="120"></center>
                        <div class="sb-sidenav-menu-heading">Configuración</div>
                        <a class="nav-link" href="principal.php">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-house"></i></div>
                            Inicio
                        </a>

                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <!--<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Temas
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>-->
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Modulos
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="usuario/usuario.php">Usuario</a>
                                <a class="nav-link" href="Horario/horario.php">Horario</a>
                                <a class="nav-link" href="evento/eventos.php">Eventos</a>
                                <a class="nav-link" href="tareas/tareas.php">Tareas</a>
                                <a class="nav-link" href="evento_predefinidos/evento_predefinido.php">Eventos Predefinidos</a>
                                <a class="nav-link" href="recordarios/recordatorio.php">Recordatorios</a>
                                <a class="nav-link" href="contactos/contacto.php">Contactos</a>
                                <a class="nav-link" href="Notas/notas.php">Notas</a>
                                <a class="nav-link" href="Gastos/gastos.php">Gastos</a>
                            </nav>
                        </div>
                        <!-- <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                    Usuario
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="login.php">Inicio de sesión</a>
                                        <a class="nav-link" href="register.php">Registrar usuario</a>
                                        <a class="nav-link" href="password.php">Forgot Password</a>
                                        <a class="nav-link" href="usuario/usuario.php">Crud usuario</a>
                                    </nav>
                                </div>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                    Eventos
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="evento/eventos.php">Evento</a>
                                        <a class="nav-link" href="tareas/tareas.php">Tarea</a>
                                        <a class="nav-link" href="evento_predefinidos/evento_predefinido.php">Eventos Predefinidos</a>
                                        <a class="nav-link" href="recordarios/recordatorio.php">Recordatorio</a>
                                        <a class="nav-link" href="contactos/contacto.php">Contactos</a>
                                    </nav>
                                </div>
                            </nav> -->

                        <div class="sb-sidenav-menu-heading">Complementos</div>
                        <a class="nav-link" href="charts.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Graficas
                        </a>
                        <!--<a class="nav-link" href="calendar/calendario.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Calendario
                        </a>-->

                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as: </div>
                    <?php echo $_SESSION["nom"] . " " . $_SESSION["appat"]; ?>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <div class="container-fluid px-4">
                <h1 class="mt-4">Bienvenido <?php echo $_SESSION["nom"] . " " . $_SESSION["appat"]; ?> </h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.php">Calendario personal</a></li>
                    <li class="breadcrumb-item active">Agenda</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-body">
                        <?php
                        include "calendario.php";
                        include "vistas/social_bar.php";
                        ?>
                    </div>
                </div>
                </div>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Ingenieria de software; Sitio WEB 2023</div>
                            <div class="text-muted">Administración de agenda
                                <!--<a href="#">Administración de agenda</a>-->
                                &middot;
                                Ing Sistemas computacionales; Negrin Chable Paula Cristal
                                <!--<a href="#">Ing Sistemas computacionales; Negrin Chable Paula Cristal</a>-->
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </div>
</body>

</html>