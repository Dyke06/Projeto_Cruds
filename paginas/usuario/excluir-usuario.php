<header>
    <h3>Excluir Usuario</h3>
</header>
<?php 
    $idUsuario = $_GET["idUsuario"];
    $sql = "DELETE FROM tbusuario WHERE idUsuario= '{$idUsuario}'";

    $rs = $conexao -> query($sql);

    if($rs==true){
        print "<script>alert('Cadastro deletado com sucesso');</script>";
        print "<script>location.href='?menuop=usuario';</script>";
    }
    else{
        print "<script>alert('Erro ao deletar o usuário.');</script>";
        print "<script>location.href='?menuop=usuario';</script>";
    }

?>