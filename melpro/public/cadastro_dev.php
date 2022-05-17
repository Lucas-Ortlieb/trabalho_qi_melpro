<?php 
require_once "../src/views/header.php";
require_once "../src/views/header_nav2.php";
?>
<div class="container mt-4 bg-info" style="background-color:darkgrey;">
    </br></br></br>
    <h1>BEM-VINDO!!</h1><hr>
    <h4>Como podemos ajudar?</h4><hr>
    <div class="form-group col-md-4">
    <button type="button" onclick="window.location.href='formulario_dev.php'" class="btn btn-outline-warning btn-lg ">Alterar Cadastro</button>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">
        Reativar Cadastro
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
        <label class="form-check-label" for="flexRadioDefault2">
        Desativar Cadastro
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
        <label class="form-check-label" for="flexRadioDefault2">
        Nenhuma das Opções
        </label>
    </div>
    <div class="form-group col-md-4">
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Motivo" required>
    </div>
    <button type="submit" onclick="window.location.href='inicio.php'" class="btn btn-outline-danger btn-lg ">Solicitar</button>
    </br></br></br></br>   
</div>
<?php require_once "../src/views/footer.php" ?>