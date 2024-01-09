<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>SmartEat</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap -->
  <link rel="stylesheet" type="text/css" href="../style/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Dosis:400,600,700|Poppins:400,600,700&display=swap"
    rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="../style/style.css" rel="stylesheet" />
  <!-- responsividade -->
  <link href="../style/responsive.css" rel="stylesheet" />
</head>

<body>
  <div id="cookie-notification" class="CookieMessage" style="display: none;">
    <div class="CookieMessage-content"> 
      <p>Este site utiliza cookies de navegação para a melhor experiência do usuário. <a href="politicaPrivacidade.php">Saiba mais</a></p>
      <p><a id="cookie-notification-close" class="CookieMessage-button" href="#">Aceitar</a></p>          
    </div>
  </div>

  <div class="hero_area">
    
    <?php include 'header.php';?>
    
    <section class="slider_section position-relative">
      <div class="container">
        <div class="custom_nav2">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="d-flex  flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav  ">
                  <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="sobre.php">Sobre</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="servicos.php">Serviços </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="calculo.php">Calculadoras</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Login.php">Login</a>
                  </li>
                </ul>
                <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                  <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                </form>
              </div>
            </div>
          </nav>
        </div>
      </div>
    
      <div class="slider_container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 col-md-7 offset-md-6 offset-md-5">
                    <div class="detail-box">
                      <h2>
                        Nós te ajudamos a
                      </h2>
                      <h1>
                        melhorar sua saúde
                      </h1>
                      <p>
                        Por meio do nosso site, voce pode ter acesso e monitorar todo o seu consumo diário de calorias, 
                        além de ter acesso constante a dicas de saúde e bem estar.
                      </p>
                      <div class="btn-box">
                        <a href="sobre.php" class="btn-1">
                          Ler mais
                        </a>
                        <a href="Login.php" class="btn-2">
                          Cadastre-se
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 col-md-7 offset-md-6 offset-md-5">
                    <div class="detail-box">
                      <h2>
                        Nós te ajudamos a
                      </h2>
                      <h1>
                        Ter o corpo que sempre quis
                      </h1>
                      <p>
                        Por meio do nosso site, voce pode ter acesso e monitorar todo o seu consumo diário de calorias, 
                        além de ter acesso constante a dicas de saúde e bem estar.
                      </p>
                      <div class="btn-box">
                        <a href="sobre.php" class="btn-1">
                          Ler mais
                        </a>
                        <a href="Login.php" class="btn-2">
                          Cadastre-se
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 col-md-7 offset-md-6 offset-md-5">
                    <div class="detail-box">
                      <h2>
                        SMARTEAT
                      </h2>
                      <h1>
                        Cadastre-se
                      </h1>
                      <p>
                        e tenha acesso a todos esses benefícios!
                      </p>
                      <div class="btn-box">
                    
                        <a href="Login.php" class="btn-2">
                          Cadastre-se
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- fim carrosel -->
  </div>


  <!-- seção sobre -->

  <section class="about_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Sobre nós
        </h2>
      </div>
      <div class="box">
        <div class="img-box">
          <img src="../images/logo.png" alt="">
        </div>
        <div class="detail-box">
          <p>
            Website realizado para a disciplina de Programação Web, do curso de Sistemas de informação do IFMG - Campus Ouro Branco.
            Temos como objetivo facilitar o acesso a informações sobre saúde e bem estar ajudando o usuário a ter uma vida mais saudável.
          </p>
          <a href="sobre.php">
            Ler mais
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- seção sobre -->

  <!-- service section -->

  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Nossos serviços
        </h2>
      </div>
      <div class="service_container">
        <div class="box">
          <img src="../images/calculo-caloria.jpg" alt="">
          <h6 class="visible_heading">
            CÁLCULO DE CALORIAS
          </h6>
          <div class="link_box">
            <a href="">
              <img src="../images/link.png" alt="">
            </a>
            <h6>
              CÁLCULO DE CALORIAS
            </h6>
          </div>
        </div>
        <div class="box">
          <img src="../images/receitas-saudaveis.jpg" alt="">
          <h6 class="visible_heading">
            IDEIAS DE RECEITAS SAUDÁVEIS
          </h6>
          <div class="link_box">
            <a href="">
              <img src="../images/link.png" alt="">
            </a>
            <h6>
              IDEIAS DE RECEITAS SAUDÁVEIS
            </h6>
          </div>
        </div>
        <div class="box">
          <img src="../images/dicas-saude.jpg" alt="">
          <h6 class="visible_heading">
            DICAS SOBRE SAÚDE
          </h6>
          <div class="link_box">
            <a href="">
              <img src="../images/link.png" alt="">
            </a>
            <h6>
              DICAS SOBRE SAÚDE
            </h6>
          </div>
        </div>
        <div class="box">
          <img src="../images/suporte.jpg" alt="">
          <h6 class="visible_heading">
            SUPORTE 24/7
          </h6>
          <div class="link_box">
            <a href="">
              <img src="../images/link.png" alt="">
            </a>
            <h6>
              SUPORTE 24/7
            </h6>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end service section -->


  <!-- Us section -->

  <section class="us_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
         Por que nos escolher?
        </h2>
      </div>
      <div class="us_container">
        <div class="box">
          <div class="img-box">
            <img src="../images/website.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Website
            </h5>
            <p>
              Website completo e gratuito para auxiliar em qualquer necessidade.
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="../images/qualidade.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Serviços de qualidade
            </h5>
            <p>
              Garantimos sempre a satisfação do cliente com nossos serviços.
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="../images/apoio-suporte.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Suporte preciso
            </h5>
            <p>
              Equipe preparada e qualificada para te dar sempre o melhor suporte.
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="../images/gratuitamente.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Gratuito
            </h5>
            <p>
              Fique tranquilo, as principais funcionalidades do site são gratuitas.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end us section -->


  <!-- devs section -->

  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Equipe de desenvolvedores
        </h2>
      </div>
      <div id="carouselExample2Indicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExample2Indicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExample2Indicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="box">
              <div class="img-box">
                <img src="../images/usuario.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Aline Araújo
                </h5>
                <p>

                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="img-box">
                <img src="../images/usuario.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Pedro Arthur
                </h5>
                <p>

                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- end devs section -->

  <!-- result section -->

  <section class="result_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 px-0">
          <div class="img-box">
            <img src="../images/result.jpg" >
          </div>
        </div>
        <div class="col-lg-4 col-md-5">
          <div class="detail-box">
            <h2>
              CONSTRUÍDO PARA TRAZER<br>
              MELHORES RESULTADOS 
            </h2>
            <p>
              Nosso objetivo sempre foi trazer o melhor para nossos clientes, e para isso, buscamos desenvolver 
              um site completo, intuitivo e de fácil acesso para que você possa ter o melhor acompanhamento de sua saúde. 
            </p>
            <a href="Login.php">
              Cadastre-se
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end result section -->


  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          <span>
            Entre em contato
          </span>
        </h2>
      </div>
      <div class="layout_padding2-top">
        <div class="row">
          <div class="col-md-6 ">
            <form action="https://formsubmit.co/pedroarthurcunha17@gmail.com" method="POST" class="form">
              <div class="contact_form-container">
                <div>
                  <div>
                    <input type="text" name = "Nome" placeholder="Nome" required/>
                  </div>
                  <div>
                    <input type="email" name = "Email" placeholder="Email" required/>
                  </div>
                  <div>
                    <input type="text" name = "Número" placeholder="Número" required/>
                  </div>
                  <div class="mt-5">
                    <input type="text" name="Mensagem" placeholder="Mensagem" required/>
                  </div>
                  <div class="mt-5">
                    <button type="submit">
                      Enviar
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-6">
            <div class="map_container">
              <div class="map-responsive">
                <iframe
                  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=IFMG+Ouro+Branco+Minas+Gerais"
                  width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%"
                  allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->


  <!-- info section -->

  <section class="info_section layout_padding2-top">
    <div class="container">
      <div class="info_form">
        <h4>
          Fique por dentro de nossas novidades
        </h4>
        <form action="">
          <input type="text" placeholder="Email">
          <div class="d-flex justify-content-end">
            <button>
              Enviar
            </button>
          </div>
        </form>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h6>
            Sobre nós
          </h6>
          <p>
            Website realizado para a disciplina de Programação Web, do curso de Sistemas de informação
             do IFMG - Campus Ouro Branco. Temos como objetivo facilitar o acesso a 
             informações sobre saúde e bem estar ajudando o usuário a ter uma vida mais saudável.
          </p>
        </div>
        <div class="col-md-3 offset-md-2">
          <h6>
            Menus
          </h6>
          <ul>
            <li class=" active">
              <a class="" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="">
              <a class="" href="sobre.php">Sobre </a>
            </li>
            <li class="">
              <a class="" href="servicos.php">Serviços </a>
            </li>
            <li class="">
              <a class="" href="Login.php">Calculadoras</a>
            </li>
            <li class="">
              <a class="" href="Login.php">Login</a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <h6>
            Entre em contato
          </h6>
          <div class="info_link-box">
            <a href="https://www.google.com/search?client=ubuntu-sn&hs=PR7&sca_esv=596463110&channel=fs&tbs=lf:1,lf_ui:2&tbm=lcl&q=ifmg+ouro+branco&rflfq=1&num=10&ved=2ahUKEwj6-Mm4is2DAxUHrJUCHQdcD4wQtgN6BAgYEAI#rlfi=hd:;si:;mv:[[-20.511706999999998,-43.7127134],[-20.5138125,-43.7158124]];tbs:lrf:!1m4!1u2!2m2!2m1!1e1!2m1!1e2!3sIAE,lf:1,lf_ui:2"">
              <img src="../images/location-white.png" alt="">
              <span> R. Afonso Sardinha, 90 - Bairro Minas Talco, Ouro Branco - MG</span>
            </a>
            <a href="">
              <img src="../images/phone-white.png" alt="">
              <span>+55 3199999999</span>
            </a>
            <a href="">
              <img src="../images/mail-white.png" alt="">
              <span> demo@gmail.com</span>
            </a>
          </div>
          <div class="info_social">
            <div>
              <a href="">
                <img src="../images/facebook.png" alt="facebook">
              </a>
            </div>
            <div>
              <a href="">
                <img src="../images/instagram.png" alt="instagram">
              </a>
            </div>
            <div>
              <a href="">
                <img src="../images/twitter.png" alt="twitter">
              </a>
            </div>
            <div>
              <a href="">
                <img src="../images/linkedin.png" alt="linkedin">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end info section -->

  <!--cookies-->
  <script>
    if (!localStorage.getItem("cookiesAccepted")) { 
    var cookieMessage = document.getElementById('cookie-notification');  
    var closeCookie = document.getElementById('cookie-notification-close');
    
    cookieMessage.style.display = 'block';  
    closeCookie.addEventListener("click", function(e) {  
      e.preventDefault();
      localStorage.setItem("cookiesAccepted", true);
      
      cookieMessage.style.display = 'none';
    });
  }
  </script>

  <!-- footer section -->
  <?php include 'footer.php';?>