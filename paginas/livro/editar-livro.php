<?php 
$idLivro = $_GET["idLivro"];
$sql = "SELECT * FROM tblivro WHERE idLivro= {$idLivro}";
$rs = $conexao -> query($sql);
$dados = $rs -> fetch_assoc();
?>

<header>
    <h3>Editar Livros</h3>
</header>

<div>
    <form action="index.php?menuop=atualizar-livro" method="POST">
        <div class="mb-3">
            <label class="form-label" for="idLivro">ID</label>
            <input class="form-control" type="text" name="idLivro" value="<?=$dados["idLivro"]?>">
        </div>

        <div class="mb-3">
            <label class="form-label" for="nomeLivro">Nome:</label>
            <input class="form-control" type="text" name="nomeLivro" value="<?=$dados["nomeLivro"]?>">
        </div>

        <div class="mb-3">
            <label class="form-label" for="autorLivro">Autor:</label>
            <input class="form-control" type="text" name="autorLivro" value="<?=$dados["autorLivro"]?>">
        </div>

        <div class="mb-3">
            <label class="form-label" for="editoraLivro">Editora:</label>
            <input class="form-control" type="text" name="editoraLivro" value="<?=$dados["editoraLivro"]?>">
        </div>

        <div class="mb-3">
            <label class="form-label" for="dataLivro">Data de lançamento:</label>
            <input class="form-control" type="date" name="dataLivro" value="<?=$dados["dataLivro"]?>">
        </div>

        <div class="mb-3">
            <label class="form-label" for="estoqueLivro">Estoque:</label>
            <input class="form-control" type="number" name="estoqueLivro" value="<?=$dados["estoqueLivro"]?>">
        </div>

        <div>
            <input class="btn btn-primary" type="submit" value = "Atualizar" name="btnAtualizar">
        </div>

    </form>
</div>