<?php

require_once 'backend/backend.php';
$conexao = conectar();

$resultado = exibirPersons($conexao);
?>

<?php include 'header.php' ?>


<div class="container">

<h1>Personagens</h1> 

<section>

<?php while ($linha = mysqli_fetch_assoc($resultado)) : ?>

    <div class="person">
        <img src="images/<?= $linha['imgPerson'] ?>">
        <a> <?= $linha['nomePerson']?></a>
        
    </div>

<?php endwhile ?>

</section>


</div>

<?php include 'footer.php' ?>
    
    
