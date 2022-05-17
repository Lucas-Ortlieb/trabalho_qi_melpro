<?php 
require_once "../src/views/header.php";
require_once "../src/views/header_nav2.php";
?>
<div class="container mt-4">
<form>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <hr>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Assunto</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Assunto">
    </div>
  </div>
  <hr>
  <div class="form-group">
    <label for="exampleFormControlFile1">Carregar arquivo</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
  <hr>
  <div class="form-group col-md-12">
    <label for="exampleFormControlTextarea1">Mensagem:</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
  </div>
  <button type="button" onclick="window.location.href='pagina_dev.php'" class="btn btn-primary">Enviar</button>
</form>
</div>
<?php require_once "../src/views/footer.php" ?>