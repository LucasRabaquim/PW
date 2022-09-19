<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionário</title>
    <?php
        include 'conexao.php'; 
    ?>
 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
  <div class="formulario">
    <form action="validarUsuario.php" method="post" >
      <h1 class="titulo">Login de usuário</h1>
      <div class="form-group">
        <label for="Nome">Nome</label>
        <input type="text" class="form-control" id="Nome" name="txtnome" aria-describedby="emailHelp" placeholder="Insira seu nome">
      </div>
      <div class="form-group">
        <label for="Senha">Senha</label>
        <input type="password" class="form-control" id="Senha" name="txtsenha" placeholder="Insira sua senha">
        <button type="submit" class="btn btn-primary">Entrar</button>  
      </div>
    </form>
  </div>
</body>
</html>
<style>
  .form-group{
    width:800px !important;
    height:120px !important;
    padding-left:10%;
  }
  .form-group input,.form-group select{
    width:80% !important;
  }
  body{
    display:flex;
    align-itens:center;
    justify-content:center;
  }
  .formulario{
    margin-top:10%;
    border:1px solid #000;
    box-shadow:5px 5px #000;
  }
  .form-group button{
    margin-top:5px;
  }
  .titulo{
    font-size:2em;
    width:100%;
    text-align:center;
  }
  </style>