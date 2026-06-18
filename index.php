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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

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
    background: linear-gradient(135deg,#ff9ec7,#ffd6e7,#e8d7ff);
    overflow-x:hidden;
    color:#6b1130; 
    position:relative;
}

/* ================= INTRO OSCURA Y FUEGOS ARTIFICIALES REALISTAS ================= */
#intro-oscura {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #0a050d;
    z-index: 5;
    transition: opacity 1.2s cubic-bezier(0.4, 0, 0.2, 1), transform 1.2s ease;
    pointer-events: all;
}

/* Cuando se abre la carta, se desvanece por completo */
.pagina-activa #intro-oscura {
    opacity: 0;
    pointer-events: none;
    transform: scale(1.05);
}

#fireworksCanvas {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 6;
    pointer-events: none;
}

/* ================= ESTRELLAS DE FONDO ================= */
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

/* ================= LÍNEA DE MAPA NEÓN DINÁMICA ================= */
.map-progress-container {
    position: fixed;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 6px;
    height: 100vh;
    z-index: 1;
    pointer-events: none;
}

.map-line-bg {
    width: 100%;
    height: 100%;
    background: rgba(255, 255, 255, 0.25);
    position: absolute;
    top: 0;
    left: 0;
    border-radius: 10px;
}

.map-line-fill {
    width: 100%;
    height: 0%; 
    background: linear-gradient(to bottom, #ff4f81, #6b1130);
    position: absolute;
    top: 0;
    left: 0;
    border-radius: 10px;
    box-shadow: 0 0 15px #ff4f81, 0 0 30px #ff7ca8;
    transition: height 0.1s ease-out;
}

/* ================= HERO (SOBRE FLOTANDO EN LA INTRO) ================= */
.hero{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    padding:30px;
    position: relative;
    z-index: 10; /* Por encima de la capa oscura para que sea clickeable */
}

.envelope {
    background: #fffdf6; 
    padding: 40px 30px;
    width: 100%;
    max-width: 420px;
    border-radius: 4px;
    box-shadow: 
        0 0 0 8px #fffdf6, 
        0 0 0 12px #ff4f81, 
        0 0 30px rgba(255, 79, 129, 0.6),
        0 20px 50px rgba(0,0,0,0.5); 
    color: #4a3b32;
    animation: flotar 3s ease-in-out infinite;
    text-align: center;
    position: relative;
    border: 1px dashed #ff7ca8;
}

@keyframes flotar{
    50%{ transform:translateY(-12px); }
}

.letter-header {
    border-bottom: 2px double #e0dacf;
    padding-bottom: 15px;
    margin-bottom: 25px;
}

.letter h1 {
    font-size: 45px;
    font-family: 'Great Vibes', cursive;
    color: #ff4f81;
    margin-top: 5px;
    text-shadow: 0 0 10px rgba(255, 79, 129, 0.3);
}

.letter h2 {
    font-size: 38px;
    font-family: 'Great Vibes', cursive;
    color: #6b1130;
    margin-top: 5px;
}

.letter h3 {
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 2px;
    color: #8c7b70;
    font-weight: 600;
}

.mini {
    font-size: 13px;
    color: #ff4f81;
    font-weight: 600;
    letter-spacing: 1px;
    display: block;
    margin-bottom: 15px;
}

.open-btn{
    margin-top: 25px;
    border: none;
    padding: 15px 35px;
    border-radius: 50px;
    cursor: pointer;
    font-size: 16px;
    font-weight: 500;
    background: #ff4f81;
    color: white;
    transition: .4s;
    box-shadow: 0 0 15px rgba(255, 79, 129, 0.6);
}

.open-btn:hover{
    transform: scale(1.05);
    background: #e63668;
    box-shadow: 0 0 25px rgba(255, 79, 129, 0.9);
}

/* ================= SECCIONES CON DISEÑO ASIMÉTRICO NEÓN LIMPIO ================= */
.section {
    padding: 120px 25px;
    position: relative;
    z-index: 2;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.title {
    font-size: 50px;
    text-align: center;
    margin-bottom: 30px;
    font-family: 'Great Vibes', cursive;
    color: #6b1130;
    text-shadow: 0 0 15px rgba(255, 255, 255, 0.7);
}

.card {
    max-width: 850px;
    width: 100%;
    margin: auto;
    padding: 50px 40px;
    background: rgba(255, 255, 255, 0.55); 
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    line-height: 2;
    font-size: 20px;
    box-shadow: 0 15px 35px rgba(107, 17, 48, 0.05), 0 0 25px rgba(255, 255, 255, 0.3);
    border: 1px solid rgba(255, 255, 255, 0.6);
    border-radius: 50px 20px 80px 40px;
    position: relative;
}

.section:nth-child(even) .card {
    border-radius: 30px 90px 40px 70px;
}

/* ================= CONTADOR MEJORADO ================= */
.contador-card {
    text-align: center;
}

.live-counter-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
    gap: 15px;
    margin-top: 15px;
}

.counter-box {
    background: rgba(255, 255, 255, 0.5);
    padding: 15px 10px;
    border-radius: 20px;
    border: 1px solid rgba(255,255,255,0.7);
    box-shadow: 0 5px 15px rgba(0,0,0,0.01);
}

.counter-box span {
    display: block;
    font-size: 30px;
    font-weight: 700;
    color: #ff4f81;
    line-height: 1.2;
    text-shadow: 0 0 10px rgba(255, 79, 129, 0.2);
}

.counter-box label {
    font-size: 13px;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 500;
    color: #6b1130;
}

.counter-footer {
    margin-top: 25px;
    font-weight: 600;
    font-size: 22px;
    color: #6b1130;
    display: inline-block;
    border-top: 2px dashed rgba(255, 79, 129, 0.3);
    padding-top: 15px;
    width: 100%;
}

/* ================= MAPA DEL AMOR ================= */
.timeline {
    max-width: 700px;
    width: 100%;
    margin: auto;
    display: flex;
    flex-direction: column;
    gap: 25px;
}

.timeline-item {
    padding: 25px;
    background: rgba(255, 255, 255, 0.5);
    border-radius: 40px 15px 40px 15px;
    cursor: pointer;
    font-size: 22px;
    text-align: center;
    transition: .4s;
    color: #6b1130;
    border: 1px solid rgba(255, 255, 255, 0.6);
}

.timeline-item:hover {
    transform: translateY(-5px);
    background: rgba(255, 255, 255, 0.8);
    box-shadow: 0 10px 25px rgba(255, 79, 129, 0.15);
}

.recuerdo {
    margin-top: 40px;
    text-align: center;
    border-radius: 20px 60px 20px 60px;
}

/* ================= FRASES ================= */
#frases {
    font-size: 28px;
    text-align: center;
    min-height: 80px;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* ================= MENSAJE SECRETO ================= */
#mensajeSecreto {
    display: none;
    font-size: 26px;
    line-height: 2;
    text-align: center;
    animation: fadeIn 0.8s ease forwards;
}

