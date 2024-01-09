
<?php
include('session.php');
include_once("../BD/config.php");

// Verifica se o usuário está autenticado
if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
    header('Location: Login.php');
    exit();
}

// Recupera todos os dados do usuário do banco de dados
$logado = $_SESSION['email'];
$query = "SELECT * FROM user WHERE email = '$logado'";
$result = $conexao->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Recupera os dados do usuário
    $idade = $row['idade'];
    $peso = $row['peso'];
    $altura = $row['altura'];
    $sexo = $row['sexo']; 

    

    // Calcula o IMC
    $altura_metros = $altura / 100; // Convertendo altura para metros
    $imc = $peso / ($altura_metros * $altura_metros);

    // Exibe o IMC
    echo "<br>Seu IMC é: " . number_format($imc, 2);


    // Calcula a TMB
    if ($sexo == 'M') {
        $tmb = 88.362 + (13.397 * $peso) + (4.799 * $altura) - (5.677 * $idade);
    } elseif ($sexo == 'F') {
        $tmb = 447.593 + (9.247 * $peso) + (3.098 * $altura) - (4.330 * $idade);
    } else {
        $tmb = 0; // Valor padrão se o sexo não estiver definido corretamente
    }

    // Exibe a TMB
    echo "<br>Sua Taxa Metabólica Basal (TMB) é: " . number_format($tmb, 2) . " calorias por dia.";

    // Restante do seu código para exibir ou processar outras informações

    //Determinar TMB de acordo com a atividade física diária
    $tmbSedentario = $tmb * 1.2;
    $tmbLevementeAtivo = $tmb * 1.375;
    $tmbModeradamenteAtivo = $tmb * 1.55;
    $tmbMuitoAtivo = $tmb * 1.725;
    
    echo "<br><br>Como determinar a necessidade diária de calorias (NDC): ";
    echo "<br>Nenhuma atividade física: " . number_format($tmbSedentario, 2) . " calorias por dia.";
    echo "<br>Exercício leve (1 a 3 dias por semana): " . number_format($tmbLevementeAtivo, 2) . " calorias por dia.";
    echo "<br>Exercício moderado (3 a 5 dias por semana): " . number_format($tmbModeradamenteAtivo, 2) . " calorias por dia.";
    echo "<br>Exercício pesado (6 a 7 dias por semana): " . number_format($tmbMuitoAtivo, 2) . " calorias por dia.";


} else {
    echo "Erro ao recuperar dados do usuário.";
}

// Fecha a conexão com o banco de dados
$conexao->close();
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
