<?php
date_default_timezone_set('America/El_Salvador');
?>
<!DOCTYPE html>
<html lang="es">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Para Rebeca ❤️</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Great+Vibes&display=swap" rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

<style>
  *{
margin:0;
padding:0;
box-sizing:border-box;
}

html{
scroll-behavior:smooth;
}

body{

font-family:'Poppins',sans-serif;
background:
linear-gradient(135deg,#ff9ec7,#ffd6e7,#e8d7ff);

overflow-x:hidden;
color:#6b1130; /* Color de letra más alegre, romántico y con contraste */
position:relative;

}


/* ================= ESTRELLAS ================= */

.stars{

position:fixed;
top:0;
left:0;
width:100%;
height:100%;
pointer-events:none;
z-index:0;

background-image:

radial-gradient(white 1px, transparent 1px),
radial-gradient(white 1px, transparent 1px);

background-size:80px 80px;

opacity:.2;

}


/* ================= HERO ================= */

.hero{

min-height:100vh;

display:flex;
justify-content:center;
align-items:center;

padding:30px;

position:relative;
z-index:2;

}


/* ================= SOBRE ================= */

.envelope{

background:white;

padding:50px;

width:340px;

border-radius:30px;

box-shadow:
0 25px 60px rgba(0,0,0,.2);

color:#ff4f81;

animation:flotar 3s ease-in-out infinite;

text-align:center;

}


@keyframes flotar{

50%{
transform:translateY(-12px);
}

}


.letter h1{

font-size:50px;
font-family:'Great Vibes',cursive;

}


.letter h2{

font-size:28px;
font-weight:500;

}


.letter h3{

font-size:18px;
color:#999;

}


.mini{

font-size:14px;
color:#ff7ca8;

}


/* ================= BOTÓN PRINCIPAL ================= */

.open-btn{

margin-top:30px;

border:none;

padding:18px 35px;

border-radius:50px;

cursor:pointer;

font-size:18px;

background:#ff4f81;

color:white;

transition:.4s;

}


.open-btn:hover{

transform:scale(1.08);

}


/* ================= SECCIONES ================= */

.section{

padding:100px 25px;

position:relative;
z-index:2;

}


.title{

font-size:50px;

text-align:center;

margin-bottom:40px;

font-family:'Great Vibes',cursive;
color:#6b1130;

}


/* ================= TARJETAS ================= */

.card{

max-width:950px;

margin:auto;

padding:40px;

border-radius:30px;

background:rgba(255,255,255,.4); /* Un toque más opaco para mejor contraste */

backdrop-filter:blur(15px);

line-height:2;

font-size:20px;

box-shadow:
0 15px 40px rgba(0,0,0,.15);

}


/* ================= CONTADOR ================= */

.contador-card{

text-align:center;

}


#contador{

font-size:32px;

font-weight:bold;

line-height:2;

}


/* ================= MAPA DEL AMOR ================= */

.timeline{

max-width:700px;

margin:auto;

display:flex;

flex-direction:column;

gap:25px;

}


.timeline-item{

padding:25px;

background:rgba(255,255,255,.3);

border-radius:20px;

cursor:pointer;

font-size:22px;

text-align:center;

transition:.4s;
color:#6b1130;

}


.timeline-item:hover{

transform:scale(1.03);

background:rgba(255,255,255,.5);

}


.recuerdo{

margin-top:40px;

text-align:center;

}


/* ================= FRASES ================= */

#frases{

font-size:28px;

text-align:center;

min-height:100px;

}


/* ================= MENSAJE SECRETO ================= */

#mensajeSecreto{

display:none;

font-size:28px;

line-height:2;

text-align:center;

}


/* ================= RESPONSIVE ================= */

@media(max-width:768px){

.title{

font-size:40px;

}

.card{

font-size:18px;

padding:30px;

}

.letter h1{

font-size:42px;

}

}
  /* ================= GALERÍA ================= */

.gallery{

display:grid;
grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
gap:25px;
max-width:1000px;
margin:auto;

}

.photo-card{

overflow:hidden;
border-radius:25px;

background:rgba(255,255,255,.15);

backdrop-filter:blur(12px);

box-shadow:
0 15px 35px rgba(0,0,0,.15);

transition:.5s;

}

.photo-card:hover{

transform:translateY(-8px);

}

