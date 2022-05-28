<?php

function conectar() {
    $conexao = mysqli_connect("localhost","root","","universoLolk");
    return $conexao;
}

function uploadImagem ($imagem) {

    if (isset($_FILES[$imagem])) {
        $imagem = $_FILES[$imagem];
    
        if ($imagem['size'] > 4003269) {
            die("arquivo muito grande! Máximo de 3MB");
        }
    
        if($imagem['error']) {
            die("Falha ao enviar o arquivo.");
        }
        $diretorio = "images/";
    
        $imagemCaminho = $imagem['name'];
    
    
        $extensao = strtolower(pathinfo($imagemCaminho,PATHINFO_EXTENSION));
        if ($extensao !=  "jpg" && $extensao != 'png' && $extensao != "webp" &&  $extensao != "jpeg") {
            die("Tipo de arquivo inválido!");
        }
    
        $alocacao = move_uploaded_file($imagem["tmp_name"], $diretorio . $imagemCaminho . "." . $extensao);
        if($alocacao) {
            echo "Sucesso na alocação da imagem";
            echo "<br> <a href=\"images/$imagemCaminho.$extensao\">Ver</a> ";
    
    
        }else{
            echo " Falha";
        }

        $imagem = $imagemCaminho . "." . $extensao;
        return $imagem;
    
    }

}




?>