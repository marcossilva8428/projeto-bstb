<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "fseletro";


    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn){

        die("A conexão ao Banco de dados falhou".mysqli_connect_error());
    }

    if(isset($_POST['nome']) && isset($_POST['prod'])&& isset($_POST['quant'])&& isset($_POST['ende'])){
        $nome = $_POST['nome'];
        $prod = $_POST['prod'];
        $quant = $_POST['quant'];
        $ende = $_POST['ende'];
        $sql = "insert into pedidos (nome, prod, quant, ende) values('$nome','$prod','$quant','$ende')";
        $result = $conn->query($sql);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Produtos - Full Stack Eletro</title>
    <link rel="stylesheet" href="./CSS/estilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
     <div class="container">
    <!-- Inicio do menu superior -->
    <?php
        include_once('menu.html');
    ?>
    </div>
    <!-- Fim do menu superior -->
    <br><br>

    <h2>Pedidos</h2>
    </header>
    <hr>
          
    <!-- Inicio formulario de pedido -->
        <form method="post" action="">
            <h4>Nome: </h4>
            <input class="nome" type="text" name="nome" style="width: 400px;">
            <h4>Produto: </h4>
            <input class="nome" type="text" name="prod" style="width: 400px;">
            <h4>Quantidade: </h4>
            <input class="nome" type="text" name="quant" style="width: 400px;">
            <h4>Endereco: </h4>
            <input class="nome" type="text" name="ende" style="width: 400px;">
            <br>
            <button class="btn btn-primary">Enviar</button>
        </form>
      <!--Teste de envio de pedido-->
      <!--<?php

            $sql = "select * from pedidos";
    $result = $conn->query($sql);

    if($result->num_rows > 0){

    echo "Pedido enviado!";
    
            } else {
             echo "Nenhum comentario ainda!";
            }

    ?>
    -->
    <!--Fim do Teste de envio de pedido-->
    
    </main>
    <!-- Fim formulario de pedido -->
    <br><br><br>

    <div class="container-fluid bg-danger">
    <footer id="rodape">

        <p id="formas_pagamento"><b>Formas de pagamento:</b></p>
        <img src="./imagens/formas-pagamento.png">
        <p>&copy;Recode Pro</p>
    <p>Desenvolvido por Marcos dos Anjos Bernardes da Silva Junior</p>

    </footer>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</html>