function irQuiz(){
  window.location.href = "quiz.html";
}

function irPasos(){
  document.getElementById("pasos").scrollIntoView({
    behavior:"smooth"
  });
}

const elementos = document.querySelectorAll('.animar');

function mostrarScroll(){

  elementos.forEach((el)=>{

    const top = el.getBoundingClientRect().top;

    if(top < window.innerHeight - 100){
      el.classList.add('show');
    }else{
      el.classList.remove('show');
    }

  });

}

window.addEventListener('scroll', mostrarScroll);

mostrarScroll();