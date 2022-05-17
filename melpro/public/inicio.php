<?php

use Database\Database;


?>

<?php require_once "../src/views/header_nav1.php"?>

    <div class="img-login"></br></br>
        <table>                
            <tr>
            <td><img src="../melpro_logotipo.png" alt="logo"/></td> 
            <td>
                <div class="text-end">
                    <b>
                        <h4>- CONECTANDO EMPRESAS E DESENVOLVEDORES PARA O DESENVOLVIMENTO DE UM </br>
                            <p style="text-align:left ;">SISTEMA DE VENDAS EFICIENTE.</p></br>
                            - POSSIBILIDADE DE ESCALAR E LAVANCAR SUAS VENDAS NO E-COMMERCE. </br></br>
                            - OPORTUNIDADE DE SE DESENVOLVER NA ÁREA DE TECNOLOGIA.</br></br>
                        </h4>
                    </b>
                </div>
            </td>
            </tr>
        </table>
        <form method="post" action="recebe.php">
            <div class="row">
                <div class="form-group">
                    <div class="col-8 offset-2">
                        <div class="text-center">
                            <b>CADASTRE GRATUITAMENTE E REALISE</br>
                                O MELHOR PROJETO PARA O SEU NEGÓCIO</b></br></br></br></br>
                            <b>DESENVOLVEDOR &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                EMPRESA</b></br>
                            <button type="button" onclick="window.location.href='formulario_dev.php'"
                            class="text-white bg-dark">CADASTRAR</button>
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            <button type="button" onclick="window.location.href='formulario_empresa.php'"
                            class="text-white bg-dark">CADASTRAR</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>    
    </div>
<?php require_once "../src/views/footer.php" ?>