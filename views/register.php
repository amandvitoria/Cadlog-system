<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar-se</title>

    <style>
        body {
            background-image: url('https://img.freepik.com/vetores-gratis/particula-de-tecnologia-abstrata-realista-de-fundo_23-2148431735.jpg?semt=ais_hybrid');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Roboto', sans-serif;
        }

        .form-container {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); /* Borda reduzida */
            text-align: center;
            width: 400px;
        }

        h1 {
            font-family: 'Dancing Script', cursive;
            font-size: 3em;
            color: white;
            margin-bottom: 20px;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            font-size: 1.1em;
            background-color: rgba(255, 255, 255, 0.9);
            color: #333;
        }

        input:focus, select:focus {
            border-color: blue;
            outline: none;
            box-shadow: 0px 2px 3px blue;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: lightblue;
            border: none;
            border-radius: 5px;
            color: black;
            font-size: 1em;
            cursor: pointer;
        }

        button:hover {
            background-color: blue;
            color: white;
            transition: background-color 0.3s, color 0.3s;
        }

        label {
            font-size: large;
            color: white;
            text-align: left;
        }

        p, a {
            color: lightblue;
            font-size: 1em;
            font-weight: 300;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>

    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <div class="form-container">
        <h1>Cadastro</h1>
        <form action="index.php?action=register" method="post">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" required>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>

            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" required>

            <label for="perfil">Perfil</label>
            <select name="perfil" id="perfil">
                <option value="admin">Admin</option>
                <option value="gestor">Gestor</option>
                <option value="colaborador">Colaborador</option>
            </select>

            <button type="submit">Cadastrar</button>
        </form>
        <a href="index.php?action=login">Faça login</a>
    </div>
</body>

</html>
