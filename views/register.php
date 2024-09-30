<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar-se</title>
    <style>
        body {
            text-align: center;
            background: rgb(68, 81, 196);
            background: rgb(219, 244, 239);
            background: radial-gradient(circle, rgba(219, 244, 239, 1) 0%, rgba(70, 106, 182, 1) 100%);
            margin-top: 100px;
            margin-left: 400px;
            margin-right: 400px;
            display: flex;
            height:  450px;

        }

        div {
            border: 5px;
            width: 60%;
            background-color: white;
            border-radius: 5px;
            left: 100px;
            position: relative;

        }

        input {
            padding: 7px;
            border-radius: 5px;
            border: 1px solid black;
        }

        input:focus {
            border-color: blue;
            outline: none;
            box-shadow: 0px 2px 3px blue;
        }

        button {
            padding: 7px;
            background-color: lightblue;
            border: 1px;
            border-radius: 10px;
            color: black;
        }

        button:hover {
            background-color: blue;
            color: white;
            transition: color 0.7s;
        }

        select {
            padding: 7px;
            border-radius: 5px;
            border: 1px solid;
        }

        select:hover {
            border: color blue;
            outline: none;
        }
        label{
            font-size: large;
        }

        a{
            color: black;
        }
        a:hover{
            color: blue;
        }
    </style>
</head>

<body>
    <div>
        <h2>Cadastro de usuário</h2>
        <form action="" method="post">
            <label for="nome">Nome:</label><br>
            <input type="text" name="nome" id="nome " require><br><br>

            <label for="email">Email:</label><br>
            <input type="emeil" name="email" id="email" required><br><br>

            <label for="senha">Senha:</label><br>
            <input type="passwor" name="senha" id="senha" required><br><br>

            <label for="perfil">Perfil:</label><br>
            <select name="perfil" id="perfil">
                <option value="admim">Admim</option>
                <option value="gestor">Gestor</option>
                <option value="colaborador">Colaborador</option>

            </select><br><br>
            <button type="submit">Cadastrar</button><br><br>
        </form>

        <a href="">Voltar ao Login</a>
    </div>
</body>

</html>