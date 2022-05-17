<?php
    if(isset($_POST['email']) ) {
        $email = $_POST['email'];
    } else {
        $email = null;
    }
    if(isset($_POST['senha']) ) {
        $senha = $_POST['senha'];
    } else {
        $senha = null;
    }

require_once "../src/views/header.php";
require_once "../src/views/header_nav2.php";
?>


<div class="container mt-4">
    
    <div class="form-group">
        
        <form method="get" action="pega_checkbox.php">
        <div class="text-center">
        <a href="https://www.w3schools.com/html/">
        <img src="https://programadoresdepre.com.br/wp-content/uploads/2020/04/html.png" alt="HTML tutorial" width="32" height="32" />
        <p> Linguagem HTML:</br>- Tags </br>- Norma </br></p></a>
        <a href="https://www.w3schools.com/css/default.asp">
        <img src="https://cdn-icons-png.flaticon.com/512/919/919826.png" alt="HTML tutorial" width="32" height="32" />
        <p> Linguagem CSS:</br>- Tags </br>- Norma </br></p></a>
        <a href="https://www.w3schools.com/php/default.asp">
        <img src="https://logospng.org/download/php/logo-php-512.png" alt="HTML tutorial" width="32" height="32" />
        <p> Linguagem PHP:</br>- Tags </br>- Norma </br></p></a>
        <a href="https://www.w3schools.com/js/default.asp">
        <img src="https://logospng.org/download/javascript/logo-javascript-icon-512.png" alt="HTML tutorial" width="32" height="32" />
        <p> Linguagem javascript:</br>- Tags </br>- Norma </br></p></a>
        </div>
        </form>
    </div>
</div>

<?php require_once "../src/views/footer.php"; ?>