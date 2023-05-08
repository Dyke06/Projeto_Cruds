<header>
    <h3>Excluir Editora</h3>
</header>
<?php 
    $idEditora = $_GET["idEditora"];
    $sql = "DELETE FROM tbEditora WHERE idEditora= '{$idEditora}'";

    $rs = $conexao -> query($sql);

    if($rs==true){
        print "<script>alert('Cadastro deletado com sucesso');</script>";
        print "<script>location.href='?menuop=editora';</script>";
    }
    else{
        print "<script>alert('Erro ao deletar o usuário.');</script>";
        print "<script>location.href='?menuop=editora';</script>";
    }

?>