/* ================= CAJAS SORPRESA ================= */
.gift-container {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 30px;
}

.gift-box {
    width: 110px;
    height: 110px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 45px;
    border-radius: 30px 10px 30px 10px;
    cursor: pointer;
    background: rgba(255, 255, 255, 0.5);
    backdrop-filter: blur(15px);
    transition: .4s;
    border: 1px solid rgba(255, 255, 255, 0.6);
}

.gift-box:hover {
    transform: scale(1.1) rotate(5deg);
    background: rgba(255, 255, 255, 0.8);
    box-shadow: 0 0 20px rgba(255, 79, 129, 0.2);
}

/* ================= BOTÓN SECRETO ================= */
.secret-btn {
    padding: 18px 35px;
    border: none;
    border-radius: 50px;
    cursor: pointer;
    font-size: 20px;
    background: #ff4f81;
    color: white;
    transition: .4s;
    box-shadow: 0 5px 15px rgba(255, 79, 129, 0.3);
}

.secret-btn:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 25px rgba(255, 79, 129, 0.5);
}

/* ================= FINAL ================= */
.final-section {
    padding-bottom: 180px;
}

.final-title {
    text-align: center;
    font-size: 60px;
    font-family: 'Great Vibes', cursive;
    margin-bottom: 40px;
}