.photo-card img{

width:100%;
height:320px;
object-fit:cover;
display:block;

}


/* ================= CAJAS SORPRESA ================= */

.gift-container{

display:flex;
justify-content:center;
flex-wrap:wrap;
gap:30px;

}

.gift-box{

width:120px;
height:120px;

display:flex;
justify-content:center;
align-items:center;

font-size:50px;

border-radius:25px;

cursor:pointer;

background:rgba(255,255,255,.3);

backdrop-filter:blur(15px);

transition:.4s;

box-shadow:
0 15px 35px rgba(0,0,0,.15);

}

.gift-box:hover{

transform:scale(1.1);

}


/* ================= BOTÓN SECRETO ================= */

.secret-btn{

padding:18px 35px;

border:none;

border-radius:50px;

cursor:pointer;

font-size:20px;

background:#ff4f81;

color:white;

transition:.4s;

}

.secret-btn:hover{

transform:scale(1.08);

}


/* ================= FINAL ================= */

.final-section{

padding-bottom:180px;

}

.final-title{

text-align:center;

font-size:60px;

font-family:'Great Vibes',cursive;

margin-bottom:40px;

}


/* ================= CORAZONES ================= */

.heart{

position:fixed;

bottom:-50px;

pointer-events:none;

z-index:1;

animation:subir 8s linear forwards;

}

@keyframes subir{

0%{

transform:
translateY(0)
rotate(0deg);

opacity:1;

}

100%{

transform:
translateY(-120vh)
rotate(360deg);

opacity:0;

}

}


/* ================= YOUTUBE OCULTO ================= */

#youtube-player{

position:fixed;
left:-9999px;

}


/* ================= SCROLLBAR ================= */

::-webkit-scrollbar{

width:10px;

}

::-webkit-scrollbar-track{

background:#ffd6e7;

}

::-webkit-scrollbar-thumb{

background:#ff4f81;
border-radius:20px;

}


/* ================= EFECTO APARICIÓN ================= */

.card,
.timeline-item,
.photo-card,
.gift-box{

animation:fadeIn 1.2s ease;

}

@keyframes fadeIn{

from{

opacity:0;
transform:translateY(40px);

}

to{

opacity:1;
transform:translateY(0);

}

}


/* ================= RESPONSIVE EXTRA ================= */

@media(max-width:768px){

.final-title{

font-size:45px;

}

.gift-box{

width:100px;
height:100px;

font-size:40px;

}

.photo-card img{

height:260px;

}

}
</style>
</head>
<body>

<!-- ESTRELLAS -->
<div class="stars"></div>

<!-- CORAZONES -->
<div id="heart-container"></div>


<!-- ================= HERO ================= -->

<section class="hero">

    <div class="envelope">

        <div class="letter">

            <span class="mini">💌 Carta Especial</span>

            <h3>Para:</h3>
            <h1>Rebeca ❤️</h1>

            <br>

            <h3>De:</h3>
            <h2>Paul ❤️</h2>

            <!-- Al hacer clic aquí se abrirá la sección y se reproducirá la música -->
            <button class="open-btn" onclick="abrirCarta()">

                Abrir Carta ✨

            </button>

        </div>

    </div>

</section>


<!-- ================= INTRO ================= -->

<section class="section" id="intro">

    <h2 class="title">
        🌹 Una sorpresa para ti 🌹
    </h2>

    <div class="card">

        <p>

        Mi princesa hermosa ❤️

        <br><br>

        Preparé esta página con mucho amor para recordarte lo importante que eres para mí.

        <br><br>

        Quiero que cada sección sea como abrir un pequeño regalo lleno de recuerdos, sentimientos y palabras sinceras.

        <br><br>

        Gracias por existir, gracias por tu amor y gracias por permitirme compartir mi vida contigo.

        <br><br>

        ✨ Te amo muchísimo ✨

        </p>

    </div>

</section>


<!-- ================= CUMPLEAÑOS ================= -->

<section class="section">

    <h2 class="title">
        🎂 Felices 22 años 🎂
    </h2>

    <div class="card">

        <p>

        Hoy celebro la vida de una mujer maravillosa.

        <br><br>

        Deseo que Jehová te bendiga siempre y que todos tus sueños se hagan realidad.

        <br><br>

        Gracias por ser una persona tan hermosa por dentro y por fuera.

        <br><br>

        ❤️ Estoy orgulloso de ti ❤️

        </p>

    </div>

