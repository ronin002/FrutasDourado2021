<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        {{-- < 
            //session_start();
        ?> --}}
      <head>
 
        <style>
          .bg-verde {
            background: #82ae46 !important;
          }
        </style>
  
        <title>Frutas Dourado</title>

        <link rel="stylesheet" href="/css/style.css">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
    
        <script data-ad-client="ca-pub-8382019512583232" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    
        <link rel="stylesheet" href="/css/open-iconic-bootstrap.min.css">
        <link rel="stylesheet" href="/css/animate.css">
        
        <link rel="stylesheet" href="/css/owl.carousel.min.css">
        <link rel="stylesheet" href="/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="/css/magnific-popup.css">
    
        <link rel="stylesheet" href="/css/aos.css">
    
        <link rel="stylesheet" href="/css/ionicons.min.css">
    
        <link rel="stylesheet" href="/css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="/css/jquery.timepicker.css">
    
        
        <link rel="stylesheet" href="/css/flaticon.css">
        <link rel="stylesheet" href="/css/icomoon.css">
        
      </head>
      <body class="goto-here">
        <header>
            <div class="py-1 bg-verde">
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
              <div class="icon mr-2 d-flex justify-content-center align-items-center"><img src="{{ url('/') }}/images/trator3.png" style="height:15px;width:15px;"/> </div>
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
        </header>
      </body>
        <!-- END nav -->

  </html>    
     
<!-- END nav -->