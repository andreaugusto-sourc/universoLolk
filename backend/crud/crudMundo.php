<?php

function adicionarMundo($conexao,$nomeMundo,$descriMundo) {

    $comando = "INSERT INTO mundos (nomeMundo,descriMundo) values ('$nomeMundo','$descriMundo')";

    $resultado = mysqli_query($conexao,$comando);
    return $resultado;

}
function exibirMundos($conexao) {

    $comando = "SELECT * FROM mundos";

    $resultado = mysqli_query($conexao,$comando);
    return $resultado;
}
function exibirMundo($conexao,$idMundo) {

    $comando = "SELECT * FROM mundos where idMundo = '$idMundo'";

    $resultado = mysqli_query($conexao,$comando);
    return $resultado;
}
function deletarMundo ($conexao,$idMundo) {
    
    $comando = "DELETE FROM mundos where idMundo = '$idMundo'";

    $resultado = mysqli_query($conexao,$comando);
    return $resultado;
}










?>