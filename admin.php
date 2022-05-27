
<?php
require_once 'backend/backend.php';
$conexao = conectar();

$resultado = exibirPersons($conexao);

?>
<?php include 'header.php' ?>

<div class="container">

<aside id="caixa-funcoes">
    <a href="cadastro.php?modo=persons"><ion-icon name="add-circle"></ion-icon> Personagem</a>
    <a href="cadastro.php?modo=mundos"><ion-icon name="add-circle"></ion-icon> Mundo</a>
    
</aside>

<section>
    
    <?php while ($linha = mysqli_fetch_assoc($resultado)): ?>
    <div class="person">
        <a href=""><img src="images/<?= $linha['imgPerson'] ?>"></a>
        <a> <?= $linha['nomePerson']?></a>
        <a href="deletarPerson.php?id=<?= $linha['idPerson']?>">Deletar</a>
        <a href="editarPerson.php?id=<?= $linha['idPerson']?>">Editar</a>
    </div>


    <?php endwhile ?>    

    </section>
</div>

<?php include 'footer.php' ?>
