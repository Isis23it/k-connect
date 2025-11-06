// ==========================
// MENÚ HAMBURGUESA
// ==========================
const menuBtn = document.getElementById("menu-btn");
const menuDropdown = document.getElementById("menu-dropdown");

menuBtn.addEventListener("click", () => {
  menuDropdown.classList.toggle("hidden");
  menuDropdown.classList.toggle("flex");
});

// ==========================
// DATOS DE LOS GRUPOS
// ==========================
const dataGrupos = {
  "ENHYPEN-logoPicture(1).webp": {
    nombre: "ENHYPEN",
    descripcion:
      "ENHYPEN es un grupo surcoreano formado a través del programa I-LAND. Son conocidos por su energía juvenil, coreografías sincronizadas y mensajes sobre el crecimiento y la identidad.",
    video: "ena.mp4",
  },
  "BTS.webp": {
    nombre: "BTS",
    descripcion:
      "BTS ha revolucionado la industria del K-pop con su música emocional y mensajes de autoaceptación, convirtiéndose en un fenómeno global.",
    video: "bts.mp4",
  },
  "stray kids logo_.jpg": {
    nombre: "Stray Kids",
    descripcion: "Stray Kids destaca por su autenticidad y energía explosiva.",
    video: "stay.mp4",
  },
  "attex.jpg": {
    nombre: "ATEEZ",
    descripcion: "ATEEZ destaca por su autenticidad y energía explosiva.",
    video: "attezzz.mp4",
  },
  "twice.jpg": {
    nombre: "Twice",
    descripcion:
      "Grupo femenino icónico del K-pop con energía brillante y carisma.",
    video: "once.mp4",
  },
  "pink.jpg": {
    nombre: "BLACKPINK",
    descripcion:
      "BLACKPINK combina estilo, poder y presencia escénica en cada presentación.",
    video: "blacks.mp4",
  },
  "exo logo.jpg": {
    nombre: "EXO",
    descripcion:
      "EXO es reconocido por su talento vocal, coreografías precisas y concepto galáctico.",
    video: "loveee.mp4",
  },
  "le.jpg": {
    nombre: "LE SSERAFIM",
    descripcion: "LE SSERAFIM transmite fuerza, confianza y autoafirmación.",
    video: "sera.mp4",
  },
  "LOGO SUPER JUNIOR.jpg": {
    nombre: "Super Junior",
    descripcion:
      "Super Junior es una de las leyendas del K-pop con una trayectoria influyente.",
    video: "junior.mp4",
  },
  "TXTLOGO.webp": {
    nombre: "TXT",
    descripcion:
      "TXT destaca por sus conceptos juveniles y su creatividad musical.",
    video: "soobin.mp4",
  },
  "go7.jpg": {
    nombre: "GOT7",
    descripcion:
      "GOT7 es conocido por su energía fresca, carisma y conexión con los fans.",
    video: "g7.mp4",
  },
  "saeve.jpg": {
    nombre: "SEVENTEEN",
    descripcion:
      "SEVENTEEN brilla por su talento, coreografía y trabajo en equipo.",
    video: "seven.mp4",
  },
};

// ==========================
// MODAL DE GRUPOS
// ==========================
function abrirModal(element) {
  const modal = document.getElementById("modal");
  const video = document.getElementById("modalVideo");
  const nombre = document.getElementById("modalNombre");
  const texto = document.getElementById("modalTexto");

  const src = element.getAttribute("src").split("/").pop();
  const info =
    dataGrupos[src] || {
      nombre: "Grupo desconocido",
      descripcion: "Información no disponible.",
      video: "",
    };

  // 🔧 usar la variable global generada por Blade
  const baseUrl = window.assetImgPath || "/img/";
  video.src = baseUrl + info.video;
  video.load();

  nombre.textContent = info.nombre;
  texto.textContent = info.descripcion;

  modal.style.display = "flex";
}

function cerrarModal() {
  const modal = document.getElementById("modal");
  const video = document.getElementById("modalVideo");
  video.pause();
  modal.style.display = "none";
}

// ==========================
// SECCIONES CON BOTONES
// ==========================
document.addEventListener("DOMContentLoaded", () => {
  const botones = document.querySelectorAll(".boton");
  const contenedor = document.getElementById("contenido-kpop");

  const secciones = {
    "Noticias 🌍✨": `
      <h2 class="text-2xl font-semibold mb-6 text-center">Noticias 🌍✨</h2>
      <div class="grid md:grid-cols-2 gap-6 px-6">
        <div class="card-noticia bg-white rounded-3xl shadow-md p-5 hover:shadow-lg transition">
          <img src="{{ asset('img/desire.jpg') }}" alt="ENHYPEN" class="rounded-2xl w-full h-56 object-cover mb-3">
          <h3 class="text-xl font-semibold text-emerald-600 mb-2">ENHYPEN lanza su álbum “DESIRE: UNLEASH”</h3>
          <p class="text-gray-700 leading-relaxed">ENHYPEN presenta su nuevo álbum con 6 canciones originales.</p>
        </div>
      </div>`,
    "Géneros ✨": `
      <h2 class="text-2xl font-semibold mb-4 text-center">Géneros ✨</h2>
      <p class="text-lg text-gray-700 w-3/4 mx-auto text-center">
        El K-pop abarca una gran variedad de estilos musicales como pop, hip-hop, R&B y EDM.
      </p>`,
  };

  botones.forEach((boton) => {
    boton.addEventListener("click", () => {
      botones.forEach((b) => b.classList.remove("active"));
      boton.classList.add("active");

      contenedor.style.opacity = 0;
      setTimeout(() => {
        contenedor.innerHTML = secciones[boton.textContent.trim()] || "";
        contenedor.style.opacity = 1;
      }, 300);
    });
  });
});

// ==========================
// 🌙 DARK MODE
// ==========================
const darkModeToggle = document.getElementById("darkModeToggle");
const moonIcon = document.getElementById("moonIcon");
const sunIcon = document.getElementById("sunIcon");

// Cargar preferencia guardada
if (localStorage.getItem("theme") === "dark") {
  document.documentElement.classList.add("dark");
  moonIcon.classList.add("hidden");
  sunIcon.classList.remove("hidden");
}

darkModeToggle.addEventListener("click", () => {
  document.documentElement.classList.toggle("dark");
  const isDark = document.documentElement.classList.contains("dark");
  localStorage.setItem("theme", isDark ? "dark" : "light");

  moonIcon.classList.toggle("hidden", isDark);
  sunIcon.classList.toggle("hidden", !isDark);
});
