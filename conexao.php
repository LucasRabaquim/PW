<?php
    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '12345678';
    $banco = 'db_b';
    $cn = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);
?>