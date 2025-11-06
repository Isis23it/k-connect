<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>K-CONNECT</title>

  <script src="https://cdn.tailwindcss.com"></script>

  <link href="https://fonts.googleapis.com/css2?family=Italiana&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body class="bg-gradient-to-b from-gray-50 to-gray-100 text-black">

  <header class="bg-gradient-to-b from-gray-400 to-slate-200 shadow-md">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

      <!-- 🌟 Logo -->
      <h1 class="text-4xl font-italiana text-white tracking-wider drop-shadow-md">
        K-CONNECT
      </h1>

      <!-- 🍔 Botón menú móvil -->
      <button id="menu-btn" class="text-white text-3xl md:hidden focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
          class="w-8 h-8">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>

      <!-- 🌈 Menú principal -->
      <nav id="menu-mobile" class="hidden md:flex md:space-x-12 font-italiana text-2xl text-white">
        <a href="{{ route('inicio') }}" class="relative hover:text-purple-200 transition">
          Inicio
          <span class="absolute left-0 bottom-0 w-0 h-0.5 bg-white transition-all duration-300 hover:w-full"></span>
        </a>
        <a href="{{ route('formulario') }}" class="relative hover:text-purple-200 transition">
          Únete a nosotros
          <span class="absolute left-0 bottom-0 w-0 h-0.5 bg-white transition-all duration-300 hover:w-full"></span>
        </a>

        <!-- 🌙 Botón Dark Mode -->
        <button id="darkModeToggle" class="ml-4 text-white text-3xl focus:outline-none">
          <svg id="moonIcon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
            stroke="currentColor" class="w-7 h-7">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z" />
          </svg>
          <svg id="sunIcon" xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 hidden" fill="none"
            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M12 3v1m0 16v1m8.66-9h-1M4.34 12h-1m14.12 5.66l-.7-.7M6.58 6.58l-.7-.7m12.02 12.02l-.7-.7M6.58 17.42l-.7-.7M12 8a4 4 0 100 8 4 4 0 000-8z" />
          </svg>
        </button>
      </nav>
    </div>

    <!-- 📱 Menú desplegable móvil -->
    <div id="menu-dropdown"
      class="hidden flex-col items-center bg-[#c4b2eb] text-white font-italiana text-2xl py-4 space-y-4 md:hidden">
      <a href="{{ route('inicio') }}" class="hover:text-purple-100">Inicio</a>
      <a href="{{ route('formulario') }}" class="hover:text-purple-100">Únete a nosotros</a>
    </div>
  </header>


  <!-- Galería principal -->
  <section class="section-img">
    <img src="{{ asset('img/Stray Kids.jpg') }}" alt="">
    <img src="{{ asset('img/txt.jpg') }}" alt="">
    <img src="{{ asset('img/ATEEZ (1).jpg') }}" alt="">
    <img src="{{ asset('img/en.jpg') }}" alt="">
    <img src="{{ asset('img/descarga.jpg') }}" alt="">
    <img src="{{ asset('img/blackpink.jpg') }}" alt="">
    <img src="{{ asset('img/le sserafim.jpg') }}" alt="">
    <img src="{{ asset('img/aespa.jpg') }}" alt="">
  </section>

  <!-- Carrusel infinito de logos -->
  <section class="logos-section">
    <div class="carrusel">
      <div class="image-container">
        <img src="{{ asset('img/saeve.jpg') }}" alt="">
        <img src="{{ asset('img/ENHYPEN-logoPicture(1).webp') }}" alt="">
        <img src="{{ asset('img/BTS.webp') }}" alt="">
        <img src="{{ asset('img/Astro logo.jpg') }}" alt="">
        <img src="{{ asset('img/TXT-Logo-500x281.webp') }}" alt="">
        <img src="{{ asset('img/go7.jpg') }}" alt="">
        <img src="{{ asset('img/LOGO SUPER JUNIOR.jpg') }}" alt="">
      </div>
    </div>
  </section>

  <!-- Texto de introducción -->
  <section class="texto-intro">
    <h2 class="titulo-intro">K-CONNECT</h2>
    <p class="texto-izquierda">
      El K-pop no es solo música: es un universo lleno de ritmo, pasión y creatividad.
      En K-CONNECT te acercamos a lo mejor de esta cultura global que combina talento, estilo y energía en cada escenario.
      ¡Conéctate con la ola Hallyu y sé parte de esta experiencia que conquista corazones alrededor del mundo! 🌟
    </p>
  </section>

  <!-- Slider 3D -->
  <section class="slider3d">
    <div class="slider3d-wrapper">
      <span style="--i:1;"><img src="{{ asset('img/the biggest heart to svt _3.jpg') }}" alt=""></span>
      <span style="--i:2;"><img src="{{ asset('img/army2.jpg') }}" alt=""></span>
      <span style="--i:3;"><img src="{{ asset('img/ligh.jpg') }}" alt=""></span>
      <span style="--i:4;"><img src="{{ asset('img/fandom.jpg') }}" alt=""></span>
      <span style="--i:5;"><img src="{{ asset('img/enrandom.jpg') }}" alt=""></span>
    </div>
  </section>

  <!-- Sección K-pop -->
  <section class="kpop-section">
    <div class="kpop-text">
      <p>El K-pop es mucho más que música: es una experiencia visual, cultural y emocional...</p>
    </div>

    <div class="grid-logos">
      <img src="{{ asset('img/ENHYPEN-logoPicture(1).webp') }}" alt="ENHYPEN" onclick="abrirModal(this)">
      <img src="{{ asset('img/BTS.webp') }}" alt="BTS" onclick="abrirModal(this)">
      <img src="{{ asset('img/stray kids logo_.jpg') }}" alt="Stray Kids" onclick="abrirModal(this)">
      <img src="{{ asset('img/LOGO SUPER JUNIOR.jpg') }}" alt="Super Junior" onclick="abrirModal(this)">
      <img src="{{ asset('img/le.jpg') }}" alt="LE SSERAFIM" onclick="abrirModal(this)">
      <img src="{{ asset('img/exo logo.jpg') }}" alt="EXO" onclick="abrirModal(this)">
      <img src="{{ asset('img/attex.jpg') }}" alt="ATEEZ" onclick="abrirModal(this)">
      <img src="{{ asset('img/pink.jpg') }}" alt="BLACKPINK" onclick="abrirModal(this)">
      <img src="{{ asset('img/twice.jpg') }}" alt="TWICE" onclick="abrirModal(this)">
    </div>
  </section>

  <!-- Modal -->
  <div id="modal" class="modal">
    <span class="cerrar" onclick="cerrarModal()">&times;</span>
    <div class="modal-content">
      <video id="modalVideo" class="modal-video" controls></video>
      <div class="modal-info">
        <h2 id="modalNombre">Nombre del grupo</h2>
        <p id="modalTexto">Descripción del grupo.</p>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-gray-800 text-white py-6 px-8 flex justify-between items-center rounded-t-3xl shadow-lg">
    <div class="flex items-center space-x-4">
      <a href="#" class="bg-blue-300 p-2 rounded-full hover:opacity-80 transition">
        <img src="{{ asset('img/chido2.png') }}" alt="Facebook" class="w-6 h-6">
      </a>
      <a href="#" class="bg-white p-2 rounded-full hover:opacity-80 transition">
        <img src="{{ asset('img/chido3.png') }}" alt="X" class="w-6 h-6">
      </a>
      <a href="#" class="bg-pink-200 p-2 rounded-full hover:opacity-80 transition">
        <img src="{{ asset('img/chido1.png') }}" alt="Instagram" class="w-6 h-6">
      </a>
      <a href="#" class="bg-green-300 p-2 rounded-full hover:opacity-80 transition">
        <img src="{{ asset('img/whats.png') }}" alt="WhatsApp" class="w-6 h-6">
      </a>
    </div>

    <div class="text-right">
      <img src="{{ asset('img/ChatGPT Image 21 oct 2025, 00_11_47.png') }}" alt="K-CONNECT" class="w-32 mx-auto mb-1">
      <a href="{{ route('formulario') }}" class="underline text-sm hover:text-pink-300 transition">ÚNETE A NOSOTROS</a>
    </div>
  </footer>
<script>
  // Laravel genera la ruta base a la carpeta img/
  window.assetImgPath = "{{ asset('img') }}/";
</script>
<script src="{{ asset('script.js') }}"></script>

  <script src="{{ asset('script.js') }}"></script>
</body>
</html>