</section>


<!-- ================= CONTADOR ================= -->

<section class="section">

    <h2 class="title">
        ⏳ Nuestro tiempo juntos ⏳
    </h2>

    <div class="card contador-card">

        <div id="contador">

            Cargando...

        </div>

    </div>

</section>


<!-- ================= MAPA DEL AMOR ================= -->

<section class="section">

<h2 class="title">
🗺️ Nuestro mapa del amor ❤️
</h2>

<div class="timeline">

    <div class="timeline-item"
    onclick="abrirRecuerdo(1)">

        ❤️ Nos conocimos

    </div>

    <div class="timeline-item"
    onclick="abrirRecuerdo(2)">

        🌷 Primeras conversaciones

    </div>

    <div class="timeline-item"
    onclick="abrirRecuerdo(3)">

        🥰 Primer "Te Amo"

    </div>

    <div class="timeline-item"
    onclick="abrirRecuerdo(4)">

        💍 Nuestro futuro juntos

    </div>

</div>

<div class="card recuerdo"
id="recuerdoTexto">

Presiona un recuerdo ❤️

</div>

</section>
<!-- ================= GALERÍA ================= -->

<section class="section">

    <h2 class="title">
        📸 Nuestros recuerdos 📸
    </h2>

    <div class="gallery">

        <!-- CAMBIA ESTAS IMÁGENES POR LAS TUYAS -->

        <div class="photo-card">
            <img src="foto1.jpg">
        </div>

        <div class="photo-card">
            <img src="foto2.jpg">
        </div>

        <div class="photo-card">
            <img src="foto3.jpg">
        </div>

        <div class="photo-card">
            <img src="foto4.jpg">
        </div>

    </div>

</section>


<!-- ================= CARTA ================= -->

<section class="section">

    <h2 class="title">
        💌 Una carta para ti 💌
    </h2>

    <div class="card">

        <p>

        Muy buenos días mi princesa hermosa ❤️

        <br><br>

        Espero que hayas descansado bien y que hoy tengas un día lleno de alegría.

        <br><br>

        Quería recordarte cuánto te amo y cuánto agradezco tenerte en mi vida.

        <br><br>

        Gracias por tu paciencia, por tus consejos, por tus risas y por cada momento hermoso que hemos compartido.

        <br><br>

        Verte cumplir 22 años me hace sentir muy orgulloso de la gran mujer en la que te has convertido.

        <br><br>

        Eres una bendición para mí.

        <br><br>

        ❤️ Te amo muchísimo ❤️

        </p>

    </div>

</section>


<!-- ================= SORPRESAS ================= -->

<section class="section">

<h2 class="title">
🎁 Cajas sorpresa 🎁
</h2>

<div class="gift-container">

    <div class="gift-box"
    onclick="abrirCaja(1)">
        ❤️
    </div>

    <div class="gift-box"
    onclick="abrirCaja(2)">
        🌹
    </div>

    <div class="gift-box"
    onclick="abrirCaja(3)">
        ✨
    </div>

</div>

<div class="card"
id="mensajeCaja">

Presiona una cajita 🎁

</div>

</section>


<!-- ================= FRASES ================= -->

<section class="section">

<h2 class="title">
🌷 Algunas cosas que pienso de ti 🌷
</h2>

<div class="card">

    <div id="frases">

        ❤️ Eres una bendición en mi vida.

    </div>

</div>

</section>


<!-- ================= BOTÓN SECRETO ================= -->

<section class="section">

<h2 class="title">
❤️ Tengo algo más para ti ❤️
</h2>

<div class="card">

<p>

Si alguna vez dudas de cuánto te amo...

</p>

<br>

<button class="secret-btn"
onclick="mostrarMensaje()">

Presióname ❤️

</button>

<div id="mensajeSecreto">

<br><br>

👑 Eres mi princesa hermosa.

<br><br>

🌷 Gracias por existir.

<br><br>

❤️ Te amo más de lo que las palabras pueden explicar.

</div>

</div>

</section>


<!-- ================= FINAL ================= -->

<section class="section final-section">

<h1 class="final-title">

🌙 Bajo las estrellas ✨

