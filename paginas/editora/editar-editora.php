<?php 
$idEditora = $_GET["idEditora"];
$sql = "SELECT * FROM tbeditora WHERE idEditora= {$idEditora}";
$rs = $conexao -> query($sql);
$dados = $rs -> fetch_assoc();
?>

<header>
    <h3>Editar Editoras</h3>
</header>

<div>
    <form action="index.php?menuop=atualizar-editora" method="POST">
        <div class="mb-3">
            <label class="form-label" for="idEditora">ID</label>
            <input class="form-control" type="text" name="idEditora" value="<?=$dados["idEditora"]?>">
        </div>

        <div class="mb-3">
            <label class="form-label" for="nomeEditora">Nome:</label>
            <input class="form-control" type="text" name="nomeEditora" value="<?=$dados["nomeEditora"]?>">
        </div>

        <div class="mb-3">
            <label class="form-label" for="emailEditora">Email:</label>
            <input class="form-control" type="email" name="emailEditora" value="<?=$dados["emailEditora"]?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label" for="telefoneEditora">Telefone:</label>
            <input class="form-control" type="text" name="telefoneEditora" value="<?=$dados["telefoneEditora"]?>">
        </div>

        <div class="mb-3">
            <label class="form-label" for="siteEditora">Site:</label>
            <input class="form-control" type="text" name="siteEditora" value="<?=$dados["siteEditora"]?>">
        </div>

        <div class="mb-3">
            <input class="btn btn-primary" type="submit" value = "Atualizar" name="btnAtualizar">
        </div>

    </form>
</div>