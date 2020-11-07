<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "fseletro";


    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn){

        die("A conexão ao Banco de dados falhou".mysqli_connect_error());
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset='UTF-8'>
    <title>Produtos - Full Stack Eletro</title>
    <link rel="stylesheet" href="./CSS/estilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="./js/funcoes.js"></script>
</head>

<body>
    <div class="container">
    <!-- Inicio do menu superior -->
    <?php
        include_once('menu.html');
    ?>
    </div>
<!-- Fim do menu superior -->
 <main>
    <br><br>
    <h2>Produtos</h2>
    <hr>
<!-- Inicio tabela lateral de categorias -->
    <aside class="categorias">

        <h3> Categorias </h3>

        <ol>
            <li onclick="exibir_todos()">Todos (10)</li>
            <li onclick="exibir_categoria('geladeira')">Geladeiras (1)</li>
            <li onclick="exibir_categoria('fogao')">Fogões (2)</li>
            <li onclick="exibir_categoria('microondas')">Microondas (3)</li>
            <li onclick="exibir_categoria('lavaR')">Lavadora de roupas (2)</li>
            <li onclick="exibir_categoria('lavaL')">Lava-louças (2)</li>   
        </ol>
    </aside>
<!-- Fim tabela lateral de categorias -->

<!-- Inicio tabela de produtos-->
   <div class="produtos">

        <?php

            $sql = "select * from produto";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
            while($rows = $result-> fetch_assoc()){
        ?>

        
        <div class="produto" id="<?php echo $rows["categoria"];?>">
            <img class="itens" img src="<?php echo $rows["imagem"];?>" width="120px" onclick="zoom(this)">

            <br>
            <p><?php echo $rows["descricao"];?></p>
            <hr>
            <strike>R$<?php echo $rows ["preco"];?></strike>
            <br>
            <p class="preco">R$<?php echo $rows["precofinal"];?></p>
            <br>
        </div>


    
        <?php
                }
             } else {
                echo "Nenhum produto cadastrado!";
             }

        ?>

    </div>
     <!-- Fim tabela de produtos -->
</main>

    <br><br><br><br><br><br>

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