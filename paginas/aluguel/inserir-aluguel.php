<?php 
    $livroAluguel = $_POST["livroAluguel"]; 
    $nomeAluguel = $_POST["nomeAluguel"]; 
    $dataAluguel = $_POST["dataAluguel"]; 
    $devolucaoAluguel =  $_POST["devolucaoAluguel"]; 
    $statusAluguel = "Não devolvido";
    $data = $dataAluguel; // Data inicial
    $novaData = date('Y-m-d', strtotime($data . ' +1 month'));

    if($devolucaoAluguel < $dataAluguel or $devolucaoAluguel > $novaData or $devolucaoAluguel == $dataAluguel){
        print "<script>alert('Data invalida!');</script>";
        print "<script>location.href='?menuop=aluguel';</script>";
    }else{
        $sql = "SELECT * FROM tblivro";
        $rs = $conexao -> query($sql);
            while($row = $rs -> fetch_object()){
                if($livroAluguel == $row -> nomeLivro and $row->estoqueLivro > 0){
                    $sql = "INSERT INTO tbaluguel(
                        livroAluguel, 
                        nomeAluguel,
                        dataAluguel,  
                        devolucaoAluguel,
                        statusAluguel)
                        VALUES(
                            '{$livroAluguel}', 
                            '{$nomeAluguel}',  
                            '{$dataAluguel}',   
                            '{$devolucaoAluguel}', 
                            '{$statusAluguel}' 
                        )
                        ";

                        $rs = $conexao -> query($sql);
                        //atualizar os valore de estoque na tabela livro
                        $update = "UPDATE tblivro SET estoqueLivro = estoqueLivro - 1 WHERE nomeLivro = '{$livroAluguel}'";
                        $rs2 = $conexao -> query($update);

                        $update3 = "UPDATE tblivro SET alugadoLivro = alugadoLivro + 1 WHERE nomeLivro = '{$livroAluguel}'";
                        $rs3 = $conexao -> query($update3);
            
                        print "<script>alert('Livro alugado com sucesso');</script>";
                        print "<script>location.href='?menuop=aluguel';</script>";
                                
            }
        }
        print "<script>alert('Livro esgotado.');</script>";
        print "<script>location.href='?menuop=aluguel';</script>";
}  
?>