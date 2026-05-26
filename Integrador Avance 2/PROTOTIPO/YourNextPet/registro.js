const botones = document.querySelectorAll(".tipo-btn");
const formAdoptante = document.getElementById("formAdoptante");
const formAlbergue = document.getElementById("formAlbergue");

var formAdoptante = document.querySelector(".formAdoptante")



botones.forEach((boton, index) => {

  boton.addEventListener("click", () => {

    // QUITAR ACTIVE
    botones.forEach(btn => {
      btn.classList.remove("active");
    });

    // AGREGAR ACTIVE
    boton.classList.add("active");

    // ADOPTANTE
    if(index === 0) {

      formAdoptante.style.display = "block";
      formAlbergue.style.display = "none";

    }

    // ALBERGUE
    else {

      formAdoptante.style.display = "none";
      formAlbergue.style.display = "block";

    }

  });

});

