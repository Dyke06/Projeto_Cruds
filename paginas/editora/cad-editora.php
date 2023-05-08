<header>
    <h3>Cadastro de Editoras</h3>
</header>


<div>
    <form action="?menuop=inserir-editora" method="POST">
        <div>
            <label for="nomeEditora">Nome:</label>
            <input type="text" name="nomeEditora">
        </div>

        <div>
            <label for="emailEditora">Email:</label>
            <input type="email" name="emailEditora">
        </div>

        <div>
            <label for="telefoneEditora">Telefone:</label>
            <input type="number" name="telefoneEditora">
        </div>

        <div>
            <label for="siteEditora">Site:</label>
            <input type="text" name="siteEditora">
        </div>

        <div>
            <input type="submit" value = "Adicionar" name="btnAdicionar">
        </div>

    </form>
</div>