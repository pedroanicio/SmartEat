<?php 
  include('session.php');


// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  // Conectar ao banco de dados
  include_once("../BD/config.php");

  // Verifica se o campo 'update' está presente no POST
  if (isset($_POST['update'])) {
      // Obtém o valor do campo de peso
      $objetivo = $_POST['update'];

      if ($conexao->connect_error) {
          die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
      }

      $objetivo = $conexao->real_escape_string($objetivo);
      $logado = $_SESSION['email'];

      $query = "UPDATE user SET objetivo = '$objetivo' WHERE email = '$logado'";
      $result = $conexao->query($query);

      if ($conexao->query($query) == TRUE) {
        echo "Objetivo salvo com sucesso!";
        header('Location: calculo2.php');
      } else {
          echo "Erro ao salvar o peso: " . $conexao->error;
      }

      
  }
  $conexao->close();

}
//var_dump($_POST); // depurar


?>

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

 <!-- header section -->
<?php include 'header.php';?>
    
<body>
  <main class="full-height">
    <div id="go-data" data-gender="male" data-goal="lose" data-age="3" data-functions="calorie_counter"></div>
                                                                        
    <div class="container pagination">
      <div class="row mt-16">
        <div class="col-12 d-flex flex-row justify-content-center">
          Página 1 de 6 
        </div>
      </div>
    </div>

    <div class="container register-form appdomain-centered-max-width">
      <div class="row">
        <div class="col-12">
          <h1 class="mt-32">Qual é o seu objetivo?</h1>
        </div>
      </div>
    
      <form name="goal" method="post" action = "calculo.php">
        
        <div id="goal" class="checkbox-button mt-32">
          <input type="radio" id="goal_goal_0" name="update" required="required" value="1" checked="checked">
            <label for="goal_goal_0" class="required position-relative hover:bg-lg-dark">
              Perder peso
            </label>
            <input type="radio" id="goal_goal_1" name="update" required="required" value="2">
            <label for="goal_goal_1" class="required position-relative hover:bg-lg-dark">
                Ganhar massa muscular
            </label>
            <input type="radio" id="goal_goal_2"  name="update" required="required" value="3">
            <label for="goal_goal_2" class="required position-relative hover:bg-lg-dark">
                Manter peso
            </label>
        </div>
        <button class="botaocalculo" type="submit" name="confirm_button" >Confirmar</button> 
      </form>
    </div>
  </main>

</body>


<!-- footer section -->
<?php include 'footer.php';?>