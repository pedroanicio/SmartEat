<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="../style/Login.css">

  <script src="https://kit.fontawesome.com/cf6fa412bd.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container">
    <div class="buttonsForm">
      <div class="btnColor"></div>
      <button id="btnSignin">Login</button>
      <button id="btnSignup">Cadastro</button>
    </div>

    <form id="signin" action="Login.php" method="post">
      <input type="text" name= "emailLogin" placeholder="Email" required />
      <i class="fas fa-envelope iEmail"></i>
      <input type="password" name = "senhaLogin" placeholder="Senha" required />
      <i class="fas fa-lock iPassword"></i>
      <div class="divCheck">
        <input type="checkbox" />
        <span>Lembrar a senha</span>
      </div>
      <button type="submit">Login</button>
    </form>

    <form id="signup" action="Login.php" method="post">
      <input type="text" name="email" placeholder="Email" required />
      <i class="fas fa-envelope iEmail"></i>
      <input type="password" name="senha" placeholder="Senha" required />
      <i class="fas fa-lock iPassword"></i>
      <input type="password"  name="senha2" placeholder="Senha" required />
      <i class="fas fa-lock iPassword2"></i>

      <input type="text"  name="nome" placeholder="Nome" required />
      <i class="fas fa-user iUser"></i>

      <div class="divCheck">
        <input type="checkbox" required />
        <a class="termo" href="politicaPrivacidade.php">Termos</a>
      </div>
      <button type="submit">Cadastrar</button>
    </form>
  </div>
  <script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap.js"></script>
  <script src="../js/Login.js"></script>
</body>

<!-- cadastro.php -->
<?php
    session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["email"])) {
    // Processar dados de cadastro aqui
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $senha2 = $_POST["senha2"];
    $nome = $_POST["nome"];

    // Conectar ao banco de dados
    include_once("../BD/config.php");

    // Verificar se o e-mail já existe no banco
    $queryVerificaEmail = "SELECT * FROM user WHERE email = '$email'";
    $resultadoVerificaEmail = $conexao->query($queryVerificaEmail);
    if ($resultadoVerificaEmail->num_rows > 0) {
      echo "<script>alert('O Email informado já está cadastrado.');</script>";
    }else{
      // Inserir dados na tabela de usuários do banco de dados
      if ($senha != $senha2) {
        echo "As senhas não conferem";
        return;
      }else{
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

        $query = "INSERT INTO user (email, senha, nome) VALUES ('$email', '$senhaHash', '$nome')";
        $resultado = $conexao->query($query);  
        if ($resultado) {
          echo "<script>alert('Usuário cadastrado com sucesso!');</script>";
        } else {
          echo "<script>alert('Erro ao cadastrar o usuário');</script>";
        }
      } 
  
    } 
    // Fechar a conexão
    $conexao->close();
    
}
// Lógica de autenticação
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["emailLogin"])) {
  // Conectar ao banco de dados
  include_once("../BD/config.php");

  $emailLogin = $_POST["emailLogin"];
  $senhaLogin = $_POST["senhaLogin"];

  // Buscar a senha criptografada no banco
  $queryLogin = "SELECT senha FROM user WHERE email = '$emailLogin'";
  $resultadoLogin = $conexao->query($queryLogin);

  if ($resultadoLogin->num_rows > 0) {
      $row = $resultadoLogin->fetch_assoc();
      $senhaHash = $row['senha'];

      // Verificar se a senha informada corresponde à senha criptografada
      if (password_verify($senhaLogin, $senhaHash)) {
          echo "<script>alert('Login bem-sucedido!');</script>";
          $_SESSION['email'] = $emailLogin;
          // Não armazene a senha descriptografada na sessão
          header('Location: calculo.php');
      } else {
          unset($_SESSION['email']);
          echo "<script>alert('Senha incorreta');</script>";
      }
  } else {
      unset($_SESSION['email']);
      echo "<script>alert('Usuário inexistente');</script>";
  }
}

?>

</html>