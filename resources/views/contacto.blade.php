<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contacto - Deftones</title>
  <link rel="stylesheet" href="{{ asset('css/deftones.css') }}" />
</head>
<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
  integrity="sha512-pQ5fGzjRx35RfiE6L1cR0u6QF2fByvS7qPqg9U6zX7+8pY5Zb+U/JcwSpZg+0+0XfIQUpC9EHPGpYtGqKj2ZrQ=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer" />

<body>
  <nav class="nav">
    <a href="{{ route('inicio') }}" class="top-right-button">Inicio</a>
    <div class="nav-content">
      <div class="nav-logo">
        <img src="{{ asset('img/calaca.png') }}" alt="Deftones Logo" />
        <span>DEFTONES</span>
      </div>
      <ul class="nav-links"></ul>
    </div>
  </nav>

  <section class="section" id="contacto">
    <h2 class="section-title">Contacto</h2>

    <div class="form-container">
      <div class="form-decoration"><i class="fas fa-guitar"></i></div>
      <div class="form-decoration"><i class="fas fa-drum"></i></div>

      <div class="form-intro">
        <p>
          ¿Tienes preguntas o comentarios? Completa el formulario y nos
          pondremos en contacto contigo.
        </p>
      </div>

      <form id="contactForm">
        <div class="form-group">
          <label for="nombre"><i class="fa-solid fa-user"></i> Nombre *</label>
          <input
            type="text"
            id="nombre"
            name="nombre"
            required
            placeholder="Tu nombre completo" />
        </div>
        <div class="form-group">
          <label for="email"><i class="fa-solid fa-envelope"></i> Correo Electrónico *</label>
          <input
            type="email"
            id="email"
            name="email"
            required
            placeholder="tu@email.com" />
        </div>
        <div class="form-group">
          <label for="mensaje"><i class="fa-solid fa-comment-dots"></i> Mensaje *</label>
          <textarea
            id="mensaje"
            name="mensaje"
            required
            placeholder="Escribe tu mensaje aquí..."></textarea>
        </div>
        <button type="submit" class="submit-btn">
          <i class="fa-solid fa-paper-plane"></i> Enviar
        </button>
        <div class="success-message" id="successMessage">
          ¡Mensaje enviado con éxito!
        </div>
      </form>
    </div>
  </section>
  <footer class="footer">
    <div class="footer-decoration"></div>
    <div class="footer-decoration"></div>

    <p>Sigue a Deftones:</p>
    <br />

    <div class="social-links">
      <a
        href="https://www.instagram.com/deftones"
        target="_blank"
        title="Instagram">
        <img src="{{ asset('img/instagram.png') }}" alt="Instagram" class="social-icon" />
        Instagram
      </a>
      <a
        href="https://www.facebook.com/deftones?locale=es_LA"
        target="_blank"
        title="Facebook">
        <img src="{{ asset('img/facebook.png') }}" alt="Facebook" class="social-icon" />
        Facebook
      </a>
      <a
        href="https://open.spotify.com/intl-es/artist/6Ghvu1VvMGScGpOUJBAHNH"
        target="_blank"
        title="Spotify">
        <img src="{{ asset('img/spotify.png') }}" alt="Spotify" class="social-icon" />
        Spotify
      </a>
    </div>

    <p class="footer-copy">© 2025 Deftones Fan Page</p>
  </footer>

  <script src="{{ asset('js/deftones.js') }}"></script>
</body>

</html>