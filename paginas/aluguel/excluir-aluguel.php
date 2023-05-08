<header>
    <h3>Excluir Alugueis</h3>
</header>
<?php 
    $idAluguel = $_GET["idAluguel"];
    $sql = "DELETE FROM tbaluguel WHERE idAluguel= '{$idAluguel}'";

    $rs = $conexao -> query($sql);

    if($rs==true){
        print "<script>alert('Cadastro deletado com sucesso');</script>";
        print "<script>location.href='?menuop=aluguel';</script>";
    }
    else{
        print "<script>alert('Erro ao deletar o usuário.');</script>";
        print "<script>location.href='?menuop=aluguel';</script>";
    }

?>