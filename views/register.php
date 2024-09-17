<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar-se</title>
</head>
<body>
    <div>
        <h2>Cadastro de usuário</h2>
        <form action="" method="post">
            <label for="nome"></label>
            <input type="text" name="nome" id="nome "require>

            <label for="email">Email</label>
            <input type="emeil" name="email" id="email">

            <label for="senha">Senha</label>
            <input type="passwor" name="senha" id="senha" required>

            <label for="perfil">Perfil:</label>
            <select name="perfil" id="perfil">
                <option value="admim">Admim</option>
                <option value="gestor">Gestor</option>
                <option value="colaborador">Colaborador</option>
                
            </select>
            <button type="submit">Cadastrar</button>
        </form>
        
        <a href="">Voltar ao Login</a>
    </div>
</body>
</html>