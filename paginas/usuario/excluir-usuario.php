<header>
    <h3>Excluir Usuario</h3>
</header>
<?php 
    $idUsuario = mysqli_real_escape_string($conexao, $_GET["idUsuario"]);
    $sql = "DELETE FROM tbusuario WHERE idUsuario= '{$idUsuario}'";

    mysqli_query($conexao, $sql) or die("Erro ao excluir o registro");

    echo "Registro excluido com sucesso! "

?>