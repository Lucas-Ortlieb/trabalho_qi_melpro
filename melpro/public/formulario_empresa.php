<?php 
require_once "../src/views/header.php";
require_once "../src/views/header_nav1.php";
?>
<div class="container mt-6">

    
<form>
  <div class="form-group col-md-4">
    <label for="formGroupExampleInput">CNPJ:</label>
    <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Apenas Números" maxlength="14" autocomplete="off" required>
  </div>
  <div class="form-group col-md-4">
    <label for="formGroupExampleInput">Razão Social:</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Razão Social" required>
  </div>
  <div class="form-group col-md-4">
    <label for="formGroupExampleInput">Nome Fantasia:</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nome Fantasia" required>
  </div>
  <div class="form-group col-md-4">
    <label for="formGroupExampleInput2">Data de Abertura:</label>
    <input type="date" class="form-control" id="formGroupExampleInput2" placeholder="Data de Abertura" required>
  </div>
  <div class="form-group col-md-4">
    <label for="formGroupExampleInput2">Telefone:</label>
    <input type="text" class="form-control" placeholder="Ex.: (00) 00000-0000" maxlength="15" autocomplete="off" required>
  </div>
  <div class="form-group col-md-4">
    <label for="formGroupExampleInput">Endereço:</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Rua, Nº, Bairro, Cidade e Estado" required>
  </div>
  <div class="form-group col-md-4">
    <label for="exampleFormControlTextarea1">Segmento de Mercado:</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group col-md-4">
    <label for="exampleFormControlTextarea1">Propósito:</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group col-md-4">
    <label for="exampleFormControlTextarea1">Missão:</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group col-md-4">
    <label for="exampleFormControlTextarea1">Visão:</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group col-md-4">
    <label for="exampleFormControlTextarea1">Valores:</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group col-md-4">
    <label for="exampleFormControlTextarea1">História da Empresa:</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group col-md-4">
    <label for="exampleFormControlTextarea1">Produtos/Serviços Oferecidos (resumo):</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group col-md-4">
    <label for="formGroupExampleInput2">Chave Pix:</label></br>
    <div class="form-check form-check-inline">
        <input type="radio" class="form-check-input" value="cnpj" name="cnpj" id="cnpj"/>
        <label for="cnpj">CNPJ</label>
    </div>
    <div class="form-check form-check-inline">
        <input type="radio" class="form-check-input" value="email" name="email" id="email"/>
        <label for="email">Email</label>
    </div>
    <div class="form-check form-check-inline">
        <input type="radio" class="form-check-input" value="celular" name="celular" id="celular"/>
        <label for="celular">Celular</label>
    </div>
    <div class="form-check form-check-inline">
        <input type="radio" class="form-check-input" value="aleatorio" name="aleatorio" id="aleatorio"/>
        <label for="aleatorio">Aleatório</label>
    </div>
  </div> 
    <div class="form-group col-md-4">
        <label for="formGroupExampleInput2">Informe a Chave:</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Descreva sua chave PIX" required>
    </div>
    <div class="form-group col-md-4">
        <label for="exampleInputEmail1">Endereço de email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email" required>
    </div>
    <div class="form-group col-md-4">
        <label for="exampleInputPassword1">Senha</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Criar Senha" required>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </div>

</form>

<?php require_once "../src/views/footer.php"; ?>