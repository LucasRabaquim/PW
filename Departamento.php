<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departamento</title>
    <?php
        include 'conexao.php'; 
       // $consulta = $cn->query('select * from vw_ExibeProd');
    ?>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
  <div class="formulario">
    <form>
      <h1 class="titulo">Cadastro de Departamento</h1>
      <div class="form-group">
        <label for="Nome">Nome do departamento</label>
        <input type="text" class="form-control" id="Nome" placeholder="Insira o departamento">
      </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>  
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
    padding:10px;
  }
  .form-group button{
    margin-top:5px;
    margin:10px;
    position:absolute !important;
  }
  .titulo{
    font-size:2em;
    width:100%;
    text-align:center;
  }
  </style>