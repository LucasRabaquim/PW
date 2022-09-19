<?php
    include 'conexao.php';
    session_start();
    $nome = $_POST['txtnome'];
    $senha = $_POST['txtsenha'];
    $consulta = $cn->query("select * from tbl_usuario where nomeUsuario = '$nome'");
   
    if($consulta -> rowCount() == 1){
        $usuario = $consulta->fetch(PDO::FETCH_ASSOC);
        $_SESSION['ID'] = $usuario['idUsuario'];
        
        header('location:MostrarProd.php');
    }
?>