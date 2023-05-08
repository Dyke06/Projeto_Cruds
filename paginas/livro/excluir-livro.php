<header>
    <h3>Excluir Usuario</h3>
</header>
<?php 
    $idLivro = $_GET["idLivro"];
    $sql = "DELETE FROM tbLivro WHERE idLivro= '{$idLivro}'";

    $rs = $conexao -> query($sql);

    if($rs==true){
        print "<script>alert('Cadastro deletado com sucesso');</script>";
        print "<script>location.href='?menuop=livro';</script>";
    }
    else{
        print "<script>alert('Erro ao deletar o usuário.');</script>";
        print "<script>location.href='?menuop=livro';</script>";
    }

?>