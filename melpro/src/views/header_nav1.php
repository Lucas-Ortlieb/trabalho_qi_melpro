<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="../public/assets/css/style.css" />
        <link rel="stylesheet" type="text/css" href="../public/assets/bootstrap-5.1.3-dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Página inicial</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">


  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="text-success font-weight-bold" href="inicio.php">MELPRO <span class="sr-only">(página atual)</span></a>
      </li>
      &nbsp.&nbsp
      <li class="nav-item">
        <a class="text-white" href="quem_somos.php">Quem somos</a>
      </li>
    </ul>
    <form method="post" action="pagina_dev.php">
      <div class="form-check form-check-inline">
        <p><input value="Entrar" type="submit" class="bg-dark text-white"></p>&nbsp&nbsp
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
        <input type="password" id="pass" class="form-control" name="senha" placeholder="Digite sua senha"/>
      </div> 
    </form>
  </div>
</nav>