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
          <a href="">
            Ler mais
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- seção sobre -->

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

  <!-- footer section -->
  <?php include 'footer.php';?>
    