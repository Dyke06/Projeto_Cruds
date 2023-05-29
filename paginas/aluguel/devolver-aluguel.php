
<?php 
$data = date("Y-m-d");
$idAluguel = $_GET["idAluguel"];

$sql = "SELECT * FROM tbaluguel where idALuguel = {$idAluguel}";
$rs = $conexao -> query($sql);
$row = $rs -> fetch_assoc();

$livroAluguel = $row["livroAluguel"];
$Ddevolucao =  $row["dataAluguel"];
$Pdevolucao =  $row["devolucaoAluguel"];

if( $Pdevolucao >= $Ddevolucao and $Pdevolucao >= $data){

    $update = "UPDATE tbaluguel SET statusAluguel = '(No prazo)' WHERE idAluguel = '{$idAluguel}'";
    $rs2 = $conexao -> query($update);

    $update3 = "UPDATE tblivro SET estoqueLivro = estoqueLivro + 1 WHERE nomeLivro = '{$livroAluguel}'";
    $rs3 = $conexao -> query($update3);

    $update4 = "UPDATE tblivro SET alugadoLivro = alugadoLivro - 1 WHERE nomeLivro = '{$livroAluguel}'";
    $rs4 = $conexao -> query($update4);

    print "<script>alert('Livro devolvido com sucesso');</script>";
    print "<script>location.href='?menuop=aluguel';</script>";

}elseif($Pdevolucao > $Ddevolucao and $Pdevolucao <= $data){

    $update = "UPDATE tbaluguel SET statusAluguel = '(Com atraso)' WHERE idAluguel = '{$idAluguel}'";
    $rs2 = $conexao -> query($update);

    $update3 = "UPDATE tblivro SET estoqueLivro = estoqueLivro + 1 WHERE nomeLivro = '{$livroAluguel}'";
    $rs3 = $conexao -> query($update3);

    $update4 = "UPDATE tblivro SET alugadoLivro = alugadoLivro - 1 WHERE nomeLivro = '{$livroAluguel}'";
    $rs4 = $conexao -> query($update4);

    print "<script>alert('Livro devolvido com sucesso');</script>";
    print "<script>location.href='?menuop=aluguel';</script>";
    
}else{
    print "<script>alert('erro');</script>";
    
    
}




?>