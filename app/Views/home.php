<style>

body{
font-family:Poppins,sans-serif;
background:#f1f3f7;
}

/* HERO */

.hero{
background:
linear-gradient(rgba(15,23,42,.85),rgba(15,23,42,.85)),
url("https://picsum.photos/1400/600?blur=3") center/cover;
padding:140px 0 120px;
color:white;
position:relative;
overflow:hidden;
}

.hero h1{font-weight:600}

/* SEARCH BOX */

.search-box{
background:#e9ecf2;
padding:18px;
border-radius:14px;
box-shadow:0 10px 30px rgba(0,0,0,.2);
}

/* CARDS */

.business-card{
position:relative;
border-radius:16px;
overflow:hidden;
box-shadow:0 15px 40px rgba(0,0,0,.2);
}

.business-card img{
height:220px;
object-fit:cover;
width:100%;
 transition: transform 0.3s ease; /* Suaviza el cambio */
}
.business-card:hover{
    transform:scale(1.05);
}

.business-overlay{
cursor: pointer;
position:absolute;
inset:0;
background:linear-gradient(to top,rgba(0,0,0,.85),rgba(0,0,0,.3),transparent);
}


.business-content{
position:absolute;
bottom:0;
color:white;
padding:18px;
z-index:2;
}

.badge-custom{
padding:6px 12px;
border-radius:20px;
font-size:13px;
}

.gastro{background:#ff9a4d}
.moda{background:#8bc34a}
.tech{background:#5c7cfa}

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

/* WRAPPER */

.wrapper{
margin-top:-70px;
}

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

/* ========================= */
/* HERO DIRECTORY ANIMATION */
/* ========================= */

.hero-anim{
position:absolute;
inset:0;
pointer-events:none;
z-index:1;
}

.hero-anim .bubble{
position:absolute;
font-size:28px;
opacity:.15;
animation:floatDirectory 14s linear infinite;
}

.hero-anim .bubble:nth-child(1){left:8%;bottom:-40px;animation-delay:0s}
.hero-anim .bubble:nth-child(2){left:22%;bottom:-60px;animation-delay:3s}
.hero-anim .bubble:nth-child(3){left:40%;bottom:-50px;animation-delay:6s}
.hero-anim .bubble:nth-child(4){left:65%;bottom:-70px;animation-delay:2s}
.hero-anim .bubble:nth-child(5){left:82%;bottom:-45px;animation-delay:5s}

@keyframes floatDirectory{
0%{transform:translateY(0) scale(.9);opacity:0;}
10%{opacity:.15}
90%{opacity:.15}
100%{transform:translateY(-750px) scale(1.2);opacity:0;}
}

.hero .container{
position:relative;
z-index:2;
}

</style>
</head>
<body>

<!-- HERO -->
<section class="hero text-center text-lg-start">

<!-- ANIMACION -->
<div class="hero-anim">
<div class="bubble">🏪</div>
<div class="bubble">📍</div>
<div class="bubble">📂</div>
<div class="bubble">💼</div>
<div class="bubble">⭐</div>
</div>

<div class="container">

<h1 class="display-5 mb-2">Descubre Emprendimientos de tu Zona</h1>
<p class="mb-4 opacity-75">Encuentra negocios locales y apoya el emprendimiento.</p>

<!-- SEARCH -->
<div class="search-box col-lg-7 mx-auto mx-lg-0">

<div class="row g-2 align-items-center">

<div class="col-md-8">
<label class="fw-semibold text-dark mb-1">Filtrar por zona:</label>
<select class="form-select">
<option>Selecciona una zona</option>
<option>San José</option>
<option>Heredia</option>
<option>Alajuela</option>
</select>
</div>

<div class="col-md-4 d-grid">
<button class="btn btn-warning text-white fw-medium mt-md-4">Buscar</button>
</div>

</div>
</div>

</div>
</section>

<!-- GRID -->
<div class="container wrapper">
<div class="row g-4">

<div class="col-md-6 col-lg-4">
<div class="business-card">
<img src="https://picsum.photos/600/400?1">
<div class="business-overlay"></div>
<div class="business-content">
<h5>Café Aroma & Sabor</h5>
<p class="small">Cafetería acogedora con café artesanal.</p>
<span class="badge-custom gastro">Gastronomía</span>
</div>
</div>
</div>

<div class="col-md-6 col-lg-4">
<div class="business-card">
<img src="https://picsum.photos/600/400?2">
<div class="business-overlay"></div>
<div class="business-content">
<h5>EcoModa Boutique</h5>
<p class="small">Moda sostenible hecha localmente.</p>
<span class="badge-custom moda">Moda</span>
</div>
</div>
</div>

<div class="col-md-6 col-lg-4">
<div class="business-card">
<img src="https://picsum.photos/600/400?3">
<div class="business-overlay"></div>
<div class="business-content">
<h5>TechFix Solutions</h5>
<p class="small">Reparación de celulares y laptops.</p>
<span class="badge-custom tech">Tecnología</span>
</div>
</div>
</div>

</div>
</div>
