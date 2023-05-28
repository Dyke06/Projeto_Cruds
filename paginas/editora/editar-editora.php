<?php 
$idEditora = $_GET["idEditora"];
$sql = "SELECT * FROM tbeditora WHERE idEditora= {$idEditora}";
$rs = $conexao -> query($sql);
$dados = $rs -> fetch_assoc();
?>

<center>
    <header class="mt-3 mb-3">
        <h3>Editar Editoras</h3>
    </header>


<div>
    <form action="index.php?menuop=atualizar-editora" method="POST">
        <div class="mb-3 col-7">
            <label class="form-label" for="idEditora">ID</label>
            <input class="form-control" type="text" name="idEditora" value="<?=$dados["idEditora"]?>">
        </div>

        <div class="mb-3 col-7">
            <label class="form-label" for="nomeEditora">Editora:</label>
            <input class="form-control" type="text" name="nomeEditora" value="<?=$dados["nomeEditora"]?>">
        </div>

        <div class="mb-3 col-7">
            <label class="form-label" for="emailEditora">Email:</label>
            <input class="form-control" type="email" name="emailEditora" value="<?=$dados["emailEditora"]?>" required>
        </div>

        <div class="mb-3 col-7">
            <label class="form-label" for="telefoneEditora">Telefone:</label>
            <input class="form-control" type="text" name="telefoneEditora" value="<?=$dados["telefoneEditora"]?>">
        </div>

        <div class="mb-3 col-7">
            <label class="form-label" for="siteEditora">Site:</label>
            <input class="form-control" type="text" name="siteEditora" value="<?=$dados["siteEditora"]?>">
        </div>

        <div class="mb-3">
            <input class="btn btn-primary" type="submit" value = "Atualizar" name="btnAtualizar">
            <a href="?menuop=editora" class="btn btn-dark">Voltar</a>
        </div>

    </form>
</div>
</center>