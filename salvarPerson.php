<?php

require_once 'backend/backend.php';

$conexao = conectar();

$nomePerson = $_POST['nomePerson'];

$mundoPerson = $_POST['mundoPerson'];

$imgPerson = uploadImagem('imgPerson');

$histPerson = $_POST['histPerson'];

$resultado = adicionarPerson($conexao,$nomePerson,$mundoPerson,$imgPerson,$histPerson);

if ($resultado) {
    echo "Sucesso na inserção";
    echo "<br> <a href='index.php'>Página inicial</a>";
    echo "<br> <a href='admin.php'>Admin</a>";
}else{
    echo "Sem sucesso na inserção";
    
}

?>