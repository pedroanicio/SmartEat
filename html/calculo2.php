<?php 
  include('session.php');


// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Conectar ao banco de dados
    include_once("../BD/config.php");

    // Verifica se o campo 'update' está presente no POST
    if (isset($_POST['update'])) {
        // Obtém o valor do campo de peso
        $peso = $_POST['update'];

        if ($conexao->connect_error) {
            die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
        }

        $peso = $conexao->real_escape_string($peso);
        $logado = $_SESSION['email'];

        $query = "UPDATE user SET peso = '$peso' WHERE email = '$logado'";
        $result = $conexao->query($query);

        if ($conexao->query($query) == TRUE) {
            echo "Peso salvo com sucesso!";
            header('Location: calculo3.php');
        } else {
            echo "Erro ao salvar o peso: " . $conexao->error;
        }

        $conexao->close();
    }

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


<main class="full-height">
    <div id="go-data" data-gender="" data-goal="lose" data-age="0" data-functions="mealplans"></div>    
    <div class="container pagination">
            <div class="row mt-16">
                <div class="col-12 d-flex flex-row justify-content-center">
                                 
                <a class="nav-link" href="calculo.php">
                    <img src="https://assets.yazio.com/frontend/images/pro-signup/icon-chevron-left.svg" class="icon-17" type="image/svg+xml" alt="Go Back">
                </a>
                Página 2 de 6
            </div>
        </div>
    </div>

    <form name="formPeso" method="post" action="calculo2.php">
        <div class="container register-form">
            <div class="row">
                <div class="col-12">
                    <h1 class="mt-32">Qual é o seu peso atual?</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p class="font-body mt-16">Não tem problema em estimar aproximadamente. Você pode ajustar seu peso inicial mais tarde.</p>
                </div>
            </div>
            
            <div class="input-label-wrapper mt-4">
                <input type="text" name="update" value="" maxlength="" required/>
                    <label class="label required">kg</label>
            </div>

            <div class="button-bottom-container">
            <button class="botaocalculo" type="submit" id="current_weight_submit" >
                
                Próximo
                
            </button>
        </div>
        </div>
        
    </form>
</main>

 <!-- footer section -->
<?php include 'footer.php';?>