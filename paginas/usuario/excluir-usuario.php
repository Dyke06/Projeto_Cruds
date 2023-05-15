<header>
    <h3>Excluir Usuario</h3>
</header>
<?php 
    //id do registro que vai ser deletado
    $idUsuario = $_GET["idUsuario"];
    //comando que deleta os campos
    $sql = "DELETE FROM tbusuario WHERE idUsuario= '{$idUsuario}'";
    //executa o comando
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