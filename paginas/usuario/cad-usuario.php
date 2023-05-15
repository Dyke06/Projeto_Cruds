<header>
    <h3>Cadastro de Usuário</h3>
</header>


<div>
    <!-- Formulário de cadastro com o POST -->
    <form action="?menuop=inserir-usuario" method="POST">
        <div class="mb-3">
            <label class="form-label" for="nomeUsuario">Nome:</label>

            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
                <input class="form-control" type="text" name="nomeUsuario"  required>
            </div>
            
        </div>

        <div class="mb-3">
            <label class="form-label for="cidadeUsuario">Cidade:</label>

            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-building"></i></span>
                <input class="form-control" type="text" name="cidadeUsuario" required>
            </div>           
        </div>

        <div class="mb-3">
            <label class="form-label for="numeroUsuario">Telefone:</label>

            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                <input class="form-control" type="phone" name="numeroUsuario" required>
            </div>  
        </div>

        <div class="mb-3">
            <label class="form-label for="endereçoUsuario">Endereço:</label>

            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-broadcast"></i></span>
                <input class="form-control" type="text" name="endereçoUsuario" required>
            </div>
            
        </div>

        <div class="mb-3">
            <label class="form-label for="emailUsuario">Email:</label>

            <div class="input-group">
                <span class="input-group-text">@</span>
                <input class="form-control" type="email" name="emailUsuario" required>
            </div>
            
        </div>

        <div class="mb-3">
            <input class="btn btn-primary" type="submit" value = "Adicionar" name="btnAdicionar">
            <a href="?menuop=usuario" class="btn btn-dark">Voltar</a>
        </div>

    </form>
</div>