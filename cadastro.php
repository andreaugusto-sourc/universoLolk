<?php

if(isset($_GET['modo'])) {
    $modo = $_GET['modo'];

    if ($_GET['modo'] == "persons") {
    require_once 'backend/backend.php';
    $conexao = conectar();
    $resultado = exibirMundos($conexao);
        
    }
}

?>
<?php include 'header.php' ?>

<div class="container">

<?php if($modo == "persons") : ?>

    <form class="form" method="POST" action="salvarPerson.php" enctype="multipart/form-data">
    
    <h1>Cadastro de personagem</h1>
    <label for="nomePerson">Nome do personagem: </label>
    <input type="text" id="nomePerson" name="nomePerson">

    <label for="imgPerson">Imagem do Personagem: </label>
    <input type="file" id="imgPerson" name="imgPerson">

    <label for="histPerson">História do personagem: </label>
    <input type="text" id="histPerson" name="histPerson">

    <label for="idMundo">Mundo do personagem: </label>

    <select name="idMundo" id="idMundo">
    <?php while($mundo = mysqli_fetch_assoc($resultado)): ?>
        <option> <?= $mundo['idMundo'] ?> - <?= $mundo['nomeMundo']?> </option>
    <?php endwhile ?>    
    </select>

<?php endif?>

<?php if($modo == "mundos") : ?>

    <form class="form" method="POST" action="salvarMundo.php" enctype="multipart/form-data">

    <h1>Cadastro de Mundo</h1>
    <label for="nomeMundo">Nome do mundo: </label>
    <input type="text" id="nomeMundo" name="nomeMundo">

    <label for="descriMundo">Descrição do mundo: </label>
    <input type="text" name="descriMundo" id="descriMundo">

<?php endif?>
    
    <label></label>
    <input type="submit" value="Cadastrar">

</form>

</div>
<?php include 'footer.php' ?>