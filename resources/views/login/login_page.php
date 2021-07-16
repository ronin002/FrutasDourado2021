<!DOCTYPE html>
<html>
<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Frutas Dourado</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
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

    
  <script>

    function fncLogin(){
        window.location.href = "login_cliente.php";
    }

    function fncAddUser(){
        window.location.href = "register_page.php";
    }

    function fncCadProd(){
        window.location.href = "cadprod.php";
    }

    function fncCadLote(){
        window.location.href = "cadlote.php";
    }

  </script>

  </head>
  <body class="goto-here">
		<div class="py-1 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">79 99110-9067</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">contato@frutasdourado.com.br</span>
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
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="../index.php" class="nav-link">Home</a></li>
            <li class="nav-item active"><a href="../rastrear.php" class="nav-link">Rastrear</a></li>
	        
            <li class="nav-item"><a href="../about.html" class="nav-link">Sobre</a></li>
            <?php if($_SESSION['autenticado'] != true ) : ?>
              <li class="nav-item"><a href="../login/login_cliente.php" class="nav-link">Login</a></li>
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
	          <!-- <li class="nav-item"><a href="blog.html" class="nav-link"></a></li> -->
			  <li class="nav-item"><a href="contact.html" class="nav-link">Contato</a></li>
			  
			  
	          <!-- <li class="nav-item cta cta-colored"><a href="cart.html" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li> -->

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

<!--     

    <section class="ftco-section">
			<div class="container">
				<div class="row no-gutters ftco-services">

          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate" onclick="fncLogin();">
            
                <div class="media block-6 services mb-md-0 mb-4">
                <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
                        
                        <img src="images/user.svg" style="height:64px;height:64px;"  onerror="this.onerror=null;" alt="Login">              
                </div>
                <div class="media-body">
                    <h3 class="heading">Login</h3>
                    <span>Logar no sistema</span> 
                </div>
                </div>  
             
          </div>


          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate"  onclick="fncAddUser();">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
                   
                    
                    <img src="images/add_user.svg" style="height:50px;height:50px;"  onerror="this.onerror=null;" alt="Adicionar Usuário">             
            
              </div>
              
              <div class="media-body">
                <h3 class="heading">Adicionar Usuário</h3>
                <span>Cadastro / edição de usuários </span>
              </div>
            </div>    
          </div>


          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate" onclick="fncCadProd();">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
                  
                    
                    <img src="images/fruits_and_vegetables.svg" style="height:50px;height:50px;"  onerror="this.onerror=null;" alt="Produto">             
              </div>
              <div class="media-body">
                <h3 class="heading">Produto</h3>
                <span>Cadastrar produto / informações de estoque</span>
              </div>
            </div>      
          </div>

          
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate" onclick="fncCadLote();">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
                    
                    <img src="images/product.svg" style="height:50px;height:50px;"  onerror="this.onerror=null;" alt="Lote">             
              </div>
              <div class="media-body">
                <h3 class="heading">Lote</h3>
                <span>Cadastrar lote / imprimir etiqueta </span> 
              </div>
            </div>      
          </div>
        </div>
			</div>
		</section> -->





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
    
  </body>
</html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Login - PHP + MySQL - Canal TI</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="../css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Sistema de Login</h3>
                    <h3 class="title has-text-grey">Frutas Dourado</h3>
                    <?php 
                        if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div class="notification is-danger">
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>
                    <div class="box">
                        <form action="login.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="usuario" name="text" class="input is-large" placeholder="Seu usuário" autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Sua senha">
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>