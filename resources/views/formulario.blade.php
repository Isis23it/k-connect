<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>KPOP-CONNECT — Información / Únete</title>

  <link rel="stylesheet" href="{{ asset('style.css') }}">
  <script src="https://cdn.tailwindcss.com"></script>
  <meta name="description" content="Únete a K-Connect en KPOP-CONNECT — formulario de suscripción." />
</head>

<body class="bg-gray-50 text-gray-800">

<header class="bg-gradient-to-r from-[#d8c6f0] to-[#b6a0e6] shadow-md">
  <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
    
    <!-- Logo -->
    <h1 class="text-4xl font-italiana text-white tracking-wider drop-shadow-md">
      K-CONNECT
    </h1>

    <!--  Botón menú móvil -->
    <button id="menu-btn" class="text-white text-3xl md:hidden focus:outline-none">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>

    <!--  Menú principal -->
    <nav id="menu-mobile" class="hidden md:flex md:space-x-12 font-italiana text-2xl text-white">
      <a href="{{ route('inicio') }}" class="relative hover:text-purple-200 transition">
        Inicio
        <span class="absolute left-0 bottom-0 w-0 h-0.5 bg-white transition-all duration-300 hover:w-full"></span>
      </a>
      <a href="{{ route('formulario') }}" class="relative hover:text-purple-200 transition">
        Únete a nosotros
        <span class="absolute left-0 bottom-0 w-0 h-0.5 bg-white transition-all duration-300 hover:w-full"></span>
      </a>
    </nav>
  </div>

  <!--  Menú desplegable móvil -->
  <div id="menu-dropdown" class="hidden flex-col items-center bg-[#c4b2eb] text-white font-italiana text-2xl py-4 space-y-4 md:hidden">
    <a href="{{ route('inicio') }}" class="hover:text-purple-100">Inicio</a>
    <a href="{{ route('formulario') }}" class="hover:text-purple-100">Únete a nosotros</a>
  </div>
</header>

  <main class="max-w-2xl mx-auto px-4 py-10">
    <section class="bg-gradient-to-b from-violet-200 to-slate-300 p-6 rounded-lg shadow">
      <h1 class="text-2xl font-bold text-center">Únete a K-Connect</h1>
      <p class="text-gray-600 mt-2 text-center">Forma parte de nuestra comunidad y comparte tu pasión por el K-POP.</p>

      <form id="joinForm" class="mt-6 space-y-4">
        <div>
          <label for="nombre" class="block text-sm font-medium text-gray-700">Tu nombre</label>
          <input id="nombre" name="nombre" type="text" required
                 class="mt-1 block w-full rounded-md border px-3 py-2 focus:outline-none focus:ring-2 focus:ring-pink-300" placeholder="Tu nombre" />
        </div>

        <div>
          <label for="email" class="block text-sm font-medium text-gray-700">Correo electrónico</label>
          <input id="email" name="email" type="email" required
                 class="mt-1 block w-full rounded-md border px-3 py-2" placeholder="tucorreo@ejemplo.com" />
        </div>

        <div>
          <label for="grupo" class="block text-sm font-medium text-gray-700">Tu grupo favorito de K-POP</label>
          <input id="grupo" name="grupo" type="text"
                 class="mt-1 block w-full rounded-md border px-3 py-2" placeholder="Ej: BTS" />
        </div>

        <div>
          <label for="mensaje" class="block text-sm font-medium text-gray-700">Cuéntanos por qué amas el K-POP</label>
          <textarea id="mensaje" name="mensaje" rows="4"
                    class="mt-1 block w-full rounded-md border px-3 py-2" placeholder="Escribe aquí..."></textarea>
        </div>

        <div class="flex justify-center">
          <button type="submit" class="px-6 py-2 bg-pink-500 text-white rounded-2xl font-semibold hover:bg-pink-600">
            Enviar
          </button>
        </div>
      </form>

      <p id="formResult" class="mt-4 text-center text-sm text-green-600 hidden">
        ¡Gracias por unirte! Revisa tu correo.
      </p>
    </section>
  </main>

  <footer class="bg-white border-t mt-12">
    <div class="max-w-5xl mx-auto px-4 py-8 text-center text-sm text-gray-500">
      © <span id="yearI"></span> KPOP-CONNECT · Gracias por ser parte de nuestra comunidad.
    </div>
  </footer>

  <script>
    // menú móvil
    const menuBtn = document.getElementById('menu-btn');
    const menuDropdown = document.getElementById('menu-dropdown');
    menuBtn.addEventListener('click', () => {
      menuDropdown.classList.toggle('hidden');
      menuDropdown.classList.toggle('flex');
    });

    // manejo básico del formulario
    const form = document.getElementById('joinForm');
    const result = document.getElementById('formResult');

    form.addEventListener('submit', (e)=> {
      e.preventDefault();
      const nombre = form.nombre.value.trim();
      const email = form.email.value.trim();
      if(!nombre || !email) {
        alert('Por favor completa los campos requeridos.');
        return;
      }

      result.classList.remove('hidden');
      form.reset();
      setTimeout(()=> result.classList.add('hidden'), 5000);
    });

    document.getElementById('yearI').textContent = new Date().getFullYear();
  </script>
</body>
</html>
