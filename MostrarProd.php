<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Mostrando Produtos</title>
    <?php
        include 'conexao.php'; 
        session_start();

        $consulta = $cn->query("select nomeUsuario from tbl_usuario where idUsuario = '$_SESSION[ID]'");
        $exibe = $consulta->fetch(PDO::FETCH_ASSOC);
        $nome = $exibe['nomeUsuario'];
        $consulta = $cn->query('select * from tbProduto');
      
    ?>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><?php echo $nome;?></a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <button class="btn btn-outline-success my-2 my-sm-0">Sair</button>
  </div>
</nav>

    <?php
        while($exibe = $consulta->fetch(PDO::FETCH_ASSOC)){
            echo $exibe['cod'].'<br>';
            echo $exibe['nomeprod'].'<br>';
            echo $exibe['precoprod'].'<br>';
            echo $exibe['cod_cat'].'<br><br>';
        }
    ?>
</body>
</html>