/* ================= CORAZONES SIEMPRE ACTIVOS ================= */
.heart {
    position: fixed;
    bottom: -50px;
    pointer-events: none;
    z-index: 1; /* Por detrás de las tarjetas y la intro */
    animation: subir 8s linear forwards;
}

@keyframes subir {
    0% { transform: translateY(0) rotate(0deg); opacity: 0.8; }
    100% { transform: translateY(-120vh) rotate(360deg); opacity: 0; }
}

/* ================= YOUTUBE OCULTO ORIGINAL ================= */
#youtube-player {
    position: fixed;
    left: -9999px;
}

/* ================= SCROLLBAR ================= */
::-webkit-scrollbar { width: 10px; }
::-webkit-scrollbar-track { background: #ffd6e7; }
::-webkit-scrollbar-thumb { background: #ff4f81; border-radius: 20px; }

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(15px); }
    to { opacity: 1; transform: translateY(0); }
}

/* ================= RESPONSIVE ================= */
@media(max-width:768px){
    .title { font-size: 38px; }
    .card { font-size: 18px; padding: 35px 25px; }
    .final-title { font-size: 45px; }
    .gift-box { width: 90px; height: 90px; font-size: 35px; }
    .map-progress-container { left: 15px; transform: none; width: 4px; }
}
</style>
</head>
<body>

<!-- CAPA OSCURA DE INTRO CON CANVAS PROPIO -->
<div id="intro-oscura">
    <canvas id="fireworksCanvas"></canvas>
</div>

<!-- REPRODUCTOR ORIGINAL DE YOUTUBE OCULTO -->
<div id="youtube-player"></div>

<!-- ESTRELLAS Y CAPA DE CORAZONES (Siempre activos al fondo) -->
<div class="stars"></div>

<!-- LÍNEA CONECTORA DE MAPA NEÓN -->
<div class="map-progress-container">
    <div class="map-line-bg"></div>
    <div class="map-line-fill" id="mapLine"></div>
</div>

<!-- ================= HERO ================= -->
<section class="hero">

    <div class="envelope">
        <div class="letter">
            <span class="mini"><i class="fa-solid fa-heart-envelope"></i> CARTA DE AMOR</span>
            
            <div class="letter-header">
                <h3>Para:</h3>
                <h1>Rebeca ❤️</h1>
            </div>

            <div class="letter-header" style="border:none; margin-bottom:10px;">
                <h3>De:</h3>
                <h2>Paul ❤️</h2>
            </div>

            <button class="open-btn" onclick="abrirCarta()">
                Abrir Carta ✨
            </button>
        </div>
    </div>

</section>

<!-- ================= INTRO CONTENIDO ================= -->
<section class="section" id="intro">

    <h2 class="title">
        🌹 Una sorpresa para ti 🌹
    </h2>

    <div class="card">
        <p style="text-align: center;">
        Mi princesa hermosa ❤️
        <br><br>
        Preparé esta página con mucho amor para recordarte lo importante que eres para mí.
        <br><br>
        Quiero que cada sección sea como abrir un pequeño regalo lleno de recuerdos, sentimientos y palabras sinceras.
        <br><br>
        Gracias por existir, gracias por tu amor y gracias por permitirme compartir mi vida contigo.
        <br><br>
        <strong>✨ Te amo muchísimo ✨</strong>
        </p>
    </div>

</section>

