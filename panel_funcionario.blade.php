<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Panel de Funcionario de Tránsito | EducaVial</title>
  <link rel="stylesheet" href="{{ asset('css1/panel_funcionario.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
      <a class="navbar-brand" href="#"><i class="fas fa-traffic-light me-2"></i>Panel de Funcionario de Tránsito | EducaVial</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#traficoNavbar"
        aria-controls="traficoNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="traficoNavbar">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="#dashboard">Panel Funcionario de Tránsito</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/panel_admin">Panel Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#reports">Reportes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#modules-view">Módulos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#user-lookup">Buscar Usuario</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Salir</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main>
    <section id="dashboard" class="admin-section container animate-fade-in">
      <h2 class="section-heading mb-4">Panel de Tránsito</h2>
      <div class="row">
        <div class="col-md-4 animate-slide-up" style="animation-delay: 0.1s;">
          <div class="admin-card text-center">
            <i class="fas fa-exclamation-triangle fa-3x text-danger mb-3"></i>
            <h5>Reportes Pendientes</h5>
            <p class="fs-2 text-danger" id="pendingReportsCount">0</p>
          </div>
        </div>
        <div class="col-md-4 animate-slide-up" style="animation-delay: 0.2s;">
          <div class="admin-card text-center">
            <i class="fas fa-check-circle fa-3x text-success mb-3"></i>
            <h5>Reportes Validados</h5>
            <p class="fs-2 text-success" id="validatedReportsCount">0</p>
          </div>
        </div>
        <div class="col-md-4 animate-slide-up" style="animation-delay: 0.3s;">
          <div class="admin-card text-center">
            <i class="fas fa-scroll fa-3x text-primary mb-3"></i>
            <h5>Módulos Disponibles</h5>
            <p class="fs-2 text-primary" id="availableModulesCount">0</p>
          </div>
        </div>
      </div>
    </section>

    <section id="reports" class="admin-section container animate-fade-in">
      <h2 class="section-heading mb-4">Gestión de Reportes de Incidentes</h2>
      <div class="admin-card animate-slide-up">
        <div class="mb-3">
          <label for="reportFilterStatus" class="form-label">Filtrar por Estado:</label>
          <select class="form-select w-auto d-inline-block" id="reportFilterStatus">
            <option value="todos">Todos</option>
            <option value="pendiente">Pendientes</option>
            <option value="validado">Validados</option>
            <option value="rechazado">Rechazados</option>
          </select>
        </div>
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Tipo</th>
                <th>Ubicación</th>
                <th>Usuario Reporta</th>
                <th>Fecha</th>
                <th>Estado</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody id="reportsTableBody">
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <section id="modules-view" class="admin-section container animate-fade-in">
      <h2 class="section-heading mb-4">Módulos Educativos (Solo de Lectura)</h2>
      <div class="admin-card animate-slide-up">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Tipo</th>
                <th>Dificultad</th>
                <th>Descripción</th>
              </tr>
            </thead>
            <tbody id="modulesViewTableBody">
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <section id="user-lookup" class="admin-section container animate-fade-in">
      <h2 class="section-heading mb-4">Búsqueda de Usuarios</h2>
      <div class="admin-card animate-slide-up">
        <div class="mb-3">
          <label for="userSearchInput" class="form-label">Buscar por Correo o Teléfono:</label>
          <input type="text" class="form-control" id="userSearchInput" placeholder="ej. correo@example.com o 321...">
        </div>
        <button class="btn btn-primary-custom mb-3" id="searchUserBtn"><i class="fas fa-search me-2"></i>Buscar
          Usuario</button>
        <div id="userLookupResult" class="mt-3">
          <div class="alert alert-info d-none" id="noUserFound">No se encontró ningún usuario con los criterios
            especificados.</div>
          <div class="card d-none" id="foundUserCard">
            <div class="card-body">
              <h5 class="card-title" id="foundUserName"></h5>
              <p class="card-text"><strong>Correo:</strong> <span id="foundUserEmail"></span></p>
              <p class="card-text"><strong>Teléfono:</strong> <span id="foundUserPhone"></span></p>
              <p class="card-text"><strong>Tipo:</strong> <span id="foundUserType"></span></p>
              <p class="card-text"><small class="text-muted">Fecha de Registro: <span
                    id="foundUserRegDate"></span></small></p>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

  <footer class="footer">
    <div class="container">
      <p class="mb-0">© 2025 EducaVial Quibdó. Panel de Funcionario de Tránsito.</p>
    </div>
  </footer>

  <div class="modal fade" id="reportDetailsModal" tabindex="-1" aria-labelledby="reportDetailsModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="reportDetailsModalLabel">Detalles del Reporte</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p><strong>ID del Reporte:</strong> <span id="detailReportId"></span></p>
          <p><strong>Tipo de Incidente:</strong> <span id="detailReportType"></span></p>
          <p><strong>Ubicación:</strong> <span id="detailReportLocation"></span></p>
          <p><strong>Descripción:</strong> <span id="detailReportDescription"></span></p>
          <p><strong>Fecha de Reporte:</strong> <span id="detailReportDate"></span></p>
          <p><strong>Estado Actual:</strong> <span id="detailReportStatus"></span></p>
          <div class="mb-3">
            <label for="reportPhoto" class="form-label">Foto Adjunta:</label>
            <img id="reportPhoto" src="" class="img-fluid rounded shadow-sm d-block" alt="Evidencia del Reporte"
              onerror="this.style.display='none'">
            <p id="noPhotoText" class="text-muted d-none">No se adjuntó foto.</p>
          </div>
          <div class="mb-3">
            <label for="reportComments" class="form-label">Historial de Comentarios:</label>
            <textarea class="form-control" id="reportComments" rows="4" readonly></textarea>
          </div>
          <hr>
          <h6>Actualizar Estado del Reporte y Añadir Comentario:</h6>
          <div class="d-flex align-items-center mb-3">
            <select class="form-select me-2" id="updateReportStatus">
              <option value="pendiente">Pendiente</option>
              <option value="validado">Validado</option>
              <option value="rechazado">Rechazado</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="addComment" class="form-label">Añadir Nuevo Comentario:</label>
            <textarea class="form-control" id="addComment" rows="2"
              placeholder="Escribe tu comentario aquí..."></textarea>
          </div>
          <button class="btn btn-primary-custom" id="saveReportChangesBtn">Guardar Cambios</button>
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
      // --- Simulated Database Data (replace with actual backend API calls) ---
      // Using the same simulated data for consistency, assuming this panel will interact with it.
      let users = [{
          Id_usuario: 1,
          nombre_completo: 'Elsa Palacios',
          correo: 'elsa@gmail.com',
          telefono: '3204567890',
          tipo_usuario: 'estudiante',
          fecha_registro: '2025-06-03 00:16:52'
        }, {
          Id_usuario: 2,
          nombre_completo: 'Yoisi Palacios',
          correo: 'yoisi@gmail.com',
          telefono: '3213468756',
          tipo_usuario: 'estudiante',
          fecha_registro: '2025-06-03 14:06:44'
        }, {
          Id_usuario: 3,
          nombre_completo: 'Admin User',
          correo: 'admin@gmail.com',
          telefono: '3001234567',
          tipo_usuario: 'administrador',
          fecha_registro: '2025-01-15 10:00:00'
        }, {
          Id_usuario: 4,
          nombre_completo: 'Ana López',
          correo: 'ana@gmail.com',
          telefono: '3109876543',
          tipo_usuario: 'conductor',
          fecha_registro: '2024-11-20 09:30:00'
        }, {
          Id_usuario: 5,
          nombre_completo: 'María Gómez',
          correo: 'maria.gomez@gmail.com',
          telefono: '3012345678',
          tipo_usuario: 'funcionario_transito',
          fecha_registro: '2025-02-01 08:00:00'
        }, // Example for a traffic officer
      ];

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
        titulo: 'Señalización Vial y Demarcación',
        tipo_contenido: 'video',
        nivel_dificultad: 'intermedio',
        estado: 0,
        descripcion: 'Identifica y comprende el significado de las señales de tránsito.',
      }, ];

      let reports = [{
        Id_reporte: 1,
        Id_usuario: 1,
        tipo_incidente: 'Omisión de Semáforo',
        ubicacion: 'Calle 25 #3-10, Centro',
        descripcion: 'Un vehículo se saltó el semáforo en rojo.',
        fecha_reporte: '2025-05-28 10:30:00',
        estado: 'pendiente',
        foto_url: 'https://placehold.co/400x300/dc3545/ffffff?text=Evidencia+Reporte+1',
        comentarios: [{
          funcionarioId: 3,
          comentario: 'Reporte recibido, se está investigando.',
          fecha: '2025-05-29 09:00:00'
        }, ],
      }, {
        Id_reporte: 2,
        Id_usuario: 2,
        tipo_incidente: 'Estacionamiento Ilegal',
        ubicacion: 'Carrera 5 #10-20, Barrio Jardín',
        descripcion: 'Coche estacionado en zona prohibida obstaculizando el paso.',
        fecha_reporte: '2025-05-30 14:15:00',
        estado: 'validado',
        foto_url: 'https://placehold.co/400x300/28a745/ffffff?text=Evidencia+Reporte+2',
        comentarios: [{
          funcionarioId: 5,
          comentario: 'Incidente verificado, se ha tomado acción.',
          fecha: '2025-05-31 11:00:00'
        }, ],
      }, {
        Id_reporte: 3,
        Id_usuario: 4,
        tipo_incidente: 'Exceso de Velocidad',
        ubicacion: 'Avenida Principal, cerca al Parque',
        descripcion: 'Motocicleta excediendo el límite de velocidad constantemente.',
        fecha_reporte: '2025-06-01 18:00:00',
        estado: 'pendiente',
        foto_url: '', // No photo
        comentarios: [],
      }, {
        Id_reporte: 4,
        Id_usuario: 1,
        tipo_incidente: 'Manejo Temerario',
        ubicacion: 'Glorieta de la 23',
        descripcion: 'Conductor realizando maniobras peligrosas.',
        fecha_reporte: '2025-06-02 09:00:00',
        estado: 'rechazado',
        foto_url: 'https://placehold.co/400x300/dc3545/ffffff?text=Evidencia+Reporte+4',
        comentarios: [{
          funcionarioId: 5,
          comentario: 'No se pudo verificar el incidente en el lugar.',
          fecha: '2025-06-02 14:00:00'
        }],
      }, ];

      const currentTrafficOfficerId = 5; // Simulating the logged-in traffic officer

      // --- Dashboard Data Population ---
      const updateDashboard = () => {
        document.getElementById('pendingReportsCount').textContent = reports.filter(r => r.estado === 'pendiente').length;
        document.getElementById('validatedReportsCount').textContent = reports.filter(r => r.estado === 'validado').length;
        document.getElementById('availableModulesCount').textContent = modules.filter(m => m.estado === 1).length;
      };

      // --- Report Management ---
      const reportsTableBody = document.getElementById('reportsTableBody');
      const reportDetailsModal = new bootstrap.Modal(document.getElementById('reportDetailsModal'));
      let currentReportId = null; // To keep track of the report being viewed/edited

      const loadReports = (filterStatus = 'todos') => {
        reportsTableBody.innerHTML = '';
        const filteredReports = filterStatus === 'todos' ? reports : reports.filter(r => r.estado === filterStatus);

        if (filteredReports.length === 0) {
          reportsTableBody.innerHTML = `<tr><td colspan="7" class="text-center text-muted py-4">No hay reportes para este filtro.</td></tr>`;
          return;
        }

        filteredReports.forEach(report => {
          const user = users.find(u => u.Id_usuario === report.Id_usuario);
          const userName = user ? user.nombre_completo : 'Desconocido';
          const row = reportsTableBody.insertRow();
          let statusBadgeClass = '';
          if (report.estado === 'pendiente') statusBadgeClass = 'bg-warning text-dark';
          else if (report.estado === 'validado') statusBadgeClass = 'bg-success';
          else if (report.estado === 'rechazado') statusBadgeClass = 'bg-danger';

          row.innerHTML = `
                        <td>${report.Id_reporte}</td>
                        <td>${report.tipo_incidente}</td>
                        <td>${report.ubicacion}</td>
                        <td>${userName}</td>
                        <td>${new Date(report.fecha_reporte).toLocaleDateString()}</td>
                        <td><span class="badge ${statusBadgeClass}">${report.estado.charAt(0).toUpperCase() + report.estado.slice(1)}</span></td>
                        <td>
                            <button class="btn btn-info btn-sm view-report-btn" data-id="${report.Id_reporte}"><i class="fas fa-eye"></i> Ver/Gestionar</button>
                        </td>
                    `;
        });
        addReportsEventListeners();
      };

      const addReportsEventListeners = () => {
        document.querySelectorAll('.view-report-btn').forEach(button => {
          button.onclick = (e) => {
            currentReportId = parseInt(e.currentTarget.dataset.id);
            const report = reports.find(r => r.Id_reporte === currentReportId);
            if (report) {
              document.getElementById('detailReportId').textContent = report.Id_reporte;
              document.getElementById('detailReportType').textContent = report.tipo_incidente;
              document.getElementById('detailReportLocation').textContent = report.ubicacion;
              document.getElementById('detailReportDescription').textContent = report.descripcion;
              document.getElementById('detailReportDate').textContent = new Date(report.fecha_reporte).toLocaleString();
              document.getElementById('detailReportStatus').textContent = report.estado.charAt(0).toUpperCase() + report.estado.slice(1);
              document.getElementById('updateReportStatus').value = report.estado;

              const reportPhoto = document.getElementById('reportPhoto');
              const noPhotoText = document.getElementById('noPhotoText');
              if (report.foto_url) {
                reportPhoto.src = report.foto_url;
                reportPhoto.style.display = 'block';
                noPhotoText.classList.add('d-none');
              } else {
                reportPhoto.style.display = 'none';
                noPhotoText.classList.remove('d-none');
              }

              const commentsTextArea = document.getElementById('reportComments');
              commentsTextArea.value = report.comentarios.map(c =>
                `[${new Date(c.fecha).toLocaleString()}] Funcionario ${c.funcionarioId}: ${c.comentario}`
              ).join('\n\n');

              reportDetailsModal.show();
            }
          };
        });
      };

      document.getElementById('reportFilterStatus').addEventListener('change', (e) => {
        loadReports(e.target.value);
      });


      document.getElementById('saveReportChangesBtn').onclick = () => {
        if (currentReportId) {
          const newStatus = document.getElementById('updateReportStatus').value;
          const newCommentText = document.getElementById('addComment').value;

          const reportIndex = reports.findIndex(r => r.Id_reporte === currentReportId);
          if (reportIndex !== -1) {
            reports[reportIndex].estado = newStatus;

            if (newCommentText.trim() !== '') {
              reports[reportIndex].comentarios.push({
                funcionarioId: currentTrafficOfficerId, // Use the simulated officer ID
                comentario: newCommentText,
                fecha: new Date().toISOString().slice(0, 19).replace('T', ' ')
              });
            }
            loadReports(document.getElementById('reportFilterStatus').value); // Reload with current filter
            updateDashboard();
            alert('Reporte actualizado con éxito.');
            reportDetailsModal.hide();
            document.getElementById('addComment').value = ''; // Clear input
          }
        }
      };

      // --- Modules View (Read-Only) ---
      const modulesViewTableBody = document.getElementById('modulesViewTableBody');

      const loadModulesView = () => {
        modulesViewTableBody.innerHTML = '';
        modules.filter(m => m.estado === 1).forEach(mod => { // Only show active modules
          const row = modulesViewTableBody.insertRow();
          row.innerHTML = `
                        <td>${mod.Id_modulo}</td>
                        <td>${mod.titulo}</td>
                        <td>${mod.tipo_contenido.charAt(0).toUpperCase() + mod.tipo_contenido.slice(1)}</td>
                        <td>${mod.nivel_dificultad.charAt(0).toUpperCase() + mod.nivel_dificultad.slice(1)}</td>
                        <td>${mod.descripcion}</td>
                    `;
        });
      };

      // --- User Lookup ---
      const userSearchInput = document.getElementById('userSearchInput');
      const searchUserBtn = document.getElementById('searchUserBtn');
      const noUserFound = document.getElementById('noUserFound');
      const foundUserCard = document.getElementById('foundUserCard');
      const foundUserName = document.getElementById('foundUserName');
      const foundUserEmail = document.getElementById('foundUserEmail');
      const foundUserPhone = document.getElementById('foundUserPhone');
      const foundUserType = document.getElementById('foundUserType');
      const foundUserRegDate = document.getElementById('foundUserRegDate');

      searchUserBtn.onclick = () => {
        const searchTerm = userSearchInput.value.toLowerCase().trim();
        noUserFound.classList.add('d-none');
        foundUserCard.classList.add('d-none');

        if (searchTerm === '') {
          alert('Por favor, ingresa un correo o número de teléfono para buscar.');
          return;
        }

        const foundUser = users.find(u =>
          u.correo.toLowerCase().includes(searchTerm) || u.telefono.includes(searchTerm)
        );

        if (foundUser) {
          foundUserName.textContent = foundUser.nombre_completo;
          foundUserEmail.textContent = foundUser.correo;
          foundUserPhone.textContent = foundUser.telefono;
          foundUserType.textContent = foundUser.tipo_usuario.charAt(0).toUpperCase() + foundUser.tipo_usuario.slice(1);
          foundUserRegDate.textContent = new Date(foundUser.fecha_registro).toLocaleDateString();
          foundUserCard.classList.remove('d-none');
        } else {
          noUserFound.classList.remove('d-none');
        }
      };


      // --- Initial Load ---
      updateDashboard();
      loadReports('pendiente'); // Default to showing pending reports
      loadModulesView();

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
      const animateSections = document.querySelectorAll('.admin-section, .admin-card');
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