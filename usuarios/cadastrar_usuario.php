</html>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="style1.css">
  
  <script src="./script.js" defer></script>

  <title>Forum Games</title>
</head>
<body>
<form action="cadastro_usuario.php" method="post">
  <main>
    <section class="login">
      <div class="wrapper">

        <h1 class="login__title">CADASTRO</h1>
    
        <label class="login__label">
          <span>nome de usuário</span>
          <input type="text" name="nome" class="input" required>
        </label>

        <label class="login__label">
          <span>email</span>
          <input type="email" name="email" class="input" required>
        </label>
  
        <label class="login__label">
          <span>senha</span>
          <input type="password" name="senha" class="input" required> 
        </label>

        <label class="login__label">
          <span>confirmar senha</span>
          <input type="password" name="rep_senha" class="input" required> 
        </label>
      </div>

      <input type="submit" value="Cadastrar">
      </form>
      <div class="wrapper">
        <a href="login_usuario" class="login__link">Login</a>
      </div>

    </section>

    <section class="wallpaper"></section>
  </main>
  
</body>
</html>