<!-- ================= CUMPLEAÑOS ================= -->
<section class="section">

    <h2 class="title">
        🎂 Felices 22 años 🎂
    </h2>

    <div class="card">
        <p style="text-align: center;">
        Hoy celebro la vida de una mujer maravillosa.
        <br><br>
        Deseo que Jehová te bendiga siempre y que todos tus sueños se hagan realidad.
        <br><br>
        Gracias por ser una persona tan hermosa por dentro y por fuera.
        <br><br>
        <strong>❤️ Estoy orgulloso de ti ❤️</strong>
        </p>
    </div>

</section>

<!-- ================= CONTADOR EN TIEMPO REAL AL SEGUNDO ================= -->
<section class="section">

    <h2 class="title">
        ⏳ Nuestro tiempo juntos ⏳
    </h2>

    <div class="card contador-card">
        
        <div class="live-counter-grid">
            <div class="counter-box"><span id="c-anos">0</span><label>Años</label></div>
            <div class="counter-box"><span id="c-meses">0</span><label>Meses</label></div>
            <div class="counter-box"><span id="c-dias">0</span><label>Días</label></div>
            <div class="counter-box"><span id="c-horas">0</span><label>Horas</label></div>
            <div class="counter-box"><span id="c-minutos">0</span><label>Minutos</label></div>
            <div class="counter-box"><span id="c-segundos">0</span><label>Segundos</label></div>
        </div>

        <div class="counter-footer" id="totalDiasText">
            💕 Cargando momentos hermosos...
        </div>

    </div>

</section>

<!-- ================= MAPA DEL AMOR ================= -->
<section class="section">

<h2 class="title">
🗺️ Nuestro mapa del amor ❤️
</h2>

<div class="timeline">
    <div class="timeline-item" onclick="abrirRecuerdo(1)">
        ❤️ Nos conocimos
    </div>
    <div class="timeline-item" onclick="abrirRecuerdo(2)">
        🌷 Primeras conversaciones
    </div>
    <div class="timeline-item" onclick="abrirRecuerdo(3)">
        🥰 Primer "Te Amo"
    </div>
    <div class="timeline-item" onclick="abrirRecuerdo(4)">
        💍 Nuestro futuro juntos
    </div>
</div>

<div class="card recuerdo" id="recuerdoTexto">
    Presiona un recuerdo en nuestro mapa ❤️
</div>

</section>

<!-- ================= SORPRESAS ================= -->
<section class="section">

<h2 class="title">
🎁 Cajas sorpresa 🎁
</h2>

<div class="gift-container">
    <div class="gift-box" onclick="abrirCaja(1)">❤️</div>
    <div class="gift-box" onclick="abrirCaja(2)">🌹</div>
    <div class="gift-box" onclick="abrirCaja(3)">✨</div>
</div>

<div class="card" id="mensajeCaja">
    Presiona una cajita 🎁
</div>

</section>

<!-- ================= FRASES PERIÓDICAS ================= -->
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

<div class="card" style="text-align: center;">
    <p>Si alguna vez dudas de cuánto te amo...</p>
    <br>
    <button class="secret-btn" onclick="mostrarMensaje()">
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

<div class="card" style="text-align: center;">
    <h2>Rebeca ❤️</h2>
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
    <strong>✨ Para siempre tú ✨</strong>
    <br><br>
    ❤️ Con amor, Paul ❤️
    </p>
</div>

</section>

<script src="https://www.youtube.com/iframe_api"></script>

<script>
/* ================= CONTROL DE MÚSICA ORIGINAL DE YOUTUBE ================= */
let player;
let fuegosActivos = true;

function onYouTubeIframeAPIReady(){
    player = new YT.Player('youtube-player',{
        height:'0',
        width:'0',
        videoId:'a3hOeU7w59o',
        playerVars:{
            autoplay:0, 
            loop:1,
            playlist:'a3hOeU7w59o'
        }
    });
}

