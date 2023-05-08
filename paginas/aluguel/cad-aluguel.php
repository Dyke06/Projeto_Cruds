<header>
    <h3>Cadastro de Aluguel</h3>
</header>


<div>
    <form action="?menuop=inserir-aluguel" method="POST">
        <div>
            <label for="livroAluguel">Livro:</label>
            <input type="text" name="livroAluguel">
        </div>

        <div>
            <label for="nomeAluguel">Nome:</label>
            <input type="text" name="nomeAluguel">
        </div>

        <div>
            <label for="dataAluguel">Data do aluguel:</label>
            <input type="date" name="dataAluguel">
        </div>

        <div>
            <label for="devolucaoAluguel">Devolução:</label>
            <input type="date" name="devolucaoAluguel">
        </div>

        <div>
            <input type="submit" value = "Adicionar" name="btnAdicionar">
        </div>

    </form>
</div>