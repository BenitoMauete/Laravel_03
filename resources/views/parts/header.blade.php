<!DOCTYPE html>
<html lang="pt-pt">
<head>
 <meta charset="utf-8">
 <meta content="width=device-width, initial-scale=1.0" name="viewport">
 <title>Tuwala Kukula</title>
 <meta name="description" content="">
 <meta name="keywords" content="">

 <!-- Favicons -->
 <link href="assets/img/favicon.png" rel="icon">
 <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

 <!-- Fonts -->
 <link href="https://fonts.googleapis.com" rel="preconnect">
 <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

 <!-- Vendor CSS Files -->
 <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
 <link href="assets/vendor/aos/aos.css" rel="stylesheet">
 <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
 <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

 <!-- Main CSS File -->
 <link href="assets/css/main.css" rel="stylesheet">

 <style>
  .navmenu a {
    color: black; /* Cor padrão dos links */
    text-decoration: none;
}

.navmenu .active a {
    color: rgb(222, 68, 76); /* Cor do link ativo */
    /* Opcional: destaque adicional */
}
 </style>
 <!-- =======================================================
 * Template Name: Sailor
 * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
 * Updated: Aug 07 2024 with Bootstrap v5.3.3
 * Author: BootstrapMade.com
 * License: https://bootstrapmade.com/license/
 ======================================================== -->
</head>

<body class="about-page">

 <header id="header" class="header d-flex align-items-center sticky-top">
   <div class="container-fluid container-xl position-relative d-flex align-items-center">

     <a href="{{route('index')}}" class="logo d-flex align-items-center me-auto">
       <!-- Uncomment the line below if you also wish to use an image logo -->
       <!-- <img src="assets/img/logo.png" alt=""> -->
       <h1 class="sitename">Tuwala Kukula</h1>
     </a>

     <nav id="navmenu" class="navmenu">
       <ul>
         <li class="{{ Route::currentRouteName() == 'index' ? 'active' : '' }}">
          <a href="{{route('index')}}">Home</a>
        </li>
         <li class="{{ Route::currentRouteName() == 'services' ? 'active' : '' }}">
          <a href="{{route('services')}}">Escolas</a>
        </li>
         <li class="{{ Route::currentRouteName() == 'portfolio' ? 'active' : '' }}">
          <a href="{{route('portfolio')}}">Sobre Nós</a></li>
         <li class="{{ Route::currentRouteName() == 'contact' ? 'active' : '' }}">
          <a href="{{route('contact')}}">Contate-nos</a></li>
           <li class="{{ Route::currentRouteName() == 'blog' ? 'active' : '' }}">
            <a href="{{route('blog')}}">Galeria</a></li>

          <li class="dropdown {{ Route::currentRouteName() == 'about' ? 'active' : '' }}">
            <a href="{{route('about')}}" class=""><span>Ajuda </span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
             <ul>
               <li class="{{ Route::currentRouteName() == 'team' ? 'active' : '' }}">
                <a href="{{route('team')}}">Perguntas Frequentes</a>
              </li>
               <li class="{{ Route::currentRouteName() == 'testimonials' ? 'active' : '' }}">
                <a href="{{route('testimonials')}}">Informar Problema</a>
              </li>
             </ul>
             </li>
  
       </ul>
       <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
     </nav>

     <a class="btn-getstarted {{ Route::currentRouteName() == 'services' ? 'active' : '' }}" href="{{route('about')}}">Login</a>

   </div>
 </header>