<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Empieza Ahora | Impulsa Emprendimientos</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

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
.hero{
background:linear-gradient(rgba(15,23,42,.88),rgba(15,23,42,.88)),
url('https://picsum.photos/1400/600?blur=2') center/cover;
color:white;
padding:110px 20px 70px;
text-align:center;
}

.hero h1{font-weight:600}
.hero p{opacity:.9}

/* STEP CARDS */
.step-card{
border:none;
border-radius:18px;
box-shadow:0 18px 45px rgba(0,0,0,.08);
transition:.25s;
}
.step-card:hover{
transform:translateY(-5px);
}

.icon-circle{
width:55px;height:55px;
border-radius:14px;
display:flex;
align-items:center;
justify-content:center;
font-size:22px;
color:white;
background:linear-gradient(135deg,#ff9a4d,#ff6a2b);
margin-bottom:15px;
}

/* LIST */
.req-list li{
margin-bottom:10px;
}

/* NOTICE */
.notice{
background:linear-gradient(135deg,#eef2ff,#ffffff);
border-radius:20px;
padding:35px;
box-shadow:0 20px 40px rgba(0,0,0,.06);
border-left:6px solid #5c7cfa;
}

.notice h4{
font-weight:600;
margin-bottom:10px;
}

/* BUTTONS */
.btn-main{
background:linear-gradient(135deg,#ff9a4d,#ff6a2b);
border:none;
color:white;
padding:14px 26px;
border-radius:12px;
font-weight:500;
}

.btn-main:hover{opacity:.9;color:white}

.btn-whatsapp{
background:#25D366;
border:none;
color:white;
padding:14px 26px;
border-radius:12px;
font-weight:500;
}

/* FOOTER */
footer{
background:#0f172a;
color:#cbd5e1;
padding:28px 0;
margin-top:60px;
text-align:center;
font-size:14px;
}

</style>
</head>
<body>

<!-- HERO -->
<section class="hero">
<div class="container">
<h1>Publica tu Emprendimiento</h1>
<p>Sigue estos pasos para aparecer en nuestro directorio de negocios locales</p>
</div>
</section>

<div class="container mt-5">

<!-- NOTICE FIRST -->
<div class="notice text-center mb-5">
<h4>Sitio sin ánimo de lucro</h4>
<p>
Este es un proyecto comunitario para apoyar los emprendimientos locales.
<strong>No cobramos por publicar tu negocio</strong> ni por mantenerlo visible en la plataforma.
</p>
</div>

<!-- STEPS BELOW -->
<div class="row g-4">



<div class="col-md-6">
<div class="card step-card p-4 h-100">
<div class="icon-circle">1</div>
<h5>Prepara la información necesaria</h5>
<p>Ten listos los siguientes elementos de tu emprendimiento antes de contactarnos:</p>
<ul class="req-list">
<li>✔ Logo</li>
<li>✔ Slogan y descripción</li>
<li>✔ Foto de portada (productos e imagen del dueño)</li>
<li>✔ Fotos de trabajos recientes</li>
<li>✔ Ubicación: San Marcos, San Lorenzo o San Pablo</li>
<li>✔ Número de teléfono de contacto</li>
<li>✔ Horario</li>
<li>✔ Servicios que ofrece (express,wifi,parqueo)</li>
<li>✔ Dirección exacta para integración con google maps(opcional)</li>

</ul>
</div>
</div>

<div class="col-md-6">
<div class="card step-card p-4 h-100">
<div class="icon-circle">2</div>
<h5>Contacta al administrador</h5>
<p>Haz clic en el botón para comunicarte con el administrador del sitio y solicitar la publicación de tu negocio.</p>
<a href="https://wa.me/50672302495?text=Hola%20me%20gustaria%20formar%20parte%20de%20la%20plataforma" class="btn btn-whatsapp mt-2">Contactar administrador</a>
</div>
</div>

</div>

</div>

