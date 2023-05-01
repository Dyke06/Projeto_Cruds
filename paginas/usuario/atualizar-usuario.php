<header>
    <h3>Atualizar Usuário</h3>
</header>

<?php 
    $idUsuario = $_POST["idUsuario"];
    $nomeUsuario = $_POST["nomeUsuario"]; 
    $cidadeUsuario = $_POST["cidadeUsuario"]; 
    $endereçoUsuario =  $_POST["endereçoUsuario"]; 
    $emailUsuario = $_POST["emailUsuario"]; 
    $sql = "UPDATE tbusuario SET 
    nomeUsuario = '{$nomeUsuario}', 
    cidadeUsuario = '{$cidadeUsuario}',
    endereçoUsuario = '{$endereçoUsuario}',
    emailUsuario = '{$emailUsuario}'
    WHERE idUsuario = '{$idUsuario}'
    ";
    mysqli_query($conexao, $sql) or die("Erro ao executar a consulta. " . mysqli_error($conexao));

    echo "O registro foi atualizado com sucesso!";
?>