<?php get_header() ?>

<header>
  <div class="title-dsk">
    <a href=""><img src="assets/images/logo/logo.png" class="title-dsk__logo"></a>
  </div>
</header>
<!-- Navigation -->
  <nav>
    <div class="nav-dsk">
      <ul>
        <li><a href="">Inicio</a></li>
        <li><a>Equipos<span class="arrow-down"></span></a>
          <ul class="dropdown">
            <li><a href="ablandadores.html">Ablandadores</a></li>
            <li><a href="filtros.html">Filtros</a></li>
          </ul>
        </li>
        <li><a>Productos Quimicos<span class="arrow-down"></span></a>
         <ul class="dropdown">
           <li><a href="hogar.html">Limpieza Hogar</a></li>
           <li><a href="piscinas.html">Piscinas</a></li>
         </ul>
       </li>
        <li><a href="piscinas.html">Piscinas</a></li>
        <li><a href="quienes-somos.html">Quienes Somos</a></li>
        <li><a href="contacto.html">Contacto</a></li>
      </ul>
    </div>
    <div class="nav-mov">
      <div class="nav-mov__bg">
        <div class="nav-mov__bg--burger"> <span></span> <span></span> <span></span> </div>
        <a href="#" class="nav-mov__bg--title"><img src="assets/images/logo/logo.png"  class="nav-mov__bg--logo"></a>
      </div>
    </div>
  </nav>
<div class='content'></div>

<!-- Principal -->
<section>
  <!-- Slider -->
  <article>
    <div id="carouselExampleIndicators" class="carousel slide sl" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block h-auto w-100" src="assets/images/sl1.jpeg" alt="Food Water">
        </div>
        <div class="carousel-item">
          <img class="d-block h-auto w-100" src="assets/images/sl2.jpeg" alt="Kitchen Water">
        </div>
        <div class="carousel-item">
          <img class="d-block h-auto w-100" src="assets/images/sl3.jpeg" alt="Work Water">
        </div>
      </div>
    </div>
  </article>
  <!-- Cards -->
  <article class="services" >
    <div class="container2">
      <a href="hogar.html"class="card1 ef">
        <div class="card1__bg">
          <h1 class="card1__bg--text">Soluciones Para el hogar</h1>
        </div>
      </a>
      <a href="ablandadores.html" class="card2 ef">
        <div class="card2__bg">
          <h1 class="card2__bg--text">Soluciones Industriales</h1>
        </div>
      </a>
      <a href="piscinas.html" class="card3 ef">
        <div class="card3__bg">
          <h1 class="card3__bg--text">Soluciones para Piscinas</h1>
        </div>
      </a>

  </article>
</section>



<?php get_sidebar() ?>

<?php get_footer() ?>
