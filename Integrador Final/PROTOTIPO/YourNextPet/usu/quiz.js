const preguntas = [
  {
    texto: "¿Cómo describes tu estilo de vida?",
    opciones: [
      { texto: "Muy activo, siempre en movimiento", tipo: "energetico" },
      { texto: "Equilibrado entre actividad y descanso", tipo: "equilibrado" },
      { texto: "Tranquilo y relajado", tipo: "calmado" }
    ]
  },
  {
    texto: "¿Cuánto tiempo puedes dedicar diariamente?",
    opciones: [
      { texto: "Más de 3 horas", tipo: "energetico" },
      { texto: "1 a 3 horas", tipo: "equilibrado" },
      { texto: "Menos de 1 hora", tipo: "calmado" }
    ]
  },
  {
    texto: "¿Qué experiencia tienes con mascotas?",
    opciones: [
      { texto: "He tenido varias mascotas", tipo: "energetico" },
      { texto: "He tenido algunas mascotas", tipo: "equilibrado" },
      { texto: "No tengo experiencia", tipo: "calmado" }
    ]
  }
];

let actual = 0;

// 🔥 NUEVO: perfil por personalidad
let perfil = [];

function cargarPregunta() {
  let p = preguntas[actual];

  document.getElementById("pregunta").innerText = p.texto;
  document.getElementById("numero").innerText = `Pregunta ${actual + 1} de ${preguntas.length}`;

  let opcionesHTML = "";

  p.opciones.forEach(op => {
    opcionesHTML += `<button onclick="responder('${op.tipo}')">${op.texto}</button>`;
  });

  document.getElementById("opciones").innerHTML = opcionesHTML;

  document.getElementById("bar").style.width =
    ((actual + 1) / preguntas.length) * 100 + "%";
}

function responder(tipo) {

  // 🔥 CONVERTIR RESPUESTA → PERSONALIDAD
  if (tipo === "energetico") {
    perfil.push("jugueton", "energetico", "activo");
  }

  if (tipo === "equilibrado") {
    perfil.push("sociable", "tranquilo", "adaptable");
  }

  if (tipo === "calmado") {
    perfil.push("calmado", "independiente", "relajado");
  }

  actual++;

  if (actual < preguntas.length) {
    cargarPregunta();
  } else {
    finalizar();
  }
}

function finalizar() {

  // 🔥 Guardar perfil (IMPORTANTE)
  localStorage.setItem("perfil", JSON.stringify(perfil));

  // 🔥 Ir al index
  window.location.href = "../mascotausu.php";
}

cargarPregunta();