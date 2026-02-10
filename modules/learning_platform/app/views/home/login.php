<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link rel="stylesheet" href="../../../assets/css/stylelogin.css" />
</head>
<body>

  <!-- Fondo azul con burbujas -->
  <div class="bg">
    <span class="bubble b1"></span>
    <span class="bubble b2"></span>
    <span class="bubble b3"></span>
    <span class="bubble b4"></span>
  </div>

  <main class="viewport">
  <section class="card">

    <!-- BURBUJAS -->
<div class="bubble bubble-main">
  <h1>¡Bienvenido!</h1>
  <h3>Aprende de manera efectiva</h3>
  <p>
    Accede a tus cursos, revisa tus avances y descubre nuevos contenidos para seguir aprendiendo cada día.
  </p>
</div>

<span class="bubble bubble-2"></span>
<span class="bubble bubble-3"></span>
<span class="bubble bubble-4"></span>

<!-- FORM -->
<div class="form">
  <h2>Iniciar sesión</h2>
  <p class="subtitle">
    Ingresa con tu cuenta para acceder a la plataforma de aprendizaje
  </p>

  <input type="text" placeholder="Usuario o Correo Electrónico" />

  <div class="password">
    <input type="password" placeholder="Contraseña" id="password" />
    <button type="button" id="togglePassword">MOSTRAR</button>
  </div>

  <div class="options">
    <label>
      <input type="checkbox" /> Recordarme
    </label>
    <a href="#">¿Olvidaste tu contraseña?</a>
  </div>
<button class="btn primary" onclick="window.location.href='../page/inicio.php'">
  Ingresar
</button>


  <p class="signup">
    ¿No tienes cuenta? <a href="register.php">Regístrate</a>
  </p>
</div>


  </section>
</main>

  <script src="../../../assets/js/mainlogin.js"></script>
</body>
</html>
