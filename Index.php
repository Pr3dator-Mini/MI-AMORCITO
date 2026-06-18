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

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Segoe UI',sans-serif;
}

html{
scroll-behavior:smooth;
}

body{
background:linear-gradient(135deg,#ffb6c1,#ffd6e7,#e8d5ff);
overflow-x:hidden;
color:white;
}

/* Corazones flotando */

.heart{
position:fixed;
bottom:-50px;
font-size:25px;
animation:subir 8s linear infinite;
pointer-events:none;
z-index:0;
}

@keyframes subir{

0%{
transform:translateY(0);
opacity:1;
}

100%{
transform:translateY(-120vh);
opacity:0;
}

}

/* Portada */

.hero{

min-height:100vh;
display:flex;
flex-direction:column;
justify-content:center;
align-items:center;
padding:30px;
text-align:center;
position:relative;
z-index:2;

}

.hero h1{

font-size:60px;
margin-bottom:20px;
text-shadow:0 0 20px rgba(255,255,255,.4);

}

.hero h2{

font-size:30px;
font-weight:300;
margin-bottom:25px;

}

.hero p{

max-width:800px;
font-size:20px;
line-height:1.9;

}

.boton{

margin-top:40px;
padding:18px 35px;
border:none;
border-radius:50px;
background:white;
color:#ff4f81;
font-size:20px;
cursor:pointer;
transition:.4s;

}

.boton:hover{

transform:scale(1.08);

}

/* Secciones */

.seccion{

padding:100px 25px;
text-align:center;

}

.titulo{

font-size:50px;
margin-bottom:40px;

}

.tarjeta{

max-width:950px;
margin:auto;
padding:40px;
border-radius:30px;
background:rgba(255,255,255,.15);
backdrop-filter:blur(12px);
line-height:2;
font-size:20px;

}

</style>
</head>

<body>

<audio autoplay loop>
<source src="Miranda! - Perfecta (Video Oficial).mp3" type="audio/mpeg">
</audio>

<div class="hero">

<h1>❤️ Para mi princesa Rebeca ❤️</h1>

<h2>🌷 Tengo algo especial para ti 🌷</h2>

<p>

Desde el fondo de mi corazón preparé esta pequeña sorpresa para recordarte cuánto te amo, cuánto significas para mí y lo feliz que me hace tenerte en mi vida. ❤️🥹

</p>

<button class="boton"
onclick="document.getElementById('carta').scrollIntoView()">

✨ Abrir mi sorpresa ✨

</button>

</div>
<!-- ================= CARTA ================= -->

<section class="seccion" id="carta">

<h1 class="titulo">💌 Una carta para ti 💌</h1>

<div class="tarjeta">

<p>

Muy buenos días, mi niña linda ❤️🌷

<br><br>

Espero que hayas descansado bien 😴💖 y que hoy te despiertes con una gran sonrisa 😊✨, porque te mereces comenzar cada día siendo feliz 🌞💞.

<br><br>

Quería escribirte desde temprano 🌅 para recordarte lo mucho que te amo ❤️🥰 y lo agradecido que me siento por tenerte en mi vida 🙏🏻💝.

<br><br>

Magine mi mocito linda 💕🥹, todavía me emociona pensar en todo lo que hemos vivido juntos 🫶🏻❤️ y en lo especial que eres para mí ✨💖.

<br><br>

Verte cumplir 22 años 🎂🎉 me hace sentir orgulloso de la gran mujer en la que te has convertido 🌹🥰.

<br><br>

Eres una persona increíble 💫, con un corazón hermoso ❤️, y cada día encuentro nuevas razones para admirarte 😍 y enamorarme más de ti 💘.

<br><br>

Gracias por tu amor ❤️, por tu paciencia 🤗, por tus consejos 🌷, por tus risas 😄💕 y por todos esos pequeños momentos que para mí significan muchísimo 🥹💖.

<br><br>

Contigo he aprendido que el amor se demuestra en los detalles 🌹, en el apoyo 🤝🏻❤️ y en estar presentes el uno para el otro 🫂💞.

<br><br>

Y aunque quizás no te lo diga todos los días de la manera en que debería 🥹❤️, quiero que nunca dudes de lo importante que eres para mí 💖✨.

<br><br>

Eres mi novia 💕, mi compañera 🫶🏻, mi princesa hermosa 👑❤️ y una de las mayores bendiciones que tengo 🙏🏻🥰.

<br><br>

Te amo muchísimo, mi princesa hermosa. ❤️✨👑💕

</p>

</div>

</section>


<!-- ================= CUMPLEAÑOS ================= -->

<section class="seccion">

<h1 class="titulo">🎂 ¡Felices 22 años! 🎂</h1>

<div class="tarjeta">

<h2 style="margin-bottom:25px;">
🌷 Ya 22 añitos, qué bendición tan hermosa 🌷
</h2>

<p>

Hoy celebro tu vida con muchísima alegría ❤️🥹.

<br><br>

Gracias por existir, por ser la mujer maravillosa que eres y por permitirme compartir contigo tantos momentos bonitos.

<br><br>

Deseo que todos tus sueños se hagan realidad ✨🌷, que nunca te falten motivos para sonreír 😊💕 y que cada nuevo año de vida esté lleno de amor, paz y felicidad.

<br><br>

Estoy muy orgulloso de ti y de todo lo que has logrado. ❤️

</p>

</div>

</section>


<!-- ================= JEHOVÁ ================= -->

<section class="seccion">

<h1 class="titulo">🙏 Una oración para ti 🙏</h1>

<div class="tarjeta">

<p>

Deseo de todo corazón ❤️🙏🏻 que Jehová te bendiga, te cuide 🕊️❤️ y te conceda muchos momentos bonitos 🌸😊.

<br><br>

Que te ayude a cumplir tus metas 🌷✨, que te regale salud, alegría y que siempre puedas sentir su amor y protección.

<br><br>

Quiero verte cumplir muchos sueños 🌟💫, seguir creciendo 🌷 y seguir sonriendo como solo tú sabes hacerlo 😊💕

</p>

</div>

</section>
<!-- ================= TIEMPO JUNTOS ================= -->

<section class="seccion">

<h1 class="titulo">❤️ Nuestro Amor Desde 15 de Julio de 2021 ❤️</h1>

<div class="tarjeta">

<h2 style="margin-bottom:25px;">
⏳ Todo este tiempo a tu lado ha sido una bendición ⏳
</h2>

<div id="contador"
style="
font-size:32px;
line-height:2;
font-weight:bold;
">

Cargando...

</div>

</div>

</section>


<!-- ================= BOTÓN SECRETO ================= -->

<section class="seccion">

<h1 class="titulo">🎁 Tengo algo más para ti 🎁</h1>

<div class="tarjeta">

<p>

Si alguna vez dudas de cuánto te amo, presiona este botón ❤️🥹

</p>

<br>

<button class="boton" onclick="mostrarMensaje()">

❤️ Presióname ❤️

</button>

<div id="mensajeSecreto"
style="
display:none;
margin-top:40px;
font-size:30px;
line-height:2;
">

💕 Te amo más de lo que las palabras pueden explicar 💕

<br><br>

👑 Eres mi princesa hermosa.

<br><br>

🌷 Gracias por existir.

</div>

</div>

</section>


<!-- ================= FRASES QUE CAMBIAN ================= -->

<section class="seccion">

<h1 class="titulo">🌹 Algunas cosas que pienso de ti 🌹</h1>

<div class="tarjeta">

<div id="frases"
style="
font-size:28px;
line-height:2;
min-height:100px;
">

❤️ Eres una bendición en mi vida.

</div>

</div>

</section>


<!-- ================= MENSAJE FINAL ================= -->

<section class="seccion">

<h1 class="titulo">👑 Para siempre tú 👑</h1>

<div class="tarjeta">

<p>

Cuídate mocito 🌷💖.

<br><br>

Sonríe mucho 😊💕 y recuerda que aquí hay alguien que piensa en ti 💭❤️.

<br><br>

Alguien que te extraña cuando no está contigo 🥹💞.

<br><br>

Alguien que agradece a Jehová por tu vida 🙏🏻❤️.

<br><br>

Y alguien que te ama con todo su corazón ❤️🥰.

<br><br><br>

❤️✨ Te amo muchísimo, mi princesa hermosa. ✨❤️

</p>

</div>

</section>
<!-- ================= CIELO ESTRELLADO ================= -->

<section class="seccion" style="padding-bottom:150px;">

<h1 class="titulo">🌙 Bajo las estrellas ✨</h1>

<div class="tarjeta">

<h2 style="margin-bottom:25px;">
❤️ Rebeca ❤️
</h2>

<p style="line-height:2;">

Gracias por estar en mi vida. 🌷

<br><br>

Eres una de las mayores bendiciones que Jehová me ha regalado. 🙏🏻❤️

<br><br>

Espero seguir creando muchos recuerdos hermosos contigo. 🥹💕

<br><br>

🎂 Felices 22 años, mi princesa hermosa 👑❤️

</p>

</div>

</section>

<script>

/* ================= CONTADOR ================= */

function actualizarContador(){

const fechaInicio = new Date("2021-07-15");
const ahora = new Date();

let diferencia = ahora - fechaInicio;

let dias = Math.floor(diferencia / (1000*60*60*24));
let años = Math.floor(dias / 365);
let meses = Math.floor((dias % 365) / 30);
let diasRestantes = (dias % 365) % 30;

document.getElementById("contador").innerHTML = `
❤️ ${años} años<br>
🌷 ${meses} meses<br>
💕 ${diasRestantes} días<br>
🥹 Más de ${dias} días amándote
`;

}

actualizarContador();


/* ================= BOTÓN SECRETO ================= */

function mostrarMensaje(){

document.getElementById("mensajeSecreto").style.display = "block";

}


/* ================= FRASES ROMÁNTICAS ================= */

const listaFrases = [

"❤️ Eres una bendición en mi vida.",
"🌷 Gracias por tu amor.",
"🥹 Gracias por tu paciencia.",
"💕 Tu sonrisa alegra mis días.",
"👑 Eres mi princesa hermosa.",
"🙏🏻 Jehová te bendiga siempre.",
"❤️ Me enamoro más de ti cada día.",
"🌹 Gracias por existir."

];

let indice = 0;

setInterval(() => {

indice++;

if(indice >= listaFrases.length){
indice = 0;
}

document.getElementById("frases").innerHTML = listaFrases[indice];

}, 4000);


/* ================= CORAZONES FLOTANDO ================= */

function crearCorazon(){

const corazon = document.createElement("div");

corazon.classList.add("heart");

corazon.innerHTML = "❤️";

corazon.style.left = Math.random() * 100 + "vw";

corazon.style.fontSize = (20 + Math.random() * 30) + "px";

document.body.appendChild(corazon);

setTimeout(() => {
corazon.remove();
}, 8000);

}

setInterval(crearCorazon, 300);

</script>

</body>
</html>
