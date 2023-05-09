<?php 
$idUsuario = $_GET["idUsuario"];
$sql = "SELECT * FROM tbusuario WHERE idUsuario= {$idUsuario}";
$rs = $conexao -> query($sql);
$dados = $rs -> fetch_assoc();
?>

<header>
    <h3>Editar Usuario</h3>
</header>

<div>
    <form action="index.php?menuop=atualizar-usuario" method="POST">
        <div class="mb-3">
            <label class="form-label" for="idUsuario">ID</label>
            <input class="form-control" type="text" name="idUsuario" value="<?=$dados["idUsuario"]?>">
        </div>

        <div class="mb-3">
            <label class="form-label" for="nomeUsuario">Nome:</label>
            <input class="form-control" type="text" name="nomeUsuario" value="<?=$dados["nomeUsuario"]?>">
        </div>

        <div class="mb-3">
            <label class="form-label" for="cidadeUsuario">Cidade:</label>
            <input class="form-control" type="text" name="cidadeUsuario" value="<?=$dados["cidadeUsuario"]?>">
        </div>

        <div class="mb-3">
            <label class="form-label" for="numeroUsuario">Telefone:</label>
            <input class="form-control" type="text" name="numeroUsuario" value="<?=$dados["numeroUsuario"]?>">
        </div>

        <div class="mb-3">
            <label class="form-label" for="endereçoUsuario">Endereço:</label>
            <input class="form-control" type="text" name="endereçoUsuario" value="<?=$dados["endereçoUsuario"]?>">
        </div>

        <div class="mb-3">
            <label class="form-label" for="emailUsuario">Email:</label>
            <input class="form-control" type="email" name="emailUsuario" value="<?=$dados["emailUsuario"]?>">
        </div>

        <div class="mb-3">
            <input class="btn btn-success" type="submit" value = "Atualizar" name="btnAtualizar">
        </div>

    </form>
</div>