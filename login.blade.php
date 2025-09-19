<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css1/login.css') }}">
  <title>EducaVial - Iniciar Sesión</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
  <div class="login-container">
    <div class="image-section">
      <span class="photo-credit">
        <a href="https://losafrolatinos.com/2017/08/11/hablemos-de-quibdo-lets-talk-about-quibdo/">Foto cortesía de Maruja Uribe</a>
      </span>
    </div>
    <div class="login-form-section">
      <div class="login-card">
        <div class="header-logo">
          <!--<div class="logo-circle">
            <i class="fas fa-hat-wizard"></i>
          </div>-->
          <img src="{{asset('/img/Logo_1.jpg')}}" alt="Logo EducaVial" class="header-logo-img">
          <span class="logo-text">EducaVial</span>
        </div>
        <h1>Iniciar Sesión</h1>

        <?php if (!empty($error)): ?>
          <div class="alert alert-danger" role="alert">
            <?php echo $error; ?>
          </div>
        <?php endif; ?>

        <form action="login.php" method="POST">
          <div class="form-group">
            <label for="email_or_phone" class="form-label">Correo Electrónico</label>
            <div class="input-with-icon">
              <span class="input-prefix-icon">
                <i class="far fa-envelope"></i>
              </span>
              <input type="text" id="email_or_phone" name="email_or_phone" class="form-control" placeholder="Introduce tu correo electrónico" required>
            </div>
          </div>
          <div class="form-group">
            <label for="password" class="form-label">Contraseña</label>
            <div class="password-input-group">
              <span class="input-prefix-icon">
                <i class="fas fa-lock"></i>
              </span>
              <input type="password" id="password" name="password" class="form-control" placeholder="Introduce tu contraseña" required>
              <span class="password-toggle-icon" onclick="togglePasswordVisibility()">
                <i class="far fa-eye" id="password-eye-icon"></i>
              </span>
            </div>
          </div>
          <div class="form-options">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="remember_me" name="remember_me">
              <label class="form-check-label" for="remember_me">
                Recordar
              </label>
            </div>
            <a href="olvido_contrasena.html" class="forgot-password">¿Has olvidado tu contraseña?</a>
          </div>
          <button type="submit" class="btn-sign-in">Iniciar Sesión</button>
        </form>

        <div class="signup-link">
          ¿No tienes cuenta? <a href="{{ url('/registro') }}">Registrar ahora</a>
        </div>

        <div class="centered-social-handle">
          <img src="{{asset('/img/Logo_3.png')}}" alt="Profile" class="profile-pic" /> <span>@infoeducavial</span>
        </div>
      </div>
      <div class="footer-credits">
        <!-- <span class="copyright">© Login 2025</span> -->
      </div>
    </div>
  </div>

  <script>
    function togglePasswordVisibility() {
      const passwordField = document.getElementById('password');
      const eyeIcon = document.getElementById('password-eye-icon');
      if (passwordField.type === 'password') {
        passwordField.type = 'text';
        eyeIcon.classList.remove('fa-eye');
        eyeIcon.classList.add('fa-eye-slash');
      } else {
        passwordField.type = 'password';
        eyeIcon.classList.remove('fa-eye-slash');
        eyeIcon.classList.add('fa-eye');
      }
    }
  </script>
</body>

</html>