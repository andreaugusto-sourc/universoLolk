<?php

require_once 'backend/backend.php';

$conexao = conectar();

$nomePerson = $_POST['nomePerson'];

$imgPerson = uploadImagem('imgPerson');

$histPerson = $_POST['histPerson'];

$idMundo = preg_replace("/[A-Za-z\-]+/","", $_POST['idMundo']);

$resultado = adicionarPerson($conexao,$nomePerson,$imgPerson,$histPerson,$idMundo);

if ($resultado) {
    echo "Sucesso na inserção";
    echo "<br> <a href='index.php'>Página inicial</a>";
    echo "<br> <a href='admin.php'>Admin</a>";
}else{
    echo "Sem sucesso na inserção";
    
}

?>