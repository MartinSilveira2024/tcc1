</html>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="./style.css">
  
  <script src="./script.js" defer></script>

  <title>Forum Games</title>
</head>
<body>
<form action="nivel_acesso.php" method="post">
  <main>
    <section class="login">
      <div class="wrapper">


        <h1 class="login__title">LOGIN</h1>
    
        <label class="login__label">
          <span>Email</span>
          <input type="email" name="email" class="input" required>
        </label>
  
        <label class="login__label">
          <span>senha</span>
          <input type="password" name="senha" class="input" required>
        </label>
      </div>
      <input type="submit" value="Logar">
      </form>

      <div class="wrapper">
  
        <a href="cadastrar_usuario.php" class="login__link">criar conta</a>
      </div>

    </section>

    <section class="wallpaper"></section>
  </main>
  
</body>
</html>