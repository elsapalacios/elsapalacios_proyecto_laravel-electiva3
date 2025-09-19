<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Panel de Usuario | EducaVial</title>
  <link rel="stylesheet" href="{{ asset('css1/panel_usuarios.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
      <a class="navbar-brand" href="#"><i class="fas fa-user-circle me-2"></i>Panel de Usuario | EducaVial</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#userNavbar"
        aria-controls="userNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="userNavbar">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="#dashboard">Panel Usuarios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/panel_admin">Panel Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#profile">Mi Perfil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#progress">Mi Progreso</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#certificates">Mis Certificados</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#report-incident">Reportar Incidente</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#my-reports">Mis Reportes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Salir</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main>
    <section id="dashboard" class="user-section container animate-fade-in">
      <h2 class="section-heading mb-4">¡Bienvenid@, <span id="userNameDashboard">Usuario</span>!</h2>
      <div class="row">
        <div class="col-md-4 animate-slide-up" style="animation-delay: 0.1s;">
          <div class="user-card text-center">
            <i class="fas fa-book-reader fa-3x text-primary mb-3"></i>
            <h5>Módulos Completados</h5>
            <p class="fs-2 text-primary" id="completedModulesCount">0</p>
          </div>
        </div>
        <div class="col-md-4 animate-slide-up" style="animation-delay: 0.2s;">
          <div class="user-card text-center">
            <i class="fas fa-trophy fa-3x text-success mb-3"></i>
            <h5>Certificados Obtenidos</h5>
            <p class="fs-2 text-success" id="certificatesCount">0</p>
          </div>
        </div>
        <div class="col-md-4 animate-slide-up" style="animation-delay: 0.3s;">
          <div class="user-card text-center">
            <i class="fas fa-exclamation-circle fa-3x text-warning mb-3"></i>
            <h5>Reportes Pendientes</h5>
            <p class="fs-2 text-warning" id="pendingUserReportsCount">0</p>
          </div>
        </div>
      </div>
    </section>

    <section id="profile" class="user-section container animate-fade-in">
      <h2 class="section-heading mb-4">Mi Perfil</h2>
      <div class="user-card animate-slide-up">
        <form id="profileForm">
          <div class="mb-3">
            <label for="profileName" class="form-label">Nombre Completo</label>
            <input type="text" class="form-control" id="profileName" readonly>
          </div>
          <div class="mb-3">
            <label for="profileEmail" class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control" id="profileEmail" readonly>
          </div>
          <div class="mb-3">
            <label for="profilePhone" class="form-label">Teléfono</label>
            <input type="text" class="form-control" id="profilePhone">
          </div>
          <div class="mb-3">
            <label for="profileType" class="form-label">Tipo de Usuario</label>
            <input type="text" class="form-control" id="profileType" readonly>
          </div>
          <div class="mb-3">
            <label for="profilePassword" class="form-label">Nueva Contraseña (dejar en blanco para no cambiar)</label>
            <input type="password" class="form-control" id="profilePassword">
          </div>
          <button type="button" class="btn btn-primary-custom" id="editProfileBtn">Editar Perfil</button>
          <button type="submit" class="btn btn-success d-none" id="saveProfileBtn">Guardar Cambios</button>
          <button type="button" class="btn btn-secondary d-none" id="cancelEditProfileBtn">Cancelar</button>
        </form>
      </div>
    </section>

    <section id="progress" class="user-section container animate-fade-in">
      <h2 class="section-heading mb-4">Mi Progreso en Módulos</h2>
      <div class="user-card animate-slide-up">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Módulo</th>
                <th>Tipo</th>
                <th>Dificultad</th>
                <th>Progreso</th>
                <th>Fecha de Inicio</th>
                <th>Fecha de Completado</th>
                <th>Acción</th>
              </tr>
            </thead>
            <tbody id="progressTableBody">
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <section id="certificates" class="user-section container animate-fade-in">
      <h2 class="section-heading mb-4">Mis Certificados</h2>
      <div class="user-card animate-slide-up">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Módulo</th>
                <th>Puntuación</th>
                <th>Fecha de Emisión</th>
                <th>Código</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody id="certificatesTableBody">
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <section id="report-incident" class="user-section container animate-fade-in">
      <h2 class="section-heading mb-4">Reportar Nuevo Incidente</h2>
      <div class="user-card animate-slide-up">
        <form id="reportForm">
          <div class="mb-3">
            <label for="tipoIncidente" class="form-label">Tipo de Incidente</label>
            <select class="form-select" id="tipoIncidente" required>
              <option value="">Selecciona un tipo</option>
              <option value="omision_semaforo">Omisión de Semáforo</option>
              <option value="exceso_velocidad">Exceso de Velocidad</option>
              <option value="estacionamiento_ilegal">Estacionamiento Ilegal</option>
              <option value="manejo_temerario">Manejo Temerario</option>
              <option value="otro">Otro</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="ubicacionIncidente" class="form-label">Ubicación del Incidente</label>
            <input type="text" class="form-control" id="ubicacionIncidente"
              placeholder="Ej: Calle 10 # 5-20, cerca al parque" required>
          </div>
          <div class="mb-3">
            <label for="descripcionIncidente" class="form-label">Descripción Detallada</label>
            <textarea class="form-control" id="descripcionIncidente" rows="3"
              placeholder="Describe lo sucedido con el mayor detalle posible." required></textarea>
          </div>
          <div class="mb-3">
            <label for="fotoIncidente" class="form-label">Adjuntar Foto (opcional)</label>
            <input class="form-control" type="file" id="fotoIncidente" accept="image/*">
            <img id="fotoPreview" class="img-fluid rounded report-photo-preview d-none" alt="Vista previa de la foto">
          </div>
          <button type="submit" class="btn btn-primary-custom">Enviar Reporte</button>
          <div id="reportMessage" class="mt-3" style="display: none;"></div>
        </form>
      </div>
    </section>

    <section id="my-reports" class="user-section container animate-fade-in">
      <h2 class="section-heading mb-4">Mis Reportes de Incidentes</h2>
      <div class="user-card animate-slide-up">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Tipo</th>
                <th>Ubicación</th>
                <th>Fecha</th>
                <th>Estado</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody id="myReportsTableBody">
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </main>

  <footer class="footer">
    <div class="container">
      <p class="mb-0">© 2025 EducaVial Quibdó. Panel de Usuario.</p>
    </div>
  </footer>

  <div class="modal fade" id="reportDetailsModal" tabindex="-1" aria-labelledby="reportDetailsModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="reportDetailsModalLabel">Detalles de Mi Reporte</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p><strong>ID del Reporte:</strong> <span id="detailReportId"></span></p>
          <p><strong>Tipo de Incidente:</strong> <span id="detailReportType"></span></p>
          <p><strong>Ubicación:</strong> <span id="detailReportLocation"></span></p>
          <p><strong>Descripción:</strong> <span id="detailReportDescription"></span></p>
          <p><strong>Fecha de Reporte:</strong> <span id="detailReportDate"></span></p>
          <p><strong>Estado:</strong> <span id="detailReportStatus"></span></p>
          <div class="mb-3">
            <label for="reportPhotoDetail" class="form-label">Foto Adjunta:</label>
            <img id="reportPhotoDetail" src="" class="img-fluid rounded shadow-sm d-block" alt="Evidencia del Reporte"
              onerror="this.style.display='none'">
            <p id="noPhotoTextDetail" class="text-muted d-none">No se adjuntó foto.</p>
          </div>
          <div class="mb-3">
            <label for="reportCommentsDetail" class="form-label">Comentarios de Funcionarios:</label>
            <textarea class="form-control" id="reportCommentsDetail" rows="4" readonly></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // --- Simulated Database Data ---
      // In a real app, this would be fetched from your backend for the logged-in user.
      let users = [{
        Id_usuario: 1,
        nombre_completo: 'Elsa Palacios',
        correo: 'elsa@gmail.com',
        telefono: '3204567890',
        tipo_usuario: 'estudiante',
        fecha_registro: '2025-06-03 00:16:52',
        password: 'hashedpassword1'
      }, {
        Id_usuario: 2,
        nombre_completo: 'Yoisi Palacios',
        correo: 'yoisi@gmail.com',
        telefono: '3213468756',
        tipo_usuario: 'estudiante',
        fecha_registro: '2025-06-03 14:06:44',
        password: 'hashedpassword2'
      }, {
        Id_usuario: 3,
        nombre_completo: 'Ana López',
        correo: 'ana@gmail.com',
        telefono: '3109876543',
        tipo_usuario: 'conductor',
        fecha_registro: '2024-11-20 09:30:00',
        password: 'hashedpassword3'
      }, {
        Id_usuario: 4,
        nombre_completo: 'Carlos Asprilla',
        correo: 'carl@gmail.com',
        telefono: '3001112233',
        tipo_usuario: 'peatón',
        fecha_registro: '2024-10-10 11:00:00',
        password: 'hashedpassword4'
      }, ];

      let modules = [{
        Id_modulo: 1,
        titulo: 'Normas Básicas de Tránsito',
        tipo_contenido: 'video',
        nivel_dificultad: 'básico',
        estado: 1,
        descripcion: 'Este módulo cubre las señales de tránsito, límites de velocidad y derechos de paso.'
      }, {
        Id_modulo: 2,
        titulo: 'Conducción Defensiva',
        tipo_contenido: 'quiz',
        nivel_dificultad: 'intermedio',
        estado: 1,
        descripcion: 'Ponte a prueba con este quiz interactivo sobre situaciones de riesgo y cómo evitarlas.'
      }, {
        Id_modulo: 3,
        titulo: 'Seguridad Peatonal y Ciclista',
        tipo_contenido: 'infografía',
        nivel_dificultad: 'básico',
        estado: 1,
        descripcion: 'Infografías interactivas con tips clave para transitar seguro como peatón o ciclista.'
      }, {
        Id_modulo: 4,
        titulo: 'Primeros Auxilios en Vía',
        tipo_contenido: 'video',
        nivel_dificultad: 'avanzado',
        estado: 1,
        descripcion: 'Aprende a actuar en caso de emergencias viales.'
      }, ];

      let progreso_usuarios = [{
        Id_progreso: 1,
        Id_usuario: 1,
        Id_modulo: 1,
        fecha_inicio: '2025-06-03 00:16:52',
        fecha_completado: '2025-06-05 10:00:00',
        puntuacion_quiz: 85,
        estado_progreso: 'completado'
      }, {
        Id_progreso: 2,
        Id_usuario: 1,
        Id_modulo: 2,
        fecha_inicio: '2025-06-06 00:00:00',
        fecha_completado: null,
        puntuacion_quiz: null,
        estado_progreso: 'en_progreso'
      }, {
        Id_progreso: 3,
        Id_usuario: 2,
        Id_modulo: 1,
        fecha_inicio: '2025-06-04 09:00:00',
        fecha_completado: '2025-06-06 15:30:00',
        puntuacion_quiz: 92,
        estado_progreso: 'completado'
      }, {
        Id_progreso: 4,
        Id_usuario: 3,
        Id_modulo: 3,
        fecha_inicio: '2024-12-01 10:00:00',
        fecha_completado: '2024-12-05 16:00:00',
        puntuacion_quiz: null, // No quiz for infographic
        estado_progreso: 'completado'
      }, ];

      let certificados = [{
        Id_certificado: 1,
        Id_usuario: 1,
        fecha_emision: '2025-06-05 10:05:00',
        codigo_certificado: 'CERT-001-A',
        Id_modulo: 1,
        puntuacion: 85,
        estado: 'activo'
      }, {
        Id_certificado: 2,
        Id_usuario: 2,
        fecha_emision: '2025-06-06 15:35:00',
        codigo_certificado: 'CERT-002-B',
        Id_modulo: 1,
        puntuacion: 92,
        estado: 'activo'
      }, {
        Id_certificado: 3,
        Id_usuario: 3,
        fecha_emision: '2024-12-05 16:05:00',
        codigo_certificado: 'CERT-003-C',
        Id_modulo: 3,
        puntuacion: null, // No score for infographic
        estado: 'activo'
      }, ];

      let reports = [{
        Id_reporte: 1,
        Id_usuario: 1,
        tipo_incidente: 'Omisión de Semáforo',
        ubicacion: 'Calle 25 #3-10, Centro',
        descripcion: 'Un vehículo se saltó el semáforo en rojo.',
        fecha_reporte: '2025-05-28 10:30:00',
        estado: 'validado',
        foto_url: 'https://placehold.co/400x300/dc3545/ffffff?text=Evidencia+Reporte+1',
        comentarios: [{
          funcionarioId: 3,
          comentario: 'Reporte recibido, se está investigando.',
          fecha: '2025-05-29 09:00:00'
        }, {
          funcionarioId: 5,
          comentario: 'Incidente verificado, se ha tomado acción.',
          fecha: '2025-05-31 11:00:00'
        }, ],
      }, {
        Id_reporte: 2,
        Id_usuario: 1, // Another report by same user
        tipo_incidente: 'Estacionamiento Ilegal',
        ubicacion: 'Carrera 5 #10-20, Barrio Jardín',
        descripcion: 'Coche estacionado en zona prohibida obstaculizando el paso.',
        fecha_reporte: '2025-06-01 14:15:00',
        estado: 'pendiente',
        foto_url: '',
        comentarios: [],
      }, {
        Id_reporte: 3,
        Id_usuario: 2,
        tipo_incidente: 'Exceso de Velocidad',
        ubicacion: 'Avenida Principal, cerca al Parque',
        descripcion: 'Motocicleta excediendo el límite de velocidad constantemente.',
        fecha_reporte: '2025-06-01 18:00:00',
        estado: 'pendiente',
        foto_url: '', // No photo
        comentarios: [],
      }, ];

      // --- Simulate current logged-in user (e.g., user with Id_usuario: 1) ---
      const currentUserId = 1;
      const currentUser = users.find(u => u.Id_usuario === currentUserId);

      if (!currentUser) {
        console.error('No se encontró el usuario actual. Redirigiendo a la página de inicio.');
        alert('No se encontró el usuario actual. Por favor, inicie sesión.');
        window.location.href = 'index.html';
        return;
      }

      // --- Dashboard Data Population ---
      const updateDashboard = () => {
        document.getElementById('userNameDashboard').textContent = currentUser.nombre_completo;
        const userProgress = progreso_usuarios.filter(p => p.Id_usuario === currentUserId && p.estado_progreso === 'completado');
        document.getElementById('completedModulesCount').textContent = userProgress.length;
        const userCertificates = certificados.filter(c => c.Id_usuario === currentUserId && c.estado === 'activo');
        document.getElementById('certificatesCount').textContent = userCertificates.length;
        const userPendingReports = reports.filter(r => r.Id_usuario === currentUserId && r.estado === 'pendiente');
        document.getElementById('pendingUserReportsCount').textContent = userPendingReports.length;
      };

      // --- Profile Management ---
      const profileForm = document.getElementById('profileForm');
      const profileNameInput = document.getElementById('profileName');
      const profileEmailInput = document.getElementById('profileEmail');
      const profilePhoneInput = document.getElementById('profilePhone');
      const profileTypeInput = document.getElementById('profileType');
      const profilePasswordInput = document.getElementById('profilePassword');
      const editProfileBtn = document.getElementById('editProfileBtn');
      const saveProfileBtn = document.getElementById('saveProfileBtn');
      const cancelEditProfileBtn = document.getElementById('cancelEditProfileBtn');

      const loadProfile = () => {
        profileNameInput.value = currentUser.nombre_completo;
        profileEmailInput.value = currentUser.correo;
        profilePhoneInput.value = currentUser.telefono;
        profileTypeInput.value = currentUser.tipo_usuario.charAt(0).toUpperCase() + currentUser.tipo_usuario.slice(1);

        // Disable fields by default
        profilePhoneInput.setAttribute('readonly', true);
        profilePasswordInput.setAttribute('readonly', true);
        saveProfileBtn.classList.add('d-none');
        cancelEditProfileBtn.classList.add('d-none');
        editProfileBtn.classList.remove('d-none');
      };

      editProfileBtn.onclick = () => {
        profilePhoneInput.removeAttribute('readonly');
        profilePasswordInput.removeAttribute('readonly');
        saveProfileBtn.classList.remove('d-none');
        cancelEditProfileBtn.classList.remove('d-none');
        editProfileBtn.classList.add('d-none');
      };

      cancelEditProfileBtn.onclick = () => {
        loadProfile(); // Revert to original values
      };

      profileForm.onsubmit = (e) => {
        e.preventDefault();
        // In a real app, send updated data to backend.
        // For simulation, just update the current user object
        currentUser.telefono = profilePhoneInput.value;
        if (profilePasswordInput.value) {
          // In real app: hash and send new password
          currentUser.password = 'newhashedpassword';
          alert('Contraseña actualizada (simulado).');
        }
        alert('Perfil actualizado con éxito (simulado).');
        loadProfile(); // Re-render profile in read-only mode
      };

      // --- Module Progress ---
      const progressTableBody = document.getElementById('progressTableBody');
      const loadProgress = () => {
        progressTableBody.innerHTML = '';
        const userProgression = progreso_usuarios.filter(p => p.Id_usuario === currentUserId);

        if (userProgression.length === 0) {
          progressTableBody.innerHTML = `<tr><td colspan="7" class="text-center text-muted py-4">Aún no has iniciado ningún módulo.</td></tr>`;
          return;
        }

        userProgression.forEach(prog => {
          const module = modules.find(m => m.Id_modulo === prog.Id_modulo);
          if (module) {
            const row = progressTableBody.insertRow();
            let completionDate = prog.fecha_completado ? new Date(prog.fecha_completado).toLocaleDateString() : 'N/A';
            let scoreDisplay = prog.puntuacion_quiz !== null ? `${prog.puntuacion_quiz}%` : 'N/A';
            let progressPercentage = prog.estado_progreso === 'completado' ? 100 : (prog.estado_progreso === 'en_progreso' ? 50 : 0); // Simple progress simulation
            let actionButton = prog.estado_progreso === 'en_progreso' ?
              `<button class="btn btn-primary-custom btn-sm">Continuar</button>` :
              (prog.estado_progreso === 'completado' ? `<button class="btn btn-outline-primary-custom btn-sm" disabled>Completado</button>` : '');


            row.innerHTML = `
                            <td>${module.titulo}</td>
                            <td>${module.tipo_contenido.charAt(0).toUpperCase() + module.tipo_contenido.slice(1)}</td>
                            <td>${module.nivel_dificultad.charAt(0).toUpperCase() + module.nivel_dificultad.slice(1)}</td>
                            <td>
                                <div class="progress" style="height: 20px;">
                                    <div class="progress-bar progress-bar-custom" role="progressbar" style="width: ${progressPercentage}%;" aria-valuenow="${progressPercentage}" aria-valuemin="0" aria-valuemax="100">${progressPercentage}%</div>
                                </div>
                                <small class="text-muted mt-1 d-block">Puntuación: ${scoreDisplay}</small>
                            </td>
                            <td>${new Date(prog.fecha_inicio).toLocaleDateString()}</td>
                            <td>${completionDate}</td>
                            <td>${actionButton}</td>
                        `;
          }
        });
      };

      // --- Certificates ---
      const certificatesTableBody = document.getElementById('certificatesTableBody');
      const loadCertificates = () => {
        certificatesTableBody.innerHTML = '';
        const userCertificates = certificados.filter(c => c.Id_usuario === currentUserId && c.estado === 'activo');

        if (userCertificates.length === 0) {
          certificatesTableBody.innerHTML = `<tr><td colspan="5" class="text-center text-muted py-4">Aún no has obtenido ningún certificado.</td></tr>`;
          return;
        }

        userCertificates.forEach(cert => {
          const module = modules.find(m => m.Id_modulo === cert.Id_modulo);
          const moduleTitle = module ? module.titulo : 'Módulo Desconocido';
          const row = certificatesTableBody.insertRow();
          row.innerHTML = `
                        <td>${moduleTitle}</td>
                        <td>${cert.puntuacion !== null ? cert.puntuacion + '%' : 'N/A'}</td>
                        <td>${new Date(cert.fecha_emision).toLocaleDateString()}</td>
                        <td>${cert.codigo_certificado || 'N/A'}</td>
                        <td>
                            <button class="btn btn-outline-primary-custom btn-sm"><i class="fas fa-download me-1"></i>Descargar</button>
                        </td>
                    `;
        });
      };

      // --- Report Incident ---
      const reportForm = document.getElementById('reportForm');
      const reportMessage = document.getElementById('reportMessage');
      const fotoIncidenteInput = document.getElementById('fotoIncidente');
      const fotoPreview = document.getElementById('fotoPreview');

      fotoIncidenteInput.addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
          const reader = new FileReader();
          reader.onload = function(e) {
            fotoPreview.src = e.target.result;
            fotoPreview.classList.remove('d-none');
          }
          reader.readAsDataURL(file);
        } else {
          fotoPreview.src = '';
          fotoPreview.classList.add('d-none');
        }
      });

      reportForm.addEventListener('submit', function(e) {
        e.preventDefault();

        const tipoIncidente = document.getElementById('tipoIncidente').value;
        const ubicacionIncidente = document.getElementById('ubicacionIncidente').value;
        const descripcionIncidente = document.getElementById('descripcionIncidente').value;
        const fotoIncidenteFile = document.getElementById('fotoIncidente').files[0];

        const newReport = {
          Id_reporte: Math.max(...reports.map(r => r.Id_reporte)) + 1 || 1, // Simple ID generation
          Id_usuario: currentUserId,
          tipo_incidente: tipoIncidente,
          ubicacion: ubicacionIncidente,
          descripcion: descripcionIncidente,
          fecha_reporte: new Date().toISOString().slice(0, 19).replace('T', ' '),
          estado: 'pendiente',
          foto_url: fotoIncidenteFile ? URL.createObjectURL(fotoIncidenteFile) : '', // Create a temporary URL
          comentarios: []
        };

        reports.push(newReport); // Add to simulated data

        reportMessage.style.display = 'block';
        reportMessage.className = 'mt-3 alert alert-success';
        reportMessage.textContent = '¡Gracias! Tu reporte ha sido enviado con éxito.';

        updateDashboard();
        loadMyReports(); // Reload user's reports table
        fotoPreview.classList.add('d-none'); // Hide preview

        setTimeout(() => {
          reportForm.reset();
          reportMessage.style.display = 'none';
        }, 3000);
      });

      // --- My Reports ---
      const myReportsTableBody = document.getElementById('myReportsTableBody');
      const reportDetailsModal = new bootstrap.Modal(document.getElementById('reportDetailsModal'));

      const loadMyReports = () => {
        myReportsTableBody.innerHTML = '';
        const userReports = reports.filter(r => r.Id_usuario === currentUserId);

        if (userReports.length === 0) {
          myReportsTableBody.innerHTML = `<tr><td colspan="6" class="text-center text-muted py-4">Aún no has enviado ningún reporte.</td></tr>`;
          return;
        }

        userReports.forEach(report => {
          const row = myReportsTableBody.insertRow();
          let statusBadgeClass = '';
          if (report.estado === 'pendiente') statusBadgeClass = 'bg-warning text-dark';
          else if (report.estado === 'validado') statusBadgeClass = 'bg-success';
          else if (report.estado === 'rechazado') statusBadgeClass = 'bg-danger';

          row.innerHTML = `
                        <td>${report.Id_reporte}</td>
                        <td>${report.tipo_incidente}</td>
                        <td>${report.ubicacion}</td>
                        <td>${new Date(report.fecha_reporte).toLocaleDateString()}</td>
                        <td><span class="badge ${statusBadgeClass}">${report.estado.charAt(0).toUpperCase() + report.estado.slice(1)}</span></td>
                        <td>
                            <button class="btn btn-info btn-sm view-my-report-btn" data-id="${report.Id_reporte}"><i class="fas fa-eye"></i> Ver Detalles</button>
                        </td>
                    `;
        });
        addMyReportsEventListeners();
      };

      const addMyReportsEventListeners = () => {
        document.querySelectorAll('.view-my-report-btn').forEach(button => {
          button.onclick = (e) => {
            const reportId = parseInt(e.currentTarget.dataset.id);
            const report = reports.find(r => r.Id_reporte === reportId);
            if (report) {
              document.getElementById('detailReportId').textContent = report.Id_reporte;
              document.getElementById('detailReportType').textContent = report.tipo_incidente;
              document.getElementById('detailReportLocation').textContent = report.ubicacion;
              document.getElementById('detailReportDescription').textContent = report.descripcion;
              document.getElementById('detailReportDate').textContent = new Date(report.fecha_reporte).toLocaleString();
              document.getElementById('detailReportStatus').textContent = report.estado.charAt(0).toUpperCase() + report.estado.slice(1);

              const reportPhoto = document.getElementById('reportPhotoDetail');
              const noPhotoText = document.getElementById('noPhotoTextDetail');
              if (report.foto_url) {
                reportPhoto.src = report.foto_url;
                reportPhoto.style.display = 'block';
                noPhotoText.classList.add('d-none');
              } else {
                reportPhoto.style.display = 'none';
                noPhotoText.classList.remove('d-none');
              }

              const commentsTextArea = document.getElementById('reportCommentsDetail');
              if (report.comentarios && report.comentarios.length > 0) {
                commentsTextArea.value = report.comentarios.map(c =>
                  `[${new Date(c.fecha).toLocaleString()}] Funcionario ${c.funcionarioId}: ${c.comentario}`
                ).join('\n\n');
              } else {
                commentsTextArea.value = 'No hay comentarios aún.';
              }


              reportDetailsModal.show();
            }
          };
        });
      };

      // --- Initial Load ---
      updateDashboard();
      loadProfile();
      loadProgress();
      loadCertificates();
      loadMyReports();

      // --- Smooth Scrolling for Navbar Links ---
      document.querySelectorAll('.navbar-nav .nav-link').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
          e.preventDefault();
          document.querySelector('.navbar-nav .nav-link.active')?.classList.remove('active');
          this.classList.add('active');

          const targetId = this.getAttribute('href');
          const targetElement = document.querySelector(targetId);
          if (targetElement) {
            const navbarHeight = document.querySelector('.navbar').offsetHeight;
            const elementPosition = targetElement.getBoundingClientRect().top + window.scrollY;
            window.scrollTo({
              top: elementPosition - navbarHeight,
              behavior: 'smooth'
            });
          }
        });
      });

      // --- Animate sections on scroll ---
      const animateSections = document.querySelectorAll('.user-section, .user-card');
      const sectionObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            sectionObserver.unobserve(entry.target);
          }
        });
      }, {
        threshold: 0.1
      });

      animateSections.forEach(element => {
        element.classList.add('animate-fade-in');
        if (element.classList.contains('animate-slide-up')) {
          element.classList.add('animate-slide-up');
        }
        sectionObserver.observe(element);
      });
    });
  </script>
</body>

</html>