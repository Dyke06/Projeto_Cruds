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
        <div>
            <label for="idEditora">ID</label>
            <input type="text" name="idEditora" value="<?=$dados["idEditora"]?>">
        </div>

        <div>
            <label for="nomeEditora">Nome:</label>
            <input type="text" name="nomeEditora" value="<?=$dados["nomeEditora"]?>">
        </div>

        <div>
            <label for="emailEditora">Email:</label>
            <input type="email" name="emailEditora" value="<?=$dados["emailEditora"]?>">
        </div>

        <div>
            <label for="telefoneEditora">Telefone:</label>
            <input type="text" name="telefoneEditora" value="<?=$dados["telefoneEditora"]?>">
        </div>

        <div>
            <label for="siteEditora">Site:</label>
            <input type="text" name="siteEditora" value="<?=$dados["siteEditora"]?>">
        </div>

        <div>
            <input type="submit" value = "Atualizar" name="btnAtualizar">
        </div>

    </form>
</div>