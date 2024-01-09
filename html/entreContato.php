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



  <!-- footer section -->
  <?php include 'footer.php';?>
    