<?php

require_once 'backend/backend.php';

$conexao = conectar();

$nomeMundo = $_POST['nomeMundo'];

$descriMundo = $_POST['descriMundo'];

$resultado = adicionarMundo($conexao,$nomeMundo,$descriMundo);

if ($resultado) {
    echo "Sucesso na inserção";
    echo "<br> <a href='index.php'>Página inicial</a>";
    echo "<br> <a href='admin.php'>Admin</a>";
}else{
    echo "Sem sucesso na inserção";
    
}




?>