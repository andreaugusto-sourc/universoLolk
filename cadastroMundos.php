<?php include 'header.php' ?>

<div class="container">

<form class="form" method="POST" action="salvarMundo.php" enctype="multipart/form-data">

    <label for="nomeMundo">Nome do mundo: </label>
    <input type="text" id="nomeMundo" name="nomeMundo">

    <label for="descriMundo">Descrição do mundo: </label>
    <input type="text" name="descriMundo" id="descriMundo">

    <label for="imgMundo">Imagem do mundo: </label>
    <input type="file" id="imgMundo" name="imgMundo">

    <label></label>
    <input type="submit" value="Cadastrar">

</form>

</div>
<?php include 'footer.php' ?>