<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Galería - Deftones</title>
  <link rel="stylesheet" href="{{ asset('css/deftones.css') }}" />
</head>

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
  <!-- ===== NUEVA SECCIÓN: GALERÍA DE IMÁGENES ===== -->
  <section class="section" id="galeria">
    <h2 class="section-title">Galería de Momentos</h2>
    <p
      style="
          text-align: center;
          max-width: 800px;
          margin: 0 auto 3rem;
          color: #d0d0d0;
          font-size: 1.1rem;
        ">
      Una colección visual del legado de Deftones a través de los años,
      capturando la esencia y energía que define a la banda.
    </p>

    <div class="gallery-grid">
      <article class="gallery-item" onclick="openGalleryModal(this)">
        <img
          src="{{ asset('img/StephenCarpenter_Deftones.jpg') }}"
          alt="Deftones en concierto" />
        <div class="gallery-overlay">
          <h3 class="gallery-title">Live Performance</h3>
          <p class="gallery-description">Energía pura de Stephen Carpenter</p>
        </div>
      </article>

      <article class="gallery-item" onclick="openGalleryModal(this)">
        <img src="{{ asset('img/chinoC.jpg') }}" alt="Sesión de estudio" />
        <div class="gallery-overlay">
          <h3 class="gallery-title">En el Estudio</h3>
          <p class="gallery-description">Creando música legendaria</p>
        </div>
      </article>

      <article class="gallery-item" onclick="openGalleryModal(this)">
        <img src="{{ asset('img/back.jpg') }}" alt="Backstage" />
        <div class="gallery-overlay">
          <h3 class="gallery-title">Backstage</h3>
          <p class="gallery-description">Momentos íntimos de la banda</p>
        </div>
      </article>

      <article class="gallery-item" onclick="openGalleryModal(this)">
        <img src="{{ asset('img/bateria.jpg') }}" alt="Equipo musical" />
        <div class="gallery-overlay">
          <h3 class="gallery-title">Instrumentos</h3>
          <p class="gallery-description">Las herramientas del sonido</p>
        </div>
      </article>

      <article class="gallery-item" onclick="openGalleryModal(this)">
        <img src="{{ asset('img/festival.jpg') }}" alt="Festival" />
        <div class="gallery-overlay">
          <h3 class="gallery-title">Festivales</h3>
          <p class="gallery-description">Deftones Festival</p>
        </div>
      </article>

      <article class="gallery-item" onclick="openGalleryModal(this)">
        <img src="{{ asset('img/grafiti.jpg') }}" alt="Fans" />
        <div class="gallery-overlay">
          <h3 class="gallery-title">La Comunidad</h3>
          <p class="gallery-description">Unidos por la música</p>
        </div>
      </article>

      <article class="gallery-item" onclick="openGalleryModal(this)">
        <img src="{{ asset('img/concierto.jpg') }}" alt="Tour Bus" />
        <div class="gallery-overlay">
          <h3 class="gallery-title">Tours</h3>
          <p class="gallery-description">Vida de tour Deftones</p>
        </div>
      </article>

      <article class="gallery-item" onclick="openGalleryModal(this)">
        <img src="{{ asset('img/date.jpg') }}" alt="Luces del escenario" />
        <div class="gallery-overlay">
          <h3 class="gallery-title">Atmósfera Visual</h3>
          <p class="gallery-description">El show completo</p>
        </div>
      </article>

      <article class="gallery-item" onclick="openGalleryModal(this)">
        <img src="{{ asset('img/vivora.jpg') }}" alt="Grabación" />
        <div class="gallery-overlay">
          <h3 class="gallery-title">Proceso Creativo</h3>
          <p class="gallery-description">Nacimiento de nuevas canciones</p>
        </div>
      </article>
    </div>
  </section>

  <!-- Modal -->
  <div class="modal" id="galleryModal">
    <div class="modal-content">
      <span class="modal-close" onclick="closeGalleryModal()">&times;</span>
      <img id="modalImage" src="" alt="Imagen ampliada" />
    </div>
  </div>
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