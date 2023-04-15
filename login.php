<?php
//se llama la conexion con la base de datos
require "baseDatos/conexion.php";
session_start();
include "baseDatos/controlador.php";
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/login.css" />
  <script src="js/sweetalert2.all.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
  <title>Login</title>
</head>

<body style="background: #DBEDF0;">
  <nav class="sb-topnav navbar navbar-expand navbar-dark " style="background: #8c50f1">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3 text-center" href="index.html">Sistema de Agenda <i class="fa-solid fa-calendar-days"></i></a>
    <!-- Sidebar Toggle-->
    <!-- <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fa-solid fa-calendar-days"></i></button> -->

  </nav>
  <br>
  <!----------------------- Main Container -------------------------->
  <div class="container d-flex justify-content-center align-items-center min-vh-100">
    <!----------------------- Login Container -------------------------->
    <div class="row border rounded-5 p-3 border border-1 border border-info-subtle bg-white shadow-lg p-3 mb-5 bg-body-tertiary rounded ">
      <!--------------------------- Left Box ----------------------------->
      <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #8c50f1">
        <div class="featured-image mb-3">
          <img src="img/calendar.png" class="img-fluid" style="width: 250px" />
        </div>
        <p class="text-white fs-2" style="font-weight: 600">Sistema web</p>
        <small class="text-white text-wrap text-center" style="width: 20rem; font-weight: bold">Administración de agenda y gastos personales.</small>
      </div>
      <!-------------------- ------ Right Box ---------------------------->

      <div class="col-md-6 right-box">
        <div class="row align-items-center">
          <div class="header-text mb-4">

            <h2 class="text-center">Iniciar sesión</h2>
            <center><img class="img-fluid" src="img/gratis-png-hombre-vestido-con-camisa-azul-ilustracion-iconos-de-computadora-avatar-usuario-login-avatar-removebg-preview.png" width="200" alt=""></center>
          </div>
          <?php
          //codigo de que no se registro correctamente
          if (isset($_SESSION['msj'])) {
            $respuesta = $_SESSION['msj']; ?>
            <script>
              Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '<?php echo $respuesta; ?>'
              })
            </script>

          <?php
            unset($_SESSION['msj']);
          }
          ?>
          <form action="" method="POST">
            <div class="input-group mb-3">
              <input type="text" name="usuario" autocomplete="on" autofocus required class="form-control form-control-lg bg-light fs-6 shadow p-3 mb-3 bg-body-tertiary rounded" placeholder="Correo electronico" />
            </div>
            <div class="input-group mb-1">
              <input type="password" name="password" class="form-control form-control-lg bg-light fs-6 shadow p-3 mb-3 bg-body-tertiary rounded" placeholder="Contraseña" required />
            </div>
            <div class="input-group mb-5 d-flex justify-content-between">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="formCheck" />
                <label for="formCheck" class="form-check-label text-secondary"><small>Recordarme</small></label>
              </div>
              <div class="forgot">
                <small><a href="#">Olvido contraseña?</a></small>
              </div>
            </div>
            <!-- <?php
            # si hay un mensaje, mostrarlo
            if (isset($_GET["mensaje"])) { ?>
              <div class="alert alert-warning">
                <?php echo $_GET["mensaje"] ?>
              </div>
            <?php } ?> -->
            <div class="input-group mb-3">
              <!--<button class="btn btn-lg btn-primary w-100 fs-6">
              Ingresar
            </button>-->
              <input type="submit" name="ingresar"  style="background: #8c50f1" class="text-white btn btn-lg w-100 fs-6"></input>
            </div>
            <div class="input-group mb-3">
              <button class="btn btn-lg btn-light w-100 fs-6">
                <img src="img/google.png" style="width: 20px" class="me-2" /><small>Sign In with Google</small>
              </button>
            </div>
            <div class="row">
              <small>No tiene una cuenta? <a href="register.php">Crear cuenta</a></small>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php //include "../vistas/footer.php"; 
  ?>
  <div id="layoutAuthentication_footer">
    <footer class="py-4  mt-auto"  style="background: #8c50f1">
      <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between small">
          <div class="text-white">Ingenieria de software; Sitio WEB 2023</div>
          <div>
            <a href="#" class="text-white">Administración de agenda</a>
            &middot;
            <a href="#" class="text-white">Ing Sistemas computacionales; Negrin Chable Paula Cristal</a>
          </div>
        </div>
      </div>
    </footer>
  </div>
</body>

</html>