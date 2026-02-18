
<style>
body{font-family:Poppins,sans-serif;background:#f1f3f7}

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
.single-hero{
background:linear-gradient(rgba(15,23,42,.75),rgba(15,23,42,.75)),
url("https://picsum.photos/1400/700?business") center/cover;
color:white;
padding:160px 0 120px;
position:relative;
}

.badge-cat{padding:7px 14px;border-radius:20px;font-size:13px}
.gastro{background:#ff9a4d}

/* CARD INFO */
.info-card{
margin-top:-80px;
border-radius:18px;
box-shadow:0 20px 50px rgba(0,0,0,.15);
border:none;
}

.section-title{font-weight:600;margin-bottom:10px}

.contact-box{
background:#f8fafc;
border-radius:14px;
padding:18px;
border:1px solid #e5e7eb;
}

.btn-main{
background:linear-gradient(135deg,#ff9a4d,#ff6a2b);
border:none;color:white;font-weight:500
}

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
<section class="single-hero text-center text-lg-start">
<div class="container">
<span class="badge-cat gastro">Gastronomía</span>
<h1 class="display-5 mt-3">Café Aroma & Sabor</h1>
<p class="opacity-75 col-lg-6">Cafetería acogedora con café artesanal, repostería fresca y ambiente familiar.</p>
</div>
</section>

<!-- CONTENT -->
<div class="container">
<div class="card info-card p-4 p-lg-5">
<div class="row g-5">

<!-- LEFT -->
<div class="col-lg-8">

<h4 class="section-title">Descripción</h4>
<p>
Somos una cafetería local dedicada a ofrecer café de especialidad, postres artesanales
 y un espacio cómodo para trabajar o compartir.
</p>

<h4 class="section-title mt-4">Servicios</h4>
<ul>
<li>Café de especialidad</li>
<li>Repostería artesanal</li>
<li>WiFi gratuito</li>
<li>Pedidos para llevar</li>
</ul>

<h4 class="section-title mt-4">Galería</h4>
<div class="row g-3">
<div class="col-6 col-md-4"><img class="img-fluid rounded" src="https://picsum.photos/300/200?1"></div>
<div class="col-6 col-md-4"><img class="img-fluid rounded" src="https://picsum.photos/300/200?2"></div>
<div class="col-6 col-md-4"><img class="img-fluid rounded" src="https://picsum.photos/300/200?3"></div>
</div>

</div>

<!-- RIGHT SIDEBAR -->
<div class="col-lg-4">

<div class="contact-box">
<h5 class="fw-semibold mb-3">Información</h5>

<p class="mb-2"><strong>📍 Zona:</strong> San José Centro</p>
<p class="mb-2"><strong>📞 Teléfono:</strong> 8888-8888</p>
<p class="mb-2"><strong>🕒 Horario:</strong> 7:00am - 7:00pm</p>

<hr>

<div class="d-grid gap-2">
<button class="btn btn-main">Contactar</button>
<button class="btn btn-outline-dark">Ver ubicación</button>
</div>
</div>

</div>

</div>
</div>
</div>

