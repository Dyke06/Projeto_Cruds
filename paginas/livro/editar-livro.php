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
        <div>
            <label for="idLivro">ID</label>
            <input type="text" name="idLivro" value="<?=$dados["idLivro"]?>">
        </div>

        <div>
            <label for="nomeLivro">Nome:</label>
            <input type="text" name="nomeLivro" value="<?=$dados["nomeLivro"]?>">
        </div>

        <div>
            <label for="autorLivro">Autor:</label>
            <input type="text" name="autorLivro" value="<?=$dados["autorLivro"]?>">
        </div>

        <div>
            <label for="editoraLivro">Editora:</label>
            <input type="text" name="editoraLivro" value="<?=$dados["editoraLivro"]?>">
        </div>

        <div>
            <label for="dataLivro">Data de lançamento:</label>
            <input type="date" name="dataLivro" value="<?=$dados["dataLivro"]?>">
        </div>

        <div>
            <label for="estoqueLivro">Estoque:</label>
            <input type="number" name="estoqueLivro" value="<?=$dados["estoqueLivro"]?>">
        </div>

        <div>
            <input type="submit" value = "Atualizar" name="btnAtualizar">
        </div>

    </form>
</div>