function abrirCarta(){
    // Activamos la transición agregando la clase al body
    document.body.classList.add('pagina-activa');
    fuegosActivos = false; // Detiene el motor de fuegos artificiales para optimizar rendimiento
    
    // Scroll suave a la intro
    setTimeout(() => {
        document.getElementById('intro').scrollIntoView();
    }, 400);

    // Reproduce la música de YouTube
    if(player && typeof player.playVideo === 'function') {
        player.playVideo(); 
    }
}


/* ================= MOTOR PRO DE FUEGOS ARTIFICIALES ULTRA REALISTAS ================= */
const canvas = document.getElementById('fireworksCanvas');
const ctx = canvas.getContext('2d');

function resizeCanvas() {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
}
window.addEventListener('resize', resizeCanvas);
resizeCanvas();

class Particle {
    constructor(x, y, color, speedX, speedY) {
        this.x = x;
        this.y = y;
        this.color = color;
        this.radius = Math.random() * 2.5 + 1;
        this.velocity = { x: speedX, y: speedY };
        this.alpha = 1;
        this.decay = Math.random() * 0.012 + 0.008;
        this.gravity = 0.06; 
        this.friction = 0.98; // Resistencia al aire realista
    }

    draw() {
        ctx.save();
        ctx.globalAlpha = this.alpha;
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
        ctx.fillStyle = this.color;
        // Brillo neón real en las partículas
        ctx.shadowBlur = 12;
        ctx.shadowColor = this.color;
        ctx.fill();
        ctx.restore();
    }

    update() {
        this.velocity.x *= this.friction;
        this.velocity.y *= this.friction;
        this.velocity.y += this.gravity; 
        this.x += this.velocity.x;
        this.y += this.velocity.y;
        this.alpha -= this.decay;
    }
}

let particlesArray = [];

function launchFirework() {
    if (!fuegosActivos) return;

    const x = Math.random() * canvas.width;
    const y = Math.random() * (canvas.height * 0.5) + (canvas.height * 0.1);
    
    // Paleta Neón limpia de tus colores
    const colors = ['#ff4f81', '#ff1493', '#ff7ca8', '#e8d7ff', '#ffffb3', '#00ffff'];
    const randomColor = colors[Math.floor(Math.random() * colors.length)];

    const particleCount = Math.floor(Math.random() * 30) + 40;
    
    for (let i = 0; i < particleCount; i++) {
        const angle = Math.random() * Math.PI * 2;
        const speed = Math.random() * 7 + 2;
        const speedX = Math.cos(angle) * speed;
        const speedY = Math.sin(angle) * speed;
        
        particlesArray.push(new Particle(x, y, randomColor, speedX, speedY));
    }
}

function animateFireworks() {
    if (!fuegosActivos) {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        return;
    }
    
    // Rastro semi-transparente para dar efecto de estela de luz realista
    ctx.fillStyle = 'rgba(10, 5, 13, 0.15)';
    ctx.fillRect(0, 0, canvas.width, canvas.height);
    
    particlesArray = particlesArray.filter(p => p.alpha > 0);
    particlesArray.forEach(p => {
        p.update();
        p.draw();
    });

    requestAnimationFrame(animateFireworks);
}

// Iniciar fuegos artificiales inmediatos en la intro
animateFireworks();
setInterval(launchFirework, 700);


/* ================= DETECTAR SCROLL PARA LA LÍNEA DINÁMICA DEL MAPA ================= */
window.addEventListener('scroll', () => {
    const mapLine = document.getElementById('mapLine');
    const totalHeight = document.documentElement.scrollHeight - window.innerHeight;
    const progress = (window.pageYOffset / totalHeight) * 100;
    mapLine.style.height = `${progress}%`;
});


