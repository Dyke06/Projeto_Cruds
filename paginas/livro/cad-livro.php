<header>
    <h3>Cadastro de Usuário</h3>
</header>


<div>
    <form action="?menuop=inserir-livro" method="POST">
        <div>
            <label for="nomeLivro">Nome:</label>
            <input type="text" name="nomeLivro">
        </div>

        <div>
            <label for="autorLivro">Autor:</label>
            <input type="text" name="autorLivro">
        </div>

        <div>
            <label for="editoraLivro">Editora:</label>
            <input type="text" name="editoraLivro">
        </div>

        <div>
            <label for="dataLivro">Data de lançamento:</label>
            <input type="date" name="dataLivro">
        </div>

        <div>
            <label for="estoqueLivro">Estoque:</label>
            <input type="number" name="estoqueLivro">
        </div>

        <div>
            <input type="submit" value = "Adicionar" name="btnAdicionar">
        </div>

    </form>
</div>