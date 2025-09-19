<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css1/registro.css') }}">
  <title>EducaVial - Registro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
  <div class="register-container">
    <div class="image-section">
      <span class="photo-credit">
        <a href="https://losafrolatinos.com/2017/08/11/hablemos-de-quibdo-lets-talk-about-quibdo/">Foto cortesía de Maruja Uribe</a>
      </span>
    </div>
    <div class="register-form-section">
      <div class="register-card">
        <div class="header-logo">
          <!--<div class="logo-circle">
                    </div>-->
          <img src="{{asset('/img/Logo_1.jpg')}}" alt="Logo EducaVial" class="header-logo-img">
          <span class="logo-text">EducaVial</span>
        </div>
        <h1>Crear una Cuenta</h1>

        <form action="registro.php" method="POST">

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="nombre_completo" class="form-label">Nombre Completo</label>
                <div class="input-with-icon">
                  <span class="input-prefix-icon">
                    <i class="fas fa-user"></i>
                  </span>
                  <input type="text" id="nombre_completo" name="nombre_completo" class="form-control" placeholder="Introduce tu nombre completo" value="<?php echo htmlspecialchars($nombre_completo); ?>" required>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="correo" class="form-label">Correo Electrónico</label>
                <div class="input-with-icon">
                  <span class="input-prefix-icon">
                    <i class="far fa-envelope"></i>
                  </span>
                  <input type="email" id="correo" name="correo" class="form-control" placeholder="Introduce tu correo electrónico" value="<?php echo htmlspecialchars($correo); ?>" required>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="telefono" class="form-label">Teléfono</label>
                <div class="input-with-icon">
                  <span class="input-prefix-icon">
                    <i class="fas fa-phone"></i>
                  </span>
                  <input type="tel" id="telefono" name="telefono" class="form-control" placeholder="Introduce tu número de teléfono" value="<?php echo htmlspecialchars($telefono); ?>" required>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="password" class="form-label">Contraseña</label>
                <div class="password-input-group">
                  <span class="input-prefix-icon">
                    <i class="fas fa-lock"></i>
                  </span>
                  <input type="password" id="password" name="password" class="form-control" placeholder="Crea tu contraseña" required>
                  <span class="password-toggle-icon" onclick="togglePasswordVisibility('password')">
                    <i class="far fa-eye" id="password-eye-icon"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="confirm_password" class="form-label">Confirmar Contraseña</label>
                <div class="password-input-group">
                  <span class="input-prefix-icon">
                    <i class="fas fa-lock"></i>
                  </span>
                  <input type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder="Confirma tu contraseña" required>
                  <span class="password-toggle-icon" onclick="togglePasswordVisibility('confirm_password')">
                    <i class="far fa-eye" id="confirm-password-eye-icon"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="tipo_usuario" class="form-label">Tipo de Usuario</label>
                <div class="select-with-icon">
                  <span class="input-prefix-icon">
                    <i class="fas fa-users"></i>
                  </span>
                  <select id="tipo_usuario" name="tipo_usuario" class="form-select" required>
                    <option value="">Selecciona tu tipo de usuario</option>
                    <option value="estudiante"> Estudiante</option>
                    <option value="conductor"> Conductor</option>
                    <option value="peatón"> Peatón</option>
                    <option value="ciclista"> Ciclista</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
                <div class="input-with-icon">
                  <span class="input-prefix-icon">
                    <i class="fas fa-calendar-alt"></i>
                  </span>
                  <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-control" value="<?php echo htmlspecialchars($fecha_nacimiento); ?>">
                </div>
              </div>
            </div>
            <!--<div class="col-md-6">
                            <div class="form-group">
                                <label for="institucion" class="form-label">Institución (Opcional)</label>
                                <div class="input-with-icon">
                                    <span class="input-prefix-icon">
                                        <i class="fas fa-building"></i>
                                    </span>
                                    <input type="text" id="institucion" name="institucion" class="form-control" placeholder="Nombre de tu institución" value="<?php echo htmlspecialchars($institucion); ?>">
                                </div>
                            </div>
                        </div>-->
            <div class="col-6">
              <div class="form-group">
                <label for="direccion" class="form-label">Dirección</label>
                <div class="input-with-icon">
                  <span class="input-prefix-icon">
                    <i class="fas fa-map-marker-alt"></i>
                  </span>
                  <input type="text" id="direccion" name="direccion" class="form-control" placeholder="Tu dirección" value="<?php echo htmlspecialchars($direccion); ?>">
                </div>
              </div>
            </div>
          </div>
          <button type="submit" class="btn-register">Registrar</button>
        </form>

        <!--<div class="or-divider">O</div>

                <button type="button" class="btn-google-sign-up">
                    <i class="fab fa-google"></i>Registrarse con Google
                </button>-->

        <div class="login-link">
          ¿Ya tienes una cuenta? <a href="{{ url('/login') }}">Iniciar Sesión</a>
        </div>

        <div class="centered-social-handle">
          <img src="img/Logo_3.png" alt="Profile" class="profile-pic" /> <span>@infoeducavial</span>
        </div>
      </div>
      <!--<div class="footer-credits">
                <span class="copyright">© EducaVial 2025</span>
            </div>-->
    </div>
  </div>

  <script>
    function togglePasswordVisibility(fieldId) {
      const passwordField = document.getElementById(fieldId);
      const eyeIcon = document.getElementById(fieldId + '-eye-icon');
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