/* ================= CONTADOR ULTRA COMPLETO HASTA SEGUNDOS EN TIEMPO REAL ================= */
function actualizarContadorExacto(){
    const fechaInicio = new Date("2021-07-15T00:00:00");
    const ahora = new Date();
    
    let diffMili = ahora - fechaInicio;
    
    let totalSegundos = Math.floor(diffMili / 1000);
    let totalDias = Math.floor(totalSegundos / (60 * 60 * 24));
    
    let anos = ahora.getFullYear() - fechaInicio.getFullYear();
    let meses = ahora.getMonth() - fechaInicio.getMonth();
    let dias = ahora.getDate() - fechaInicio.getDate();
    
    if (dias < 0) {
        meses--;
        let ultimoDiaMesAnterior = new Date(ahora.getFullYear(), ahora.getMonth(), 0).getDate();
        dias += ultimoDiaMesAnterior;
    }
    if (meses < 0) {
        anos--;
        meses += 12;
    }
    
    let horas = ahora.getHours() - fechaInicio.getHours();
    let minutos = ahora.getMinutes() - fechaInicio.getMinutes();
    let segundos = ahora.getSeconds() - fechaInicio.getSeconds();
    
    if (segundos < 0) { segundos += 60; minutos--; }
    if (minutos < 0) { minutos += 60; horas--; }
    if (horas < 0) { horas += 24; dias--; }

    document.getElementById("c-anos").innerText = anos;
    document.getElementById("c-meses").innerText = meses;
    document.getElementById("c-dias").innerText = dias;
    document.getElementById("c-horas").innerText = horas < 10 ? '0' + horas : horas;
    document.getElementById("c-minutos").innerText = minutos < 10 ? '0' + minutos : minutos;
    document.getElementById("c-segundos").innerText = segundos < 10 ? '0' + segundos : segundos;
    
    document.getElementById("totalDiasText").innerHTML = `💕 Más de ${totalDias} días amándote al máximo`;
}

setInterval(actualizarContadorExacto, 1000);
actualizarContadorExacto();


/* ================= MAPA DEL AMOR ================= */
function abrirRecuerdo(numero){
    const caja = document.getElementById("recuerdoTexto");
    if(numero === 1){ caja.innerHTML = `❤️ Ese día comenzó una historia hermosa entre nosotros.`; }
    if(numero === 2){ caja.innerHTML = `🌷 Poco a poco nuestras conversaciones se volvieron especiales.`; }
    if(numero === 3){ caja.innerHTML = `🥰 Aquel "Te amo" siempre ocupará un lugar especial en mi corazón.`; }
    if(numero === 4){ caja.innerHTML = `💍 Sueño con seguir construyendo un futuro hermoso contigo.`; }
}


/* ================= CAJAS SORPRESA ================= */
function abrirCaja(numero){
    const mensaje = document.getElementById("mensajeCaja");
    if(numero === 1){ mensaje.innerHTML = `❤️ Gracias por existir.`; }
    if(numero === 2){ mensaje.innerHTML = `🌹 Eres una bendición en mi vida.`; }
    if(numero === 3){ mensaje.innerHTML = `✨ Me enamoro más de ti cada día.`; }
}


/* ================= BOTÓN SECRETO ================= */
function mostrarMensaje(){
    document.getElementById("mensajeSecreto").style.display = "block";
}


/* ================= FRASES DINÁMICAS ================= */
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
    if(indice >= frases.length){ indice = 0; }
    document.getElementById("frases").innerHTML = frases[indice];
}, 4000);


/* ================= CORAZONES SIEMPRE ACTIVOS AL FONDO ================= */
function crearCorazon(){
    const corazon = document.createElement("div");
    corazon.classList.add("heart");
    corazon.innerHTML = "❤️";
    corazon.style.left = Math.random()*100 + "vw";
    corazon.style.fontSize = (20 + Math.random()*30) + "px";
    document.body.appendChild(corazon);
    setTimeout(() => { corazon.remove(); }, 8000);
}
// Los corazones corren desde el inicio en segundo plano
setInterval(crearCorazon, 300);
</script>

</body>
</html>
