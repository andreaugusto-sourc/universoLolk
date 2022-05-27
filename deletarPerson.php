<?php

require_once 'backend/backend.php';

$conexao = conectar();

$idPerson = $_GET['id'];

$resultado = deletarPerson($conexao,$idPerson);

if ($resultado) {
    echo "Sucesso na remoção";
    echo "<br> <a href='index.php'>Página inicial</a>";
    echo "<br> <a href='admin.php'>Admin</a>";
}else{
    echo "Sem sucesso na remoção";
    
}

?>