<?php

    if(isset($_POST['submit'])){
      include_once('../config.php');
      // print_r('Nome: ' . $_POST['nome']);
      // print_r('<br>');
      // print_r('Email: ' . $_POST['email']);
      // print_r('<br>');
      // print_r('Senha: ' . $_POST['senha']);

    $nome  = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $result = mysqli_query ($conexao, "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')");

    if ($result) {
        echo "Usuário cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar: " . mysqli_error($conexao);
    }
  }
?> 

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> CINEHOME - Seu cinema em casa!</title>
  <link rel="icon" href="/public/assets/img/icon.png">
  <!-- CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>


<body>
  <a href="home.php">Voltar</a>
<h1 class="site-title">
  <span class="cine">CINE</span><span class="home">HOME</span>
</h1>
  <div class="wrapper">
    <div class="title-text">
      <div class="title login">Login</div>
      <div class="title signup">Cadastre-se já!</div>
    </div>

    <div class="form-container">
      <div class="slide-controls">
        <input type="radio" name="slide" id="login" checked>
        <input type="radio" name="slide" id="signup">
        <label for="login" class="slide login">Login</label>
        <label for="signup" class="slide signup">Cadastro</label>
        <div class="slider-tab"></div>
      </div>

      <!--Login fará resquest no banco de dados-->

      <div class="form-inner">
        <form action="testLogin.php" method="POST" class="login">
          <div class="field">
            <input type="text" name = "email" placeholder="Endereço de e-mail" required>
          </div>
          <div class="field">
            <input type="password" name = "senha" placeholder="Senha" required>
          </div>
          <div class="pass-link"><a href="#">Esqueceu a senha?</a></div>
          <div class="field btn">
            <div class="btn-layer"></div>
            <input type="submit" name="submit" value="Entrar">
          </div>
          <div class="signup-link">Novo aqui? <a href="#">Cadastre-se agora!</a></div>
        </form>

        <!--Cadastro direto para banco de dados-->
        <!--Antigo action era:"#"-->

        <form action="login.php" method="POST" class="signup">
          <div class="field">
            <input type="text" name = "nome" placeholder="Seu nome" required>
          </div>
          <div class="field">
            <input type="text" name = "email" placeholder="Endereço de e-mail" required>
          </div>
          <div class="field">
            <input type="password" name = "senha" placeholder="Sua senha" required>
          </div>
          <div class="field">
            <input type="password" placeholder="Confirme sua senha" required>
          </div>
          <div class="field btn">
            <div class="btn-layer"></div>
            <input type="submit" name="submit" value="Cadastre-se">
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="assets/js/main.js"></script>
</body>
</html>
?>