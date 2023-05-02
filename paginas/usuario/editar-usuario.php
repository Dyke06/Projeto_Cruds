<?php 
$idUsuario = $_GET["idUsuario"];
$sql = "SELECT * FROM tbusuario WHERE idUsuario= {$idUsuario}";
$rs = $conexao -> query($sql);
$dados = mysqli_fetch_assoc($rs);
?>

<header>
    <h3>Editar Usuario</h3>
</header>

<div>
    <form action="index.php?menuop=atualizar-usuario" method="POST">
        <div>
            <label for="idUsuario">ID</label>
            <input type="text" name="idUsuario" value="<?=$dados["idUsuario"]?>">
        </div>

        <div>
            <label for="nomeUsuario">Nome:</label>
            <input type="text" name="nomeUsuario" value="<?=$dados["nomeUsuario"]?>">
        </div>

        <div>
            <label for="cidadeUsuario">Cidade:</label>
            <input type="text" name="cidadeUsuario" value="<?=$dados["cidadeUsuario"]?>">
        </div>

        <div>
            <label for="endereçoUsuario">Endereço:</label>
            <input type="text" name="endereçoUsuario" value="<?=$dados["endereçoUsuario"]?>">
        </div>

        <div>
            <label for="emailUsuario">Email:</label>
            <input type="email" name="emailUsuario" value="<?=$dados["emailUsuario"]?>">
        </div>

        <div>
            <input type="submit" value = "Atualizar" name="btnAtualizar">
        </div>

    </form>
</div>