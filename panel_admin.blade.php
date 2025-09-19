<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Panel de Administración | EducaVial</title>
  <link rel="stylesheet" href="{{ asset('css1/panel_admin.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
      <a class="navbar-brand" href="#"><i class="fas fa-user-shield me-2"></i>Panel Administrador | EducaVial</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminNavbar"
        aria-controls="adminNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="adminNavbar">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="#dashboard">Panel Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/panel_usuarios') }}">Panel Usuarios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/panel_funcionario') }}">Panel Funcionario de Tránsito</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#users">Usuarios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#modules">Módulos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#reports">Reportes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/login') }}">Salir</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main>
    <section id="dashboard" class="admin-section container animate-fade-in">
      <h2 class="section-heading mb-4">Panel General</h2>
      <div class="row">
        <div class="col-md-4 animate-slide-up" style="animation-delay: 0.1s;">
          <div class="admin-card text-center">
            <i class="fas fa-users fa-3x text-primary mb-3"></i>
            <h5>Total Usuarios</h5>
            <p class="fs-2 text-primary" id="totalUsers">0</p>
          </div>
        </div>
        <div class="col-md-4 animate-slide-up" style="animation-delay: 0.2s;">
          <div class="admin-card text-center">
            <i class="fas fa-book-open fa-3x text-success mb-3"></i>
            <h5>Módulos Activos</h5>
            <p class="fs-2 text-success" id="activeModules">0</p>
          </div>
        </div>
        <div class="col-md-4 animate-slide-up" style="animation-delay: 0.3s;">
          <div class="admin-card text-center">
            <i class="fas fa-exclamation-triangle fa-3x text-danger mb-3"></i>
            <h5>Reportes Pendientes</h5>
            <p class="fs-2 text-danger" id="pendingReports">0</p>
          </div>
        </div>
      </div>
    </section>

    <section id="users" class="admin-section container animate-fade-in">
      <h2 class="section-heading mb-4">Gestión de Usuarios</h2>
      <button class="btn btn-primary-custom mb-4" data-bs-toggle="modal" data-bs-target="#userModal" id="addUserBtn"><i
          class="fas fa-plus me-2"></i>Añadir Nuevo Usuario</button>
      <div class="admin-card animate-slide-up">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Tipo</th>
                <th>Registro</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody id="usersTableBody">
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <section id="modules" class="admin-section container animate-fade-in">
      <h2 class="section-heading mb-4">Gestión de Módulos Educativos</h2>
      <button class="btn btn-primary-custom mb-4" data-bs-toggle="modal" data-bs-target="#moduleEditModal"
        id="addModuleBtn"><i class="fas fa-plus me-2"></i>Añadir Nuevo Módulo</button>
      <div class="admin-card animate-slide-up">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Tipo</th>
                <th>Dificultad</th>
                <th>Estado</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody id="modulesTableBody">
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <section id="reports" class="admin-section container animate-fade-in">
      <h2 class="section-heading mb-4">Reportes de Incidentes</h2>
      <div class="admin-card animate-slide-up">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Tipo</th>
                <th>Ubicación</th>
                <th>Usuario</th>
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
  </main>

  <footer class="footer">
    <div class="container">
      <p class="mb-0">© 2025 EducaVial Quibdó. Panel de Administración.</p>
    </div>
  </footer>

  <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="userModalLabel">Añadir/Editar Usuario</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="userForm">
            <input type="hidden" id="userId">
            <div class="mb-3">
              <label for="userName" class="form-label">Nombre Completo</label>
              <input type="text" class="form-control" id="userName" required>
            </div>
            <div class="mb-3">
              <label for="userEmail" class="form-label">Correo</label>
              <input type="email" class="form-control" id="userEmail" required>
            </div>
            <div class="mb-3">
              <label for="userPhone" class="form-label">Teléfono</label>
              <input type="text" class="form-control" id="userPhone" required>
            </div>
            <div class="mb-3">
              <label for="userType" class="form-label">Tipo de Usuario</label>
              <select class="form-select" id="userType" required>
                <option value="estudiante">Estudiante</option>
                <option value="conductor">Conductor</option>
                <option value="peatón">Peatón</option>
                <option value="ciclista">Ciclista</option>
                <option value="administrador">Administrador</option>
                <option value="funcionario_transito">Funcionario de Tránsito</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="userPassword" class="form-label">Contraseña (solo si se cambia)</label>
              <input type="password" class="form-control" id="userPassword">
            </div>
            <button type="submit" class="btn btn-primary-custom w-100">Guardar Usuario</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="moduleEditModal" tabindex="-1" aria-labelledby="moduleEditModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="moduleEditModalLabel">Añadir/Editar Módulo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="moduleForm">
            <input type="hidden" id="moduleId">
            <div class="mb-3">
              <label for="moduleTitle" class="form-label">Título</label>
              <input type="text" class="form-control" id="moduleTitle" required>
            </div>
            <div class="mb-3">
              <label for="moduleDescription" class="form-label">Descripción</label>
              <textarea class="form-control" id="moduleDescription" rows="3"></textarea>
            </div>
            <div class="mb-3">
              <label for="moduleType" class="form-label">Tipo de Contenido</label>
              <select class="form-select" id="moduleType" required>
                <option value="video">Video</option>
                <option value="quiz">Quiz</option>
                <option value="infografía">Infografía</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="moduleDifficulty" class="form-label">Nivel de Dificultad</label>
              <select class="form-select" id="moduleDifficulty" required>
                <option value="básico">Básico</option>
                <option value="intermedio">Intermedio</option>
                <option value="avanzado">Avanzado</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="moduleStatus" class="form-label">Estado</label>
              <select class="form-select" id="moduleStatus" required>
                <option value="1">Activo</option>
                <option value="0">Inactivo</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary-custom w-100">Guardar Módulo</button>
          </form>
        </div>
      </div>
    </div>
  </div>

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
          <p><strong>Estado:</strong> <span id="detailReportStatus"></span></p>
          <div class="mb-3">
            <label for="reportPhoto" class="form-label">Foto Adjunta:</label>
            <img id="reportPhoto" src="" class="img-fluid rounded shadow-sm d-block" alt="Evidencia del Reporte"
              onerror="this.style.display='none'">
            <p id="noPhotoText" class="text-muted d-none">No se adjuntó foto.</p>
          </div>
          <div class="mb-3">
            <label for="reportComments" class="form-label">Comentarios (solo lectura):</label>
            <textarea class="form-control" id="reportComments" rows="3" readonly></textarea>
          </div>
          <hr>
          <h6>Actualizar Estado del Reporte:</h6>
          <div class="d-flex align-items-center mb-3">
            <select class="form-select me-2" id="updateReportStatus">
              <option value="pendiente">Pendiente</option>
              <option value="validado">Validado</option>
              <option value="rechazado">Rechazado</option>
            </select>
            <button class="btn btn-primary-custom" id="saveReportStatusBtn">Guardar Estado</button>
          </div>
          <div class="mb-3">
            <label for="addComment" class="form-label">Añadir Comentario:</label>
            <textarea class="form-control" id="addComment" rows="2"
              placeholder="Añade un comentario sobre este reporte..."></textarea>
          </div>
          <button class="btn btn-accent-custom btn-action" id="addCommentBtn">Añadir Comentario</button>
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
        nombre_completo: 'Carlos Asprilla',
        correo: 'carl@gmail.com',
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
          funcionarioId: 3,
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
      }, ];

      // --- Dashboard Data Population ---
      const updateDashboard = () => {
        document.getElementById('totalUsers').textContent = users.length;
        document.getElementById('activeModules').textContent = modules.filter(m => m.estado === 1).length;
        document.getElementById('pendingReports').textContent = reports.filter(r => r.estado === 'pendiente').length;
      };

      // --- User Management ---
      const usersTableBody = document.getElementById('usersTableBody');
      const userModal = new bootstrap.Modal(document.getElementById('userModal'));
      const userForm = document.getElementById('userForm');
      const userIdInput = document.getElementById('userId');
      const userNameInput = document.getElementById('userName');
      const userEmailInput = document.getElementById('userEmail');
      const userPhoneInput = document.getElementById('userPhone');
      const userTypeInput = document.getElementById('userType');
      const userPasswordInput = document.getElementById('userPassword');

      const loadUsers = () => {
        usersTableBody.innerHTML = '';
        users.forEach(user => {
          const row = usersTableBody.insertRow();
          row.innerHTML = `
            <td>${user.Id_usuario}</td>
            <td>${user.nombre_completo}</td>
            <td>${user.correo}</td>
            <td>${user.telefono}</td>
            <td>${user.tipo_usuario.charAt(0).toUpperCase() + user.tipo_usuario.slice(1)}</td>
            <td>${new Date(user.fecha_registro).toLocaleDateString()}</td>
            <td>
              <button class="btn btn-action btn-sm me-2 edit-user-btn" data-id="${user.Id_usuario}"><i class="fas fa-edit"></i></button>
              <button class="btn btn-danger-custom btn-sm delete-user-btn" data-id="${user.Id_usuario}"><i class="fas fa-trash"></i></button>
            </td>
          `;
        });
        addUsersEventListeners();
      };

      const addUsersEventListeners = () => {
        document.querySelectorAll('.edit-user-btn').forEach(button => {
          button.onclick = (e) => {
            const userId = parseInt(e.currentTarget.dataset.id);
            const user = users.find(u => u.Id_usuario === userId);
            if (user) {
              userIdInput.value = user.Id_usuario;
              userNameInput.value = user.nombre_completo;
              userEmailInput.value = user.correo;
              userPhoneInput.value = user.telefono;
              userTypeInput.value = user.tipo_usuario;
              userPasswordInput.value = ''; // Clear password field for security
              document.getElementById('userModalLabel').textContent = 'Editar Usuario';
              userModal.show();
            }
          };
        });

        document.querySelectorAll('.delete-user-btn').forEach(button => {
          button.onclick = (e) => {
            const userId = parseInt(e.currentTarget.dataset.id);
            if (confirm('¿Estás seguro de que quieres eliminar este usuario?')) {
              users = users.filter(u => u.Id_usuario !== userId);
              loadUsers();
              updateDashboard();
            }
          };
        });
      };

      document.getElementById('addUserBtn').onclick = () => {
        userForm.reset();
        userIdInput.value = '';
        document.getElementById('userModalLabel').textContent = 'Añadir Nuevo Usuario';
      };

      userForm.onsubmit = (e) => {
        e.preventDefault();
        const id = userIdInput.value ? parseInt(userIdInput.value) : null;
        const newUser = {
          Id_usuario: id || Math.max(...users.map(u => u.Id_usuario)) + 1 || 1, // Simple ID generation
          nombre_completo: userNameInput.value,
          correo: userEmailInput.value,
          telefono: userPhoneInput.value,
          tipo_usuario: userTypeInput.value,
          fecha_registro: id ? users.find(u => u.Id_usuario === id).fecha_registro : new Date().toISOString().slice(0, 19).replace('T', ' '),
          // Password would be hashed in a real app
        };

        if (id) {
          // Edit existing user
          users = users.map(user => user.Id_usuario === id ? newUser : user);
        } else {
          // Add new user
          users.push(newUser);
        }
        loadUsers();
        updateDashboard();
        userModal.hide();
      };


      // --- Module Management ---
      const modulesTableBody = document.getElementById('modulesTableBody');
      const moduleEditModal = new bootstrap.Modal(document.getElementById('moduleEditModal'));
      const moduleForm = document.getElementById('moduleForm');
      const moduleIdInput = document.getElementById('moduleId');
      const moduleTitleInput = document.getElementById('moduleTitle');
      const moduleDescriptionInput = document.getElementById('moduleDescription');
      const moduleTypeInput = document.getElementById('moduleType');
      const moduleDifficultyInput = document.getElementById('moduleDifficulty');
      const moduleStatusInput = document.getElementById('moduleStatus');

      const loadModules = () => {
        modulesTableBody.innerHTML = '';
        modules.forEach(mod => {
          const row = modulesTableBody.insertRow();
          row.innerHTML = `
            <td>${mod.Id_modulo}</td>
            <td>${mod.titulo}</td>
            <td>${mod.tipo_contenido.charAt(0).toUpperCase() + mod.tipo_contenido.slice(1)}</td>
            <td>${mod.nivel_dificultad.charAt(0).toUpperCase() + mod.nivel_dificultad.slice(1)}</td>
            <td>${mod.estado ? '<span class="badge bg-success">Activo</span>' : '<span class="badge bg-warning text-dark">Inactivo</span>'}</td>
            <td>
              <button class="btn btn-action btn-sm me-2 edit-module-btn" data-id="${mod.Id_modulo}"><i class="fas fa-edit"></i></button>
              <button class="btn btn-danger-custom btn-sm delete-module-btn" data-id="${mod.Id_modulo}"><i class="fas fa-trash"></i></button>
            </td>
          `;
        });
        addModulesEventListeners();
      };

      const addModulesEventListeners = () => {
        document.querySelectorAll('.edit-module-btn').forEach(button => {
          button.onclick = (e) => {
            const moduleId = parseInt(e.currentTarget.dataset.id);
            const module = modules.find(m => m.Id_modulo === moduleId);
            if (module) {
              moduleIdInput.value = module.Id_modulo;
              moduleTitleInput.value = module.titulo;
              moduleDescriptionInput.value = module.descripcion;
              moduleTypeInput.value = module.tipo_contenido;
              moduleDifficultyInput.value = module.nivel_dificultad;
              moduleStatusInput.value = module.estado;
              document.getElementById('moduleEditModalLabel').textContent = 'Editar Módulo';
              moduleEditModal.show();
            }
          };
        });

        document.querySelectorAll('.delete-module-btn').forEach(button => {
          button.onclick = (e) => {
            const moduleId = parseInt(e.currentTarget.dataset.id);
            if (confirm('¿Estás seguro de que quieres eliminar este módulo?')) {
              modules = modules.filter(m => m.Id_modulo !== moduleId);
              loadModules();
              updateDashboard();
            }
          };
        });
      };

      document.getElementById('addModuleBtn').onclick = () => {
        moduleForm.reset();
        moduleIdInput.value = '';
        document.getElementById('moduleEditModalLabel').textContent = 'Añadir Nuevo Módulo';
      };

      moduleForm.onsubmit = (e) => {
        e.preventDefault();
        const id = moduleIdInput.value ? parseInt(moduleIdInput.value) : null;
        const newModule = {
          Id_modulo: id || Math.max(...modules.map(m => m.Id_modulo)) + 1 || 1, // Simple ID generation
          titulo: moduleTitleInput.value,
          descripcion: moduleDescriptionInput.value,
          tipo_contenido: moduleTypeInput.value,
          nivel_dificultad: moduleDifficultyInput.value,
          estado: parseInt(moduleStatusInput.value),
        };

        if (id) {
          modules = modules.map(mod => mod.Id_modulo === id ? newModule : mod);
        } else {
          modules.push(newModule);
        }
        loadModules();
        updateDashboard();
        moduleEditModal.hide();
      };

      // --- Incident Reports Management ---
      const reportsTableBody = document.getElementById('reportsTableBody');
      const reportDetailsModal = new bootstrap.Modal(document.getElementById('reportDetailsModal'));
      let currentReportId = null; // To keep track of the report being viewed/edited

      const loadReports = () => {
        reportsTableBody.innerHTML = '';
        reports.forEach(report => {
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
              <button class="btn btn-info btn-sm view-report-btn" data-id="${report.Id_reporte}"><i class="fas fa-eye"></i> Ver</button>
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

      document.getElementById('saveReportStatusBtn').onclick = () => {
        if (currentReportId) {
          const newStatus = document.getElementById('updateReportStatus').value;
          const reportIndex = reports.findIndex(r => r.Id_reporte === currentReportId);
          if (reportIndex !== -1) {
            reports[reportIndex].estado = newStatus;
            loadReports(); // Reload table to reflect status change
            updateDashboard();
            alert('Estado del reporte actualizado con éxito.');
            reportDetailsModal.hide();
          }
        }
      };

      document.getElementById('addCommentBtn').onclick = () => {
        if (currentReportId) {
          const newCommentText = document.getElementById('addComment').value;
          if (newCommentText.trim() === '') {
            alert('Por favor, escribe un comentario.');
            return;
          }
          const reportIndex = reports.findIndex(r => r.Id_reporte === currentReportId);
          if (reportIndex !== -1) {
            // Simulate current admin user as 'funcionario 3'
            reports[reportIndex].comentarios.push({
              funcionarioId: 3,
              comentario: newCommentText,
              fecha: new Date().toISOString().slice(0, 19).replace('T', ' ')
            });
            document.getElementById('addComment').value = ''; // Clear input
            // Update comments in modal
            const commentsTextArea = document.getElementById('reportComments');
            commentsTextArea.value = reports[reportIndex].comentarios.map(c =>
              `[${new Date(c.fecha).toLocaleString()}] Funcionario ${c.funcionarioId}: ${c.comentario}`
            ).join('\n\n');
            alert('Comentario añadido.');
          }
        }
      };


      // --- Initial Load ---
      updateDashboard();
      loadUsers();
      loadModules();
      loadReports();

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
      }); // Trigger when 10% of the element is visible

      animateSections.forEach(element => {
        element.classList.add('animate-fade-in'); // Apply base fade-in
        if (element.classList.contains('animate-slide-up')) {
          element.classList.add('animate-slide-up'); // Apply slide-up if specified
        }
        sectionObserver.observe(element);
      });
    });
  </script>
</body>

</html>