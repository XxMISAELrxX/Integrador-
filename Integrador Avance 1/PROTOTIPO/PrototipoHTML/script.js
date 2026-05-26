function filtrar(tipo) {
  let tarjetas = document.querySelectorAll(".card");

  tarjetas.forEach(card => {
    if (tipo === "todos") {
      card.style.display = "block";
    } else {
      if (card.getAttribute("data-tipo") === tipo) {
        card.style.display = "block";
      } else {
        card.style.display = "none";
      }
    }
  });
}