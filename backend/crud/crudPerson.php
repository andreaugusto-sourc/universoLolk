<?php

function adicionarPerson($conexao,$nomePerson,$imgPerson,$histPerson,$idMundo) {

    $comando = "INSERT INTO persons (nomePerson,imgPerson,histPerson,idMundo) values ('$nomePerson','$imgPerson','$histPerson','$idMundo')";

    $resultado = mysqli_query($conexao,$comando);
    return $resultado;
}
function exibirPersons($conexao) {

    $comando = "SELECT * FROM persons";

    $resultado = mysqli_query($conexao,$comando);
    return $resultado;
}
function exibirPerson ($conexao,$idPerson) {

    $comando = "SELECT * FROM persons where idPerson = '$idPerson'";

    $resultado = mysqli_query($conexao,$comando);
    return $resultado;
}
function deletarPerson ($conexao,$idPerson) {

    $comando = "DELETE FROM persons where idPerson = '$idPerson'";

    $resultado = mysqli_query($conexao,$comando);
    return $resultado;
}


?>