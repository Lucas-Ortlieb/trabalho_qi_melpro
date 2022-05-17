<?php 
require_once "../src/views/header.php";
require_once "../src/views/header_nav2.php";
?>
<div class="container mt-4 bg-success" style="background-color:darkgrey;">
    </br></br></br>
    <h1>Sua comissão é de: R$xxx,xx</h1><hr>
    <div class="form-group col-md-4">
        <div class="input-group-prepend">
            <span class="input-group-text">Solicitar Resgate: R$<input type="number" class="form-control" aria-label="Quantia"></span>
        </div>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">
        Chave PIX cadastrada
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
        <label class="form-check-label" for="flexRadioDefault2">
        Outra chave PIX
        </label>
    </div>
    <div class="form-group col-md-4">
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Descreva sua chave PIX" required>
    </div>
    <button type="submit" onclick="window.location.href='pagina_dev.php'" class="btn btn-outline-warning btn-lg ">Solicitar Resgate</button>
    </br></br></br></br></br></br></br>   
</div>
<?php require_once "../src/views/footer.php" ?>