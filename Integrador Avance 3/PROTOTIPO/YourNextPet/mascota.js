window.addEventListener("DOMContentLoaded", () => {

const cards = document.querySelectorAll(".card");
const btnFav = document.querySelector(".fav");

  // ===============================
  // ❤️ FAVORITOS
  // ===============================
  let favoritos = JSON.parse(localStorage.getItem("favoritos")) || [];
  let modoFavoritos = false;

  function actualizarContador() {
    btnFav.innerText = `❤️ Favoritos (${favoritos.length})`;
  }

  actualizarContador();

  document.querySelectorAll(".heart").forEach(btn => {

    let card = btn.closest(".card");
    let id = card.dataset.id;

    // estado inicial
    if (favoritos.includes(id)) {
      btn.innerText = "❤️";
    }

    btn.addEventListener("click", () => {

      if (favoritos.includes(id)) {
        favoritos = favoritos.filter(f => f !== id);
        btn.innerText = "🤍";
      } else {
        favoritos.push(id);
        btn.innerText = "❤️";
      }

      localStorage.setItem("favoritos", JSON.stringify(favoritos));
      actualizarContador();
    });

  });

  // ===============================
  // 🔥 FILTRO FAVORITOS (MISMA PAGINA)
  // ===============================
btnFav.addEventListener("click", () => {

    modoFavoritos = !modoFavoritos;

    // 🔥 CAMBIO VISUAL
    btnFav.classList.toggle("activo");

    cards.forEach(card => {
      let id = card.dataset.id;

      if (modoFavoritos) {
        card.style.display = favoritos.includes(id) ? "block" : "none";
      } else {
        card.style.display = "block";
      }
    });

  });

  // ===============================
  // 🔥 MATCH POR PERSONALIDAD (11%)
  // ===============================
  let perfil = JSON.parse(localStorage.getItem("perfil"));

  // 👉 Si no hay quiz → ocultar %
  if (!perfil) {
    document.querySelectorAll(".match").forEach(span => {
      span.style.display = "none";
    });
    return;
  }

  cards.forEach(card => {

    let personalidad = card.dataset.personalidad.split(",");

    let coincidencias = 0;

    personalidad.forEach(p => {
      if (perfil.includes(p)) {
        coincidencias++;
      }
    });

    // 🔥 11% por coincidencia
    let match = coincidencias * 11;

    let valor = Math.round(match);

    let span = card.querySelector(".match");
    span.style.display = "block";
    span.innerText = valor + "% Match";

    card.dataset.match = valor;
  });

  // ===============================
  // 🔥 ORDENAR POR COMPATIBILIDAD
  // ===============================
  let contenedor = document.querySelector(".contenedor");

  let ordenadas = Array.from(cards).sort((a, b) => {
    return b.dataset.match - a.dataset.match;
  });

  ordenadas.forEach(card => contenedor.appendChild(card));

});

function irQuiz() {
  window.location.href = "quiz.html";
}

//animar
const elementos = document.querySelectorAll(".animar");

function activarAnimacion() {
  elementos.forEach(el => {
    const top = el.getBoundingClientRect().top;
    const bottom = el.getBoundingClientRect().bottom;
    const alturaPantalla = window.innerHeight;

    // 👉 Si está visible en pantalla
    if (top < alturaPantalla - 80 && bottom > 0) {
      el.classList.add("show");
    } else {
      // 👉 Si sale de pantalla, se reinicia
      el.classList.remove("show");
    }
  });
}

window.addEventListener("scroll", activarAnimacion);
window.addEventListener("load", activarAnimacion);

function irPasos() {
  document.getElementById("pasos").scrollIntoView({
    behavior: "smooth"
  });
}

function abrirDonacion(nombre){

  document.getElementById("modalDonacion").style.display = "flex";

  document.getElementById("tituloDonacion").innerText =
  "Donar para " + nombre;
}

function cerrarDonacion(){

  document.getElementById("modalDonacion").style.display = "none";
}

