let estiloL = document.getElementsByClassName("estilo_login");
let estiloC = document.getElementsByClassName("estilo_cadastro").value;
let login = document.getElementById("login");
let botao1 = document.getElementById("botao1");
let Cadastro = document.getElementById("Cadastro");
let botao2 = document.getElementById("botao2");

function vazio() {
  if (estiloC.value == "") {
    alert("input vazio");
  }
}

botao2.addEventListener("click", vazio());



<script>
//Carrossel de Imagens
window.setInterval(function () {
doTransition("next");
}, 6000);

function doTransition(direction) {
let nextOrPrevActive;

let currentActive = document.querySelector(".active");
currentActive.classList.remove("active");

if ("next" == direction) nextOrPrevActive = currentActive.nextElementSibling;
else nextOrPrevActive = currentActive.previousElementSibling;

if (nextOrPrevActive) nextOrPrevActive.classList.add("active");
else document.querySelector(".item").classList.add("active");
}

document.getElementById("lf").addEventListener("click", doTransition);
document.getElementById("rt").addEventListener(
"click",
function () {
  doTransition("next");
},
false
);