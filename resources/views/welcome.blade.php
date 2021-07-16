<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <? 
            session_start();
        ?>
      <head>
        <title>Frutas Dourado</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
    
        <script data-ad-client="ca-pub-8382019512583232" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    
        <link rel="stylesheet" href="/css/open-iconic-bootstrap.min.css">
        <link rel="stylesheet" href="/css/animate.css">
        
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
    
        <link rel="stylesheet" href="css/aos.css">
    
        <link rel="stylesheet" href="css/ionicons.min.css">
    
        <link rel="stylesheet" href="css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="css/jquery.timepicker.css">
    
        
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/icomoon.css">
        <link rel="stylesheet" href="css/style.css">
      </head>
      <body class="goto-here">
          <header>
            <div class="py-1 bg-primary">
            <div class="container">
                <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
                    <div class="col-lg-12 d-block">
                        <div class="row d-flex">
                            <div class="col-md pr-4 d-flex topper align-items-center">
                                <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                                <a href="tel:+5579991109067"><span class="text">79 99110-9067</span></a>
                            </div>
                            <div class="col-md pr-4 d-flex topper align-items-center">
                                <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                                <a href="mailto:contato@frutasdourado.com.br"><span class="text">contato@frutasdourado.com.br</span></a>
                            </div>
                            <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
                                <a href="../contratar/contratar.php" class="nav-link"><span class="text">Soluções de rastreio</span></a>
                                
                            </div>
                        </div>
                    </div>
                </div>
              </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container">
              <a class="navbar-brand" href="../index.php">Frutas Dourado</a>
              <div class="icon mr-2 d-flex justify-content-center align-items-center"><img src="../images/trator3.png" style="height:15px;width:15px;"/> </div>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
              </button>
    
              
            
              
              <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                      <li class="nav-item active"><a href="../index.php" class="nav-link">Home</a></li>
                      <li class="nav-item active"><a href="../rastrear.php" class="nav-link">Rastrear</a></li>
                    <li class="nav-item"><a href="../contratar/contratar.php" class="nav-link">Contratar</a></li>				
                    <?php if(!isset($_SESSION['usuario'])) : ?>
                        
                    
                    <li class="nav-item"><a href={{ url('login') }} class="nav-link">Login</a></li>
                    <?php else: ?>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Administrativo</a> 
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="../login/perfil.php">Perfil</a>
                            <!-- <a class="dropdown-item" href="../login/perfil.php">Cadastrar usuário</a>
                            <a class="dropdown-item" href="../login/perfil.php">Single Product</a>
                            <a class="dropdown-item" href="cart.html">Cart</a> -->
                            <a class="dropdown-item" href="../login/logout.php">logout</a> 
                        </div>
                    </li>
                    <?php endif; ?>
                    <li class="nav-item"><a href="../about.html" class="nav-link">Sobre</a></li>
                    <li class="nav-item"><a href="../contato.php" class="nav-link">Contato</a></li>
                  <!-- <li class="nav-item"><a href="blog.html" class="nav-link"></a></li> -->
                </ul>
              </div>
            </div>
          </nav>
        <!-- END nav -->
        
        <section class="ftco-section">
            <div class="container">
                <div class="row no-gutters ftco-services">
    
                    <div class=".col-md-3 text-center d-flex align-self-stretch ftco-animate" style="max-width: 50%; width:150px;">
                        <div class="media block-6 services mb-md-0 mb-4" styles="width:100px;">
                            <a href={{ url('rastreio') }}>
                                <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-3">
                                        <!-- <span class="flaticon-award"></span> -->
                                        <img src="../images/farm.png" style="height:50px; width:50px;"/>
                                </div>
                                <div class="media-body">
                                    
                                        <h3 class="heading">Rastrear </h3>
                                    
                                    
                                        <span></span>
                                    
                                    
                                </div>
                            </a>
                        </div>      
                    </div>
    
                    <div class=".col-md-3-2 text-center d-flex align-self-stretch ftco-animate" style="max-width: 50%; width:150px;">
                        <div class="media block-6 services mb-md-0 mb-4" styles="width:100px;">
                            <a href="../ncm.php">
                                <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
                                    
                                        <img src="../images/ncm.png" style="height:50px; width:50px;"></img>
                                    
                                </div>
                            
                            
                                <div class="media-body">
                                    
                                        <h3 class="heading">NCM</h3>
                                
                                    
                                        <span> </span>
                                
                                </div>
                            </a>
                        </div>    
                    </div>
            
                    <div class=".col-md-3-2 text-center d-flex align-self-stretch ftco-animate" style="max-width: 50%; width:150px;" title="Seu cliente informado de cada etapa da entrega">
                        <div class="media block-6 services mb-md-0 mb-4" styles="width:100px;">
                            <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
                                    <!-- <span class="flaticon-shipped"></span>  -->
                                    <img src="../images/entrega.png" style="height:50px; width:50px;"></img>
                                    
                            </div>
                        <div class="media-body">
                            <h3 class="heading">Sistema de rastreio</h3>
                            <span></span>
                        </div>
                        </div>      
                    </div>
            
                    <div class=".col-md-3-2 text-center d-flex align-self-stretch ftco-animate"  style="max-width: 50%; width:150px;">
                        <div class="media block-6 services mb-md-0 mb-4" styles="width:100px;">
                        <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-3">
                                <!-- <span class="flaticon-award"></span> -->
                                <img src="../images/qrCodeIcon.png" style="height:25px; width:25px;"></img>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Gerar QR-Code</h3>
                            <span></span>
                        </div>
                        </div>      
                    </div>
                    
                    
    
                    <!-- <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate"  style="max-width: 50%; width:150px;">
                        <div class="media block-6 services mb-md-0 mb-4" styles="width:100px;">
                        <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
                                <span class="flaticon-customer-service" ></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Suporte</h3>
                            <span></span>
                        </div>
                        </div>      
                    </div> -->
                </div>
            </div>
        </section>
    
        <section id="home-section" class="hero">
              <div class="home-slider owl-carousel">
              <div class="slider-item" style="background-image: url(images/bg_1.jpg);">
                  <div class="overlay"></div>
                <div class="container">
                  <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
    
                    <div class="col-md-12 ftco-animate text-center">
                      <h1 class="mb-2">O parceiro do pequeno produtor</h1>
                      <h2 class="subheading mb-4">Valorizando o trabalho do homem do campo</h2>
                      <p><a href="#" class="btn btn-primary">Detalhes</a></p>
                    </div>
    
                  </div>
                </div>
              </div>
    
              <div class="slider-item" style="background-image: url(images/bg_2.jpg);">
                  <div class="overlay"></div>
                <div class="container">
                  <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
    
                    <div class="col-sm-12 ftco-animate text-center">
                      <h1 class="mb-2">Reconhecendo a força do pequeno produtor</h1>
                      <h2 class="subheading mb-4">Construindo uma relação de parceria</h2>
                      <p><a href="#" class="btn btn-primary">Detalhes</a></p>
                    </div>
    
                  </div>
                </div>
              </div>
            </div>
        </section>
    
            
    
            <section class="ftco-section ftco-category ftco-no-pt">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6 order-md-last align-items-stretch d-flex">
                                    <div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" style="background-image: url(images/category.jpg); ">
                                        <div class="text text-center">
                                            <h2>Sistema de Rastreio</h2>
                                            <p>Sistema de Rastreio Frutas Dourado</p>
                                            <p><a href="#" class="btn btn-primary">Contrate agora</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(images/farm.png);">
                                        <div class="text px-3 py-1">
                                            <h2 class="mb-0"><a href="#">Torne sua lavoura rastreável</a></h2>
                                        </div>
                                    </div>
                                    <div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(images/etiqueta.png);">
                                        <div class="text px-3 py-1">
                                            <h2 class="mb-0"><a href="#">Modelos de Etiquetas</a></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-md-4">
                            <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(images/ncm.png);">
                                <div class="text px-3 py-1">
                                    <h2 class="mb-0"><a href="#">Lista NCM</a></h2>
                                </div>		
                            </div>
                            <div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(images/qrcode.png);">
                                <div class="text px-3 py-1">
                                    <h2 class="mb-0"><a href="#">Cadastrar Lote</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    
      
