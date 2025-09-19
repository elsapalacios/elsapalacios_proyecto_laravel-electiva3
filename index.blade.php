<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css1/index.css') }}">
  <title>EducaVial Quibdó - Conciencia Vial para un Futuro Seguro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    xintegrity="sha384-QWTKZyjpPEjISv5WaRU9O+ctnJcmoqfYMdre2uHbLekWwwyDZj0kMchX+2tV2wF" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    xintegrity="sha512-Fo3rlrZj/k7oS7FAHwevFzI+xY9aXz6G1f3g4Q6Qz3z6H6Z3Jm6A2b4p1Fw2z5I5h0D5x2C5s6e5d6A5f5g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <i class="fas fa-traffic-light me-2"></i>EducaVial Quibdó
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#hero">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#problema-solucion">Problema y Solución</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#modulos">Módulos Educativos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#reportes">Reportar Incidente</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contacto">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/login') }}">Iniciar Sesión</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/registro') }}">Registrar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section id="hero" class="hero-section">
    <div class="container">
      <h1 class="animate-on-scroll" data-animation="slideInUp">Educación Vial para un Quibdó Seguro</h1>
      <p class="animate-on-scroll" data-animation="slideInUp" data-animation-delay="0.3s">Concientizamos y capacitamos a
        ciudadanos para una movilidad responsable y un futuro sin accidentes.</p>
      <a href="#modulos" class="btn btn-primary-custom animate-on-scroll" data-animation="zoomIn"
        data-animation-delay="0.6s">Explora Nuestros Módulos</a>
    </div>
  </section>

  <section id="problema-solucion" class="problem-solution-section section-padding text-center">
    <div class="container">
      <h2 class="section-heading mb-5 animate-on-scroll">Nuestra Misión: Un Tránsito Consciente</h2>
      <div class="row">
        <div class="col-md-6 animate-on-scroll" data-animation="slideInLeft">
          <div class="problem-card">
            <i class="icon fas fa-exclamation-triangle"></i>
            <h3>El Problema en Quibdó</h3>
            <p>El manejo inadecuado en las vías de tránsito en Quibdó es un problema evidente que afecta la movilidad y
              la seguridad vial. La omisión de semáforos, la invasión de carriles y el estacionamiento ilegal generan
              caos y aumentan el riesgo de accidentes.</p>
            <p>La escasa cultura vial y la limitada infraestructura agravan la situación, poniendo en riesgo a
              conductores y peatones.</p>
          </div>
        </div>
        <div class="col-md-6 animate-on-scroll" data-animation="slideInRight">
          <div class="solution-card">
            <i class="icon fas fa-lightbulb"></i>
            <h3>Nuestra Solución</h3>
            <p>Proponemos programas de capacitación conjuntos con entidades municipales de tránsito para concientizar a
              estudiantes de colegios y universidades.</p>
            <p>Hemos desarrollado un sitio web como herramienta para fomentar la educación vial y la concienciación en
              las instituciones educativas. Este recurso es vital para futuros conductores, peatones y ciclistas,
              promoviendo un entorno vial más seguro y consciente.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="modulos" class="modules-section section-padding">
    <div class="container">
      <h2 class="section-heading text-center mb-5 animate-on-scroll">Aprende con Nuestros Módulos Interactivos</h2>
      <div class="row" id="modules-container">
        <div class="col-lg-4 col-md-6 animate-on-scroll" data-animation="zoomIn">
          <div class="module-card">
            <img src="https://placehold.co/400x220/007bff/ffffff?text=Normas+de+Transito" alt="Normas de Tránsito">
            <div class="module-card-body">
              <h4>Normas Básicas de Tránsito</h4>
              <p>Aprende las reglas fundamentales para circular de forma segura y legal.</p>
              <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#moduleModal" data-module-id="1"
                data-module-title="Normas Básicas de Tránsito" data-module-type="video" data-module-difficulty="Básico"
                data-module-description="Este módulo cubre las señales de tránsito, límites de velocidad y derechos de paso. Incluye videos explicativos y ejemplos prácticos."
                data-module-video-url="https://www.youtube.com/watch?v=O_ZLL8AtIrY"> Ver Módulo
              </button>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 animate-on-scroll" data-animation="zoomIn" data-animation-delay="0.2s">
          <div class="module-card">
            <img src="https://placehold.co/400x220/28a745/ffffff?text=Conduccion+Defensiva" alt="Conducción Defensiva">
            <div class="module-card-body">
              <h4>Conducción Defensiva</h4>
              <p>Técnicas para anticipar peligros y reaccionar correctamente en la vía.</p>
              <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#moduleModal" data-module-id="2"
                data-module-title="Conducción Defensiva" data-module-type="quiz" data-module-difficulty="Intermedio"
                data-module-description="Ponte a prueba con este quiz interactivo sobre situaciones de riesgo y cómo evitarlas. Evalúa tus conocimientos y mejora tus habilidades."
                data-module-quiz-data='[{"question":"¿Qué es la distancia de seguimiento segura?","options":["La longitud de tu vehículo.","El tiempo que tardas en reaccionar.","La distancia que te permite detenerte de forma segura."],"answer":2}]'>
                Ver Módulo
              </button>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 animate-on-scroll" data-animation="zoomIn" data-animation-delay="0.4s">
          <div class="module-card">
            <img src="https://placehold.co/400x220/ffc107/ffffff?text=Seguridad+Peatonal" alt="Seguridad Peatonal">
            <div class="module-card-body">
              <h4>Seguridad Peatonal y Ciclista</h4>
              <p>Consejos esenciales para peatones y ciclistas en el entorno urbano.</p>
              <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#moduleModal" data-module-id="3"
                data-module-title="Seguridad Peatonal y Ciclista" data-module-type="infografía"
                data-module-difficulty="Básico"
                data-module-description="Infografías interactivas con tips clave para transitar seguro como peatón o ciclista, respetando las normas y tu entorno."
                data-module-image-url="https://placehold.co/600x400/ffc107/ffffff?text=Infografia+Seguridad+Vial"> Ver
                Módulo
              </button>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 animate-on-scroll" data-animation="zoomIn" data-animation-delay="0.6s">
          <div class="module-card">
            <img src="https://placehold.co/400x220/6c757d/ffffff?text=Senalizacion+Vial" alt="Señalización Vial">
            <div class="module-card-body">
              <h4>Señalización Vial y Demarcación</h4>
              <p>Identifica y comprende el significado de las señales de tránsito.</p>
              <button class="btn btn-secondary" disabled>Próximamente</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="reportes" class="reports-section section-padding">
    <div class="container">
      <h2 class="section-heading text-center mb-5 animate-on-scroll">Reporta un Incidente Vial</h2>
      <div class="row justify-content-center">
        <div class="col-lg-8 animate-on-scroll" data-animation="zoomIn">
          <div class="report-card">
            <h4>Ayúdanos a Mejorar la Seguridad Vial</h4>
            <p class="mb-4 text-center">Tu reporte es crucial para identificar y abordar las problemáticas en las vías
              de Quibdó. Describe el incidente, sube una foto y especifica la ubicación.</p>
            <form id="reportForm">
              <div class="mb-3">
                <label for="tipoIncidente" class="form-label">Tipo de Incidente</label>
                <select class="form-select" id="tipoIncidente" required>
                  <option selected disabled value="">Selecciona...</option>
                  <option value="Exceso de Velocidad">Exceso de Velocidad</option>
                  <option value="Estacionamiento Ilegal">Estacionamiento Ilegal</option>
                  <option value="Omisión de Semáforo">Omisión de Semáforo</option>
                  <option value="Invasión de Carril">Invasión de Carril</option>
                  <option value="Conducción Peligrosa">Conducción Peligrosa</option>
                  <option value="Otros">Otros</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="ubicacionIncidente" class="form-label">Ubicación (ej: Calle 25 #3-10, Centro)</label>
                <input type="text" class="form-control" id="ubicacionIncidente"
                  placeholder="Ingresa la ubicación del incidente" required>
              </div>
              <div class="mb-3">
                <label for="descripcionIncidente" class="form-label">Descripción Detallada</label>
                <textarea class="form-control" id="descripcionIncidente" rows="4"
                  placeholder="Describe brevemente lo ocurrido, fecha y hora si las conoces."></textarea>
              </div>
              <div class="mb-4">
                <label for="fotoIncidente" class="form-label">Adjuntar Evidencia (Foto)</label>
                <input class="form-control" type="file" id="fotoIncidente" accept="image/*">
                <small class="form-text text-muted">Una imagen puede ayudar a validar tu reporte.</small>
              </div>
              <button type="submit" class="btn btn-primary-custom btn-submit w-100">Enviar Reporte</button>
            </form>
            <div id="reportMessage" class="mt-3 text-center" style="display: none;"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="contacto" class="contact-section section-padding">
    <div class="container animate-on-scroll">
      <h2 class="mb-4">¿Tienes Preguntas? Contáctanos</h2>
      <p class="lead">Estamos aquí para ayudarte a construir un Quibdó con mejores vías y mayor conciencia vial.</p>
      <div class="row mt-5 contact-info">
        <div class="col-md-4 mb-4 mb-md-0">
          <i class="fas fa-envelope"></i>
          <p>info@educavialquibdo.com</p>
        </div>
        <div class="col-md-4 mb-4 mb-md-0">
          <i class="fas fa-phone-alt"></i>
          <p>+57 323 765 0972</p>
        </div>
        <div class="col-md-4">
          <i class="fas fa-map-marker-alt"></i>
          <p>Quibdó, Chocó, Colombia</p>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 mb-3 mb-md-0">
          <p class="mb-0">&copy; 2025 EducaVial Quibdó. Todos los derechos reservados.</p>
        </div>
        <div class="col-md-6">
          <div class="social-icons">
            <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <div class="modal fade" id="moduleModal" tabindex="-1" aria-labelledby="moduleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="moduleModalLabel">Detalles del Módulo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h4 id="modalModuleTitle"></h4>
          <p><strong>Tipo de Contenido:</strong> <span id="modalContentType"></span></p>
          <p><strong>Nivel de Dificultad:</strong> <span id="modalDifficulty"></span></p>
          <p id="modalModuleDescription"></p>
          <div id="moduleContentPlaceholder" class="mt-4">
            <div class="embed-responsive embed-responsive-16by9 d-none" id="videoContent">
              <iframe class="embed-responsive-item" src="" allowfullscreen></iframe>
              <p class="text-center mt-2 text-muted">Video de ejemplo de educación vial.</p>
            </div>
            <div id="quizContent" class="d-none">
              <h5>Pregunta de Ejemplo:</h5>
              <div id="quizQuestions"></div>
              <button class="btn btn-primary mt-3" id="quizSubmitBtn">Responder</button>
              <div id="quizResult" class="mt-2"></div>
            </div>
            <div id="infographicContent" class="text-center d-none">
              <img src="" class="img-fluid rounded shadow-sm" alt="Infografía de Seguridad Vial">
              <p class="text-center mt-2 text-muted">Infografía sobre tips de seguridad vial.</p>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary">Iniciar Módulo</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous">
  </script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Animaciones al hacer scroll
      const animateOnScrollElements = document.querySelectorAll('.animate-on-scroll');

      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            // Si ya tiene una animación definida en CSS, no la sobrescribimos con style.animation
            // La clase 'is-visible' activará las animaciones definidas en CSS
            observer.unobserve(entry.target); // Detener la observación una vez que se ha animado
          }
        });
      }, {
        threshold: 0.1
      }); // Se activa cuando el 10% del elemento es visible

      animateOnScrollElements.forEach(element => {
        // Añadir un pequeño retardo basado en el atributo data-animation-delay
        const delay = element.dataset.animationDelay;
        if (delay) {
          element.style.animationDelay = delay;
        }
        observer.observe(element);
      });

      // Lógica del Navbar al hacer scroll
      const navbar = document.querySelector('.navbar');
      window.addEventListener('scroll', () => {
        if (window.scrollY > 50) { // Cambia a 'scrolled' después de 50px de scroll
          navbar.classList.add('scrolled');
        } else {
          navbar.classList.remove('scrolled');
        }
      });

      // Lógica del Modal de Módulos
      const moduleModal = document.getElementById('moduleModal');
      moduleModal.addEventListener('show.bs.modal', event => {
        const button = event.relatedTarget; // Botón que activó el modal

        // Obtener datos de los atributos data-* del botón
        const moduleId = button.getAttribute('data-module-id');
        const moduleTitle = button.getAttribute('data-module-title');
        const contentType = button.getAttribute('data-module-type');
        const difficulty = button.getAttribute('data-module-difficulty');
        const description = button.getAttribute('data-module-description');
        const videoUrl = button.getAttribute('data-module-video-url');
        const quizData = button.getAttribute('data-module-quiz-data');
        const imageUrl = button.getAttribute('data-module-image-url');

        // Actualizar el contenido del modal
        document.getElementById('modalModuleTitle').textContent = moduleTitle;
        document.getElementById('modalContentType').textContent = contentType.charAt(0).toUpperCase() + contentType.slice(1);
        document.getElementById('modalDifficulty').textContent = difficulty.charAt(0).toUpperCase() + difficulty.slice(1);
        document.getElementById('modalModuleDescription').textContent = description;

        // Ocultar todos los contenidos y mostrar solo el relevante
        document.getElementById('videoContent').classList.add('d-none');
        document.getElementById('quizContent').classList.add('d-none');
        document.getElementById('infographicContent').classList.add('d-none');

        if (contentType === 'video') {
          const videoIframe = document.querySelector('#videoContent iframe');
          videoIframe.src = videoUrl; // Establecer la URL del video
          document.getElementById('videoContent').classList.remove('d-none');
        } else if (contentType === 'quiz') {
          const quizQuestionsDiv = document.getElementById('quizQuestions');
          quizQuestionsDiv.innerHTML = ''; // Limpiar preguntas anteriores
          const parsedQuizData = JSON.parse(quizData); // Parsear los datos del quiz

          parsedQuizData.forEach((quizItem, index) => {
            const questionHtml = `
                            <div class="mb-3">
                                <h5>${index + 1}. ${quizItem.question}</h5>
                                ${quizItem.options.map((option, optIndex) => `
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="quizOption${index}" id="quizOption${index}-${optIndex}" value="${optIndex}">
                                        <label class="form-check-label" for="quizOption${index}-${optIndex}">
                                            ${option}
                                        </label>
                                    </div>
                                `).join('')}
                            </div>
                        `;
            quizQuestionsDiv.innerHTML += questionHtml;
          });

          document.getElementById('quizContent').classList.remove('d-none');
          document.getElementById('quizResult').textContent = ''; // Limpiar resultado anterior

          // Lógica para el botón de responder del quiz
          const quizSubmitBtn = document.getElementById('quizSubmitBtn');
          quizSubmitBtn.onclick = () => {
            const selectedOption = document.querySelector(`input[name="quizOption0"]:checked`); // Asume un solo quiz por ahora
            const resultDiv = document.getElementById('quizResult');
            if (selectedOption) {
              const userAnswer = parseInt(selectedOption.value);
              if (userAnswer === parsedQuizData[0].answer) {
                resultDiv.className = 'mt-2 alert alert-success';
                resultDiv.textContent = '¡Correcto! Excelente respuesta.';
              } else {
                resultDiv.className = 'mt-2 alert alert-danger';
                resultDiv.textContent = 'Incorrecto. Inténtalo de nuevo.';
              }
            } else {
              resultDiv.className = 'mt-2 alert alert-warning';
              resultDiv.textContent = 'Por favor, selecciona una opción.';
            }
          };

        } else if (contentType === 'infografía') {
          const infographicImg = document.querySelector('#infographicContent img');
          infographicImg.src = imageUrl; // Establecer la URL de la infografía
          document.getElementById('infographicContent').classList.remove('d-none');
        }
      });

      // Limpiar el iframe del video cuando el modal se cierra para detener la reproducción
      moduleModal.addEventListener('hide.bs.modal', event => {
        const videoIframe = document.querySelector('#videoContent iframe');
        videoIframe.src = ''; // Detener el video
      });


      // Scroll suave para los enlaces del navbar
      document.querySelectorAll('a.nav-link[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
          e.preventDefault();
          const targetId = this.getAttribute('href');
          const targetElement = document.querySelector(targetId);
          if (targetElement) {
            // Ajustar el scroll para que la barra de navegación no cubra la sección
            const navbarHeight = document.querySelector('.navbar').offsetHeight;
            const elementPosition = targetElement.getBoundingClientRect().top + window.scrollY;
            window.scrollTo({
              top: elementPosition - navbarHeight,
              behavior: 'smooth'
            });
          }
        });
      });

      // Manejo del formulario de reportes
      const reportForm = document.getElementById('reportForm');
      const reportMessage = document.getElementById('reportMessage');

      reportForm.addEventListener('submit', function(e) {
        e.preventDefault(); // Prevenir el envío por defecto del formulario

        const tipoIncidente = document.getElementById('tipoIncidente').value;
        const ubicacionIncidente = document.getElementById('ubicacionIncidente').value;
        const descripcionIncidente = document.getElementById('descripcionIncidente').value;
        const fotoIncidente = document.getElementById('fotoIncidente').files[0]; // Archivo de la foto

        // Aquí se simularía el envío de datos a una base de datos o API
        // En un entorno real, se usaría fetch() o XMLHttpRequest para enviar estos datos al backend
        console.log('Reporte Enviado:', {
          tipoIncidente,
          ubicacionIncidente,
          descripcionIncidente,
          fotoIncidente: fotoIncidente ? fotoIncidente.name : 'No adjunta'
        });

        // Mostrar mensaje de éxito
        reportMessage.style.display = 'block';
        reportMessage.className = 'mt-3 alert alert-success';
        reportMessage.textContent = '¡Gracias! Tu reporte ha sido enviado con éxito y nos ayudará a mejorar la seguridad vial.';

        // Resetear el formulario después de un breve retraso
        setTimeout(() => {
          reportForm.reset();
          reportMessage.style.display = 'none';
        }, 3000); // Ocultar mensaje después de 3 segundos
      });
    });
  </script>
</body>

</html>