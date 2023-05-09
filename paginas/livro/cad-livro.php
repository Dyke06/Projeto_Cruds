<header>
    <h3>Cadastro de Livros</h3>
</header>


<div>
    <form action="?menuop=inserir-livro" method="POST">
        <div class="mb-3">
            <label class="form-label" for="nomeLivro">Nome:</label>

            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-book"></i></span>
                <input class="form-control" type="text" name="nomeLivro" required>
            </div>
            
        </div>

        <div class="mb-3">
            <label class="form-label" for="autorLivro">Autor:</label>

            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                <input class="form-control" type="text" name="autorLivro" required>
            </div>
            
        </div>

        <div class="mb-3">
            <label class="form-label" for="editoraLivro">Editora:</label>

            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-collection-play-fill"></i></span>
                <input class="form-control" type="text" name="editoraLivro" required>
            </div>
            
        </div>

        <div class="mb-3 col-3">
            <label class="form-label" for="dataLivro">Data de lançamento:</label>

            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                <input class="form-control" type="date" name="dataLivro" required>
            </div>
            
        </div>

        <div class="mb-3">
            <label class="form-label" for="estoqueLivro">Estoque:</label>

            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-0-square"></i></span>
                <input class="form-control" type="number" name="estoqueLivro" required>
            </div>
            
        </div>

        <div class="mb-3">
            <input class="btn btn-primary"type="submit" value = "Adicionar" name="btnAdicionar">
        </div>

    </form>
</div>