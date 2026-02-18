
<style>

body{
font-family:'Poppins',sans-serif;
background:#f4f6fb;
}

/* NAV TRANSPARENT */

.navbar{
position:absolute;
width:100%;
z-index:100;
}

.navbar .nav-link{color:white!important;opacity:.9}
.navbar .nav-link.active{
border-bottom:2px solid white;
}
.btn-cta{
background:linear-gradient(135deg,#ff9a4d,#ff6a2b);
border:none;
color:white;
border-radius:9px;
padding:8px 14px;
}
/* HERO */

.hero-about{
background:
linear-gradient(rgba(15,23,42,.88),rgba(15,23,42,.88)),
url("https://picsum.photos/1400/500?blur=2") center/cover;
color:white;
padding:110px 20px 80px;
text-align:center;
}

.hero-about h1{
font-weight:600;
}

.hero-about p{
opacity:.9;
max-width:750px;
margin:auto;
}

/* CARD PRINCIPAL */

.about-card{
background:white;
border-radius:20px;
padding:40px;
box-shadow:0 20px 45px rgba(0,0,0,.08);
margin-top:-60px;
}

/* TITLES */

.section-title{
font-weight:600;
margin-bottom:15px;
}

/* NOTICE STYLE */

.notice{
background:linear-gradient(135deg,#eef2ff,#ffffff);
border-radius:18px;
padding:28px;
border-left:6px solid #5c7cfa;
box-shadow:0 15px 35px rgba(0,0,0,.05);
}

/* FORM */

.suggestion-box{
background:white;
border-radius:18px;
padding:30px;
box-shadow:0 15px 35px rgba(0,0,0,.06);
}

.btn-main{
background:linear-gradient(135deg,#ff9a4d,#ff6a2b);
border:none;
color:white;
padding:12px 24px;
border-radius:10px;
font-weight:500;
}

.btn-main:hover{opacity:.9;color:white}

/* FOOTER */

footer{
margin-top:60px;
padding:20px;
text-align:center;
background:white;
border-top:1px solid #e5e7eb;
color:#6b7280;
font-size:14px;
}

</style>
</head>
<body>

<!-- HERO -->
<section class="hero-about">
<div class="container">
<h1>Conócenos</h1>
<p>Un proyecto creado para apoyar a los emprendedores locales y fortalecer la comunidad.</p>
</div>
</section>

<!-- CONTENIDO -->
<div class="container">

<!-- SOBRE EL PROYECTO -->
<div class="about-card">

<h4 class="section-title">Sobre el proyecto</h4>

<p>
Este proyecto nace con la intención de ayudar a ofrecer una mayor visibilidad a los emprendedores de la
<strong>Zona de Los Santos</strong>, brindándoles un espacio donde puedan mostrarse a sus futuros clientes
de forma <strong>gratuita y libre</strong>.
</p>

<p>
La iniciativa busca crecer conforme sea necesario, incorporando nuevas funciones,
mejorando su diseño y aumentando la interactividad para ofrecer una mejor experiencia
tanto a los emprendedores como a quienes buscan sus servicios.
</p>

<div class="notice mt-4">
<strong>Proyecto comunitario</strong><br>
Este espacio está pensado para apoyar a la comunidad y seguir evolucionando con sus necesidades.
</div>

</div>

<!-- SUGERENCIAS -->
<div class="suggestion-box mt-4">

<h5 class="section-title">¿Tienes una idea para mejorar este espacio?</h5>

<p class="text-muted">
Si piensas en algo que podría mejorar este sitio, puedes dejar tu comentario aquí abajo.
Tu opinión ayuda a que el proyecto siga creciendo.
</p>

<form>

<div class="mb-3">
<label class="form-label">Nombre (opcional)</label>
<input type="text" class="form-control">
</div>

<div class="mb-3">
<label class="form-label">Tu comentario</label>
<textarea class="form-control" rows="4"></textarea>
</div>

<button class="btn btn-main">Enviar sugerencia</button>

</form>

</div>

</div>


