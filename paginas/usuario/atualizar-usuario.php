<header>
    <h3>Atualizar Usuário</h3>
</header>

<?php 
    $idUsuario = $_POST["idUsuario"];
    $nomeUsuario = $_POST["nomeUsuario"]; 
    $cidadeUsuario = $_POST["cidadeUsuario"]; 
    $numeroUsuario = $_POST["numeroUsuario"]; 
    $endereçoUsuario =  $_POST["endereçoUsuario"]; 
    $emailUsuario = $_POST["emailUsuario"]; 

    $sql = "UPDATE tbusuario SET 
    nomeUsuario = '{$nomeUsuario}', 
    cidadeUsuario = '{$cidadeUsuario}', 
    numeroUsuario = '{$numeroUsuario}', 
    endereçoUsuario = '{$endereçoUsuario}',
    emailUsuario = '{$emailUsuario}'
    WHERE idUsuario = '{$idUsuario}'
    ";

    $rs = $conexao -> query($sql);

    if($rs==true){
        print "<script>alert('Cadastro atualizado com sucesso');</script>";
        print "<script>location.href='?menuop=usuario';</script>";
    }
    else{
        print "<script>alert('Erro ao atualizar o cadastro  do usuário.');</script>";
        print "<script>location.href='?menuop=usuario';</script>";
    }
?>