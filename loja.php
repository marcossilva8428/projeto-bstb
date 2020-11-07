<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Produtos - Full Stack Eletro</title>
    <link rel="stylesheet" href="./CSS/estilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>

<!-- Inicio do menu superior -->
    <?php
        include_once('menu.html');
    ?>
<!-- Inicio do menu superior -->

<main>

<!-- Inicio endereço de lojas-->
    <br><br>
    <h2>Nossas lojas</h2>
    <hr>
    <section>
        <div class="grupoLojas">
            <div class="grupoLoja">
                <h3>Rio de Janerio</h3>
                <ul ul class="listNone">
                    <li>Avenida Presidente Fargas, 5000</li>
                    <li>10° andar</li>
                    <li>Centro</li>
                    <li>(21) 3333-3333</li>
                </ul>
            </div>
        <div class="grupoLoja">
                <h3>São Paulo</h3>
                <ul ul class="listNone">
                    <li>Avenida Avenida Paulista, 985</li>
                        <li>3° andar</li>
                        <li>Jardins</li>
                        <li>(11) 4444-4444</li>
                </ul>
            </div>
            <div class="grupoLoja">
                <h3 >Santa Catarina</h3>                
                <ul class="listNone">
                    <li>Rua Major &Aacute;vila</li>
                    <li>370</li>
                    <li >Vila Mariana</li>
                    <li>(47) 5555-5555</li>
                    
                </ul>
            </div>
        </div>
    </section>
<!-- Fim endereço de lojas-->
</main>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <footer id="rodape">
        <p id="formas_pagamento"><b>Formas de pagamento:</b></p>
        <img src="./imagens/formas-pagamento.png">
        <p>&copy;Recode Pro</p>
        <p>Desenvolvido por Marcos dos Anjos Bernardes da Silva Junior</p>
    </footer>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</html>