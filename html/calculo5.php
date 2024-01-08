<?php 
  include('session.php');
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
  <link rel="stylesheet" href="../style/style.css">
  <!-- responsividade -->
  <link href="../style/responsive.css" rel="stylesheet" />
</head>

 <!-- header section -->
 <?php include 'header.php';?>


<main class="full-height">
    <div id="go-data" data-gender="male" data-goal="lose" data-age="0" data-functions="mealplans"></div>
                                                                                                                                    
    <div class="container pagination">
        <div class="row mt-16">
            <div class="col-12 d-flex flex-row justify-content-center">            
                <a class="nav-link" href="calculo4.php">
                    <img src="https://assets.yazio.com/frontend/images/pro-signup/icon-chevron-left.svg" class="icon-17" type="image/svg+xml" alt="Go Back">
                </a>
                Página 5 de 6
            </div>
        </div>
    </div>

    <form name="formAltura" method="post" action="calculo5.php">
        <div class="content-container">
            <div class="row">
                <div class="col-12">
                    <h1 class="mt-32">Qual é a sua altura?</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p class="font-body mt-16">Responda as seguintes perguntas para personalizar seu plano e calcular seu objetivo calórico diário.</p>
                </div>
            </div>
    
   
            <div class="input-label-wrapper mt-4">                                                                                                                    
                <input type="text" name="update" value="" required>
                <label class="label mb-8 ml-8 required">cm</label>
            </div>
        </div>

        <div class="button-bottom-container">
            <button type="submit" id="altura">
                Próximo
                </button>
        </div>
    </form>            
</main>

<?php

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Conectar ao banco de dados
    include_once("../BD/config.php");

    // Verifica se o campo 'update' está presente no POST
    if (isset($_POST['update'])) {
        // Obtém o valor do campo de peso
        $altura = $_POST['update'];

        if ($conexao->connect_error) {
            die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
        }

        $altura = $conexao->real_escape_string($altura);
        $logado = $_SESSION['email'];

        $query = "UPDATE user SET altura = '$altura' WHERE email = '$logado'";
        
        if ($conexao->query($query) == TRUE) {
            echo "Altura salva com sucesso!";
            header('Location: calculo6.php');
        } else {
            echo "Erro ao salvar a altura: " . $conexao->error;
        }

    }

}
//var_dump($_POST); // depurar

?>


 <!-- footer section -->
<?php include 'footer.php';?>