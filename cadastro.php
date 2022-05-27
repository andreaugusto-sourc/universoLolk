<?php

if(isset($_GET['modo'])) {
    $modo = $_GET['modo'];
}else{
    $modo = "persons";
}

?>
<?php include 'header.php' ?>

<div class="container">

<form class="form" method="POST" action="salvarPerson.php" enctype="multipart/form-data">

<?php if($modo == "persons") : ?>
    <h1>Cadastro de personagem</h1>
    <label for="nomePerson">Nome do personagem: </label>
    <input type="text" id="nomePerson" name="nomePerson">

    <label for="mundoPerson">Mundo do personagem: </label>
    <select name="mundoPerson" id="mundoPerson">
        <option>Nova Terra</option>
        <option>Animus</option>
    </select>

    <label for="imgPerson">Imagem do Personagem: </label>
    <input type="file" id="imgPerson" name="imgPerson">

    <label for="histPerson">História do personagem: </label>
    <input type="text" id="histPerson" name="histPerson">

<?php endif?>

<?php if($modo == "mundos") : ?>
    <h1>Cadastro de Mundo</h1>
    <label for="nomeMundo">Nome do mundo: </label>
    <input type="text" id="nomeMundo" name="nomeMundo">

    <label for="descriMundo">Descrição do mundo: </label>
    <input type="text" name="descriMundo" id="descriMundo">

    <label for="imgMundo">Imagem do mundo: </label>
    <input type="file" id="imgMundo" name="imgMundo">

<?php endif?>
    
    <label></label>
    <input type="submit" value="Cadastrar">

</form>

</div>
<?php include 'footer.php' ?>