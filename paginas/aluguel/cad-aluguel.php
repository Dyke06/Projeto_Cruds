<header class="mt-3">
    <h3>Cadastro de Aluguel</h3>
</header>


<div>
    <form action="?menuop=inserir-aluguel" method="POST">
        <div class="mb-3">
            <label class="form-label" for="livroAluguel">Livro:</label>

            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-book"></i></span>
                <input class="form-control" type="text" name="livroAluguel" required>
            </div>
            
        </div>

        <div class="mb-3">
            <label class="form-label" for="nomeAluguel">Nome:</label>

            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                <input class="form-control" type="text" name="nomeAluguel" required>
            </div>
            
        </div>

        <div class="mb-3 col-3">
            <label class="form-label" for="dataAluguel">Data do aluguel:</label>

            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                <input class="form-control" type="date" name="dataAluguel" required>
            </div>
            
        </div>

        <div class="mb-3 col-3">
            <label class="form-label" for="devolucaoAluguel">Devolução:</label>

            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-calendar-check-fill"></i></span>
                <input class="form-control" type="date" name="devolucaoAluguel" required>
            </div>
            
        </div>

        <div class="mb-3">
            <input class="btn btn-primary" type="submit" value = "Adicionar" name="btnAdicionar">
            <a href="?menuop=aluguel" class="btn btn-dark">Voltar</a>
        </div>

    </form>
</div>