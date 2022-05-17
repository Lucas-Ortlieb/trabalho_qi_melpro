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
        <a class="text-white">Menu - 
          <select name="menu" id="menu" class="btn btn-outline-secondary" onChange="window.location.href=this.value">
            <option value="">Selecione</option>
            <option value="atendimento.php">Atendimento</a></option>
            <option value="clientes.php">Clientes</option>
            <option value="faturamento.php">Faturamento</option>
            <option value="cadastro_dev.php">Cadastro</option>
          </select>
        </a>
      </li>
      &nbsp.&nbsp
      <li class="nav-item">
        <a class="text-white" href="mensagens.php">Mensagens</a>
      </li>
      &nbsp.&nbsp
      <li class="nav-item">
        <a class="text-white" href="empresas.php">Empresas</a>
      </li>
      &nbsp.&nbsp
      <li class="nav-item">
        <a class="text-white" href="ranking_dev.php">Ranking</a>
      </li>
    </ul>
    <form method="post" action="inicio.php">
      <div class="form-check form-check-inline">  
        <p>
          <a href="inicio.php" class="btn btn-success btn-lg">
           <span class="glyphicon glyphicon-log-out"></span> Logout
          </a>
        </p>
      </div> 
    </form>
  </div>
</nav>