{{--     
        <section class="ftco-section testimony-section">
          <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
              <div class="col-md-7 heading-section ftco-animate text-center">
                  <span class="subheading">Depoimentos</span>
                <h2 class="mb-4">É nossa satisfação ouvir o cliente</h2>
                
              </div>
            </div>
            <div class="row ftco-animate">
              <div class="col-md-12">
                <div class="carousel-testimony owl-carousel">
                  <div class="item">
                    <div class="testimony-wrap p-4 pb-5">
                      <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                        <span class="quote d-flex align-items-center justify-content-center">
                          <i class="icon-quote-left"></i>
                        </span>
                      </div>
                      <div class="text text-center">
                        <p class="mb-5 pl-4 line">Depoimento 1</p>
                        <p class="name">Parceiro 1</p>
                        <span class="position">Empresário</span>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="testimony-wrap p-4 pb-5">
                      <div class="user-img mb-5" style="background-image: url(images/person_2.jpg)">
                        <span class="quote d-flex align-items-center justify-content-center">
                          <i class="icon-quote-left"></i>
                        </span>
                      </div>
                      <div class="text text-center">
                        <p class="mb-5 pl-4 line">Depoimento 2</p>
                        <p class="name">Garreth Smith</p>
                        <span class="position">Comerciante</span>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="testimony-wrap p-4 pb-5">
                      <div class="user-img mb-5" style="background-image: url(images/person_3.jpg)">
                        <span class="quote d-flex align-items-center justify-content-center">
                          <i class="icon-quote-left"></i>
                        </span>
                      </div>
                      <div class="text text-center">
                        <p class="mb-5 pl-4 line">Depoimento 3</p>
                        <p class="name">Garreth Smith</p>
                        <span class="position">Micro Produtor rural</span>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="testimony-wrap p-4 pb-5">
                      <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                        <span class="quote d-flex align-items-center justify-content-center">
                          <i class="icon-quote-left"></i>
                        </span>
                      </div>
                      <div class="text text-center">
                        <p class="mb-5 pl-4 line">Depoimento 4</p>
                        <p class="name">Garreth Smith</p>
                        <span class="position">Dona de casa</span>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="testimony-wrap p-4 pb-5">
                      <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                        <span class="quote d-flex align-items-center justify-content-center">
                          <i class="icon-quote-left"></i>
                        </span>
                      </div>
                      <div class="text text-center">
                        <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <p class="name">Garreth Smith</p>
                        <span class="position">System Analyst</span>
                      </div>
                    </div>
                  </div> 
                </div>
              </div>
            </div>
          </div>
        </section>
    
        <hr> --}}
    
        <!-- <section class="ftco-section ftco-partner">
            <div class="container">
                <div class="row">
                    <div class="col-sm ftco-animate">
                        <a href="#" class="partner"><img src="images/partner-1.png" class="img-fluid" alt="Colorlib Template"></a>
                    </div>
                    <div class="col-sm ftco-animate">
                        <a href="#" class="partner"><img src="images/partner-2.png" class="img-fluid" alt="Colorlib Template"></a>
                    </div>
                    <div class="col-sm ftco-animate">
                        <a href="#" class="partner"><img src="images/partner-3.png" class="img-fluid" alt="Colorlib Template"></a>
                    </div>
                    <div class="col-sm ftco-animate">
                        <a href="#" class="partner"><img src="images/partner-4.png" class="img-fluid" alt="Colorlib Template"></a>
                    </div>
                    <div class="col-sm ftco-animate">
                        <a href="#" class="partner"><img src="images/partner-5.png" class="img-fluid" alt="Colorlib Template"></a>
                    </div>
                </div>
            </div>
        </section> -->
    
        <!-- <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
          <div class="container py-4">
            <div class="row d-flex justify-content-center py-5">
              <div class="col-md-6">
                  <h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
                  <span>Get e-mail updates about our latest shops and special offers</span>
              </div>
              <div class="col-md-6 d-flex align-items-center">
                <form action="#" class="subscribe-form">
                  <div class="form-group d-flex">
                    <input type="text" class="form-control" placeholder="Enter email address">
                    <input type="submit" value="Subscribe" class="submit px-3">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section> -->
       
        {{-- <footer class="ftco-footer ftco-section">
            
            <div class="container">
                <div class="row">
                    <div class="mouse">
                            <a href="#" class="mouse-icon">
                                <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
                            </a>
                        </div>
                </div>
            <div class="row mb-5">
                <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Frutas Dourado</h2>
                    <p>Criada para ajudar o homem do campo a ter rastreamento para seus produtos</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
                </div>
                <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-5">
                    <h2 class="ftco-heading-2">Menu</h2>
                    <ul class="list-unstyled">
                    <li><a href="#" class="py-2 d-block">Shop</a></li>
                    <li><a href="#" class="py-2 d-block">Rastreio</a></li>
                    <li><a href="#" class="py-2 d-block">Journal</a></li>
                    <li><a href="#" class="py-2 d-block">Contact Us</a></li>
                    </ul>
                </div>
                </div>
                <div class="col-md-4">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Help</h2>
                    <div class="d-flex">
                        <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
                        <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
                        <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
                        <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
                        <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
                        </ul>
                        <ul class="list-unstyled">
                        <li><a href="#" class="py-2 d-block">FAQs</a></li>
                        <li><a href="#" class="py-2 d-block">Contact</a></li>
                        </ul>
                    </div>
                </div>
                </div>
                <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                        <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                        <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                        <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                        </ul>
                    </div>
                </div>
                </div>
            </div>
            <div class="row">
             
            </div>
            </div>
        </footer>
     --}}
      <!-- loader -->
      <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
    
    
      <script src="js/jquery.min.js"></script>
      <script src="js/jquery-migrate-3.0.1.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery.easing.1.3.js"></script>
      <script src="js/jquery.waypoints.min.js"></script>
      <script src="js/jquery.stellar.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/jquery.magnific-popup.min.js"></script>
      <script src="js/aos.js"></script>
      <script src="js/jquery.animateNumber.min.js"></script>
      <script src="js/bootstrap-datepicker.js"></script>
      <script src="js/scrollax.min.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
      <script src="js/google-map.js"></script>
      <script src="js/main.js"></script>
        
          </header>
      </body>
    </html>
