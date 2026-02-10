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
        <h3>Únete y empieza a aprender</h3>
        <p>
            Regístrate en la plataforma para acceder a tus cursos, seguir tu progreso y descubrir nuevos contenidos.
        </p>
    </div>

    <span class="bubble bubble-2"></span>
    <span class="bubble bubble-3"></span>
    <span class="bubble bubble-4"></span>

    <!-- FORMULARIO DE REGISTRO -->
    <div class="form">
        <h2>Crear cuenta</h2>
        <p class="subtitle">
            Completa los datos para registrarte como estudiante y empezar a aprender.
        </p>

        <input type="text" placeholder="Nombre completo" />

        <input type="text" placeholder="Número de estudiante" />

        <div class="password">
            <input type="password" placeholder="Contraseña" id="password" />
            <button type="button" id="togglePassword">MOSTRAR</button>
        </div>

        <div class="terms">
            <label>
                <input type="checkbox" /> Acepto los términos y condiciones
            </label>
        </div>

        <button class="btn primary">Registrarse</button>

        <p class="signup">
            ¿Ya tienes cuenta? <a href="login.php">Inicia sesión</a>
        </p>
    </div>

</section>

    </main>

    <script src="../../../assets/js/mainlogin.js"></script>
</body>

</html>