<?php
session_start();
?>

<?php 
require_once "../src/views/header.php";
require_once "../src/views/header_nav1.php";
?>
<div class="container mt-6">

  <h1>Cadastro Dev</h1></br>
  <?php
  if(isset($_SESSION ['msg'])){
    echo $_SESSION ['msg'];
    unset ($_SESSION ['msg']);
  }
  ?>

<form method="POST" action="processa_form_dev.php">
  <div class="form-group col-md-4">
    <label for="formGroupExampleInput1">Nome Completo:</label>
    <input type="text" name="nome" class="form-control" id="formGroupExampleInput1" placeholder="Nome Completo" required>
  </div>
  <div class="form-group col-md-4">
    <label for="formGroupExampleInput2">Data de Nascimento:</label>
    <input type="date" name="data-nascimento" class="form-control" id="formGroupExampleInput2" placeholder="Data de Nascimento" required>
  </div>
  <div class="form-group col-md-4">
    <label for="formGroupExampleInput3">CPF:</label>
    <input type="text" name="cpf"class="form-control" placeholder="Apenas Números" maxlength="11" autocomplete="off" required>
  </div>
  <div class="form-group col-md-4">
    <label for="formGroupExampleInput4">Telefone:</label>
    <input type="text" name="telefone" class="form-control" placeholder="Ex.: (00) 00000-0000" maxlength="15" autocomplete="off" required>
  </div>
  <div class="form-group col-md-4">
    <label for="exampleFormControlTextarea1">Linguagem de Programação:</label>
    <textarea name="linguagem" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group col-md-4">
    <label for="exampleFormControlTextarea2">Experiência Profissional:</label>
    <textarea name="experiencia" class="form-control" id="exampleFormControlTextarea2" rows="3"></textarea>
  </div>
  <div class="form-group col-md-4">
    <label for="formGroupExampleInput5">Escolaridade:</label>
    <select name="escolaridade" class="form-select col-lg-8 col-sm-8">
        <option value="">Selecione</option>
        <option value="fundamentalCompleto">Fundamental Completo</option>
        <option value="fundamentalIncompleto">Fundamental Incompleto</option>
        <option value="medioCompleto">Médio Completo</option>
        <option value="medioIncompleto">Médio Incompleto</option>
        <option value="tecnicoCompleto">Técnico Completo</option>
        <option value="tecnicoIncompleto">Técnico Incompleto</option>
        <option value="superiorCompleto">Superior Completo</option>
        <option value="superiorIncompleto">Superior Incompleto</option>
    </select>
  </div>
  <div class="form-group col-md-4">
    <label for="formGroupExampleInput6">Chave Pix:</label></br>
    <div name="chave" class="form-check form-check-inline">
        <input type="radio" class="form-check-input" value="cpf" name="chave" id="cpf"/>
        <label for="cpf">CPF</label>
    </div>
    <div class="form-check form-check-inline">
        <input type="radio" class="form-check-input" value="email" name="chave" id="email"/>
        <label for="email">Email</label>
    </div>
    <div class="form-check form-check-inline">
        <input type="radio" class="form-check-input" value="celular" name="chave" id="celular"/>
        <label for="celular">Celular</label>
    </div>
    <div class="form-check form-check-inline">
        <input type="radio" class="form-check-input" value="aleatorio" name="chave" id="aleatorio"/>
        <label for="aleatorio">Aleatório</label>
    </div>
  </div> 
    <div class="form-group col-md-4">
        <label for="formGroupExampleInput7">Informe a Chave:</label>
        <input type="text" name="informe" class="form-control" id="formGroupExampleInput7" placeholder="Descreva sua chave PIX" required>
    </div>
    <div class="form-group col-md-4">
        <label for="exampleInputEmail2">Endereço de email</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="Seu email" required>
    </div>
    <div class="form-group col-md-4">
        <label for="exampleInputPassword1">Senha</label>
        <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Criar Senha" required>
    </div>
    <input type="submit" onclick="confirmaEnvio()" class="btn btn-primary"/>
  </div>

</form>

<?php require_once "../src/views/footer.php"; ?>