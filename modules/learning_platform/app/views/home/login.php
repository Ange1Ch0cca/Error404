<!DOCTYPE html>
<html lang="es">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon" />
    <title>Iniciar Sesión | Error404</title>

    <link rel="stylesheet" href="../../../assets/css/stylelogin.css">

  </head>
    
  <body>
  <script src="https://kit.fontawesome.com/1756fdbe55.js" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/1756fdbe55.js" crossorigin="anonymous"></script>

<div class="container" id="container">
        <div class="form-container sign-up">
            <form>
                <h1>Crear Cuenta</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-apple"></i></a>
                </div>
                <span>o utiliza tu correo electrónico para registrarte</span>
                <input type="text" placeholder="Nombre Completo">
                <input type="email" placeholder="Correo Electrónico">
                <input type="password" placeholder="Contraseña">
                <button>Registrarse</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form>
                <h1>Iniciar Sesión</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-apple"></i></a>
                </div>
                <span>o utiliza tu correo electrónico y contraseña</span>
                <input type="email" placeholder="Correo Electrónico">
                <input type="password" placeholder="Contraseña">
                <a href="#">¿Olvidaste tu contraseña?</a>
                <button>Iniciar Sesión</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>¡Bienvenido de nuevo!</h1>
                    <p>Introduzca sus credenciales de acceso para utilizar todas las funciones del </p>
                    <button class="hidden" id="login">Iniciar Sesión</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Bienvenido</h1>
<p>Si eres estudiante del colegio y aún no tienes cuenta, regístrate para acceder al sistema.</p>
<button class="hidden" id="register">Crear cuenta</button>

                </div>
            </div>
        </div>
    </div>
    <script  src="../../../assets/js/mainlogin.js"></script>

  </body>
  
</html>