</h1>

<div class="card">

<h2>

Rebeca ❤️

</h2>

<br>

<p>

Gracias por llegar a mi vida.

<br><br>

Gracias por todos los recuerdos que hemos creado juntos.

<br><br>

Gracias por permitirme amarte.

<br><br>

Espero seguir construyendo muchos sueños contigo.

<br><br>

✨ Para siempre tú ✨

<br><br>

❤️ Con amor, Paul ❤️

</p>

</div>

</section>



<!-- YOUTUBE -->
<div id="youtube-player"></div>


<script src="https://www.youtube.com/iframe_api"></script>

<script>
let player;

function onYouTubeIframeAPIReady(){

player = new YT.Player('youtube-player',{

height:'0',
width:'0',

videoId:'a3hOeU7w59o',

playerVars:{
autoplay:0, // Cambiado a 0 inicialmente para controlarlo por el botón
loop:1,
playlist:'a3hOeU7w59o'
}

});

}

// Nueva función que se activa al abrir la carta
function abrirCarta(){
    document.getElementById('intro').scrollIntoView();
    if(player && typeof player.playVideo === 'function') {
        player.playVideo(); // Inicia la música cuando ella hace interacción
    }
}
</script>
<script>

/* ================= CONTADOR ================= */

function actualizarContador(){

const fechaInicio = new Date("2021-07-15");
const ahora = new Date();

let diferencia = ahora - fechaInicio;

let dias = Math.floor(diferencia / (1000*60*60*24));

let años = Math.floor(dias / 365);
let meses = Math.floor((dias % 365)/30);
let diasRestantes = (dias % 365)%30;

document.getElementById("contador").innerHTML = `

❤️ ${años} años <br>
🌷 ${meses} meses <br>
🥹 ${diasRestantes} días <br><br>

💕 Más de ${dias} días amándote

`;

}

actualizarContador();


/* ================= MAPA DEL AMOR ================= */

function abrirRecuerdo(numero){

const caja = document.getElementById("recuerdoTexto");

if(numero === 1){

caja.innerHTML = `
❤️ Ese día comenzó una historia hermosa entre nosotros.
`;

}

if(numero === 2){

caja.innerHTML = `
🌷 Poco a poco nuestras conversaciones se volvieron especiales.
`;

}

if(numero === 3){

caja.innerHTML = `
🥰 Aquel "Te amo" siempre ocupará un lugar especial en mi corazón.
`;

}

if(numero === 4){

caja.innerHTML = `
💍 Sueño con seguir construyendo un futuro hermoso contigo.
`;

}

}


/* ================= CAJAS SORPRESA ================= */

function abrirCaja(numero){

const mensaje = document.getElementById("mensajeCaja");

if(numero === 1){

mensaje.innerHTML = `
❤️ Gracias por existir.
`;

}

if(numero === 2){

mensaje.innerHTML = `
🌹 Eres una bendición en mi vida.
`;

}

if(numero === 3){

mensaje.innerHTML = `
✨ Me enamoro más de ti cada día.
`;

}

}


/* ================= BOTÓN SECRETO ================= */

function mostrarMensaje(){

document.getElementById("mensajeSecreto").style.display = "block";

}


/* ================= FRASES ================= */

const frases = [

"❤️ Eres una bendición en mi vida.",
"🌷 Gracias por tu amor.",
"🥹 Gracias por tu paciencia.",
"💕 Tu sonrisa alegra mis días.",
"👑 Eres mi princesa hermosa.",
"🙏 Jehová te bendiga siempre.",
"❤️ Me enamoro más de ti cada día.",
"🌹 Gracias por existir."

];

let indice = 0;

setInterval(() => {

indice++;

if(indice >= frases.length){

indice = 0;

}

document.getElementById("frases").innerHTML =
frases[indice];

},4000);


/* ================= CORAZONES ================= */

function crearCorazon(){

const corazon = document.createElement("div");

corazon.classList.add("heart");

corazon.innerHTML = "❤️";

corazon.style.left = Math.random()*100 + "vw";

corazon.style.fontSize =
(20 + Math.random()*30) + "px";

document.body.appendChild(corazon);

setTimeout(() => {

corazon.remove();

},8000);

}

setInterval(crearCorazon,300);

</script>

</body>
</html>
