<?php include 'header.php' ?>

<div class="container">

<form class="form" method="POST" action="salvarPerson.php" enctype="multipart/form-data">

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

    <label></label>
    <input type="submit" value="Cadastrar">

</form>

</div>
<?php include 'footer.php' ?>