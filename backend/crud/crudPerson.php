<?php


function adicionarPerson($conexao,$nomePerson,$mundoPerson,$imgPerson,$histPerson) {

    $comando = "INSERT INTO persons (nomePerson,mundoPerson,imgPerson,histPerson) values ('$nomePerson','$mundoPerson','$imgPerson','$histPerson')";

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